<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfIndicacionMedica
 *
 * @ORM\Table(name="enf_indicacion_medica", indexes={@ORM\Index(name="IDX_F91941EA3FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_F91941EA701624C4", columns={"id_expediente"})})
 * @ORM\Entity
 */
class EnfIndicacionMedica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_indicacion_medica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamiento_ind", type="string", length=800, nullable=true)
     */
    private $tratamientoInd;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis_ind", type="string", length=10, nullable=true)
     */
    private $dosisInd;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacion_ind", type="string", length=200, nullable=true)
     */
    private $indicacionInd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_ind", type="boolean", nullable=true)
     */
    private $estadoInd;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ind", type="string", length=40, nullable=true)
     */
    private $usuarioInd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_ind", type="date", nullable=true)
     */
    private $fechaIngresoInd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_ind", type="date", nullable=true)
     */
    private $fechaModInd;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_ind", type="string", length=500, nullable=true)
     */
    private $observacionInd;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emp_corr", referencedColumnName="id")
     * })
     */
    private $idEmpCorr;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;



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
     * Set tratamientoInd
     *
     * @param string $tratamientoInd
     * @return EnfIndicacionMedica
     */
    public function setTratamientoInd($tratamientoInd)
    {
        $this->tratamientoInd = $tratamientoInd;

        return $this;
    }

    /**
     * Get tratamientoInd
     *
     * @return string 
     */
    public function getTratamientoInd()
    {
        return $this->tratamientoInd;
    }

    /**
     * Set dosisInd
     *
     * @param string $dosisInd
     * @return EnfIndicacionMedica
     */
    public function setDosisInd($dosisInd)
    {
        $this->dosisInd = $dosisInd;

        return $this;
    }

    /**
     * Get dosisInd
     *
     * @return string 
     */
    public function getDosisInd()
    {
        return $this->dosisInd;
    }

    /**
     * Set indicacionInd
     *
     * @param string $indicacionInd
     * @return EnfIndicacionMedica
     */
    public function setIndicacionInd($indicacionInd)
    {
        $this->indicacionInd = $indicacionInd;

        return $this;
    }

    /**
     * Get indicacionInd
     *
     * @return string 
     */
    public function getIndicacionInd()
    {
        return $this->indicacionInd;
    }

    /**
     * Set estadoInd
     *
     * @param boolean $estadoInd
     * @return EnfIndicacionMedica
     */
    public function setEstadoInd($estadoInd)
    {
        $this->estadoInd = $estadoInd;

        return $this;
    }

    /**
     * Get estadoInd
     *
     * @return boolean 
     */
    public function getEstadoInd()
    {
        return $this->estadoInd;
    }

    /**
     * Set usuarioInd
     *
     * @param string $usuarioInd
     * @return EnfIndicacionMedica
     */
    public function setUsuarioInd($usuarioInd)
    {
        $this->usuarioInd = $usuarioInd;

        return $this;
    }

    /**
     * Get usuarioInd
     *
     * @return string 
     */
    public function getUsuarioInd()
    {
        return $this->usuarioInd;
    }

    /**
     * Set fechaIngresoInd
     *
     * @param \DateTime $fechaIngresoInd
     * @return EnfIndicacionMedica
     */
    public function setFechaIngresoInd($fechaIngresoInd)
    {
        $this->fechaIngresoInd = $fechaIngresoInd;

        return $this;
    }

    /**
     * Get fechaIngresoInd
     *
     * @return \DateTime 
     */
    public function getFechaIngresoInd()
    {
        return $this->fechaIngresoInd;
    }

    /**
     * Set fechaModInd
     *
     * @param \DateTime $fechaModInd
     * @return EnfIndicacionMedica
     */
    public function setFechaModInd($fechaModInd)
    {
        $this->fechaModInd = $fechaModInd;

        return $this;
    }

    /**
     * Get fechaModInd
     *
     * @return \DateTime 
     */
    public function getFechaModInd()
    {
        return $this->fechaModInd;
    }

    /**
     * Set observacionInd
     *
     * @param string $observacionInd
     * @return EnfIndicacionMedica
     */
    public function setObservacionInd($observacionInd)
    {
        $this->observacionInd = $observacionInd;

        return $this;
    }

    /**
     * Get observacionInd
     *
     * @return string 
     */
    public function getObservacionInd()
    {
        return $this->observacionInd;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfIndicacionMedica
     */
    public function setIdEmpCorr(\Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr = null)
    {
        $this->idEmpCorr = $idEmpCorr;

        return $this;
    }

    /**
     * Get idEmpCorr
     *
     * @return \Minsal\SipernesBundle\Entity\MntEmpleado 
     */
    public function getIdEmpCorr()
    {
        return $this->idEmpCorr;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\SipernesBundle\Entity\MntExpediente $idExpediente
     * @return EnfIndicacionMedica
     */
    public function setIdExpediente(\Minsal\SipernesBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\SipernesBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }
}
