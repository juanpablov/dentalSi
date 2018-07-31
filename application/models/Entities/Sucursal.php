<?php

/**
 * @Entity
 * @Table(name="sucursal")
 *
 */
class Sucursal
{
    /**
     * @ManyToMany(targetEntity="Paciente", inversedBy="sucursales", cascade={"all"})
     * 
     */
    private $pacientes;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    /**
     * @Column(type="string", length=150, name="nombre")
     *
     */
    private $nombre;
    
    public function __construct(){
        $pacientes = array();
    }
    
    public function agregarPaciente($unPaciente){
        array_push($this->pacientes);
    }
}

