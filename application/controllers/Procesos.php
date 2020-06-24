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

	public function json() {

		$list = $this->Procesos_model->data();
        $data = array();
		$no = $this->input->post('start');

        foreach ($list as $item) {
            $no++;
            $row = array();
            $row['pro_id'] = $item->pro_id;
            $row['pro_descripcion'] = $item->pro_descripcion;
            $row['pro_fecha_inicio'] = $this->Procesos_model->date_to_fecha($item->pro_fecha_inicio);
            $row['pro_fecha_fin'] = $this->Procesos_model->date_to_fecha($item->pro_fecha_fin);
            $row['est_descripcion'] = $item->est_descripcion;
			$row['usu_email'] = $item->usu_email;
			$row['est_id'] = $item->est_id;
			$row['lista_nominas'] = site_url('procesos/lista-de-nominas-'.$item->pro_id);
            $data[] = $row;
        }

		$json = array(
			'draw' => $this->input->post_get('draw'),
			'recordsTotal' => $this->Procesos_model->recordsTotal(),
			'recordsFiltered' => $this->Procesos_model->recordsFiltered(),
			'data' => $data,
		);
		header("Content-type: application/json");
		echo json_encode($json);
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

	public function destroy() {
		if ($this->input->method(TRUE) == 'POST') {
			$data = $this->Procesos_model->destroy();
			header("Content-type: application/json");
			echo json_encode($data);
        }
	}

	public function cerrar_proceso() {
        if ($this->input->method(TRUE) == 'POST') {
			$data = $this->Procesos_model->cerrar_proceso();
			header("Content-type: application/json");
			echo json_encode($data);
        }
    }
}
