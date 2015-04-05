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
     * @ORM\OneToMany(targetEntity="Darea", mappedBy="area")
     */
    protected $darea;
    
    public function __construct()
    {
        $this->darea = new ArrayCollection();
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
     * Add darea
     *
     * @param \AppBundle\Entity\Darea $darea
     * @return AreaProfessionale
     */
    public function addDarea(\AppBundle\Entity\Darea $darea)
    {
        $this->darea[] = $darea;

        return $this;
    }

    /**
     * Remove darea
     *
     * @param \AppBundle\Entity\Darea $darea
     */
    public function removeDarea(\AppBundle\Entity\Darea $darea)
    {
        $this->darea->removeElement($darea);
    }

    /**
     * Get darea
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDarea()
    {
        return $this->darea;
    }
}
