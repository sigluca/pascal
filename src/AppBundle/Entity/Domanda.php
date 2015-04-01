<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domanda
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Domanda
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
     * @ORM\Column(name="testo", type="string", length=255)
     */
    private $testo;

    /**
     * @var integer
     *
     * @ORM\Column(name="posizione", type="integer")
     */
    private $posizione;

    
    /**
     * @ORM\OneToMany(targetEntity="Risposta", mappedBy="domanda")
     */
    protected $risposte;
    
    public function __construct()
    {
        $this->risposte = new ArrayCollection();                
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
     * Set testo
     *
     * @param string $testo
     * @return Domanda
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string 
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set posizione
     *
     * @param integer $posizione
     * @return Domanda
     */
    public function setPosizione($posizione)
    {
        $this->posizione = $posizione;

        return $this;
    }

    /**
     * Get posizione
     *
     * @return integer 
     */
    public function getPosizione()
    {
        return $this->posizione;
    }

    /**
     * Add risposte
     *
     * @param \AppBundle\Entity\Risposta $risposte
     * @return Domanda
     */
    public function addRisposte(\AppBundle\Entity\Risposta $risposte)
    {
        $this->risposte[] = $risposte;

        return $this;
    }

    /**
     * Remove risposte
     *
     * @param \AppBundle\Entity\Risposta $risposte
     */
    public function removeRisposte(\AppBundle\Entity\Risposta $risposte)
    {
        $this->risposte->removeElement($risposte);
    }

    /**
     * Get risposte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRisposte()
    {
        return $this->risposte;
    }
}
