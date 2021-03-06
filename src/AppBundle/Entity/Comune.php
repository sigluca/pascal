<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Comune
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comune
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
     * @ORM\Column(name="nome", type="string", length=32)
     */
    private $nome;

    /**
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="comuni")
     * @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     */
   private $provincia;


    /**
     * @ORM\OneToMany(targetEntity="Sede", mappedBy="comune")
     */
    protected $sedi;
    
    public function __construct()
    {
        $this->sedi = new ArrayCollection();
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
     * Set nome
     *
     * @param string $nome
     * @return Comune
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set provincia
     *
     * @param integer $provincia
     * @return Comune
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return integer 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Add sedi
     *
     * @param \AppBundle\Entity\Sede $sedi
     * @return Comune
     */
    public function addSedi(\AppBundle\Entity\Sede $sedi)
    {
        $this->sedi[] = $sedi;

        return $this;
    }

    /**
     * Remove sedi
     *
     * @param \AppBundle\Entity\Sede $sedi
     */
    public function removeSedi(\AppBundle\Entity\Sede $sedi)
    {
        $this->sedi->removeElement($sedi);
    }

    /**
     * Get sedi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSedi()
    {
        return $this->sedi;
    }
    
    public function __toString() 
    {
        return $this->nome;
    }
}
