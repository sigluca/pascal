<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AreaProfessionale
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AreaProfessionale
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
     * @ORM\OneToMany(targetEntity="DisponibilitaArea", mappedBy="area")
     */
    protected $disponibilitaarea;
    
    public function __construct()
    {
        $this->disponibilitaarea = new ArrayCollection();
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

    
    
    public function __toString() 
    {
        return $this->descrizione;
    }

   

    /**
     * Add disponibilitaarea
     *
     * @param \AppBundle\Entity\DisponibilitaArea $disponibilitaarea
     * @return AreaProfessionale
     */
    public function addDisponibilitaarea(\AppBundle\Entity\DisponibilitaArea $disponibilitaarea)
    {
        $this->disponibilitaarea[] = $disponibilitaarea;

        return $this;
    }

    /**
     * Remove disponibilitaarea
     *
     * @param \AppBundle\Entity\DisponibilitaArea $disponibilitaarea
     */
    public function removeDisponibilitaarea(\AppBundle\Entity\DisponibilitaArea $disponibilitaarea)
    {
        $this->disponibilitaarea->removeElement($disponibilitaarea);
    }

    /**
     * Get disponibilitaarea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisponibilitaarea()
    {
        return $this->disponibilitaarea;
    }
}
