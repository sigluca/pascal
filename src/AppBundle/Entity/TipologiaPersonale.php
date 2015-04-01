<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipologiaPersonale
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipologiaPersonale
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
     * @ORM\OneToMany(targetEntity="Personale", mappedBy="tipologia")
     */
    protected $personale;
    
    public function __construct()
    {
        $this->personale = new ArrayCollection();
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
     * @return TipologiaPersonale
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
     * Add personale
     *
     * @param \AppBundle\Entity\Personale $personale
     * @return TipologiaPersonale
     */
    public function addPersonale(\AppBundle\Entity\Personale $personale)
    {
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
}
