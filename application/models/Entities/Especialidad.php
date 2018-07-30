<?php

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
     * @ManyToMany(targetEntity="Doctor", mappedBy="especialidades", cascade=({"all})
     * 
     */
    private $doctores;
    private $turnos;
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

    
    
}

