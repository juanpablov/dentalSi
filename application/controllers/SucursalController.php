<?php

class SucursalController extends \CI_Controller
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
    
    
    public function buscarSucursales(){
        $sucursales = $this->model()->buscarTodos('Entities\Sucursal');
        $especialidades = $this->model()->buscarTodos('Entities\Especialidad');
        $this->smarty->assign("sucursales", $sucursales);
        $this->smarty->assign("especialidades",$especialidades);
        $this->smarty->display("sucursales.tpl");
       
    }
}

