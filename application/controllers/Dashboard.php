<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Dashboard.
	 *
	 * author: Ing. Luis Cordero
	 * site: http://luiscordero29.com/
	 * mail: info@luiscordero29.com
	 *
	 **/

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('Dashboard_model'); 
		# Control Sessión
		if(!$this->session->has_userdata('dus_id'))
   		{     						
		    # If no session, redirect to login page
		    redirect('account/logout');
		}
	}

	public function index()
	{
		$this->load->view('dashboard/index');	
	}
}
