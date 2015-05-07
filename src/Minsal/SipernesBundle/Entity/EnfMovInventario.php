<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMovInventario
 *
 * @ORM\Table(name="enf_mov_inventario", indexes={@ORM\Index(name="IDX_5D2CD1C2CF93CE22", columns={"id_inventario"}), @ORM\Index(name="IDX_5D2CD1C2DC13B9AD", columns={"id_dosis_esq"}), @ORM\Index(name="IDX_5D2CD1C23FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_5D2CD1C212C18F55", columns={"id_tipo_inventario"})})
 * @ORM\Entity
 */
class EnfMovInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mov_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_mov", type="string", length=40, nullable=true)
     */
    private $usuarioMov;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_mov", type="date", nullable=true)
     */
    private $fechaIngresoMov;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_mov", type="date", nullable=true)
     */
    private $fechaModificacionMov;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_mov", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidadMov;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mov", type="boolean", nullable=true)
     */
    private $estadoMov;

    /**
     * @var string
     *
     * @ORM\Column(name="empleado_envio", type="string", length=200, nullable=true)
     */
    private $empleadoEnvio;

    /**
     * @var string
     *
     * @ORM\Column(name="empleado_recivio", type="string", length=200, nullable=true)
     */
    private $empleadoRecivio;

    /**
     * @var \EnfInventario
     *
     * @ORM\ManyToOne(targetEntity="EnfInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id")
     * })
     */
    private $idInventario;

    /**
     * @var \EnfDosisEsquemaVac
     *
     * @ORM\ManyToOne(targetEntity="EnfDosisEsquemaVac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dosis_esq", referencedColumnName="id")
     * })
     */
    private $idDosisEsq;

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
     * @var \EnfCtlMovInventario
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlMovInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_inventario", referencedColumnName="id")
     * })
     */
    private $idTipoInventario;



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
     * Set usuarioMov
     *
     * @param string $usuarioMov
     * @return EnfMovInventario
     */
    public function setUsuarioMov($usuarioMov)
    {
        $this->usuarioMov = $usuarioMov;

        return $this;
    }

    /**
     * Get usuarioMov
     *
     * @return string 
     */
    public function getUsuarioMov()
    {
        return $this->usuarioMov;
    }

    /**
     * Set fechaIngresoMov
     *
     * @param \DateTime $fechaIngresoMov
     * @return EnfMovInventario
     */
    public function setFechaIngresoMov($fechaIngresoMov)
    {
        $this->fechaIngresoMov = $fechaIngresoMov;

        return $this;
    }

    /**
     * Get fechaIngresoMov
     *
     * @return \DateTime 
     */
    public function getFechaIngresoMov()
    {
        return $this->fechaIngresoMov;
    }

    /**
     * Set fechaModificacionMov
     *
     * @param \DateTime $fechaModificacionMov
     * @return EnfMovInventario
     */
    public function setFechaModificacionMov($fechaModificacionMov)
    {
        $this->fechaModificacionMov = $fechaModificacionMov;

        return $this;
    }

    /**
     * Get fechaModificacionMov
     *
     * @return \DateTime 
     */
    public function getFechaModificacionMov()
    {
        return $this->fechaModificacionMov;
    }

    /**
     * Set cantidadMov
     *
     * @param string $cantidadMov
     * @return EnfMovInventario
     */
    public function setCantidadMov($cantidadMov)
    {
        $this->cantidadMov = $cantidadMov;

        return $this;
    }

    /**
     * Get cantidadMov
     *
     * @return string 
     */
    public function getCantidadMov()
    {
        return $this->cantidadMov;
    }

    /**
     * Set estadoMov
     *
     * @param boolean $estadoMov
     * @return EnfMovInventario
     */
    public function setEstadoMov($estadoMov)
    {
        $this->estadoMov = $estadoMov;

        return $this;
    }

    /**
     * Get estadoMov
     *
     * @return boolean 
     */
    public function getEstadoMov()
    {
        return $this->estadoMov;
    }

    /**
     * Set empleadoEnvio
     *
     * @param string $empleadoEnvio
     * @return EnfMovInventario
     */
    public function setEmpleadoEnvio($empleadoEnvio)
    {
        $this->empleadoEnvio = $empleadoEnvio;

        return $this;
    }

    /**
     * Get empleadoEnvio
     *
     * @return string 
     */
    public function getEmpleadoEnvio()
    {
        return $this->empleadoEnvio;
    }

    /**
     * Set empleadoRecivio
     *
     * @param string $empleadoRecivio
     * @return EnfMovInventario
     */
    public function setEmpleadoRecivio($empleadoRecivio)
    {
        $this->empleadoRecivio = $empleadoRecivio;

        return $this;
    }

    /**
     * Get empleadoRecivio
     *
     * @return string 
     */
    public function getEmpleadoRecivio()
    {
        return $this->empleadoRecivio;
    }

    /**
     * Set idInventario
     *
     * @param \Minsal\SipernesBundle\Entity\EnfInventario $idInventario
     * @return EnfMovInventario
     */
    public function setIdInventario(\Minsal\SipernesBundle\Entity\EnfInventario $idInventario = null)
    {
        $this->idInventario = $idInventario;

        return $this;
    }

    /**
     * Get idInventario
     *
     * @return \Minsal\SipernesBundle\Entity\EnfInventario 
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }

    /**
     * Set idDosisEsq
     *
     * @param \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq
     * @return EnfMovInventario
     */
    public function setIdDosisEsq(\Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq = null)
    {
        $this->idDosisEsq = $idDosisEsq;

        return $this;
    }

    /**
     * Get idDosisEsq
     *
     * @return \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac 
     */
    public function getIdDosisEsq()
    {
        return $this->idDosisEsq;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfMovInventario
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
     * Set idTipoInventario
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlMovInventario $idTipoInventario
     * @return EnfMovInventario
     */
    public function setIdTipoInventario(\Minsal\SipernesBundle\Entity\EnfCtlMovInventario $idTipoInventario = null)
    {
        $this->idTipoInventario = $idTipoInventario;

        return $this;
    }

    /**
     * Get idTipoInventario
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlMovInventario 
     */
    public function getIdTipoInventario()
    {
        return $this->idTipoInventario;
    }
    
    
}
