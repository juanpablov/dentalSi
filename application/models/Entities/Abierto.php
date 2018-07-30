<?php
/**
 * @Entity
 * @Table(name="abierto")
 *
 */

class Abierto extends EstadoTurno
{
    /**
     * @param Turno $unTurno
     * {@inheritDoc}
     * @see \application\models\Entities\EstadoTurno::cancelarTurno()
     */
    public function cancelarTurno($unTurno){
        $ahora = new \DateTime();
        $fechaTurno = $unTurno->getFecha();
        $diferenciaHoraria = $ahora->diff($fechaTurno);
        if($diferenciaHoraria->h>24){
            $unTurno->setEstado(new Cancelado());
        }
    }
    
    public function cerrarTurno($unTurno){
        
    }
    
    /**
     * @param Turno $unTurno
     * {@inheritDoc}
     * @see \application\models\Entities\EstadoTurno::anuncioPaciente()
     */
    public function anuncioPaciente($unTurno){
        $unTurno->getEstado(new EnEspera());
    }
    
    public function atender($unTurno){
        
    }
}

