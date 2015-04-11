<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Somministratore
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Somministratore
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
     * @ORM\Column(name="nominativo", type="string", length=64)
     */
    private $nominativo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=64, nullable=true)
     */
    private $telefono;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=64, nullable=true)
     */
    private $email;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="EnteSomministratore", inversedBy="somministratore")
     * @ORM\JoinColumn(name="ente", referencedColumnName="id")
     */
    private $ente;
    

    /**
     * @ORM\OneToMany(targetEntity="Azienda", mappedBy="somministratore" ,cascade={"persist"})
     */
    protected $azienda;
    
    public function __construct()
    {
        $this->azienda = new ArrayCollection();
    }
    
    public function __toString() 
    {
        return $this->nominativo;
        
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
     * Set nominativo
     *
     * @param string $nominativo
     * @return Somministratore
     */
    public function setNominativo($nominativo)
    {
        $this->nominativo = $nominativo;

        return $this;
    }

    /**
     * Get nominativo
     *
     * @return string 
     */
    public function getNominativo()
    {
        return $this->nominativo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Somministratore
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Somministratore
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ente
     *
     * @param \AppBundle\Entity\EnteSomministratore $ente
     * @return Somministratore
     */
    public function setEnte(\AppBundle\Entity\EnteSomministratore $ente = null)
    {
        $this->ente = $ente;

        return $this;
    }

    /**
     * Get ente
     *
     * @return \AppBundle\Entity\EnteSomministratore 
     */
    public function getEnte()
    {
        return $this->ente;
    }

 

    /**
     * Add azienda
     *
     * @param \AppBundle\Entity\Azienda $azienda
     * @return Somministratore
     */
    public function addAzienda(\AppBundle\Entity\Azienda $azienda)
    {
        $this->azienda[] = $azienda;

        return $this;
    }

    /**
     * Remove azienda
     *
     * @param \AppBundle\Entity\Azienda $azienda
     */
    public function removeAzienda(\AppBundle\Entity\Azienda $azienda)
    {
        $this->azienda->removeElement($azienda);
    }

    /**
     * Get azienda
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAzienda()
    {
        return $this->azienda;
    }
}
