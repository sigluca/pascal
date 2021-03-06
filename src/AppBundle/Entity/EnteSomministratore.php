<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EnteSomministratore
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EnteSomministratore
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
     * @ORM\Column(name="nome", type="string", length=64)
     */
    private $nome;
    
    /**
     * @var string
     *
     * @ORM\Column(name="indirizzo", type="string", length=64, nullable=true)
     */
    private $indirizzo;    
    
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
     * @ORM\ManyToOne(targetEntity="TipoEnte", inversedBy="entesomministratore")
     * @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     */
    private $tipo;
    

    /**
     * @ORM\OneToMany(targetEntity="Somministratore", mappedBy="ente")
     */
    protected $somministratore;
    
    public function __construct()
    {
        $this->somministratore = new ArrayCollection();
    }
    
    public function __toString() 
    {
        return $this->tipo." - ".$this->nome;
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
     * @return EnteSomministratore
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
     * Set tipo
     *
     * @param \AppBundle\Entity\TipoEnte $tipo
     * @return EnteSomministratore
     */
    public function setTipo(\AppBundle\Entity\TipoEnte $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\TipoEnte 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Add somministratore
     *
     * @param \AppBundle\Entity\Somministratore $somministratore
     * @return EnteSomministratore
     */
    public function addSomministratore(\AppBundle\Entity\Somministratore $somministratore)
    {
        $this->somministratore[] = $somministratore;

        return $this;
    }

    /**
     * Remove somministratore
     *
     * @param \AppBundle\Entity\Somministratore $somministratore
     */
    public function removeSomministratore(\AppBundle\Entity\Somministratore $somministratore)
    {
        $this->somministratore->removeElement($somministratore);
    }

    /**
     * Get somministratore
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSomministratore()
    {
        return $this->somministratore;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     * @return EnteSomministratore
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;

        return $this;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return EnteSomministratore
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
     * @return EnteSomministratore
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
}
