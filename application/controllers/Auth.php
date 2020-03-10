<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Email_model');
		$this->Auth_model->auth();
	}

	public function index() {
		$this->form_validation->set_rules('email', 'E-mail ó Cédula de Identidad', 'required');
        $this->form_validation->set_rules('clave', 'Contraseña', 'required|callback_auth_check|callback_activo_check');
		if ($this->form_validation->run() == FALSE){
            $this->twig->display('auth/login');
        }else{
            redirect('dashboard');
        }
	}

	public function auth_check() {
		$this->form_validation->set_message('auth_check', 'Error en las credenciales');
		return $this->Auth_model->auth_check();
    }

	public function activo_check() {
		$this->form_validation->set_message('activo_check', 'Valida tu cuenta para poder ingresar');
		return $this->Auth_model->activo_check();
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
			$to = $data->usu_email;
			$from = 'luis.cordero@dirsaludbarinas.gob.ve';
			$subject = 'Bienvendo al Sistema de Nomina';
			$message = $this->twig->render('auth/mail/register', ['data' => $data]);
			$this->Email_model->send($to, $from, $subject, $message);
			$this->session->set_flashdata('alert_success', 'Usuario registrado');
			redirect('auth/register');
        }
	}

	public function resetpassword() {
		$this->form_validation->set_rules('email', 'E-mail ó Cédula de Identidad', 'required|callback_resetpassword_check');
		if ($this->form_validation->run() == FALSE) {
            $this->twig->display('auth/resetpassword');
        } else {
			$data = $this->Auth_model->resetpassword();
			$to = $data->usu_email;
			$from = 'luis.cordero@dirsaludbarinas.gob.ve';
			$subject = 'Recuperar contraseña';
			$message = $this->twig->render('auth/mail/resetpassword', ['data' => $data]);
			$this->Email_model->send($to, $from, $subject, $message);
			$this->session->set_flashdata('alert_success', 'Usuario registrado');
			redirect('auth/login');
        }
	}

	public function resetpassword_check() {
		$this->form_validation->set_message('resetpassword_check', 'E-mail ó Cédula de Identidad incorrecto');
		return $this->Auth_model->resetpassword_check();
    }

	public function verification($usu_llave = null) {
		if ($this->Auth_model->verification($usu_llave)) {
            $this->session->set_flashdata('alert_success', 'Cuenta Verificada, puedes iniciar sesión');
        } else {
			$this->session->set_flashdata('alert_danger', 'Error al verificar la cuenta');
        }
		redirect('auth/login');
	}
}
