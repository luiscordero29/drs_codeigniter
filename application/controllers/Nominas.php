<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nominas extends CI_Controller {

	/**
	 * Nominas.
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
		$this->load->model('Nominas_model'); 
		# Control Sessión
		if(!$this->session->has_userdata('dus_id'))
   		{     						
		    # If no session, redirect to login page
		    redirect('authentication');
		}
	}

	public function index($table_page=null,$table_search=null)
	{
		$data = 
			array(
				'title' => 'Sistema Integral de Salud | Panel de Control | Recibos de Pagos', 
				'module_title' => 'Nominas', 
				'module_description' => 'Recibos de Pagos', 
				'breadcrumb' => 
					array(
						'<i class="fa fa-dashboard"></i> Sistema Integral de Salud' => 'dashboard/index',
						'<i class="fa fa-file-pdf-o"></i> Nominas' => 'nominas/index',
	            		'Recibos de Pagos' => '', 
					),
			);	
		
		$table_limit = 30;	
		$input_post_table_search = trim($this->input->post('table_search'));
		$table_search = trim($table_search);
		if(!empty($input_post_table_search)){
			$data['table_search'] = $input_post_table_search;				
		}elseif(!empty($search)){
			$data['table_search'] = $table_search;	
		}else{
			$data['table_search'] = '';	
		}
				
		$data['table'] 			= $this->Nominas_model->nominas_table($table_page,$table_limit,$data['table_search']);
		$data['table_rows'] 	= $this->Nominas_model->nominas_table_rows($data['table_search']);
		$data['table_page'] 	= $table_page;
		$data['table_limit'] 	= $table_limit;

		$this->load->view('nominas/index',$data);
	}
}
