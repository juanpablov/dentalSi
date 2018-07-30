<?php

/**
 * @Entity
 * @Table(name="sucursal")
 *
 */
class Sucursal
{
    /**
     * @ManyToMany(targetEntity="Paciente", inversedBy="sucursales", cascade=({"all"})
     * 
     */
    private $pacientes;
    
    public function __construct(){
        $pacientes = array();
    }
    
    public function agregarPaciente($unPaciente){
        array_push($this->pacientes);
    }
}

