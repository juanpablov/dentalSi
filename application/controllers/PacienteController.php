<?php
namespace application\controllers;

class PacienteController extends \CI_Controller
{
    private $model;
    
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
        
    }
    
    private function model(){
        return $this->model;
    }
    
}

