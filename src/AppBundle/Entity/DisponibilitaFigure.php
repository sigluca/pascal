<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * DisponibilitaFigure
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DisponibilitaFigure
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
     * @ORM\Column(name="mansioniallievo", type="string", length=255)
     */
    private $mansioniallievo;

    /**
     * @ORM\ManyToOne(targetEntity="TempoPermanenza", inversedBy="disponibilitafigure")
     * @ORM\JoinColumn(name="tempopermanenza", referencedColumnName="id")
     */
     private $tempopermanenza;

    /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="disponibilitaFigure")
     * @ORM\JoinColumn(name="azienda", referencedColumnName="id")
     */
    private $azienda;

    /**
     * @ORM\ManyToOne(targetEntity="Indirizzo", inversedBy="disponibilitaFigure")
     * @ORM\JoinColumn(name="indirizzo", referencedColumnName="id")
     */
    private $indirizzo;


   /**
     * @ORM\OneToMany(targetEntity="RichiestaConoscenza", mappedBy="disponibilitaFigure",cascade={"persist"} )
     */
    protected $richiestaconoscenza;
    
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilegennaio", type="boolean")
     */
    private $disponibilegennaio;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilefebbraio", type="boolean")
     */
    private $disponibilefebbraio;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilemarzo", type="boolean")
     */
    private $disponibilemarzo;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibileaprile", type="boolean")
     */
    private $disponibileaprile;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilemaggio", type="boolean")
     */
    private $disponibilemaggio;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilegiugno", type="boolean")
     */
    private $disponibilegiugno;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibileluglio", type="boolean")
     */
    private $disponibileluglio;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibileagosto", type="boolean")
     */
    private $disponibileagosto;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilesettembre", type="boolean")
     */
    private $disponibilesettembre;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibileottobre", type="boolean")
     */
    private $disponibileottobre;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilenovembre", type="boolean")
     */
    private $disponibilenovembre;    
    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibiledicembre", type="boolean")
     */
    private $disponibiledicembre;    
 
    
    
    
    
    public function __construct()
    {
        $this->mesi = new ArrayCollection();
        $this->richiestaconoscenza = new ArrayCollection(); 
    }
    
    
    public function __toString() 
    {
    
        return $this->mansioniallievo;
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
     * Set mansioniallievo
     *
     * @param string $mansioniallievo
     * @return DisponibilitaFigure
     */
    public function setMansioniallievo($mansioniallievo)
    {
        $this->mansioniallievo = $mansioniallievo;

        return $this;
    }

    /**
     * Get mansioniallievo
     *
     * @return string 
     */
    public function getMansioniallievo()
    {
        return $this->mansioniallievo;
    }

    /**
     * Set azienda
     *
     * @param integer $azienda
     * @return DisponibilitaFigure
     */
    public function setAzienda($azienda)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return integer 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }

    /**
     * Set indirizzo
     *
     * @param integer $indirizzo
     * @return DisponibilitaFigure
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return integer 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }


    /**
     * Add richiestaconoscenza
     *
     * @param \AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza
     * @return DisponibilitaFigure
     */
    public function addRichiestaconoscenza(\AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza)
    {
        $richiestaconoscenza->setDisponibilitaFigure($this);
        $this->richiestaconoscenza[] = $richiestaconoscenza;

        return $this;
    }

    /**
     * Add richiestaconoscenzon
     *
     * @param \AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza
     * @return DisponibilitaFigure
     */
    public function addRichiestaconoscenzon(\AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza)
    {
        $richiestaconoscenza->setDisponibilitaFigure($this);        
        $this->richiestaconoscenza[] = $richiestaconoscenza;

        return $this;
    }
    
    
    
    /**
     * Remove richiestaconoscenza
     *
     * @param \AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza
     */
    public function removeRichiestaconoscenza(\AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza)
    {
        $this->richiestaconoscenza->removeElement($richiestaconoscenza);
    }

    /**
     * Remove richiestaconoscenzon
     *
     * @param \AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza
     */
    public function removeRichiestaconoscenzon(\AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza)
    {
        $this->richiestaconoscenza->removeElement($richiestaconoscenza);
    }    
    
    
    /**
     * Get richiestaconoscenza
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRichiestaconoscenza()
    {
        return $this->richiestaconoscenza;
    }

    /**
     * Set disponibilegennaio
     *
     * @param boolean $disponibilegennaio
     * @return DisponibilitaFigure
     */
    public function setDisponibilegennaio($disponibilegennaio)
    {
        $this->disponibilegennaio = $disponibilegennaio;

        return $this;
    }

    /**
     * Get disponibilegennaio
     *
     * @return boolean 
     */
    public function getDisponibilegennaio()
    {
        return $this->disponibilegennaio;
    }

    /**
     * Set disponibilefebbraio
     *
     * @param boolean $disponibilefebbraio
     * @return DisponibilitaFigure
     */
    public function setDisponibilefebbraio($disponibilefebbraio)
    {
        $this->disponibilefebbraio = $disponibilefebbraio;

        return $this;
    }

    /**
     * Get disponibilefebbraio
     *
     * @return boolean 
     */
    public function getDisponibilefebbraio()
    {
        return $this->disponibilefebbraio;
    }

    /**
     * Set disponibilemarzo
     *
     * @param boolean $disponibilemarzo
     * @return DisponibilitaFigure
     */
    public function setDisponibilemarzo($disponibilemarzo)
    {
        $this->disponibilemarzo = $disponibilemarzo;

        return $this;
    }

    /**
     * Get disponibilemarzo
     *
     * @return boolean 
     */
    public function getDisponibilemarzo()
    {
        return $this->disponibilemarzo;
    }

    /**
     * Set disponibileaprile
     *
     * @param boolean $disponibileaprile
     * @return DisponibilitaFigure
     */
    public function setDisponibileaprile($disponibileaprile)
    {
        $this->disponibileaprile = $disponibileaprile;

        return $this;
    }

    /**
     * Get disponibileaprile
     *
     * @return boolean 
     */
    public function getDisponibileaprile()
    {
        return $this->disponibileaprile;
    }

    /**
     * Set disponibilemaggio
     *
     * @param boolean $disponibilemaggio
     * @return DisponibilitaFigure
     */
    public function setDisponibilemaggio($disponibilemaggio)
    {
        $this->disponibilemaggio = $disponibilemaggio;

        return $this;
    }

    /**
     * Get disponibilemaggio
     *
     * @return boolean 
     */
    public function getDisponibilemaggio()
    {
        return $this->disponibilemaggio;
    }

    /**
     * Set disponibilegiugno
     *
     * @param boolean $disponibilegiugno
     * @return DisponibilitaFigure
     */
    public function setDisponibilegiugno($disponibilegiugno)
    {
        $this->disponibilegiugno = $disponibilegiugno;

        return $this;
    }

    /**
     * Get disponibilegiugno
     *
     * @return boolean 
     */
    public function getDisponibilegiugno()
    {
        return $this->disponibilegiugno;
    }

    /**
     * Set disponibileluglio
     *
     * @param boolean $disponibileluglio
     * @return DisponibilitaFigure
     */
    public function setDisponibileluglio($disponibileluglio)
    {
        $this->disponibileluglio = $disponibileluglio;

        return $this;
    }

    /**
     * Get disponibileluglio
     *
     * @return boolean 
     */
    public function getDisponibileluglio()
    {
        return $this->disponibileluglio;
    }

    /**
     * Set disponibileagosto
     *
     * @param boolean $disponibileagosto
     * @return DisponibilitaFigure
     */
    public function setDisponibileagosto($disponibileagosto)
    {
        $this->disponibileagosto = $disponibileagosto;

        return $this;
    }

    /**
     * Get disponibileagosto
     *
     * @return boolean 
     */
    public function getDisponibileagosto()
    {
        return $this->disponibileagosto;
    }

    /**
     * Set disponibilesettembre
     *
     * @param boolean $disponibilesettembre
     * @return DisponibilitaFigure
     */
    public function setDisponibilesettembre($disponibilesettembre)
    {
        $this->disponibilesettembre = $disponibilesettembre;

        return $this;
    }

    /**
     * Get disponibilesettembre
     *
     * @return boolean 
     */
    public function getDisponibilesettembre()
    {
        return $this->disponibilesettembre;
    }

    /**
     * Set disponibileottobre
     *
     * @param boolean $disponibileottobre
     * @return DisponibilitaFigure
     */
    public function setDisponibileottobre($disponibileottobre)
    {
        $this->disponibileottobre = $disponibileottobre;

        return $this;
    }

    /**
     * Get disponibileottobre
     *
     * @return boolean 
     */
    public function getDisponibileottobre()
    {
        return $this->disponibileottobre;
    }

    /**
     * Set disponibilenovembre
     *
     * @param boolean $disponibilenovembre
     * @return DisponibilitaFigure
     */
    public function setDisponibilenovembre($disponibilenovembre)
    {
        $this->disponibilenovembre = $disponibilenovembre;

        return $this;
    }

    /**
     * Get disponibilenovembre
     *
     * @return boolean 
     */
    public function getDisponibilenovembre()
    {
        return $this->disponibilenovembre;
    }

    /**
     * Set disponibiledicembre
     *
     * @param boolean $disponibiledicembre
     * @return DisponibilitaFigure
     */
    public function setDisponibiledicembre($disponibiledicembre)
    {
        $this->disponibiledicembre = $disponibiledicembre;

        return $this;
    }

    /**
     * Get disponibiledicembre
     *
     * @return boolean 
     */
    public function getDisponibiledicembre()
    {
        return $this->disponibiledicembre;
    }

    /**
     * Set tempopermanenza
     *
     * @param \AppBundle\Entity\Tempopermanenza $tempopermanenza
     * @return DisponibilitaFigure
     */
    public function setTempopermanenza(\AppBundle\Entity\Tempopermanenza $tempopermanenza = null)
    {
        $this->tempopermanenza = $tempopermanenza;

        return $this;
    }

    /**
     * Get tempopermanenza
     *
     * @return \AppBundle\Entity\Tempopermanenza 
     */
    public function getTempopermanenza()
    {
        return $this->tempopermanenza;
    }
}
