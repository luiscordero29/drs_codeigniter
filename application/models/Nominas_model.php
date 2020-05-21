<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Nominas_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
	}

	public function get_proceso($pro_id) {
        $this->db->join('estados', 'estados.est_id=procesos.est_id');
        $query = $this->db->get_where('procesos', array('pro_id' => $pro_id));
        return $query->row();
	}

	public function tipos_nominas() {
        $this->db->order_by('tno_descripcion', 'asc');
        $query = $this->db->get('tipos_nominas');
        return $query->result();
    }

    public function nom_descripcion_check() {
        $pro_id = $this->input->post('pro_id');
        $nom_description = $this->input->post('nom_description');
        $this->db->from('nominas');
        $this->db->where('pro_id', $pro_id);
        $this->db->where('nom_description', $nom_description);
	    $total = $this->db->count_all_results();
        if ($total > 0) {
            return false;
        } else {
            return true;
        }
    }

	public function store() {
        # request
	    $tno_id = $this->input->post('tno_id');
        $pro_id = $this->input->post('pro_id');
        $nom_description = $this->input->post('nom_description');
	    # insert
        $this->db->set('tno_id', $tno_id);
        $this->db->set('pro_id', $pro_id);
        $this->db->set('nom_description', $nom_description);
        $this->db->set('est_id', 1);
        $this->db->set('usu_id', $this->session->auth->usu_id);
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('updated_at', date('Y-m-d H:i:s'));
        $this->db->insert('nominas');
        $data = array(
            'title' => 'Exito',
            'text' => 'Registro Eliminado',
            'icon' => 'success',
        );
        return $data;
	}

	public function data($pro_id) {
        $this->db->from('nominas');
        if($this->input->post_get('length') != -1) {
            $this->db->limit($this->input->post_get('length'), $this->input->post_get('start'));
        }
        $this->Filtered($pro_id);
        $this->Ordered();
        $query = $this->db->get();
	    return $query->result();
    }

    public function recordsTotal($pro_id) {
        $this->db->from('nominas');
        $this->db->where('pro_id', $pro_id);
	    return $this->db->count_all_results();
    }

    public function recordsFiltered($pro_id) {
        $this->db->from('nominas');
        $this->Filtered($pro_id);
	    return $this->db->count_all_results();
    }

    public function Filtered($pro_id) {
        $search = $this->input->post_get('search[value]');
        $this->db->join('estados', 'estados.est_id=nominas.est_id');
        $this->db->join('usuarios', 'usuarios.usu_id=nominas.usu_id');
        $this->db->join('tipos_nominas', 'tipos_nominas.tno_id=nominas.tno_id');
        $this->db->where('pro_id', $pro_id);
        $this->db->group_start();
        $this->db->like('tno_descripcion', $search);
        $this->db->or_like('est_descripcion', $search);
        $this->db->or_like('usu_email', $search);
        $this->db->group_end();
    }

    public function Ordered() {
        $order_column = $this->input->post_get('order[0][column]');
        $order_dir = $this->input->post_get('order[0][dir]');
        switch ($order_column) {
            case 0:
                $field = 'nom_id';
                break;
            case 1:
                $field = 'tno_descripcion';
                break;
            case 2:
                $field = 'est_descripcion';
                break;
            case 3:
                $field = 'usu_email';
                break;
            default:
                $field = 'nom_id';
                $order_dir = 'desc';
                break;
        }
        $this->db->order_by($field, $order_dir);
    }

    public function destroy($pro_id) {
        # request
	    $nom_id = $this->input->post('nom_id');
        # GET
        $query = $this->db->get_where('nominas', array('nom_id' => $nom_id));
        $row = $query->row();
        $data = array();
        if ($row->est_id == 1) {
            # eliminar el registro
            $this->db->delete('nominas', array('nom_id' => $nom_id));
            # eliminar registros dependientes
            # response
            $data = array(
                'title' => 'Exito',
                'text' => 'Registro Eliminado',
                'icon' => 'success',
            );
        } else {
            $data = array(
                'title' => 'Error',
                'text' => 'No se puede eliminar registros',
                'icon' => 'error',
            );
        }
        return $data;
    }

    public function import_taloge($file) {
        $nom_id =  $this->input->post('nom_id');
        $this->db->delete('nominas_ge', array('nom_id' => $nom_id));
        if ($file['raw_name'] == 'TALOGE') {
            $db = dbase_open($file['full_path'], 0);
            if ($db) {
                $rows = array();
                $num_rows = dbase_numrecords($db);
                for ($i = 1; $i <= $num_rows; $i++) {
                    $row = dbase_get_record_with_names($db, $i);
                    $rows[] = $row;
                }
                dbase_close($db);
                $data = array();
                foreach ($rows as $row) {
                    $record['nom_id'] = $nom_id;
                    $record['ge_codigo'] = $row['CODIGO'];
                    $record['ge_cedula'] = $row['CEDULA'];
                    $record['ge_pnombre'] = $row['PNOMBRE'];
                    $record['ge_snombre'] = $row['SNOMBRE'];
                    $record['ge_papellido'] = $row['PAPELLIDO'];
                    $record['ge_sapellido'] = $row['SAPELLIDO'];
                    $record['ge_nombre'] = $row['NOMBRE'];
                    $record['ge_sexo'] = $row['SEXO'];
                    $record['ge_fecha_nacimiento'] = $row['FNAC'];
                    $record['ge_nacionalidad'] = $row['NACIONALID'];
                    $record['ge_cargo'] = $row['CARGO'];
                    $record['ge_grado'] = $row['GRADO'];
                    $record['ge_proyecto'] = $row['PROYECTO'];
                    $record['ge_ubicacion'] = $row['UBICACION'];
                    $record['ge_fecha_ingreso'] = $row['FING'];
                    $record['ge_tipo'] = $row['TIPO'];
                    $record['ge_situacion'] = $row['SITUACION'];
                    $record['ge_codigo_banco'] = $row['CODBCO'];
                    $record['ge_cuenta'] = $row['CUENTA'];
                    $record['ge_tcb'] = $row['TCB'];
                    $record['ge_cia'] = $row['CIA'];
                    $record['ge_sso'] = $row['SSO'];
                    $record['ge_spf'] = $row['SPF'];
                    $record['ge_lph'] = $row['LPH'];
                    $record['ge_fpj'] = $row['FPJ'];
                    $record['ge_cah'] = $row['CAH'];
                    $record['ge_otros'] = $row['OTROS'];
                    $record['ge_neto'] = $row['NETO'];
                    $record['ge_total'] = $row['TOTAL'];
                    $record['ge_fecha'] = $row['FECHA'];
                    $record['ge_mes_ano'] = $row['MESANO'];
					$record['ge_periodo'] = $row['PERIODO'];
					$record['ge_grupo'] = $row['GRUPO'];
                    $record['ge_sueldo'] = $row['SUELDO'];
                    $data[] = $record;
                }
                $this->db->insert_batch('nominas_ge', $data);
                $data = array(
                    'title' => 'Importar Registros',
                    'text' => $this->db->affected_rows().' Registros Insertados',
                    'icon' => 'success',
                );
            } else {
                $data = array(
                    'title' => 'Error',
                    'text' => 'Error de lectura del archivo TALOGE.DBF',
                    'icon' => 'error',
                );
            }
        } else {
            $data = array(
                'title' => 'Error',
                'text' => 'Selecione un archivo TALOGE.DBF',
                'icon' => 'error',
            );
        }
        return $data;
    }

    public function import_taloas($file) {
        $nom_id =  $this->input->post('nom_id');
        $this->db->delete('nominas_as', array('nom_id' => $nom_id));
        if ($file['raw_name'] == 'TALOAS') {
            $db = dbase_open($file['full_path'], 0);
            if ($db) {
                $rows = array();
                $num_rows = dbase_numrecords($db);
                for ($i = 1; $i <= $num_rows; $i++) {
                    $row = dbase_get_record_with_names($db, $i);
                    $rows[] = $row;
                }
                dbase_close($db);
                $data = array();
                foreach ($rows as $row) {
                    $record['nom_id'] = $nom_id;
                    $record['as_codigo'] = $row['CODIGO'];
                    $record['as_cedula'] = $row['CEDULA'];
                    $record['as_cod'] = $row['COD'];
                    $record['as_des'] = $row['DES'];
                    $record['as_monto'] = $row['MONTO'];
                    $record['as_cuenta'] = $row['CUENTA'];
                    $record['as_proyecto'] = $row['PROYECTO'];
                    $record['as_fecha'] = $row['FECHA'];
                    $record['as_periodo'] = $row['PERIODO'];
                    $record['as_estatus'] = 'ACTIVO';
                    $data[] = $record;
                }
                $this->db->insert_batch('nominas_as', $data);
                $data = array(
                    'title' => 'Importar Registros',
                    'text' => $this->db->affected_rows().' Registros Insertados',
                    'icon' => 'success',
                );
            } else {
                $data = array(
                    'title' => 'Error',
                    'text' => 'Error de lectura del archivo TALOGE.DBF',
                    'icon' => 'error',
                );
            }
        } else {
            $data = array(
                'title' => 'Error',
                'text' => 'Selecione un archivo TALOGE.DBF',
                'icon' => 'error',
            );
        }
        return $data;
    }


    public function import_talode($file) {
        $nom_id =  $this->input->post('nom_id');
        $this->db->delete('nominas_de', array('nom_id' => $nom_id));
        if ($file['raw_name'] == 'TALODE') {
            $db = dbase_open($file['full_path'], 0);
            if ($db) {
                $rows = array();
                $num_rows = dbase_numrecords($db);
                for ($i = 1; $i <= $num_rows; $i++) {
                    $row = dbase_get_record_with_names($db, $i);
                    $rows[] = $row;
                }
                dbase_close($db);
                $data = array();
                foreach ($rows as $row) {
                    $record['nom_id'] = $nom_id;
                    $record['de_codigo'] = $row['CODIGO'];
                    $record['de_cedula'] = $row['CEDULA'];
                    $record['de_cod'] = $row['COD'];
                    $record['de_des'] = $row['DES'];
                    $record['de_monto'] = $row['MONTO'];
                    $record['de_codas'] = $row['CODAS'];
                    $record['de_proyecto'] = $row['PROYECTO'];
                    $record['de_fija'] = $row['FIJA'];
                    $record['de_tipo'] = $row['TIPO'];
                    $record['de_fecha'] = $row['FECHA'];
                    $record['de_periodo'] = $row['PERIODO'];
                    $record['de_estatus'] = 'ACTIVO';
                    $data[] = $record;
                }
                $this->db->insert_batch('nominas_de', $data);
                $data = array(
                    'title' => 'Importar Registros',
                    'text' => $this->db->affected_rows().' Registros Insertados',
                    'icon' => 'success',
                );
            } else {
                $data = array(
                    'title' => 'Error',
                    'text' => 'Error de lectura del archivo TALOGE.DBF',
                    'icon' => 'error',
                );
            }
        } else {
            $data = array(
                'title' => 'Error',
                'text' => 'Selecione un archivo TALOGE.DBF',
                'icon' => 'error',
            );
        }
        return $data;
    }

    public function export_taloge($nom_id) {
        $this->load->dbutil();

        $query = $this->db->get_where('nominas_ge', array('nom_id' => $nom_id));

        $delimiter = ";";
        $newline = "\r\n";
        $enclosure = '"';

        return $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclos);
    }

    public function export_taloas($nom_id) {
        $this->load->dbutil();

        $query = $this->db->get_where('nominas_as', array('nom_id' => $nom_id));

        $delimiter = ";";
        $newline = "\r\n";
        $enclosure = '"';

        return $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclos);
    }

    public function export_talode($nom_id) {
        $this->load->dbutil();

        $query = $this->db->get_where('nominas_de', array('nom_id' => $nom_id));

        $delimiter = ";";
        $newline = "\r\n";
        $enclosure = '"';

        return $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclos);
    }

    public function cerrar_nomina() {
        $nom_id = $this->input->post('nom_id');
        # contar nominas_ge
        $this->db->from('nominas_ge');
        $this->db->where('nom_id', $nom_id);
        $nominas_ge = $this->db->count_all_results();
        $this->db->from('nominas_as');
        $nominas_as = $this->db->count_all_results();
        if($nominas_ge <= 0) {
            $data = array(
                'title' => 'Error',
                'text' => 'Importe el archivo TALOGE.DBF para cerrar la nomina',
                'icon' => 'error',
            );
        } elseif ($nominas_as <= 0) {
            $data = array(
                'title' => 'Error',
                'text' => 'Importe el archivo TALOAS.DBF para cerrar la nomina',
                'icon' => 'error',
            );
        } else {
            $this->db->set('est_id', 2);
            $this->db->where('nom_id', $nom_id);
            $this->db->update('nominas');
            $data = array(
                'title' => 'Exito',
                'text' => 'Nomina Cerrada',
                'icon' => 'success',
            );
        }
        return $data;
    }
}
