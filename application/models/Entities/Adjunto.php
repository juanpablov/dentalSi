<?php
/**
 * @Entity
 * @Table(name="adjunto")
 *
 */

class Adjunto
{
    /**
     * @ManyToOne(targetEntity="FichaDeAtencion", mappedBy="adjuntos")
     * 
     */
    private $fichaDeAtencion;
    private $url;
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

