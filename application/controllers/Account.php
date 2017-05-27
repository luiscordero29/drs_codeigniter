<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Account.
	 *
	 * author: Ing. Luis Cordero
	 * site: http://luiscordero29.com/
	 * mail: info@luiscordero29.com
	 *
	 **/

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Account_model'); 
		# Control Sessión
		if(!$this->session->has_userdata('dus_id'))
   		{     						
		    # If no session, redirect to login page
		    redirect('authentication');
		}
	}

	public function index()
	{
		echo "Hello Account";
	}

	public function logout()
 	{
	   	$this->Account_model->logout();	   	
	   	redirect('authentication');
 	}
}
