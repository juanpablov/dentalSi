<?php

class TurnoController extends CI_Controller
{
    private $model;
    
    public function __construct(){
        parent::__construct();
        $this->model = parent::cargarModel('Model');
        
    }
    
    private function model(){
        return $this->model;
    }
    
    public function altaTurno(){
        $sucursales = $this->model()->buscarTodos('Entities\Sucursal');
        $this->smarty->assign("sucursales", $sucursales);
        $especialidades = $this->model()->buscarTodos('Entities\Especialidad');
        $this->smarty->assign("especialidades", $especialidades);
        $nombre = $this->input->post('horario');
        $this->smarty->display("turnos.tpl");
    }

}

