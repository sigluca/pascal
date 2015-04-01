<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Risposta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Risposta
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
     * @ORM\Column(name="tiporisposta", type="integer")
     */
    private $tiporisposta;

    /**
     * @ORM\ManyToOne(targetEntity="Domanda", inversedBy="risposte")
     * @ORM\JoinColumn(name="domanda", referencedColumnName="id")
     */
    private $domanda;

    
    /**
     * @ORM\OneToMany(targetEntity="RispostaData", mappedBy="risposta")
     */
    protected $risposteDate;
    
    public function __construct()
    {
        $this->risposteDate = new ArrayCollection();                
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
     * @return Risposta
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
     * Set tiporisposta
     *
     * @param integer $tiporisposta
     * @return Risposta
     */
    public function setTiporisposta($tiporisposta)
    {
        $this->tiporisposta = $tiporisposta;

        return $this;
    }

    /**
     * Get tiporisposta
     *
     * @return integer 
     */
    public function getTiporisposta()
    {
        return $this->tiporisposta;
    }

    /**
     * Set domanda
     *
     * @param integer $domanda
     * @return Risposta
     */
    public function setDomanda($domanda)
    {
        $this->domanda = $domanda;

        return $this;
    }

    /**
     * Get domanda
     *
     * @return integer 
     */
    public function getDomanda()
    {
        return $this->domanda;
    }

    /**
     * Add risposteDate
     *
     * @param \AppBundle\Entity\RispostaData $risposteDate
     * @return Risposta
     */
    public function addRisposteDate(\AppBundle\Entity\RispostaData $risposteDate)
    {
        $this->risposteDate[] = $risposteDate;

        return $this;
    }

    /**
     * Remove risposteDate
     *
     * @param \AppBundle\Entity\RispostaData $risposteDate
     */
    public function removeRisposteDate(\AppBundle\Entity\RispostaData $risposteDate)
    {
        $this->risposteDate->removeElement($risposteDate);
    }

    /**
     * Get risposteDate
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRisposteDate()
    {
        return $this->risposteDate;
    }
}
