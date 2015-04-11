<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sede
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sede
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="denominazione", type="string", length=255)
     */
    private $denominazione;

    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=128, nullable=true)
     */
    private $indirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=32, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=true)
     */
    private $fax;

    /**
     * @ORM\ManyToOne(targetEntity="Comune", inversedBy="sedi")
     * @ORM\JoinColumn(name="comune", referencedColumnName="id")
     */
   private $comune;

    /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="sede", cascade={"persist"})
     * @ORM\JoinColumn(name="azienda", referencedColumnName="id")
     */
   private $azienda;
   
    
    public function __toString() 
    {
        return $this->denominazione." - ".$this->comune;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set denominazione
     *
     * @param string $denominazione
     * @return Sede
     */
    public function setDenominazione($denominazione)
    {
        $this->denominazione = $denominazione;

        return $this;
    }

    /**
     * Get denominazione
     *
     * @return string 
     */
    public function getDenominazione()
    {
        return $this->denominazione;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Sede
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Sede
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Sede
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set comune
     *
     * @param \AppBundle\Entity\Comune $comune
     * @return Sede
     */
    public function setComune(\AppBundle\Entity\Comune $comune )
    {
        $this->comune = $comune;

        return $this;
    }

    /**
     * Get comune
     *
     * @return \AppBundle\Entity\Comune 
     */
    public function getComune()
    {
        return $this->comune;
    }

    

    /**
     * Set azienda
     *
     * @param \AppBundle\Entity\Azienda $azienda
     * @return Sede
     */
    public function setAzienda(\AppBundle\Entity\Azienda $azienda = null)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return \AppBundle\Entity\Azienda 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }
}
