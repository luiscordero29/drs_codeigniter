<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Seed_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
	}

    public function store_proceso($row) {
        # insert
        $this->db->set('pro_descripcion', $row->pro_descripcion);
        $this->db->set('pro_fecha_inicio', $row->pro_fecha_inicio);
        $this->db->set('pro_fecha_fin', $row->pro_fecha_fin);
        $this->db->set('est_id', $row->est_id);
        $this->db->set('usu_id', $row->usu_id);
        $this->db->set('created_at', date('Y-m-d H:i:s'));
        $this->db->set('upated_at', date('Y-m-d H:i:s'));
		$this->db->insert('procesos');
	}

    public function get_usuario_find_by_usu_cedula_identidad($usu_cedula_identidad) {
        $this->db->where('usu_cedula_identidad', $usu_cedula_identidad);
        $query = $this->db->get('usuarios');
        return $query->row();
    }

    public function get_estado_find_by_est_id($est_id) {
        $this->db->where('est_id', $est_id);
        $query = $this->db->get('estados');
        return $query->row();
    }
}
