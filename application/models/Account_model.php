<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Account_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	public function logout()
	{
		$sess_array = array(
		    'dus_id' 		=> '',
		    'dus_usuario' 	=> '',          	
		);

		$this->session->unset_userdata($sess_array);
	   	$this->session->sess_destroy();
	}
}