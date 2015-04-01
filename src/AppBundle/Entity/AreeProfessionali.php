<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreeProfessionali
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AreeProfessionali
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
     * @ORM\OneToMany(targetEntity="DisponibilitaAree", mappedBy="area")
     */
    protected $disponibilitaAree;
    
    public function __construct()
    {
        $this->disponibilitaAree = new ArrayCollection();
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
     * @return AreeProfessionali
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
     * Add disponibilitaAree
     *
     * @param \AppBundle\Entity\DisponibilitaAree $disponibilitaAree
     * @return AreeProfessionali
     */
    public function addDisponibilitaAree(\AppBundle\Entity\DisponibilitaAree $disponibilitaAree)
    {
        $this->disponibilitaAree[] = $disponibilitaAree;

        return $this;
    }

    /**
     * Remove disponibilitaAree
     *
     * @param \AppBundle\Entity\DisponibilitaAree $disponibilitaAree
     */
    public function removeDisponibilitaAree(\AppBundle\Entity\DisponibilitaAree $disponibilitaAree)
    {
        $this->disponibilitaAree->removeElement($disponibilitaAree);
    }

    /**
     * Get disponibilitaAree
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisponibilitaAree()
    {
        return $this->disponibilitaAree;
    }
}
