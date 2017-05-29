<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Nominas_model extends CI_MODEL
{
	public function __construct()
	{
		parent::__construct();
	}

	function nominas_table($table_page,$table_limit,$table_search)
	{
	  	$table_star 	= $table_page*$table_limit;
	  	$dus_identidad 	= $this->session->userdata('dus_identidad');

	    $this->db->order_by('ID', 'DESC');
	    $this->db->where('CEDULA', $dus_identidad); 
	    $this->db->like('PERIODO', $table_search); 
	    $this->db->group_by('PERIODO');
	    $query = $this->db->get('nominas_ge', $table_star, $table_limit);

	    if($query->num_rows() > 0){
	      	return $query->result_array();
	    }else{
	      	return false;
	    }
	}

	function nominas_table_rows($table_search)
	{

	    $dus_identidad 	= $this->session->userdata('dus_identidad');

	    $this->db->order_by('ID', 'DESC');
	    $this->db->where('cedula', $dus_identidad); 
	    $this->db->like('periodo', $table_search); 
	    $this->db->group_by('periodo');
	    $query = $this->db->get('nominas_ge');

	    if($query->num_rows() > 0){
	      return $query->num_rows();
	    }else{
	      return false;
	    }
	}
}