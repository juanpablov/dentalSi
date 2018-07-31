<?php


class DoctorController extends \CI_Controller
{
    private $model;
    
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
           
    }
    
    private function model(){
        return $this->model;
    }
    
    public function altaDoctor(){
        $this->smarty->display("altaDoctor.tpl");
    }
    
    public function crearDoctor(){
        $nombre = $this->input->post('nombre');
    }
}

