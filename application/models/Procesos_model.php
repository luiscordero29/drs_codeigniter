<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Procesos_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
	}
	
	public function fecha_check($fecha) {
        $date = explode('/', $fecha);
        if (count($date) == 3) {
			return true;
        } else {
            return false;
        }
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
}