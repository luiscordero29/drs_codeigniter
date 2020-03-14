<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procesos extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Procesos_model');
        $this->Dashboard_model->auth();
	}

	public function index() {
		$this->twig->display('procesos/index');
	}

	public function create() {
		$this->form_validation->set_rules('pro_descripcion', 'Descripción', 'required|max_length[100]');
		$this->form_validation->set_rules('pro_fecha_inicio', 'Fecha Inicio', 'required|callback_pro_fecha_inicio_check');
        $this->form_validation->set_rules('pro_fecha_fin', 'Feca Fin', 'required|callback_pro_fecha_fin_check|callback_rango_check');
		if ($this->form_validation->run() == FALSE) {
            $this->twig->display('procesos/create');
        } else {			
			$this->Procesos_model->store();
			$this->session->set_flashdata('alert_success', 'Proceso registrado');
			redirect('procesos/crear-proceso-de-pago');
        }
	}

	public function pro_fecha_inicio_check() {
		$this->form_validation->set_message('pro_fecha_inicio_check', 'Error en la fecha de inicio');
		return $this->Procesos_model->fecha_check($this->input->post('pro_fecha_inicio'));
	}
	
	public function pro_fecha_fin_check() {
		$this->form_validation->set_message('pro_fecha_fin_check', 'Error en la fecha de fin');
		return $this->Procesos_model->fecha_check($this->input->post('pro_fecha_fin'));
	}
	
	public function rango_check() {
		$this->form_validation->set_message('rango_check', 'La fecha de fin debe ser superior a la fecha inicio');
		return $this->Procesos_model->rango_check();
    }
}
