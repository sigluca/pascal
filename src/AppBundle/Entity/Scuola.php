<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
