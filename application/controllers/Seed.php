<?php
class Seed extends CI_Controller {

    public function __construct() {
        parent::__construct();
        require_once FCPATH . 'vendor/autoload.php';
        $this->load->model('Seed_model');
    }

    public function procesos() {
        $faker = Faker\Factory::create();
        $usuario = $this->Seed_model->get_usuario_find_by_usu_cedula_identidad('18118222');
        $estado = $this->Seed_model->get_estado_find_by_est_id(1);
        for ($i=0; $i < 1000; $i++) {
            $proceso = new stdClass;
            $proceso->pro_descripcion = $faker->text;
            $proceso->pro_fecha_inicio = $faker->date($format = 'Y-m-d', $max = 'now');
            $proceso->pro_fecha_fin = $faker->date($format = 'Y-m-d', $max = 'now');
            $proceso->est_id = $estado->est_id;
            $proceso->usu_id = $usuario->usu_id;
            $this->Seed_model->store_proceso($proceso);
            echo 'insert_'.$i.PHP_EOL;
        }
    }
}
