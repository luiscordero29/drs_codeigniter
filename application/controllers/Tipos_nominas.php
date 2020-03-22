<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipos_nominas extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Tipos_nominas_model');
        $this->Dashboard_model->auth();
	}

	public function index() {
        $this->twig->display('tipos_nominas/index');
	}

	public function json() {
		
		$list = $this->Tipos_nominas_model->data();
        $data = array();
		$no = $this->input->post('start');
		
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $item->tno_id;
            $row[] = $item->tno_descripcion;
            $row[] = $item->usu_email;
            $actions = '<div class="text-right">';
            $actions .= '<a href="'.site_url('tipos-de-nominas/editar-tipo-de-nomina-'.$item->tno_id).'" class="btn btn-info btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i></a>';
            $actions .= '<button onclick="destroy('.$item->tno_id.')" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt"></i></button>';
            $actions .= '</div>';
            $row[] = $actions;
            $data[] = $row;
        }
		
		$json = array(
			'draw' => $this->input->post_get('draw'), 
			'recordsTotal' => $this->Tipos_nominas_model->recordsTotal(), 
			'recordsFiltered' => $this->Tipos_nominas_model->recordsFiltered(), 
			'data' => $data,
		);

		echo json_encode($json);
	}

	public function create() {
		$this->form_validation->set_rules('tno_descripcion', 'Descripción', 'required|max_length[100]');
		if ($this->form_validation->run() == FALSE) {
            $this->twig->display('tipos_nominas/create');
        } else {			
			$this->Tipos_nominas_model->store();
			$this->session->set_flashdata('alert_info', 'Tipo de pago registrado');
			redirect('tipos-de-nominas/crear-tipo-de-nomina');
        }
    }
    
    public function update($tno_id) {
		$this->form_validation->set_rules('tno_descripcion', 'Descripción', 'required|max_length[100]');
		if ($this->form_validation->run() == FALSE) {
            $data = array(
                'tipo_pago' => $this->Tipos_nominas_model->get_tipo_nomina($tno_id)
            );
            $this->twig->display('tipos_nominas/update', $data);
        } else {			
			$this->Tipos_nominas_model->update();
			$this->session->set_flashdata('alert_info', 'Tipo de pago actualizado');
			redirect('tipos-de-nominas/editar-tipo-de-nomina-'.$tno_id);
        }
	}
	
	public function delete() {
		if ($this->input->method(TRUE) == 'POST') {
			$data = $this->Tipos_nominas_model->destroy();
			echo json_encode($data);	
        }
	}
}
