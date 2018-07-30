<?php

/**
 * @Entity
 * @Table(name="estadoturno")
 *
 */
abstract class EstadoTurno
{
    /**
     * @OneToOne(targetEntity="Turno", mappedBy="estado")
     * 
     */
    private $turno;
    
    public abstract function cancelarTurno($unTurno);
    
    public abstract function cerrarTurno($unTurno);
    
    public abstract function anuncioPaciente($unTurno);
    
    public abstract function atender($unPaciente);
}

