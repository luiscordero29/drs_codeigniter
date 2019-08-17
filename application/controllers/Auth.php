<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['title'] = 'Sistema de Nominas | Iniciar Sesión';
		$data['form_attributes'] = array('class' => '', 'id' => 'myform');

		$this->form_validation->set_rules('email', 'E-mail ó Cédula de Identidad', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['has_email'] = $this->form_validation->has_rule('email');
			$data['has_password'] = $this->form_validation->has_rule('password');
            $this->twig->display('auth/login', ['data' => $data]);
        }else{
            $this->load->view('formsuccess');
        }
		
	}

	public function register()
	{
		$data['title'] = 'Sistema de Nominas | Iniciar Sesión';
		$data['form_attributes'] = array('class' => '', 'id' => 'myform');

		$this->form_validation->set_rules('email', 'E-mail ó Cédula de Identidad', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['has_email'] = $this->form_validation->has_rule('email');
			$data['has_password'] = $this->form_validation->has_rule('password');
            $this->twig->display('auth/register', ['data' => $data]);
        }else{
            $this->load->view('formsuccess');
        }
		
	}
}
