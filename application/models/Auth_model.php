<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Auth_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
    }
    
    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

	public function register() {
        # request 
	    $usu_cedula_identidad = $this->input->post('cedula_identidad');
	    $usu_clave = $this->input->post('clave');
	    $usu_email = $this->input->post('email');
        # insert
        $this->db->set('usu_cedula_identidad', $usu_cedula_identidad);
        $this->db->set('usu_clave', $this->hash_password($usu_clave));
        $this->db->set('usu_email', $usu_email);
        $this->db->insert('usuarios'); 	
        $usu_id = $this->db->insert_id();
        $this->db->where('usu_id', $usu_id);
        $query = $this->db->get('usuarios');
        return $query->row();
    } 
}