<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TempoPermanenza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TempoPermanenza
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
     * @ORM\Column(name="descrizione", type="string", length=32)
     */
    private $descrizione;

    /**
     * @ORM\OneToMany(targetEntity="DisponibilitaFigure", mappedBy="tempopermanenza")
     */
    protected $disponibilitafigure;
    
    public function __construct()
    {
        $this->disponibilitafigure = new ArrayCollection();
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
     * @return TempoPermanenza
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
     * Add disponibilitafigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitafigure
     * @return TempoPermanenza
     */
    public function addDisponibilitafigure(\AppBundle\Entity\DisponibilitaFigure $disponibilitafigure)
    {
        $this->disponibilitafigure[] = $disponibilitafigure;

        return $this;
    }

    /**
     * Remove disponibilitafigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitafigure
     */
    public function removeDisponibilitafigure(\AppBundle\Entity\DisponibilitaFigure $disponibilitafigure)
    {
        $this->disponibilitafigure->removeElement($disponibilitafigure);
    }

    /**
     * Get disponibilitafigure
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisponibilitafigure()
    {
        return $this->disponibilitafigure;
    }
}
