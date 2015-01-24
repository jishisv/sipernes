<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMtlCapacitacion
 *
 * @ORM\Table(name="enf_mtl_capacitacion", indexes={@ORM\Index(name="IDX_84E7CBB3F19F7BFD", columns={"id_financiamiento"}), @ORM\Index(name="IDX_84E7CBB33FE83A49", columns={"id_emp_corr"})})
 * @ORM\Entity
 */
class EnfMtlCapacitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mtl_capacitacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_cap", type="date", nullable=true)
     */
    private $fechaIngresoCap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_capacitacion", type="date", nullable=true)
     */
    private $fechaCapacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tema_capacitacion", type="string", length=100, nullable=true)
     */
    private $temaCapacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="asistencia_capacitacion", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $asistenciaCapacitacion;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_financiamiento_cap", type="float", precision=10, scale=0, nullable=true)
     */
    private $montoFinanciamientoCap;

    /**
     * @var string
     *
     * @ORM\Column(name="horas_duracion_cap", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $horasDuracionCap;

    /**
     * @var string
     *
     * @ORM\Column(name="establecimiento_cap", type="string", length=200, nullable=true)
     */
    private $establecimientoCap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_capacitacion", type="boolean", nullable=true)
     */
    private $estadoCapacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_capacitacion", type="string", length=200, nullable=true)
     */
    private $usuarioCapacitacion;

    /**
     * @var \EnfCtlFinanciamiento
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlFinanciamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financiamiento", referencedColumnName="id")
     * })
     */
    private $idFinanciamiento;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaIngresoCap
     *
     * @param \DateTime $fechaIngresoCap
     * @return EnfMtlCapacitacion
     */
    public function setFechaIngresoCap($fechaIngresoCap)
    {
        $this->fechaIngresoCap = $fechaIngresoCap;

        return $this;
    }

    /**
     * Get fechaIngresoCap
     *
     * @return \DateTime 
     */
    public function getFechaIngresoCap()
    {
        return $this->fechaIngresoCap;
    }

    /**
     * Set fechaCapacitacion
     *
     * @param \DateTime $fechaCapacitacion
     * @return EnfMtlCapacitacion
     */
    public function setFechaCapacitacion($fechaCapacitacion)
    {
        $this->fechaCapacitacion = $fechaCapacitacion;

        return $this;
    }

    /**
     * Get fechaCapacitacion
     *
     * @return \DateTime 
     */
    public function getFechaCapacitacion()
    {
        return $this->fechaCapacitacion;
    }

    /**
     * Set temaCapacitacion
     *
     * @param string $temaCapacitacion
     * @return EnfMtlCapacitacion
     */
    public function setTemaCapacitacion($temaCapacitacion)
    {
        $this->temaCapacitacion = $temaCapacitacion;

        return $this;
    }

    /**
     * Get temaCapacitacion
     *
     * @return string 
     */
    public function getTemaCapacitacion()
    {
        return $this->temaCapacitacion;
    }

    /**
     * Set asistenciaCapacitacion
     *
     * @param string $asistenciaCapacitacion
     * @return EnfMtlCapacitacion
     */
    public function setAsistenciaCapacitacion($asistenciaCapacitacion)
    {
        $this->asistenciaCapacitacion = $asistenciaCapacitacion;

        return $this;
    }

    /**
     * Get asistenciaCapacitacion
     *
     * @return string 
     */
    public function getAsistenciaCapacitacion()
    {
        return $this->asistenciaCapacitacion;
    }

    /**
     * Set montoFinanciamientoCap
     *
     * @param float $montoFinanciamientoCap
     * @return EnfMtlCapacitacion
     */
    public function setMontoFinanciamientoCap($montoFinanciamientoCap)
    {
        $this->montoFinanciamientoCap = $montoFinanciamientoCap;

        return $this;
    }

    /**
     * Get montoFinanciamientoCap
     *
     * @return float 
     */
    public function getMontoFinanciamientoCap()
    {
        return $this->montoFinanciamientoCap;
    }

    /**
     * Set horasDuracionCap
     *
     * @param string $horasDuracionCap
     * @return EnfMtlCapacitacion
     */
    public function setHorasDuracionCap($horasDuracionCap)
    {
        $this->horasDuracionCap = $horasDuracionCap;

        return $this;
    }

    /**
     * Get horasDuracionCap
     *
     * @return string 
     */
    public function getHorasDuracionCap()
    {
        return $this->horasDuracionCap;
    }

    /**
     * Set establecimientoCap
     *
     * @param string $establecimientoCap
     * @return EnfMtlCapacitacion
     */
    public function setEstablecimientoCap($establecimientoCap)
    {
        $this->establecimientoCap = $establecimientoCap;

        return $this;
    }

    /**
     * Get establecimientoCap
     *
     * @return string 
     */
    public function getEstablecimientoCap()
    {
        return $this->establecimientoCap;
    }

    /**
     * Set estadoCapacitacion
     *
     * @param boolean $estadoCapacitacion
     * @return EnfMtlCapacitacion
     */
    public function setEstadoCapacitacion($estadoCapacitacion)
    {
        $this->estadoCapacitacion = $estadoCapacitacion;

        return $this;
    }

    /**
     * Get estadoCapacitacion
     *
     * @return boolean 
     */
    public function getEstadoCapacitacion()
    {
        return $this->estadoCapacitacion;
    }

    /**
     * Set usuarioCapacitacion
     *
     * @param string $usuarioCapacitacion
     * @return EnfMtlCapacitacion
     */
    public function setUsuarioCapacitacion($usuarioCapacitacion)
    {
        $this->usuarioCapacitacion = $usuarioCapacitacion;

        return $this;
    }

    /**
     * Get usuarioCapacitacion
     *
     * @return string 
     */
    public function getUsuarioCapacitacion()
    {
        return $this->usuarioCapacitacion;
    }

    /**
     * Set idFinanciamiento
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlFinanciamiento $idFinanciamiento
     * @return EnfMtlCapacitacion
     */
    public function setIdFinanciamiento(\Minsal\SipernesBundle\Entity\EnfCtlFinanciamiento $idFinanciamiento = null)
    {
        $this->idFinanciamiento = $idFinanciamiento;

        return $this;
    }

    /**
     * Get idFinanciamiento
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlFinanciamiento 
     */
    public function getIdFinanciamiento()
    {
        return $this->idFinanciamiento;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfMtlCapacitacion
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
}
