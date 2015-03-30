<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var integer
     *
     * @ORM\Column(name="tempopermanenza", type="integer")
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
     * @ORM\OneToMany(targetEntity="DisponibilitaMese", mappedBy="disponibilita")
     */
    protected $mesi;

    
    
    public function __construct()
    {
        $this->mesi = new ArrayCollection();                
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
     * Set tempopermanenza
     *
     * @param integer $tempopermanenza
     * @return DisponibilitaFigure
     */
    public function setTempopermanenza($tempopermanenza)
    {
        $this->tempopermanenza = $tempopermanenza;

        return $this;
    }

    /**
     * Get tempopermanenza
     *
     * @return integer 
     */
    public function getTempopermanenza()
    {
        return $this->tempopermanenza;
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
     * Add mesi
     *
     * @param \AppBundle\Entity\DisponibilitaMese $mesi
     * @return DisponibilitaFigure
     */
    public function addMesi(\AppBundle\Entity\DisponibilitaMese $mesi)
    {
        $this->mesi[] = $mesi;

        return $this;
    }

    /**
     * Remove mesi
     *
     * @param \AppBundle\Entity\DisponibilitaMese $mesi
     */
    public function removeMesi(\AppBundle\Entity\DisponibilitaMese $mesi)
    {
        $this->mesi->removeElement($mesi);
    }

    /**
     * Get mesi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMesi()
    {
        return $this->mesi;
    }
}
