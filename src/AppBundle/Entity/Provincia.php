<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provincia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Provincia
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
     * @ORM\Column(name="nome", type="string", length=32, nullable=false)
     */
    private $nome;

    /**
     * @ORM\OneToMany(targetEntity="Comune", mappedBy="provincia")
     */
    protected $comuni;
    
    public function __construct()
    {
        $this->comuni = new ArrayCollection();
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
     * @return Provincia
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
     * Add comuni
     *
     * @param \AppBundle\Entity\Comune $comuni
     * @return Provincia
     */
    public function addComuni(\AppBundle\Entity\Comune $comuni)
    {
        $this->comuni[] = $comuni;

        return $this;
    }

    /**
     * Remove comuni
     *
     * @param \AppBundle\Entity\Comune $comuni
     */
    public function removeComuni(\AppBundle\Entity\Comune $comuni)
    {
        $this->comuni->removeElement($comuni);
    }

    /**
     * Get comuni
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComuni()
    {
        return $this->comuni;
    }
}
