<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoEnte
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoEnte
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
     * @ORM\Column(name="descrizione", type="string", length=128)
     */
    private $descrizione;

    /**
     * @ORM\OneToMany(targetEntity="EnteSomministratore", mappedBy="tipo")
     */
    protected $entesomministratore;
    
    public function __construct()
    {
        $this->entesomministratore = new ArrayCollection();
    }
    
    public function __toString() 
    {
        return $this->descrizione;
        
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
     * Set descrizione
     *
     * @param string $descrizione
     * @return TipoEnte
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Add entesomministratore
     *
     * @param \AppBundle\Entity\EnteSomministratore $entesomministratore
     * @return TipoEnte
     */
    public function addEntesomministratore(\AppBundle\Entity\EnteSomministratore $entesomministratore)
    {
        $this->entesomministratore[] = $entesomministratore;

        return $this;
    }

    /**
     * Remove entesomministratore
     *
     * @param \AppBundle\Entity\EnteSomministratore $entesomministratore
     */
    public function removeEntesomministratore(\AppBundle\Entity\EnteSomministratore $entesomministratore)
    {
        $this->entesomministratore->removeElement($entesomministratore);
    }

    /**
     * Get entesomministratore
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntesomministratore()
    {
        return $this->entesomministratore;
    }
}
