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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=true)
     */
    private $email;       

    
    
    
    /**
     * @ORM\OneToMany(targetEntity="Indirizzo", mappedBy="scuola")
     */
    protected $indirizzi;

    
    
    public function __construct()
    {
        $this->indirizzi = new ArrayCollection();
      
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
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return Scuola
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
     * Add indirizzi
     *
     * @param \AppBundle\Entity\Indirizzo $indirizzi
     * @return Scuola
     */
    public function addIndirizzi(\AppBundle\Entity\Indirizzo $indirizzi)
    {
        $this->indirizzi[] = $indirizzi;

        return $this;
    }

    /**
     * Remove indirizzi
     *
     * @param \AppBundle\Entity\Indirizzo $indirizzi
     */
    public function removeIndirizzi(\AppBundle\Entity\Indirizzo $indirizzi)
    {
        $this->indirizzi->removeElement($indirizzi);
    }

    /**
     * Get indirizzi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndirizzi()
    {
        return $this->indirizzi;
    }
}
