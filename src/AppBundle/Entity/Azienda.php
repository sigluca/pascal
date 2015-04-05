<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Azienda
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Azienda
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
     * @ORM\Column(name="partitaiva", type="string", length=32, nullable=true)
     */
    private $partitaiva;

    /**
     * @var string
     *
     * @ORM\Column(name="codicefiscale", type="string", length=32, nullable=true)
     */
    private $codicefiscale;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerodirigenti", type="smallint", nullable=true)
     */
    private $numerodirigenti;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroimpiegati", type="smallint", nullable=true)
     */
    private $numeroimpiegati;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerooperai", type="smallint", nullable=true)
     */
    private $numerooperai;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroaltridipendenti", type="smallint", nullable=true)
     */
    private $numeroaltridipendenti;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sito", type="string", length=255, nullable=true)
     */
    private $sito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibile", type="boolean")
     */
    private $disponibile;

    
    /**
     * @ORM\OneToMany(targetEntity="Personale", mappedBy="azienda" ,cascade={"persist"} )
     */
    private $personale;
    
    /**
     * @ORM\OneToMany(targetEntity="Sede", mappedBy="azienda" ,cascade={"persist"} )
     */
    private $sede;

    /**
     * @ORM\OneToMany(targetEntity="Questionario", mappedBy="azienda")
     */
    protected $questionari;
    
    /**
     * @ORM\OneToMany(targetEntity="DisponibilitaFigure", mappedBy="azienda" )
     */
    protected $disponibilitaFigure;
    
    /**
     * @ORM\OneToMany(targetEntity="Darea", mappedBy="azienda", cascade={"persist"})
     */
    private $darea;

    
    
    public function __construct()
    {
        $this->personale = new ArrayCollection();
        $this->sede = new ArrayCollection();
        $this->questionari = new ArrayCollection();       
        $this->disponibilitaFigure = new ArrayCollection();                
        $this->darea = new ArrayCollection();                
        
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
     * @return Azienda
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
     * Set partitaiva
     *
     * @param string $partitaiva
     * @return Azienda
     */
    public function setPartitaiva($partitaiva)
    {
        $this->partitaiva = $partitaiva;

        return $this;
    }

    /**
     * Get partitaiva
     *
     * @return string 
     */
    public function getPartitaiva()
    {
        return $this->partitaiva;
    }

    /**
     * Set codicefiscale
     *
     * @param string $codicefiscale
     * @return Azienda
     */
    public function setCodicefiscale($codicefiscale)
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    /**
     * Get codicefiscale
     *
     * @return string 
     */
    public function getCodicefiscale()
    {
        return $this->codicefiscale;
    }

    /**
     * Set numerodirigenti
     *
     * @param integer $numerodirigenti
     * @return Azienda
     */
    public function setNumerodirigenti($numerodirigenti)
    {
        $this->numerodirigenti = $numerodirigenti;

        return $this;
    }

    /**
     * Get numerodirigenti
     *
     * @return integer 
     */
    public function getNumerodirigenti()
    {
        return $this->numerodirigenti;
    }

    /**
     * Set numeroimpiegati
     *
     * @param integer $numeroimpiegati
     * @return Azienda
     */
    public function setNumeroimpiegati($numeroimpiegati)
    {
        $this->numeroimpiegati = $numeroimpiegati;

        return $this;
    }

    /**
     * Get numeroimpiegati
     *
     * @return integer 
     */
    public function getNumeroimpiegati()
    {
        return $this->numeroimpiegati;
    }

    /**
     * Set numerooperai
     *
     * @param integer $numerooperai
     * @return Azienda
     */
    public function setNumerooperai($numerooperai)
    {
        $this->numerooperai = $numerooperai;

        return $this;
    }

    /**
     * Get numerooperai
     *
     * @return integer 
     */
    public function getNumerooperai()
    {
        return $this->numerooperai;
    }

    /**
     * Set numeroaltridipendenti
     *
     * @param integer $numeroaltridipendenti
     * @return Azienda
     */
    public function setNumeroaltridipendenti($numeroaltridipendenti)
    {
        $this->numeroaltridipendenti = $numeroaltridipendenti;

        return $this;
    }

    /**
     * Get numeroaltridipendenti
     *
     * @return integer 
     */
    public function getNumeroaltridipendenti()
    {
        return $this->numeroaltridipendenti;
    }

    /**
     * Set sito
     *
     * @param string $sito
     * @return Azienda
     */
    public function setSito($sito)
    {
        $this->sito = $sito;

        return $this;
    }

    /**
     * Get sito
     *
     * @return string 
     */
    public function getSito()
    {
        return $this->sito;
    }

    /**
     * Set disponibile
     *
     * @param boolean $disponibile
     * @return Azienda
     */
    public function setDisponibile($disponibile)
    {
        $this->disponibile = $disponibile;

        return $this;
    }

    /**
     * Get disponibile
     *
     * @return boolean 
     */
    public function getDisponibile()
    {
        return $this->disponibile;
    }

    /**
     * Add personale
     *
     * @param \AppBundle\Entity\Personale $personale
     * @return Azienda
     */
    public function addPersonale(\AppBundle\Entity\Personale $personale)
    {
        
        $personale->setAzienda($this);
        
        $this->personale[] = $personale;

        return $this;
    }

    /**
     * Remove personale
     *
     * @param \AppBundle\Entity\Personale $personale
     */
    public function removePersonale(\AppBundle\Entity\Personale $personale)
    {
        $this->personale->removeElement($personale);
    }

    /**
     * Get personale
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersonale()
    {
        return $this->personale;
    }

    
    /**
     * Add questionari
     *
     * @param \AppBundle\Entity\Questionario $questionari
     * @return Azienda
     */
    public function addQuestionari(\AppBundle\Entity\Questionario $questionari)
    {
        $this->questionari[] = $questionari;

        return $this;
    }

    /**
     * Remove questionari
     *
     * @param \AppBundle\Entity\Questionario $questionari
     */
    public function removeQuestionari(\AppBundle\Entity\Questionario $questionari)
    {
        $this->questionari->removeElement($questionari);
    }

    /**
     * Get questionari
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestionari()
    {
        return $this->questionari;
    }

    /**
     * Add disponibilitaFigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitaFigure
     * @return Azienda
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

   

    /**
     * Add sede
     *
     * @param \AppBundle\Entity\Sede $sede
     * @return Azienda
     */
    public function addSede(\AppBundle\Entity\Sede $sede)
    {
        $sede->setAzienda($this);

        $this->sede[] = $sede;

        return $this;
    }

    /**
     * Remove sede
     *
     * @param \AppBundle\Entity\Sede $sede
     */
    public function removeSede(\AppBundle\Entity\Sede $sede)
    {
        $this->sede->removeElement($sede);
    }

    /**
     * Get sede
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSede()
    {
        return $this->sede;
    }

   

 

    /**
     * Add dareon
     *
     * @param \AppBundle\Entity\Darea $darea
     * @return Azienda
     */
    public function addDareon(\AppBundle\Entity\Darea $darea)
    {
        $darea->setAzienda($this);
        $this->darea[] = $darea;

        return $this;
    }

    
   /**
     * Add darea
     *
     * @param \AppBundle\Entity\Darea $darea
     * @return Azienda
     */
    public function addDarea(\AppBundle\Entity\Darea $darea)
    {
        $darea->setAzienda($this);
        $this->darea[] = $darea;

        return $this;
    }    

    /**
     * Remove dareaon
     *
     * @param \AppBundle\Entity\Darea $darea
     */
    public function removeDareon(\AppBundle\Entity\Darea $darea)
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
