<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index() {
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

	public function register() {
		$this->form_validation->set_rules('cedula_identidad', 'Cédula de Identidad', 'required|is_unique[usuarios.usu_cedula_identidad]|max_length[10]|min_length[6]|integer');
		$this->form_validation->set_rules('email', 'E-mail ó Cédula de Identidad', 'required|valid_email|is_unique[usuarios.usu_email]');
        $this->form_validation->set_rules('clave', 'Clave', 'required');
        $this->form_validation->set_rules('confirmar_clave', 'Confirmar clave', 'required|matches[clave]');
		if ($this->form_validation->run() == FALSE) {
            $this->twig->display('auth/register');
        } else {
			$data = $this->Auth_model->register();
			$message = $this->twig->display('auth/mail/register', ['data' => $data]);
			$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
			$this->email->set_header('Content-type', 'text/html');
			$this->email->from('luis.cordero@dirsaludbarinas.gob.ve', 'Ing. Luis Cordero');
			$this->email->to($data->usu_email);
			$this->email->subject('Bienvendo al Sistema de Nomina');
			$this->email->message($message);
			$this->email->send();
			$this->Auth_model->register();
			$this->session->set_flashdata('success', 'Usuario registrado');
			$this->twig->display('auth/login');
        }
	}
}
