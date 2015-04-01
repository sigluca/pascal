<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DisponibilitaMese
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DisponibilitaMese
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
     * @var integer
     *
     * @ORM\Column(name="mese", type="integer")
     */
    private $mese;

    
    /**
     * @ORM\ManyToOne(targetEntity="DisponibilitaFigure", inversedBy="mesi")
     * @ORM\JoinColumn(name="disponibilita", referencedColumnName="id")
     */
    private $disponibilita;


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
     * Set mese
     *
     * @param integer $mese
     * @return DisponibilitaMese
     */
    public function setMese($mese)
    {
        $this->mese = $mese;

        return $this;
    }

    /**
     * Get mese
     *
     * @return integer 
     */
    public function getMese()
    {
        return $this->mese;
    }

    /**
     * Set disponibilita
     *
     * @param integer $disponibilita
     * @return DisponibilitaMese
     */
    public function setDisponibilita($disponibilita)
    {
        $this->disponibilita = $disponibilita;

        return $this;
    }

    /**
     * Get disponibilita
     *
     * @return integer 
     */
    public function getDisponibilita()
    {
        return $this->disponibilita;
    }
}
