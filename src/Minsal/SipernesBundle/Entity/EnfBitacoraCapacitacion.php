<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfBitacoraCapacitacion
 *
 * @ORM\Table(name="enf_bitacora_capacitacion", indexes={@ORM\Index(name="IDX_BDDC11ED79827853", columns={"id_capacitacion"})})
 * @ORM\Entity
 */
class EnfBitacoraCapacitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_bitacora_capacitacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_capacitacion_hist_cap", type="date", nullable=true)
     */
    private $fechaCapacitacionHistCap;

    /**
     * @var string
     *
     * @ORM\Column(name="tema_capacitacion_hist_cap", type="string", length=100, nullable=true)
     */
    private $temaCapacitacionHistCap;

    /**
     * @var string
     *
     * @ORM\Column(name="asistencia_his_cap", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $asistenciaHisCap;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_financiamiento_hist_cap", type="float", precision=10, scale=0, nullable=true)
     */
    private $montoFinanciamientoHistCap;

    /**
     * @var string
     *
     * @ORM\Column(name="horas_duracion_his_cap", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $horasDuracionHisCap;

    /**
     * @var string
     *
     * @ORM\Column(name="establecimiento_hist_cap", type="string", length=200, nullable=true)
     */
    private $establecimientoHistCap;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_his_cap", type="boolean", nullable=true)
     */
    private $estadoHisCap;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_hist_cap", type="string", length=200, nullable=true)
     */
    private $usuarioHistCap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_capa", type="datetime", nullable=true)
     */
    private $fechaIngresoHistCapa;

    /**
     * @var \EnfMtlCapacitacion
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlCapacitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_capacitacion", referencedColumnName="id")
     * })
     */
    private $idCapacitacion;



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
     * Set fechaCapacitacionHistCap
     *
     * @param \DateTime $fechaCapacitacionHistCap
     * @return EnfBitacoraCapacitacion
     */
    public function setFechaCapacitacionHistCap($fechaCapacitacionHistCap)
    {
        $this->fechaCapacitacionHistCap = $fechaCapacitacionHistCap;

        return $this;
    }

    /**
     * Get fechaCapacitacionHistCap
     *
     * @return \DateTime 
     */
    public function getFechaCapacitacionHistCap()
    {
        return $this->fechaCapacitacionHistCap;
    }

    /**
     * Set temaCapacitacionHistCap
     *
     * @param string $temaCapacitacionHistCap
     * @return EnfBitacoraCapacitacion
     */
    public function setTemaCapacitacionHistCap($temaCapacitacionHistCap)
    {
        $this->temaCapacitacionHistCap = $temaCapacitacionHistCap;

        return $this;
    }

    /**
     * Get temaCapacitacionHistCap
     *
     * @return string 
     */
    public function getTemaCapacitacionHistCap()
    {
        return $this->temaCapacitacionHistCap;
    }

    /**
     * Set asistenciaHisCap
     *
     * @param string $asistenciaHisCap
     * @return EnfBitacoraCapacitacion
     */
    public function setAsistenciaHisCap($asistenciaHisCap)
    {
        $this->asistenciaHisCap = $asistenciaHisCap;

        return $this;
    }

    /**
     * Get asistenciaHisCap
     *
     * @return string 
     */
    public function getAsistenciaHisCap()
    {
        return $this->asistenciaHisCap;
    }

    /**
     * Set montoFinanciamientoHistCap
     *
     * @param float $montoFinanciamientoHistCap
     * @return EnfBitacoraCapacitacion
     */
    public function setMontoFinanciamientoHistCap($montoFinanciamientoHistCap)
    {
        $this->montoFinanciamientoHistCap = $montoFinanciamientoHistCap;

        return $this;
    }

    /**
     * Get montoFinanciamientoHistCap
     *
     * @return float 
     */
    public function getMontoFinanciamientoHistCap()
    {
        return $this->montoFinanciamientoHistCap;
    }

    /**
     * Set horasDuracionHisCap
     *
     * @param string $horasDuracionHisCap
     * @return EnfBitacoraCapacitacion
     */
    public function setHorasDuracionHisCap($horasDuracionHisCap)
    {
        $this->horasDuracionHisCap = $horasDuracionHisCap;

        return $this;
    }

    /**
     * Get horasDuracionHisCap
     *
     * @return string 
     */
    public function getHorasDuracionHisCap()
    {
        return $this->horasDuracionHisCap;
    }

    /**
     * Set establecimientoHistCap
     *
     * @param string $establecimientoHistCap
     * @return EnfBitacoraCapacitacion
     */
    public function setEstablecimientoHistCap($establecimientoHistCap)
    {
        $this->establecimientoHistCap = $establecimientoHistCap;

        return $this;
    }

    /**
     * Get establecimientoHistCap
     *
     * @return string 
     */
    public function getEstablecimientoHistCap()
    {
        return $this->establecimientoHistCap;
    }

    /**
     * Set estadoHisCap
     *
     * @param boolean $estadoHisCap
     * @return EnfBitacoraCapacitacion
     */
    public function setEstadoHisCap($estadoHisCap)
    {
        $this->estadoHisCap = $estadoHisCap;

        return $this;
    }

    /**
     * Get estadoHisCap
     *
     * @return boolean 
     */
    public function getEstadoHisCap()
    {
        return $this->estadoHisCap;
    }

    /**
     * Set usuarioHistCap
     *
     * @param string $usuarioHistCap
     * @return EnfBitacoraCapacitacion
     */
    public function setUsuarioHistCap($usuarioHistCap)
    {
        $this->usuarioHistCap = $usuarioHistCap;

        return $this;
    }

    /**
     * Get usuarioHistCap
     *
     * @return string 
     */
    public function getUsuarioHistCap()
    {
        return $this->usuarioHistCap;
    }

    /**
     * Set fechaIngresoHistCapa
     *
     * @param \DateTime $fechaIngresoHistCapa
     * @return EnfBitacoraCapacitacion
     */
    public function setFechaIngresoHistCapa($fechaIngresoHistCapa)
    {
        $this->fechaIngresoHistCapa = $fechaIngresoHistCapa;

        return $this;
    }

    /**
     * Get fechaIngresoHistCapa
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistCapa()
    {
        return $this->fechaIngresoHistCapa;
    }

    /**
     * Set idCapacitacion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlCapacitacion $idCapacitacion
     * @return EnfBitacoraCapacitacion
     */
    public function setIdCapacitacion(\Minsal\SipernesBundle\Entity\EnfMtlCapacitacion $idCapacitacion = null)
    {
        $this->idCapacitacion = $idCapacitacion;

        return $this;
    }

    /**
     * Get idCapacitacion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlCapacitacion 
     */
    public function getIdCapacitacion()
    {
        return $this->idCapacitacion;
    }
    
     public function __toString() {
        return '';
    }
}
