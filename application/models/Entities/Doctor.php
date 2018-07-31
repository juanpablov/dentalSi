<?php

/**
 * @Entity
 * @Table=(name="doctor")
 *
 */
class Doctor
{
    /**
     * @ManyToMany(targetEntity="Paciente", mappedBy="doctores", cascade={"all"})
     * 
     */
    private $pacientes;
    /**
     * @ManyToMany(targetEntity="Especialidad", mappedBy="doctores", cascade={"all"})
     * @JoinTable(name="especialidad_doctor",
     *           joinColumns={@JoinColumn(name="doctor_id", referencedColumnName="id")},
     *           inverseJoinColumns={@JoinColumn(name="especialidad_id", referencedColumnName="id")}
     *           )
     */
    private $especialidades;
    /**
     * @OneToMany(targetEntity="FichaDeAtencion", mappedBy="doctor")
     * 
     */
    private $fichaDeAtencion;
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
        
        $this->pacientes = array();
        $this->especialidades = array();
    }
    
    public function cerrarTurno($unTurno){
        
    }
    
    public function atender($unTurno){
        $unTurno->atender();
    }
    
    public function agregarEspecialidad($unaEspecialidad){
        array_push($this->especialidades);
    }
}

