<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personale
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Personale
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
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=32)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="funzione", type="string", length=32)
     */
    private $funzione;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=32)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=TRUE)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="svoltocorso", type="boolean")
     */
    private $svoltocorso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilecorso", type="boolean")
     */
    private $disponibilecorso;

    /**
     * @ORM\ManyToOne(targetEntity="TipologiaPersonale", inversedBy="personale")
     * @ORM\JoinColumn(name="tipologia", referencedColumnName="id")
     */
      private $tipologia;

     /**
     * @ORM\ManyToOne(targetEntity="Azienda", inversedBy="personale")
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
     * Set nome
     *
     * @param string $nome
     * @return Personale
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
     * Set cognome
     *
     * @param string $cognome
     * @return Personale
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set funzione
     *
     * @param string $funzione
     * @return Personale
     */
    public function setFunzione($funzione)
    {
        $this->funzione = $funzione;

        return $this;
    }

    /**
     * Get funzione
     *
     * @return string 
     */
    public function getFunzione()
    {
        return $this->funzione;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Personale
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
     * Set fax
     *
     * @param string $fax
     * @return Personale
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personale
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
     * Set svoltocorso
     *
     * @param boolean $svoltocorso
     * @return Personale
     */
    public function setSvoltocorso($svoltocorso)
    {
        $this->svoltocorso = $svoltocorso;

        return $this;
    }

    /**
     * Get svoltocorso
     *
     * @return boolean 
     */
    public function getSvoltocorso()
    {
        return $this->svoltocorso;
    }

    /**
     * Set disponibilecorso
     *
     * @param boolean $disponibilecorso
     * @return Personale
     */
    public function setDisponibilecorso($disponibilecorso)
    {
        $this->disponibilecorso = $disponibilecorso;

        return $this;
    }

    /**
     * Get disponibilecorso
     *
     * @return boolean 
     */
    public function getDisponibilecorso()
    {
        return $this->disponibilecorso;
    }

    /**
     * Set tipologia
     *
     * @param integer $tipologia
     * @return Personale
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;

        return $this;
    }

    /**
     * Get tipologia
     *
     * @return integer 
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }

    /**
     * Set azienda
     *
     * @param integer $azienda
     * @return Personale
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
