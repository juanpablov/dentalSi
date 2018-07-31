<?php

/**
 * @Entity
 * @Table(name="estadoturno")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="tipo", type="string")
 * @DiscriminatorMap({"abierto" = "Abierto", "cerrado" = "Cerrado", "cancelado" = "Cancelado", "enespera" = "EnEspera"})
 *
 */
abstract class EstadoTurno
{
    /**
     * @OneToOne(targetEntity="Turno", mappedBy="estado")
     * @JoinColumn(name="turno_id", referencedColumnName="id")
     * 
     */
    private $turno;
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * 
     */
    private $id;
    
    public abstract function cancelarTurno($unTurno);
    
    public abstract function cerrarTurno($unTurno);
    
    public abstract function anuncioPaciente($unTurno);
    
    public abstract function atender($unPaciente);
}

