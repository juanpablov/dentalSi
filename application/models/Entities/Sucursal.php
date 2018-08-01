<?php

namespace Entities;

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
    
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function __construct(){
        $pacientes = array();
    }
    
    public function agregarPaciente($unPaciente){
        array_push($this->pacientes);
    }
}

