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
     * @var date
     *
     * @ORM\Column(name="dataquestionario", type="date")
     */
    private $dataquestionario;    
    
   /**
     * @ORM\ManyToOne(targetEntity="Somministratore", inversedBy="azienda" , cascade={"persist"})
     * @ORM\JoinColumn(name="somministratore", referencedColumnName="id")
     */
    private $somministratore;    
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibile", type="boolean")
     */
    private $disponibile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Q8a", type="boolean")
     */
    private $Q8a;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Q8b", type="string")
     */
    private $Q8b;  
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q9a", type="boolean")
     */
    private $Q9a;    

    /**
     * @var boolean
     *
     * @ORM\Column(name="Q9b", type="boolean")
     */

     private $Q9b;    
     
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q9c", type="boolean")
     */

     private $Q9c; 

    /**
     * @var string
     *
     * @ORM\Column(name="Q9d", type="string")
     */
    private $Q9d;    
    

    /**
     * @var string
     *
     * @ORM\Column(name="Q10", type="string")
     */
    private $Q10;    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q11", type="boolean")
     */
    private $Q11;    

    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q12a", type="boolean")
     */
    private $Q12a;      
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q12b", type="boolean")
     */
    private $Q12b;      
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q12c", type="boolean")
     */
    private $Q12c;      
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q12d", type="boolean")
     */
    private $Q12d;      
    /**
     * @var string
     *
     * @ORM\Column(name="Q12e", type="string")
     */
    private $Q12e;   
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q13a", type="boolean")
     */
    private $Q13a;          
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q13b", type="boolean")
     */
    private $Q13b;          
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q13c", type="boolean")
     */
    private $Q13c;          
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q13d", type="boolean")
     */
    private $Q13d;          
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q13e", type="boolean")
     */
    private $Q13e;          
    /**
     * @var string
     *
     * @ORM\Column(name="Q13f", type="string")
     */
    private $Q13f;          


    /**
     * @var boolean
     *
     * @ORM\Column(name="Q14a", type="boolean")
     */
    private $Q14a;          
    /**
     * @var boolean
     *
     * @ORM\Column(name="Q14b", type="boolean")
     */
    private $Q14b;          
    /**
     * @var string
     *
     * @ORM\Column(name="Q14c", type="string")
     */
    private $Q14c;          
    
 
    /**
     * @var string
     *
     * @ORM\Column(name="Q15", type="string")
     */
    private $Q15;          
 

    /**
     * @var string
     *
     * @ORM\Column(name="Q16", type="string")
     */
    private $Q16;          
    
    
    
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
     * @ORM\OneToMany(targetEntity="DisponibilitaFigure", mappedBy="azienda", cascade={"persist"})
     */
    protected $disponibilitafigure;
    
    /**
     * @ORM\OneToMany(targetEntity="DisponibilitaArea", mappedBy="azienda", cascade={"persist"})
     */
    private $disponibilitaarea;

    
    
    public function __construct()
    {
        $this->personale = new ArrayCollection();
        $this->sede = new ArrayCollection();
        $this->questionari = new ArrayCollection();       
        $this->disponibilitafigure = new ArrayCollection();                
        $this->disponibilitaarea = new ArrayCollection();                
        
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
     * Add disponibilitafigure
     *
     * @param \AppBundle\Entity\DisponibilitaFigure $disponibilitafigure
     * @return Azienda
     */
    public function addDisponibilitafigure(\AppBundle\Entity\DisponibilitaFigure $disponibilitafigure)
    {
        $disponibilitafigure->setAzienda($this);
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
     * Add disponibilitaarea
     *
     * @param \AppBundle\Entity\DisponibilitaArea $disponibilitaarea
     * @return Azienda
     */
    public function addDisponibilitaarea(\AppBundle\Entity\DisponibilitaArea $disponibilitaarea)
    {
        $disponibilitaarea->setAzienda($this);
        $this->disponibilitaarea[] = $disponibilitaarea;

        return $this;
    }

    // Add e Remove duplicate per un problema nella singolarizzazione in italiano 
    
    
    /**
     * Add disponibilitaareon
     *
     * @param \AppBundle\Entity\DisponibilitaArea $disponibilitaarea
     * @return Azienda
     */
    public function addDisponibilitaareon(\AppBundle\Entity\DisponibilitaArea $disponibilitaarea)
    {
        
        $disponibilitaarea->setAzienda($this);        
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
     * Remove disponibilitaareon
     *
     * @param \AppBundle\Entity\DisponibilitaArea $disponibilitaarea
     */
    public function removeDisponibilitaareon(\AppBundle\Entity\DisponibilitaArea $disponibilitaarea)
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

    /**
     * Set dataquestionario
     *
     * @param \DateTime $dataquestionario
     * @return Azienda
     */
    public function setDataquestionario($dataquestionario)
    {
        $this->dataquestionario = $dataquestionario;

        return $this;
    }

    /**
     * Get dataquestionario
     *
     * @return \DateTime 
     */
    public function getDataquestionario()
    {
        return $this->dataquestionario;
    }

    /**
     * Set somministratore
     *
     * @param \AppBundle\Entity\Somministratore $somministratore
     * @return Azienda
     */
    public function setSomministratore(\AppBundle\Entity\Somministratore $somministratore = null)
    {
        $this->somministratore = $somministratore;

        return $this;
    }

    /**
     * Get somministratore
     *
     * @return \AppBundle\Entity\Somministratore 
     */
    public function getSomministratore()
    {
        return $this->somministratore;
    }

    /**
     * Set Q8a
     *
     * @param boolean $q8a
     * @return Azienda
     */
    public function setQ8a($q8a)
    {
        $this->Q8a = $q8a;

        return $this;
    }

    /**
     * Get Q8a
     *
     * @return boolean 
     */
    public function getQ8a()
    {
        return $this->Q8a;
    }

    /**
     * Set Q8b
     *
     * @param string $q8b
     * @return Azienda
     */
    public function setQ8b($q8b)
    {
        $this->Q8b = $q8b;

        return $this;
    }

    /**
     * Get Q8b
     *
     * @return string 
     */
    public function getQ8b()
    {
        return $this->Q8b;
    }

    /**
     * Set Q9a
     *
     * @param boolean $q9a
     * @return Azienda
     */
    public function setQ9a($q9a)
    {
        $this->Q9a = $q9a;

        return $this;
    }

    /**
     * Get Q9a
     *
     * @return boolean 
     */
    public function getQ9a()
    {
        return $this->Q9a;
    }

    /**
     * Set Q9b
     *
     * @param boolean $q9b
     * @return Azienda
     */
    public function setQ9b($q9b)
    {
        $this->Q9b = $q9b;

        return $this;
    }

    /**
     * Get Q9b
     *
     * @return boolean 
     */
    public function getQ9b()
    {
        return $this->Q9b;
    }

    /**
     * Set Q9c
     *
     * @param boolean $q9c
     * @return Azienda
     */
    public function setQ9c($q9c)
    {
        $this->Q9c = $q9c;

        return $this;
    }

    /**
     * Get Q9c
     *
     * @return boolean 
     */
    public function getQ9c()
    {
        return $this->Q9c;
    }

    /**
     * Set Q9d
     *
     * @param string $q9d
     * @return Azienda
     */
    public function setQ9d($q9d)
    {
        $this->Q9d = $q9d;

        return $this;
    }

    /**
     * Get Q9d
     *
     * @return string 
     */
    public function getQ9d()
    {
        return $this->Q9d;
    }

    /**
     * Set Q10
     *
     * @param string $q10
     * @return Azienda
     */
    public function setQ10($q10)
    {
        $this->Q10 = $q10;

        return $this;
    }

    /**
     * Get Q10
     *
     * @return string 
     */
    public function getQ10()
    {
        return $this->Q10;
    }

    /**
     * Set Q11
     *
     * @param boolean $q11
     * @return Azienda
     */
    public function setQ11($q11)
    {
        $this->Q11 = $q11;

        return $this;
    }

    /**
     * Get Q11
     *
     * @return boolean 
     */
    public function getQ11()
    {
        return $this->Q11;
    }

    /**
     * Set Q12
     *
     * @param boolean $q12
     * @return Azienda
     */
    public function setQ12($q12)
    {
        $this->Q12 = $q12;

        return $this;
    }

    /**
     * Get Q12
     *
     * @return boolean 
     */
    public function getQ12()
    {
        return $this->Q12;
    }

    /**
     * Set Q13
     *
     * @param boolean $q13
     * @return Azienda
     */
    public function setQ13($q13)
    {
        $this->Q13 = $q13;

        return $this;
    }

    /**
     * Get Q13
     *
     * @return boolean 
     */
    public function getQ13()
    {
        return $this->Q13;
    }

    /**
     * Set Q14
     *
     * @param boolean $q14
     * @return Azienda
     */
    public function setQ14($q14)
    {
        $this->Q14 = $q14;

        return $this;
    }

    /**
     * Get Q14
     *
     * @return boolean 
     */
    public function getQ14()
    {
        return $this->Q14;
    }

    /**
     * Set Q15
     *
     * @param boolean $q15
     * @return Azienda
     */
    public function setQ15($q15)
    {
        $this->Q15 = $q15;

        return $this;
    }

    /**
     * Get Q15
     *
     * @return boolean 
     */
    public function getQ15()
    {
        return $this->Q15;
    }

    /**
     * Set Q16
     *
     * @param string $q16
     * @return Azienda
     */
    public function setQ16($q16)
    {
        $this->Q16 = $q16;

        return $this;
    }

    /**
     * Get Q16
     *
     * @return string 
     */
    public function getQ16()
    {
        return $this->Q16;
    }

    /**
     * Set Q17
     *
     * @param boolean $q17
     * @return Azienda
     */
    public function setQ17($q17)
    {
        $this->Q17 = $q17;

        return $this;
    }

    /**
     * Get Q17
     *
     * @return boolean 
     */
    public function getQ17()
    {
        return $this->Q17;
    }

    /**
     * Set Q18
     *
     * @param boolean $q18
     * @return Azienda
     */
    public function setQ18($q18)
    {
        $this->Q18 = $q18;

        return $this;
    }

    /**
     * Get Q18
     *
     * @return boolean 
     */
    public function getQ18()
    {
        return $this->Q18;
    }

    /**
     * Set Q19
     *
     * @param boolean $q19
     * @return Azienda
     */
    public function setQ19($q19)
    {
        $this->Q19 = $q19;

        return $this;
    }

    /**
     * Get Q19
     *
     * @return boolean 
     */
    public function getQ19()
    {
        return $this->Q19;
    }

    /**
     * Set Q20
     *
     * @param boolean $q20
     * @return Azienda
     */
    public function setQ20($q20)
    {
        $this->Q20 = $q20;

        return $this;
    }

    /**
     * Get Q20
     *
     * @return boolean 
     */
    public function getQ20()
    {
        return $this->Q20;
    }

    /**
     * Set Q21
     *
     * @param boolean $q21
     * @return Azienda
     */
    public function setQ21($q21)
    {
        $this->Q21 = $q21;

        return $this;
    }

    /**
     * Get Q21
     *
     * @return boolean 
     */
    public function getQ21()
    {
        return $this->Q21;
    }

    /**
     * Set Q22
     *
     * @param string $q22
     * @return Azienda
     */
    public function setQ22($q22)
    {
        $this->Q22 = $q22;

        return $this;
    }

    /**
     * Get Q22
     *
     * @return string 
     */
    public function getQ22()
    {
        return $this->Q22;
    }

    /**
     * Set Q23
     *
     * @param boolean $q23
     * @return Azienda
     */
    public function setQ23($q23)
    {
        $this->Q23 = $q23;

        return $this;
    }

    /**
     * Get Q23
     *
     * @return boolean 
     */
    public function getQ23()
    {
        return $this->Q23;
    }

    /**
     * Set Q24
     *
     * @param boolean $q24
     * @return Azienda
     */
    public function setQ24($q24)
    {
        $this->Q24 = $q24;

        return $this;
    }

    /**
     * Get Q24
     *
     * @return boolean 
     */
    public function getQ24()
    {
        return $this->Q24;
    }

    /**
     * Set Q25
     *
     * @param string $q25
     * @return Azienda
     */
    public function setQ25($q25)
    {
        $this->Q25 = $q25;

        return $this;
    }

    /**
     * Get Q25
     *
     * @return string 
     */
    public function getQ25()
    {
        return $this->Q25;
    }

    /**
     * Set Q26
     *
     * @param string $q26
     * @return Azienda
     */
    public function setQ26($q26)
    {
        $this->Q26 = $q26;

        return $this;
    }

    /**
     * Get Q26
     *
     * @return string 
     */
    public function getQ26()
    {
        return $this->Q26;
    }

    /**
     * Set Q27
     *
     * @param string $q27
     * @return Azienda
     */
    public function setQ27($q27)
    {
        $this->Q27 = $q27;

        return $this;
    }

    /**
     * Get Q27
     *
     * @return string 
     */
    public function getQ27()
    {
        return $this->Q27;
    }

    /**
     * Set Q12a
     *
     * @param boolean $q12a
     * @return Azienda
     */
    public function setQ12a($q12a)
    {
        $this->Q12a = $q12a;

        return $this;
    }

    /**
     * Get Q12a
     *
     * @return boolean 
     */
    public function getQ12a()
    {
        return $this->Q12a;
    }

    /**
     * Set Q12b
     *
     * @param boolean $q12b
     * @return Azienda
     */
    public function setQ12b($q12b)
    {
        $this->Q12b = $q12b;

        return $this;
    }

    /**
     * Get Q12b
     *
     * @return boolean 
     */
    public function getQ12b()
    {
        return $this->Q12b;
    }

    /**
     * Set Q12c
     *
     * @param boolean $q12c
     * @return Azienda
     */
    public function setQ12c($q12c)
    {
        $this->Q12c = $q12c;

        return $this;
    }

    /**
     * Get Q12c
     *
     * @return boolean 
     */
    public function getQ12c()
    {
        return $this->Q12c;
    }

    /**
     * Set Q12d
     *
     * @param boolean $q12d
     * @return Azienda
     */
    public function setQ12d($q12d)
    {
        $this->Q12d = $q12d;

        return $this;
    }

    /**
     * Get Q12d
     *
     * @return boolean 
     */
    public function getQ12d()
    {
        return $this->Q12d;
    }

    /**
     * Set Q12e
     *
     * @param string $q12e
     * @return Azienda
     */
    public function setQ12e($q12e)
    {
        $this->Q12e = $q12e;

        return $this;
    }

    /**
     * Get Q12e
     *
     * @return string 
     */
    public function getQ12e()
    {
        return $this->Q12e;
    }

    /**
     * Set Q13a
     *
     * @param boolean $q13a
     * @return Azienda
     */
    public function setQ13a($q13a)
    {
        $this->Q13a = $q13a;

        return $this;
    }

    /**
     * Get Q13a
     *
     * @return boolean 
     */
    public function getQ13a()
    {
        return $this->Q13a;
    }

    /**
     * Set Q13b
     *
     * @param boolean $q13b
     * @return Azienda
     */
    public function setQ13b($q13b)
    {
        $this->Q13b = $q13b;

        return $this;
    }

    /**
     * Get Q13b
     *
     * @return boolean 
     */
    public function getQ13b()
    {
        return $this->Q13b;
    }

    /**
     * Set Q13c
     *
     * @param boolean $q13c
     * @return Azienda
     */
    public function setQ13c($q13c)
    {
        $this->Q13c = $q13c;

        return $this;
    }

    /**
     * Get Q13c
     *
     * @return boolean 
     */
    public function getQ13c()
    {
        return $this->Q13c;
    }

    /**
     * Set Q13d
     *
     * @param boolean $q13d
     * @return Azienda
     */
    public function setQ13d($q13d)
    {
        $this->Q13d = $q13d;

        return $this;
    }

    /**
     * Get Q13d
     *
     * @return boolean 
     */
    public function getQ13d()
    {
        return $this->Q13d;
    }

    /**
     * Set Q13e
     *
     * @param boolean $q13e
     * @return Azienda
     */
    public function setQ13e($q13e)
    {
        $this->Q13e = $q13e;

        return $this;
    }

    /**
     * Get Q13e
     *
     * @return boolean 
     */
    public function getQ13e()
    {
        return $this->Q13e;
    }

    /**
     * Set Q13f
     *
     * @param string $q13f
     * @return Azienda
     */
    public function setQ13f($q13f)
    {
        $this->Q13f = $q13f;

        return $this;
    }

    /**
     * Get Q13f
     *
     * @return string 
     */
    public function getQ13f()
    {
        return $this->Q13f;
    }

    /**
     * Set Q14a
     *
     * @param boolean $q14a
     * @return Azienda
     */
    public function setQ14a($q14a)
    {
        $this->Q14a = $q14a;

        return $this;
    }

    /**
     * Get Q14a
     *
     * @return boolean 
     */
    public function getQ14a()
    {
        return $this->Q14a;
    }

    /**
     * Set Q14b
     *
     * @param boolean $q14b
     * @return Azienda
     */
    public function setQ14b($q14b)
    {
        $this->Q14b = $q14b;

        return $this;
    }

    /**
     * Get Q14b
     *
     * @return boolean 
     */
    public function getQ14b()
    {
        return $this->Q14b;
    }

    /**
     * Set Q14c
     *
     * @param string $q14c
     * @return Azienda
     */
    public function setQ14c($q14c)
    {
        $this->Q14c = $q14c;

        return $this;
    }

    /**
     * Get Q14c
     *
     * @return string 
     */
    public function getQ14c()
    {
        return $this->Q14c;
    }
}
