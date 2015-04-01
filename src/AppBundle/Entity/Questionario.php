<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Questionario
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="questionari")
     * @ORM\JoinColumn(name="azienda", referencedColumnName="id")
     */
    private $azienda;

    /**
     * @ORM\OneToMany(targetEntity="RispostaData", mappedBy="questionario")
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
     * Set data
     *
     * @param \DateTime $data
     * @return Questionario
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set azienda
     *
     * @param integer $azienda
     * @return Questionario
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
     * Add risposteDate
     *
     * @param \AppBundle\Entity\RispostaData $risposteDate
     * @return Questionario
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
