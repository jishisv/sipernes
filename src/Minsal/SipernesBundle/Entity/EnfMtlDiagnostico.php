<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMtlDiagnostico
 *
 * @ORM\Table(name="enf_mtl_diagnostico", indexes={@ORM\Index(name="IDX_84C983A53FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_84C983A5EABDC941", columns={"id_ctl_diag"}), @ORM\Index(name="IDX_84C983A5701624C4", columns={"id_expediente"})})
 * @ORM\Entity
 */
class EnfMtlDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mtl_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion1", type="string", length=500, nullable=true)
     */
    private $observacion1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_diag", type="date", nullable=true)
     */
    private $fechaIngresoDiag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_diag", type="date", nullable=true)
     */
    private $fechaModificacionDiag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mtl_diag", type="boolean", nullable=true)
     */
    private $estadoMtlDiag;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_diag", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoDiag;

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
     * @var \EnfCtlDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ctl_diag", referencedColumnName="id")
     * })
     */
    private $idCtlDiag;

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
     * Set observacion1
     *
     * @param string $observacion1
     * @return EnfMtlDiagnostico
     */
    public function setObservacion1($observacion1)
    {
        $this->observacion1 = $observacion1;

        return $this;
    }

    /**
     * Get observacion1
     *
     * @return string 
     */
    public function getObservacion1()
    {
        return $this->observacion1;
    }

    /**
     * Set fechaIngresoDiag
     *
     * @param \DateTime $fechaIngresoDiag
     * @return EnfMtlDiagnostico
     */
    public function setFechaIngresoDiag($fechaIngresoDiag)
    {
        $this->fechaIngresoDiag = $fechaIngresoDiag;

        return $this;
    }

    /**
     * Get fechaIngresoDiag
     *
     * @return \DateTime 
     */
    public function getFechaIngresoDiag()
    {
        return $this->fechaIngresoDiag;
    }

    /**
     * Set fechaModificacionDiag
     *
     * @param \DateTime $fechaModificacionDiag
     * @return EnfMtlDiagnostico
     */
    public function setFechaModificacionDiag($fechaModificacionDiag)
    {
        $this->fechaModificacionDiag = $fechaModificacionDiag;

        return $this;
    }

    /**
     * Get fechaModificacionDiag
     *
     * @return \DateTime 
     */
    public function getFechaModificacionDiag()
    {
        return $this->fechaModificacionDiag;
    }

    /**
     * Set estadoMtlDiag
     *
     * @param boolean $estadoMtlDiag
     * @return EnfMtlDiagnostico
     */
    public function setEstadoMtlDiag($estadoMtlDiag)
    {
        $this->estadoMtlDiag = $estadoMtlDiag;

        return $this;
    }

    /**
     * Get estadoMtlDiag
     *
     * @return boolean 
     */
    public function getEstadoMtlDiag()
    {
        return $this->estadoMtlDiag;
    }

    /**
     * Set usuarioIngresoDiag
     *
     * @param string $usuarioIngresoDiag
     * @return EnfMtlDiagnostico
     */
    public function setUsuarioIngresoDiag($usuarioIngresoDiag)
    {
        $this->usuarioIngresoDiag = $usuarioIngresoDiag;

        return $this;
    }

    /**
     * Get usuarioIngresoDiag
     *
     * @return string 
     */
    public function getUsuarioIngresoDiag()
    {
        return $this->usuarioIngresoDiag;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfMtlDiagnostico
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
     * Set idCtlDiag
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlDiagnostico $idCtlDiag
     * @return EnfMtlDiagnostico
     */
    public function setIdCtlDiag(\Minsal\SipernesBundle\Entity\EnfCtlDiagnostico $idCtlDiag = null)
    {
        $this->idCtlDiag = $idCtlDiag;

        return $this;
    }

    /**
     * Get idCtlDiag
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlDiagnostico 
     */
    public function getIdCtlDiag()
    {
        return $this->idCtlDiag;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\SipernesBundle\Entity\MntExpediente $idExpediente
     * @return EnfMtlDiagnostico
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
