<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	/**
	 * Authentication.
	 *
	 * author: Ing. Luis Cordero
	 * site: http://luiscordero29.com/
	 * mail: info@luiscordero29.com
	 *
	 **/

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Authentication_model');
		if($this->session->has_userdata('dus_id'))
   		{     						
		    //If no session, redirect to login page
		    redirect('dashboard');
		}
	}

	public function index()
	{
		# rules
		$this->form_validation->set_rules('dus_usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('dus_clave', 'Contraseña', 'required|callback_check_usuario|callback_check_clave|callback_check_authentication');
		# message
		$this->form_validation->set_message('check_usuario', 'El Usuario ó Email no existe');
		$this->form_validation->set_message('check_clave', 'Contraseña invalidad');
		$this->form_validation->set_message('check_authentication', 'No tiene acceso temporalmente');
		# views
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('authentication/login');	
		}else{			
	        redirect('dashboard');	     
		}
	}

	public function check_usuario()
	{
		return $this->Authentication_model->check_usuario();
	}

	public function check_clave()
	{
		return $this->Authentication_model->check_clave();
	}

	public function check_authentication()
	{
		return $this->Authentication_model->check_authentication();
	}
}
