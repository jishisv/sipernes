<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecIncapacidadmedica
 *
 * @ORM\Table(name="sec_incapacidadmedica", indexes={@ORM\Index(name="IDX_18BCE6E343F314A6", columns={"idnumeroexp"}), @ORM\Index(name="IDX_18BCE6E3A92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecIncapacidadmedica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="incapacidadmedica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_incapacidadmedica_incapacidadmedica_seq", allocationSize=1, initialValue=1)
     */
    private $incapacidadmedica;

    /**
     * @var string
     *
     * @ORM\Column(name="motivoincapacidad", type="string", length=500, nullable=true)
     */
    private $motivoincapacidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicioincapacidad", type="date", nullable=true)
     */
    private $fechainicioincapacidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaemision", type="date", nullable=true)
     */
    private $fechaemision;

    /**
     * @var string
     *
     * @ORM\Column(name="remitente", type="string", length=500, nullable=true)
     */
    private $remitente;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idnumeroexp", referencedColumnName="numero")
     * })
     */
    private $idnumeroexp;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhistorialclinico", referencedColumnName="id")
     * })
     */
    private $idhistorialclinico;



    /**
     * Get incapacidadmedica
     *
     * @return integer 
     */
    public function getIncapacidadmedica()
    {
        return $this->incapacidadmedica;
    }

    /**
     * Set motivoincapacidad
     *
     * @param string $motivoincapacidad
     * @return SecIncapacidadmedica
     */
    public function setMotivoincapacidad($motivoincapacidad)
    {
        $this->motivoincapacidad = $motivoincapacidad;

        return $this;
    }

    /**
     * Get motivoincapacidad
     *
     * @return string 
     */
    public function getMotivoincapacidad()
    {
        return $this->motivoincapacidad;
    }

    /**
     * Set fechainicioincapacidad
     *
     * @param \DateTime $fechainicioincapacidad
     * @return SecIncapacidadmedica
     */
    public function setFechainicioincapacidad($fechainicioincapacidad)
    {
        $this->fechainicioincapacidad = $fechainicioincapacidad;

        return $this;
    }

    /**
     * Get fechainicioincapacidad
     *
     * @return \DateTime 
     */
    public function getFechainicioincapacidad()
    {
        return $this->fechainicioincapacidad;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     * @return SecIncapacidadmedica
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime 
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set remitente
     *
     * @param string $remitente
     * @return SecIncapacidadmedica
     */
    public function setRemitente($remitente)
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * Get remitente
     *
     * @return string 
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * Set idnumeroexp
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idnumeroexp
     * @return SecIncapacidadmedica
     */
    public function setIdnumeroexp(\Minsal\shcpBundle\Entity\MntExpediente $idnumeroexp = null)
    {
        $this->idnumeroexp = $idnumeroexp;

        return $this;
    }

    /**
     * Get idnumeroexp
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdnumeroexp()
    {
        return $this->idnumeroexp;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecIncapacidadmedica
     */
    public function setIdhistorialclinico(\Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico = null)
    {
        $this->idhistorialclinico = $idhistorialclinico;

        return $this;
    }

    /**
     * Get idhistorialclinico
     *
     * @return \Minsal\shcpBundle\Entity\SecHistorialClinico 
     */
    public function getIdhistorialclinico()
    {
        return $this->idhistorialclinico;
    }
}
