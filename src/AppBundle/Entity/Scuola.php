<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Scuola
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Scuola
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
     * @ORM\Column(name="indirizzostradale", type="string", length=128, nullable=true)
     */
    private $indirizzostradale;    
    
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=true)
     */
    private $email;       

    
    
    
    /**
     * @ORM\OneToMany(targetEntity="Indirizzo", mappedBy="scuola", cascade={"persist"})
     */
    protected $indirizzo;

    
    
    public function __construct()
    {
        $this->indirizzo = new ArrayCollection();
      
    } 
    
    public function __toString() 
    {
    
        return $this->denominazione;
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
     * @return Scuola
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
     * Set indirizzostradale
     *
     * @param string $indirizzostradale
     * @return Scuola
     */
    public function setIndirizzostradale($indirizzostradale)
    {
        $this->indirizzostradale = $indirizzostradale;

        return $this;
    }

    /**
     * Get indirizzostradale
     *
     * @return string 
     */
    public function getIndirizzostradale()
    {
        return $this->indirizzostradale;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Scuola
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
     * @return Scuola
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
     * Set email
     *
     * @param string $email
     * @return Scuola
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add indirizzo
     *
     * @param \AppBundle\Entity\Indirizzo $indirizzo
     * @return Scuola
     */
    public function addIndirizzo(\AppBundle\Entity\Indirizzo $indirizzo)
    {
        $indirizzo->setScuola($this);
        $this->indirizzo[] = $indirizzo;

        return $this;
    }

    /**
     * Remove indirizzo
     *
     * @param \AppBundle\Entity\Indirizzo $indirizzo
     */
    public function removeIndirizzo(\AppBundle\Entity\Indirizzo $indirizzo)
    {
        $this->indirizzo->removeElement($indirizzo);
    }

    /**
     * Get indirizzo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }
}
