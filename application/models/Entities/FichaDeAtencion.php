<?php

/**
 * @Entity
 * @Table(name="fichadeatencion")
 *
 */
class FichaDeAtencion
{
    /**
     * @OneToMany(targetEntity="Adjunto", mappedBy="fichadeatencion")
     * 
     */
    private $adjuntos;
    /**
     * ManyToOne(targetEntity="Paciente", mappedBy="historiaclinica")
     * 
     */
    private $paciente;
    /**
     * @ManyToOne(targetEntity="Doctor", mappedBy="fichadeatencion")
     * 
     */
    private $doctores;
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

