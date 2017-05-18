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

	public function register()
	{
		# registro
		$dus_identidad 		= $this->input->post('dus_identidad');
	    $dus_apellidos 		= $this->input->post('dus_apellidos');
	   	$dus_nombres 		= $this->input->post('dus_nombres');
	   	$dus_telefono 		= $this->input->post('dus_telefono');
	   	$dus_direccion 		= $this->input->post('dus_direccion');	   	
	   	$dus_usuario 		= $this->input->post('dus_usuario');	   	
	   	$dus_email 			= $this->input->post('dus_email');	   	
	    $dus_clave 			= hash('sha512', $this->input->post('dus_clave'));
	    $dus_estatus 		= 'NO';
	    $dus_ruta 			= hash('sha512', $this->input->post('dus_email'));
	   
	   	   	
	   	$data = array(
			'dus_identidad' 	=> $dus_identidad,
			'dus_apellidos' 	=> $dus_apellidos,
			'dus_nombres' 		=> $dus_nombres,
			'dus_telefono' 		=> $dus_telefono,
			'dus_direccion' 	=> $dus_direccion,
			'dus_usuario' 		=> $dus_usuario,
			'dus_email' 		=> $dus_email,
			'dus_clave' 		=> $dus_clave,	  
			'dus_estatus' 		=> $dus_estatus,	  
			'dus_ruta' 			=> $dus_ruta,	  
		);

		$this->db->insert('usuarios', $data);

		$data['alert']['success'] = 
			array( 
				'Usuario Registrado',				
			);

		# registros de permisos 

		# envio de email
		return $data;
	}
}