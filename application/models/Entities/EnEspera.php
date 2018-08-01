<?php

namespace Entities;

/**
 * @Entity
 *
 */
class EnEspera extends EstadoTurno
{
    public function cancelarTurno($unTurno){
        
    }
    
    public function cerrarTurno($unTurno){
        
    }
    
    public function anuncioPaciente($unTurno){
        
    }
    
    /**
     * @param Turno $unTurno
     * {@inheritDoc}
     * @see \application\models\Entities\EstadoTurno::atender()
     */
    public function atender($unTurno){
        $unTurno->setEstado(new Cerrado());
    }
}

