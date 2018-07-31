<?php
/**
 * @Entity
 * @Table(name="adjunto")
 *
 */

class Adjunto
{
    /**
     * @ManyToOne(targetEntity="FichaDeAtencion", inversedBy="adjuntos")
     * @JoinColumn(name="fichadeatencion_id", referencedColumnName="id")
     * 
     */
    private $fichaDeAtencion;
    /**
     * @Column(type="string", length=150, name="url")
     * 
     */
    private $url;
    /**
     * @Id
     * @GeneratedValue
     * @Column(name="integer")
     * 
     */
    private $id;
    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    
    
}

