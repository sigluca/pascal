<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Conoscenza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Conoscenza
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
     * @ORM\Column(name="descrizione", type="string", length=64)
     */
    private $descrizione;

    /**
     * @ORM\ManyToOne(targetEntity="TipoConoscenza", inversedBy="conoscenza")
     * @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     */
    private $tipo;
    
    
    
    private $labelcomposta;


    /**
     * @ORM\OneToMany(targetEntity="RichiestaConoscenza", mappedBy="conoscenza")
     */
    protected $richiestaconoscenza;
    
    public function __construct()
    {
        $this->richiestaconoscenza = new ArrayCollection();
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
     * @return Conoscenza
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
     * Set tipo
     *
     * @param \AppBundle\Entity\TipoConoscenza $tipo
     * @return Conoscenza
     */
    public function setTipo(\AppBundle\Entity\TipoConoscenza $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\TipoConoscenza 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add richiestaconoscenza
     *
     * @param \AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza
     * @return Conoscenza
     */
    public function addRichiestaconoscenza(\AppBundle\Entity\RichiestaConoscenza $richiestaconoscenza)
    {
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
     * Get richiestaconoscenza
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRichiestaconoscenza()
    {
        return $this->richiestaconoscenza;
    }
    

    // Per mostrare anche il tipo di conoscenza nei testi delle ComboBox degli admin
    public function getLabelcomposta() 
    {
         return $this->tipo." - ".$this->descrizione;    
    }
}
