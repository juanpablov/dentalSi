<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="turno")
 *
 */
class Turno
{
    /**
     * @Column (type="datetime", name="fecha")
     * 
     */
    private $fecha;
    /**
     * @ManyToOne(targetEntity="Especialidad")
     * @JoinColumn(name="especialidad_id", referencedColumnName="id")
     */
    private $especialidad;
    /**
     * @ManyToOne(targetEntity="Sucursal")
     * @JoinColumn(name="sucursal_id", referencedColumnName="id")
     * 
     */
    private $sucursal;
    /**
     * @OneToOne(targetEntity="EstadoTurno", inversedBy="turno")
     * @JoinColumn(name="estado_id", referencedColumnName="id")
     * 
     */
    private $estado;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    
   
    
    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * @return mixed
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * @param mixed $especialidad
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }

    /**
     * @param mixed $sucursal
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;
    }
    
    public function cancelarTurno(){
        $this->estado->cancelarTurno();
    }
    
    public function cerrarTurno(){
        
    }
    
    public function anuncioPaciente(){
        
    }
    
    public function atender(){
        
    }

    
}

