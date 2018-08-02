<?php

use Entities\Doctor;

class EspecialidadController extends CI_Controller
{
    private $model;
    
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
        
    }
    
    /**
     *
     * @return \Model
     */
    private function model(){
        return $this->model;
    }
    
    
    public function buscarDoctoresDe($unaIdEspecialidad){
        $unaEspecialidad = $this->model()->buscar('Entities\Especialidad', $unaIdEspecialidad);
        $doctores = $unaEspecialidad->getDoctores();
        log_message('error', count($doctores));
        $array_mm = array_map(function ($unDoctor){
            return $unDoctor->toJson();}, $doctores->toArray());
        echo json_encode($array_mm);
    }
}

