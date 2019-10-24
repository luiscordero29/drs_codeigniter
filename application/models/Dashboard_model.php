<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Dashboard_model extends CI_MODEL
{
	public function __construct() {
		parent::__construct();
    }
    
    public function auth() {
        if (!$this->session->has_userdata('auth')) {
            redirect('auth/login');
        }
    }

    public function auth_logout() {
        //if($this->post()) {
        $this->session->unset_userdata('auth');
		redirect('auth/login');

		//} else {
		//redirect('dashboard');
		//}
    }
}