<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DisponibilitaAree
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DisponibilitaAree
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
     * @ORM\Column(name="altro", type="string", length=64)
     */
    private $altro;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer")
     */
    private $area;

    /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="disponibilitaAree")
     * @ORM\JoinColumn(name="azienda", referencedColumnName="id")
     */
    private $azienda;


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
     * Set altro
     *
     * @param string $altro
     * @return DisponibilitaAree
     */
    public function setAltro($altro)
    {
        $this->altro = $altro;

        return $this;
    }

    /**
     * Get altro
     *
     * @return string 
     */
    public function getAltro()
    {
        return $this->altro;
    }

    /**
     * Set area
     *
     * @param integer $area
     * @return DisponibilitaAree
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set azienda
     *
     * @param integer $azienda
     * @return DisponibilitaAree
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
}
