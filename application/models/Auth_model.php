<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Auth_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
    }

    public function auth() {
        if ($this->session->has_userdata('auth')) {
            redirect('dashboard');
        }
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
        $this->db->set('usu_activo', 'NO');
        $this->db->set('usu_llave', $this->hash_password(time()));
        $this->db->insert('usuarios'); 	
        $usu_id = $this->db->insert_id();
        $this->db->where('usu_id', $usu_id);
        $query = $this->db->get('usuarios');
        $row = $query->row();
        $row->usu_clave_plano = $usu_clave;
        return $row;
    } 

    public function auth_check() {
        # request 
	    $usu_email = $this->input->post('email');
        $usu_clave = $this->input->post('clave');
        # Validation
        $this->db->where('usu_cedula_identidad', $usu_email);
        $this->db->or_where('usu_clave', $usu_email);
        $this->db->from('usuarios');
        $auth = $this->db->count_all_results();        
        if ($auth > 0) {
            $this->db->where('usu_cedula_identidad', $usu_email);
            $this->db->or_where('usu_clave', $usu_email);
            $query = $this->db->get('usuarios');
            $auth = $query->row();
            if (password_verify($usu_clave, $auth->usu_clave)) {
                $this->session->set_userdata('auth', $auth);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } 

    public function mail() {
        $usu_id = 6298;
        $this->db->where('usu_id', $usu_id);
        $query = $this->db->get('usuarios');
        return $query->row();
    } 
}