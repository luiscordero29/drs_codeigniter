<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->auth();
	}

	public function index() {
		$this->twig->display('dashboard/home');
	}

	public function security() {
		$csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		header("Content-type: application/json");
		echo json_encode($csrf);
	}

	public function logout() {
		$this->Dashboard_model->auth_logout();
	}
}
