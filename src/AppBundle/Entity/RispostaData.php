<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RispostaData
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RispostaData
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
     * @ORM\ManyToOne(targetEntity="Risposta", inversedBy="risposteDate")
     * @ORM\JoinColumn(name="risposta", referencedColumnName="id")
     */
   private $risposta;

    /**
     * @ORM\ManyToOne(targetEntity="Questionario", inversedBy="risposteDate")
     * @ORM\JoinColumn(name="questionario", referencedColumnName="id")
     */
    private $questionario;


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
     * @return RispostaData
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
     * Set risposta
     *
     * @param integer $risposta
     * @return RispostaData
     */
    public function setRisposta($risposta)
    {
        $this->risposta = $risposta;

        return $this;
    }

    /**
     * Get risposta
     *
     * @return integer 
     */
    public function getRisposta()
    {
        return $this->risposta;
    }

    /**
     * Set questionario
     *
     * @param integer $questionario
     * @return RispostaData
     */
    public function setQuestionario($questionario)
    {
        $this->questionario = $questionario;

        return $this;
    }

    /**
     * Get questionario
     *
     * @return integer 
     */
    public function getQuestionario()
    {
        return $this->questionario;
    }
}
