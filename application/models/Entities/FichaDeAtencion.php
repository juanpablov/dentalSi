<?php

namespace Entities;

/**
 * @Entity
 * @Table(name="fichadeatencion")
 *
 */
class FichaDeAtencion
{
    /**
     * @OneToMany(targetEntity="Adjunto", mappedBy="fichaDeAtencion")
     * 
     */
    private $adjuntos;
    /**
     * @ManyToOne(targetEntity="Paciente", inversedBy="historiaClinica")
     * @JoinColumn(name="paciente_id", referencedColumnName="id")
     * 
     */
    private $paciente;
    /**
     * @ManyToOne(targetEntity="Doctor", inversedBy="fichaDeAtencion")
     * @JoinColumn(name="doctor_id", referencedColumnName="id")
     * 
     */
    private $doctor;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @return mixed
     */
    public function getPaciente()
    {
        return $this->paciente;
    }

    /**
     * @param mixed $paciente
     */
    public function setPaciente($paciente)
    {
        $this->paciente = $paciente;
    }

    public function __construct(){
        
        $this->adjuntos = array();
    }
    
    public function agregarAdjuntos(){
        array_push($this->adjuntos);
    }
}

