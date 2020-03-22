<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Tipos_nominas_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
	}
	
	public function store() {
        # request
	    $tno_descripcion = $this->input->post('tno_descripcion');
	     # insert
        $this->db->set('tno_descripcion', $tno_descripcion);
        $this->db->set('usu_id', $this->session->auth->usu_id);
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('updated_at', date('Y-m-d H:i:s'));
		$this->db->insert('tipos_nominas');
    }
    
    public function update() {
        # request
	    $tno_id = $this->input->post('tno_id');
	    $tno_descripcion = $this->input->post('tno_descripcion');
	     # insert
        $this->db->set('tno_descripcion', $tno_descripcion);
        $this->db->set('usu_id', $this->session->auth->usu_id);
        $this->db->set('updated_at', date('Y-m-d H:i:s'));
		$this->db->where('tno_id', $tno_id);
		$this->db->update('tipos_nominas');
	}
	
	public function data() {
        $this->db->from('tipos_nominas');
        if($this->input->post_get('length') != -1) {
            $this->db->limit($this->input->post_get('length'), $this->input->post_get('start'));
        }
        $this->Filtered();
        $this->Ordered();
        $query = $this->db->get(); 
	    return $query->result();
    }
    
    public function recordsTotal() {
        $this->db->from('tipos_nominas');
	    return $this->db->count_all_results();
    }
    
    public function recordsFiltered() {
        $this->db->from('tipos_nominas');
        $this->Filtered();
	    return $this->db->count_all_results();
    }
    
    public function Filtered() {
        $search = $this->input->post_get('search[value]');
        $this->db->join('usuarios', 'usuarios.usu_id=tipos_nominas.usu_id');
        $this->db->like('tno_descripcion', $search);
        $this->db->or_like('usu_email', $search);
    }
    
    public function Ordered() {
        $order_column = $this->input->post_get('order[0][column]');
        $order_dir = $this->input->post_get('order[0][dir]');
        switch ($order_column) {
            case 0:
                $field = 'tno_id';
                break;
            case 1:
                $field = 'tno_descripcion';
                break;
            case 2:
                $field = 'usu_email';
                break;         
            default:
                $field = 'tno_id';
                $order_dir = 'desc';
                break;
        }
        $this->db->order_by($field, $order_dir);
    }

    public function get_tipo_nomina($tno_id) {
        $query = $this->db->get_where('tipos_nominas', array('tno_id' => $tno_id));
        return $query->row();
    }

    public function destroy() {
        # request
	    $tno_id = $this->input->post('tno_id');
        # GET
        $query = $this->db->get_where('tipos_nominas', array('tno_id' => $tno_id));
        $row = $query->row();
        $data = array();
        if ($row->tno_id) {
            # eliminar el registro
            $this->db->delete('tipos_nominas', array('tno_id' => $row->tno_id));
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