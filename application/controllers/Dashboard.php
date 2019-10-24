<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->auth();
	}

	public function index() {
		echo 'Hola Dashboard';
		echo var_dump($this->session->userdata('auth'));
	}

	public function logout() {
		$this->Dashboard_model->auth_logout();
	}
}
