<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DisponibilitaArea
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DisponibilitaArea
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
     * @ORM\Column(name="note", type="string", length=64, nullable=true)
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="AreaProfessionale", inversedBy="disponibilitaarea")
     * @ORM\JoinColumn(name="area", referencedColumnName="id")
     */
    private $area;

    /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="disponibilitaarea", cascade={"persist"})
     * @ORM\JoinColumn(name="azienda", referencedColumnName="id", nullable=true )
     */
    private $azienda;


    public function __toString() 
    {
        return $this->area->getDescrizione();
        
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
     * Set note
     *
     * @param string $note
     * @return DisponibilitaArea
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set area
     *
     * @param \AppBundle\Entity\AreaProfessionale $area
     * @return DisponibilitaArea
     */
    public function setArea(\AppBundle\Entity\AreaProfessionale $area = null)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return \AppBundle\Entity\AreaProfessionale 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set azienda
     *
     * @param \AppBundle\Entity\Azienda $azienda
     * @return DisponibilitaArea
     */
    public function setAzienda(\AppBundle\Entity\Azienda $azienda = null)
    {
        $this->azienda = $azienda;

        return $this;
    }

    /**
     * Get azienda
     *
     * @return \AppBundle\Entity\Azienda 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }
}
