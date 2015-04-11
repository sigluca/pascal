<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoConoscenza
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TipoConoscenza
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
     * @ORM\OneToMany(targetEntity="Conoscenza", mappedBy="tipo")
     */
    protected $conoscenza;
    
    public function __construct()
    {
        $this->conoscenza = new ArrayCollection();
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
     * @return TipoConoscenza
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
     * Add conoscenza
     *
     * @param \AppBundle\Entity\Conoscenza $conoscenza
     * @return TipoConoscenza
     */
    public function addConoscenza(\AppBundle\Entity\Conoscenza $conoscenza)
    {
        $this->conoscenza[] = $conoscenza;

        return $this;
    }

    /**
     * Remove conoscenza
     *
     * @param \AppBundle\Entity\Conoscenza $conoscenza
     */
    public function removeConoscenza(\AppBundle\Entity\Conoscenza $conoscenza)
    {
        $this->conoscenza->removeElement($conoscenza);
    }

    /**
     * Get conoscenza
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConoscenza()
    {
        return $this->conoscenza;
    }
}
