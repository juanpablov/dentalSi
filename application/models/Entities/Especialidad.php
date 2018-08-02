<?php

namespace Entities;
/**
 * @Entity
 * @Table(name="especialidad")
 *
 */
class Especialidad
{
    /**
     * @Column(type="string", length=150, name="nombre")
     * 
     */
    private $nombre;
    /**
     * @ManyToMany(targetEntity="Doctor", inversedBy="especialidades", cascade={"all"})
     * 
     */
    private $doctores;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    
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
    /**
     * @return P
     */
    public function getDoctores()
    {
        return $this->doctores;
    }


    
    
}

