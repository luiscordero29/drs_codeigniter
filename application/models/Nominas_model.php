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

	public function fecha_to_date($fecha) {
        $date = explode('/', $fecha);
        if (count($date) == 3) {
			return $date[2].'-'.$date[1].'-'.$date[0];
        } 
	}
	
	public function rango_check() {
        # request
	    $pro_fecha_inicio = $this->fecha_to_date($this->input->post('pro_fecha_inicio'));
        $pro_fecha_fin = $this->fecha_to_date($this->input->post('pro_fecha_fin'));
        # Validation
        if ($pro_fecha_inicio < $pro_fecha_fin ) {
        	return true;
        } else {
            return false;
        }
	}
	
	public function store() {
        # request
	    $pro_descripcion = $this->input->post('pro_descripcion');
	    $pro_fecha_inicio = $this->fecha_to_date($this->input->post('pro_fecha_inicio'));
        $pro_fecha_fin = $this->fecha_to_date($this->input->post('pro_fecha_fin'));
        # insert
        $this->db->set('pro_descripcion', $pro_descripcion);
        $this->db->set('pro_fecha_inicio', $pro_fecha_inicio);
        $this->db->set('pro_fecha_fin', $pro_fecha_fin);
        $this->db->set('est_id', 1);
        $this->db->set('usu_id', $this->session->auth->usu_id);
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('upated_at', date('Y-m-d H:i:s'));
		$this->db->insert('procesos');
	}
	
	public function data() {
        $this->db->from('procesos');
        if($this->input->post_get('length') != -1) {
            $this->db->limit($this->input->post_get('length'), $this->input->post_get('start'));
        }
        $this->Filtered();
        $this->Ordered();
        $query = $this->db->get(); 
	    return $query->result();
    }
    
    public function recordsTotal() {
        $this->db->from('procesos');
	    return $this->db->count_all_results();
    }
    
    public function recordsFiltered() {
        $this->db->from('procesos');
        $this->Filtered();
	    return $this->db->count_all_results();
    }
    
    public function Filtered() {
        $search = $this->input->post_get('search[value]');
        $this->db->join('estados', 'estados.est_id=procesos.est_id');
        $this->db->join('usuarios', 'usuarios.usu_id=procesos.usu_id');
        $this->db->like('pro_descripcion', $search);
        $this->db->or_like('est_descripcion', $search);
        $this->db->or_like('usu_email', $search);
    }
    
    public function Ordered() {
        $order_column = $this->input->post_get('order[0][column]');
        $order_dir = $this->input->post_get('order[0][dir]');
        switch ($order_column) {
            case 0:
                $field = 'pro_id';
                break;
            case 1:
                $field = 'pro_descripcion';
                break;
            case 2:
                $field = 'pro_fecha_inicio';
                break;
            case 3:
                $field = 'pro_fecha_fin';
                break;             
            default:
                $field = 'pro_id';
                $order_dir = 'desc';
                break;
        }
        $this->db->order_by($field, $order_dir);
    }
    
    public function date_to_fecha($date) {
        $d = explode('-', $date);
        if(count($d) == 3) {
            return $d[2].'/'.$d[1].'/'.$d[0];
        }
    }

    public function destroy() {
        # request
	    $pro_id = $this->input->post('pro_id');
        # GET
        $query = $this->db->get_where('procesos', array('pro_id' => $pro_id));
        $row = $query->row();
        $data = array();
        if ($row->est_id == 1) {
            # eliminar el registro
            $this->db->delete('procesos', array('pro_id' => $pro_id));
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
}