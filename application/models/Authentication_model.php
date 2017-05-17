<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Authentication_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	public function check_usuario()
	{
		$dus_usuario = $this->input->post('dus_usuario');
		$query = $this->db->get_where('usuarios', array('dus_usuario' => $dus_usuario));
	    if($query->num_rows() > 0){
	    	return true;
	    }else{
	    	return false;
	    }
	}

	public function check_clave()
	{
		$dus_usuario = $this->input->post('dus_usuario');
		$dus_clave = hash('sha512', $this->input->post('dus_clave'));
		$query = $this->db->get_where('usuarios', array('dus_usuario' => $dus_usuario,'dus_clave' => $dus_clave));
	    if($query->num_rows() > 0){
	    	return true;
	    }else{
	    	return false;
	    }
	}

	public function check_authentication()
	{
		$dus_usuario = $this->input->post('dus_usuario');
		$query = $this->db->get_where('usuarios', array('dus_usuario' => $dus_usuario));
	    if($query->num_rows() > 0){
	    	$r = $query->row_array();
	    	$sess_array = array(
		        'dus_id' 		=> $r['dus_id'],
		        'dus_usuario' 	=> $r['dus_usuario'],		          	
		    );
	        $this->session->set_userdata($sess_array);
	    	return true;
	    }else{
	    	return false;
	    }
	}
}