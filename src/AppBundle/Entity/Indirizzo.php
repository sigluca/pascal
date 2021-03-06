<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Indirizzo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Indirizzo
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
     * @var integer
     *
     * @ORM\Column(name="durata", type="integer")
     */
    private $durata;

    /**
     * @ORM\ManyToOne(targetEntity="Scuola", inversedBy="indirizzo", cascade={"persist"})
     * @ORM\JoinColumn(name="scuola", referencedColumnName="id")
     */
    private $scuola;

    
    
    /**
     * @ORM\OneToMany(targetEntity="DisponibilitaFigure", mappedBy="disponibilitaFigure")
     */
    protected $disponibilitaFigure;
    
    
    
    
    private $labelcomposta;

    
    
    public function __construct()
    {
        $this->disponibilitaFigure = new ArrayCollection();                
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
     * @return Indirizzo
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
     * Set durata
     *
     * @param integer $durata
     * @return Indirizzo
     */
    public function setDurata($durata)
    {
        $this->durata = $durata;

        return $this;
    }

    /**
     * Get durata
     *
     * @return integer 
     */
    public function getDurata()
    {
        return $this->durata;
    }

    /**
     * Set scuola
     *
     * @param integer $scuola
     * @return Indirizzo
     */
    public function setScuola($scuola)
    {
        $this->scuola = $scuola;

        return $this;
    }

    /**
     * Get scuola
     *
     * @return integer 
     */
    public function getScuola()
    {
        return $this->scuola;
    }

    /**
     * Add disponibilitaFigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitaFigure
     * @return Indirizzo
     */
    public function addDisponibilitaFigure(\AppBundle\Entity\DisponibilitaFigure $disponibilitaFigure)
    {
        $this->disponibilitaFigure[] = $disponibilitaFigure;

        return $this;
    }

    /**
     * Remove disponibilitaFigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitaFigure
     */
    public function removeDisponibilitaFigure(\AppBundle\Entity\DisponibilitaFigure $disponibilitaFigure)
    {
        $this->disponibilitaFigure->removeElement($disponibilitaFigure);
    }

    /**
     * Get disponibilitaFigure
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisponibilitaFigure()
    {
        return $this->disponibilitaFigure;
    }
    
    
    public function __toString() 
    {
        return $this->denominazione;
        
    }
    

    public function getLabelcomposta()
    {
        return $this->denominazione." - ".$this->scuola;
    }


}
