<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMtlActividad
 *
 * @ORM\Table(name="enf_mtl_actividad", indexes={@ORM\Index(name="IDX_5185AF503FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_5185AF50701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_5185AF503A5C634D", columns={"id_subactividad"}), @ORM\Index(name="IDX_5185AF505C03EB6E", columns={"id_ctl_actividad"})})
 * @ORM\Entity
 */
class EnfMtlActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mtl_actividad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_act", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_act", type="date", nullable=true)
     */
    private $fechaIngresoAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_act", type="date", nullable=true)
     */
    private $fechaModificacionAct;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_act_enf", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidadActEnf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo_act_enf", type="time", nullable=true)
     */
    private $tiempoActEnf;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mtl_act", type="boolean", nullable=true)
     */
    private $estadoMtlAct;

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
     * @var \EnfCtlSubactividad
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlSubactividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subactividad", referencedColumnName="id")
     * })
     */
    private $idSubactividad;

    /**
     * @var \EnfCtlActividad
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlActividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ctl_actividad", referencedColumnName="id")
     * })
     */
    private $idCtlActividad;



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
     * Set usuarioIngresoAct
     *
     * @param string $usuarioIngresoAct
     * @return EnfMtlActividad
     */
    public function setUsuarioIngresoAct($usuarioIngresoAct)
    {
        $this->usuarioIngresoAct = $usuarioIngresoAct;

        return $this;
    }

    /**
     * Get usuarioIngresoAct
     *
     * @return string 
     */
    public function getUsuarioIngresoAct()
    {
        return $this->usuarioIngresoAct;
    }

    /**
     * Set fechaIngresoAct
     *
     * @param \DateTime $fechaIngresoAct
     * @return EnfMtlActividad
     */
    public function setFechaIngresoAct($fechaIngresoAct)
    {
        $this->fechaIngresoAct = $fechaIngresoAct;

        return $this;
    }

    /**
     * Get fechaIngresoAct
     *
     * @return \DateTime 
     */
    public function getFechaIngresoAct()
    {
        return $this->fechaIngresoAct;
    }

    /**
     * Set fechaModificacionAct
     *
     * @param \DateTime $fechaModificacionAct
     * @return EnfMtlActividad
     */
    public function setFechaModificacionAct($fechaModificacionAct)
    {
        $this->fechaModificacionAct = $fechaModificacionAct;

        return $this;
    }

    /**
     * Get fechaModificacionAct
     *
     * @return \DateTime 
     */
    public function getFechaModificacionAct()
    {
        return $this->fechaModificacionAct;
    }

    /**
     * Set cantidadActEnf
     *
     * @param string $cantidadActEnf
     * @return EnfMtlActividad
     */
    public function setCantidadActEnf($cantidadActEnf)
    {
        $this->cantidadActEnf = $cantidadActEnf;

        return $this;
    }

    /**
     * Get cantidadActEnf
     *
     * @return string 
     */
    public function getCantidadActEnf()
    {
        return $this->cantidadActEnf;
    }

    /**
     * Set tiempoActEnf
     *
     * @param \DateTime $tiempoActEnf
     * @return EnfMtlActividad
     */
    public function setTiempoActEnf($tiempoActEnf)
    {
        $this->tiempoActEnf = $tiempoActEnf;

        return $this;
    }

    /**
     * Get tiempoActEnf
     *
     * @return \DateTime 
     */
    public function getTiempoActEnf()
    {
        return $this->tiempoActEnf;
    }

    /**
     * Set estadoMtlAct
     *
     * @param boolean $estadoMtlAct
     * @return EnfMtlActividad
     */
    public function setEstadoMtlAct($estadoMtlAct)
    {
        $this->estadoMtlAct = $estadoMtlAct;

        return $this;
    }

    /**
     * Get estadoMtlAct
     *
     * @return boolean 
     */
    public function getEstadoMtlAct()
    {
        return $this->estadoMtlAct;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfMtlActividad
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
     * @return EnfMtlActividad
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

    /**
     * Set idSubactividad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlSubactividad $idSubactividad
     * @return EnfMtlActividad
     */
    public function setIdSubactividad(\Minsal\SipernesBundle\Entity\EnfCtlSubactividad $idSubactividad = null)
    {
        $this->idSubactividad = $idSubactividad;

        return $this;
    }

    /**
     * Get idSubactividad
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlSubactividad 
     */
    public function getIdSubactividad()
    {
        return $this->idSubactividad;
    }

    /**
     * Set idCtlActividad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlActividad $idCtlActividad
     * @return EnfMtlActividad
     */
    public function setIdCtlActividad(\Minsal\SipernesBundle\Entity\EnfCtlActividad $idCtlActividad = null)
    {
        $this->idCtlActividad = $idCtlActividad;

        return $this;
    }

    /**
     * Get idCtlActividad
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlActividad 
     */
    public function getIdCtlActividad()
    {
        return $this->idCtlActividad;
    }
}
