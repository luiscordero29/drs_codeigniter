<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nominas extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('Nominas_model');
        $this->Dashboard_model->auth();
	}

	public function index($pro_id) {
        $data = array(
            'proceso' => $this->Nominas_model->get_proceso($pro_id)
        );
        $this->twig->display('nominas/index', $data);
	}

	public function json($pro_id) {
        $list = $this->Nominas_model->data($pro_id);
        
        $data = array();
		$no = $this->input->post('start');
		
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $item->nom_id;
            $row[] = $item->tno_descripcion;
            $row[] = $item->est_descripcion;
            $row[] = $item->usu_email;
            $actions = '<div class="text-right">';
            $actions .= '<button onclick="btn_import('.$item->nom_id.')" type="button" class="btn-proceso-report btn btn-dark btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Importar"><i class="fas fa-upload"></i></button>';
            $actions .= '<button onclick="btn_export('.$item->nom_id.')" type="button" class="btn-proceso-report btn btn-dark btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Exportar"><i class="fas fa-download"></i></button>';
            $actions .= '<button onclick="btn_close('.$item->nom_id.')" type="button" class="btn-proceso-lock btn btn-warning btn-sm mr-2"><i class="fas fa-lock"></i></button>';
            $actions .= '<button onclick="destroy('.$item->nom_id.')" type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="far fa-trash-alt"></i></button>';
            $actions .= '</div>';
            $row[] = $actions;
            $data[] = $row;
        }
		
		$json = array(
			'draw' => $this->input->post_get('draw'), 
			'recordsTotal' => $this->Nominas_model->recordsTotal($pro_id), 
			'recordsFiltered' => $this->Nominas_model->recordsFiltered($pro_id), 
			'data' => $data,
		);

		echo json_encode($json);
	}

	public function create() {
		if ($this->input->method(TRUE) == 'POST') {
			$data = $this->Nominas_model->store();
			echo json_encode($data);	
        }
	}

	public function tipos_nominas($pro_id) {
        $data = $this->Nominas_model->tipos_nominas($pro_id);
        echo json_encode($data);
    }
    
    public function import($pro_id) {
        $ruta =  FCPATH."/upload/import/".time();
		if(!is_dir($ruta)){
		    mkdir($ruta, 0777);
		}
        $config['upload_path'] = $ruta;
        $config['allowed_types'] = 'dbf';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')){
            $upload_data = $this->upload->data();
            switch ($this->input->post_get('tipo')) {
                case 'PERSONAL':
                    $data = $this->Nominas_model->import_taloge($upload_data);
                    break;
                case 'ASIGNACIONES':
                    $data = $this->Nominas_model->import_taloas($upload_data);
                    break;
                case 'DEDUCCIONES':
                    $data = $this->Nominas_model->import_talode($upload_data);
                    break;
                default:
                    $data = array(
                        'title' => 'Error',
                        'text' => 'Opción no permitida',
                        'icon' => 'error',
                    );
                    break;
            }
        }else{
            $data = array(
                'title' => 'Error',
                'text' => $this->upload->display_errors(),
                'icon' => 'error',
            );
        }
        echo json_encode($data);
	}
	
	public function destroy($pro_id) {
		if ($this->input->method(TRUE) == 'POST') {
			$data = $this->Nominas_model->destroy($pro_id);
			echo json_encode($data);	
        }
    }
    
    public function test() {
        $this->Nominas_model->import_personal('/home/luiscordero/Projects/dirsaludbarinas/drs_codeigniter/upload/import/1587005049/TALOGE.DBF');
    }
}
