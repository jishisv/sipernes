<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship65
 *
 * @ORM\Table(name="relationship_65", indexes={@ORM\Index(name="IDX_D0EF691FE3B0D62", columns={"id_pregunta"}), @ORM\Index(name="IDX_D0EF6918B1B653B", columns={"id_resultado"})})
 * @ORM\Entity
 */
class Relationship65
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relationship_65_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ShcpDocCtlPregunta
     *
     * @ORM\ManyToOne(targetEntity="ShcpDocCtlPregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pregunta", referencedColumnName="id")
     * })
     */
    private $idPregunta;

    /**
     * @var \ShcpDocResultado
     *
     * @ORM\ManyToOne(targetEntity="ShcpDocResultado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resultado", referencedColumnName="id")
     * })
     */
    private $idResultado;



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
     * Set idPregunta
     *
     * @param \Minsal\shcpBundle\Entity\ShcpDocCtlPregunta $idPregunta
     * @return Relationship65
     */
    public function setIdPregunta(\Minsal\shcpBundle\Entity\ShcpDocCtlPregunta $idPregunta = null)
    {
        $this->idPregunta = $idPregunta;

        return $this;
    }

    /**
     * Get idPregunta
     *
     * @return \Minsal\shcpBundle\Entity\ShcpDocCtlPregunta 
     */
    public function getIdPregunta()
    {
        return $this->idPregunta;
    }

    /**
     * Set idResultado
     *
     * @param \Minsal\shcpBundle\Entity\ShcpDocResultado $idResultado
     * @return Relationship65
     */
    public function setIdResultado(\Minsal\shcpBundle\Entity\ShcpDocResultado $idResultado = null)
    {
        $this->idResultado = $idResultado;

        return $this;
    }

    /**
     * Get idResultado
     *
     * @return \Minsal\shcpBundle\Entity\ShcpDocResultado 
     */
    public function getIdResultado()
    {
        return $this->idResultado;
    }
}
