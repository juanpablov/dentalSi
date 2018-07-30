<?php

/**
 * @Entity
 * @Table(name="paciente")
 *
 */
class Paciente
{
    /**
     * @ManyToMany(targetEntity="Sucursal", mappedBy="pacientes", cascade=({"all})
     * @JoinTable(name="sucursal_paciente",
     *              joinColumns={@JoinColumn(name="paciente_id", referencedColumnName="id")},
     *              inverseJoinColumns={@JoinColumn(name="sucursal_id", referencedColumnName="id")}
     *              )
     */
    private $sucursales;
    /**
     * @ManyToMany(targetEntity="Doctor", mappedBy="pacientes", cascade=({"all"})
     * @JoinTable(name="doctor_paciente",
     *              joinColumns={@JoinColumn(name="paciente_id", referencedColumnName="id")},
     *              inverseJoinColumns={@JoinColumn(name="doctor_id", referencedColumnName="id")}
     *              )
     * 
     */
    private $doctores;
    /**
     * OneToMany(targetEntity="FichaDeAtencion", mappedBy="paciente")
     * @var unknown
     */
    private $historiaClinica;
    

    public function __construc(){
        
        $this->sucursales = array();
        $this->historiaClinica = array();
    }
    
    public function cancelarTurno($unTurno){
        $unTurno->cancelarTurno();
    }
    
    public function agregarSucursal($unaSucursal){
        array_push($this->sucursales);
    }
    
    public function cambiarTurno($unTurno){
        
    }
}

