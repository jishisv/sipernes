<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitCitasprocedimientos
 *
 * @ORM\Table(name="cit_citasprocedimientos", indexes={@ORM\Index(name="fki_mnt_procedimiento_establecimiento_cit_citasprocedimientos", columns={"id_ciq_establecimiento"}), @ORM\Index(name="fki_fos_user_user_reg_cit_citasprocedimientos", columns={"idusuarioreg"}), @ORM\Index(name="IDX_511136306A540E", columns={"id_estado"}), @ORM\Index(name="IDX_511136307DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_51113630D5F9D21F", columns={"id_establecimiento_referencia"}), @ORM\Index(name="IDX_51113630CC2F8715", columns={"id_area_mod_estab"}), @ORM\Index(name="IDX_511136308627A85B", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="IDX_51113630890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_51113630701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_51113630EB971272", columns={"id_rangohora"})})
 * @ORM\Entity
 */
class CitCitasprocedimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_citasprocedimientos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var string
     *
     * @ORM\Column(name="ipcita", type="string", length=15, nullable=true)
     */
    private $ipcita;

    /**
     * @var string
     *
     * @ORM\Column(name="ipconfirmada", type="string", length=15, nullable=true)
     */
    private $ipconfirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediente_referencia", type="string", length=20, nullable=true)
     */
    private $numeroExpedienteReferencia;

    /**
     * @var \CitEstadoCita
     *
     * @ORM\ManyToOne(targetEntity="CitEstadoCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     * })
     */
    private $idEstado;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_referencia", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoReferencia;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAreaModEstab;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

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
     * @var \MntProcedimientoEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntProcedimientoEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciq_establecimiento", referencedColumnName="id")
     * })
     */
    private $idCiqEstablecimiento;

    /**
     * @var \MntRangohora
     *
     * @ORM\ManyToOne(targetEntity="MntRangohora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rangohora", referencedColumnName="id")
     * })
     */
    private $idRangohora;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CitCitasprocedimientos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CitCitasprocedimientos
     */
    public function setFechahorareg($fechahorareg)
    {
        $this->fechahorareg = $fechahorareg;

        return $this;
    }

    /**
     * Get fechahorareg
     *
     * @return \DateTime 
     */
    public function getFechahorareg()
    {
        return $this->fechahorareg;
    }

    /**
     * Set ipcita
     *
     * @param string $ipcita
     * @return CitCitasprocedimientos
     */
    public function setIpcita($ipcita)
    {
        $this->ipcita = $ipcita;

        return $this;
    }

    /**
     * Get ipcita
     *
     * @return string 
     */
    public function getIpcita()
    {
        return $this->ipcita;
    }

    /**
     * Set ipconfirmada
     *
     * @param string $ipconfirmada
     * @return CitCitasprocedimientos
     */
    public function setIpconfirmada($ipconfirmada)
    {
        $this->ipconfirmada = $ipconfirmada;

        return $this;
    }

    /**
     * Get ipconfirmada
     *
     * @return string 
     */
    public function getIpconfirmada()
    {
        return $this->ipconfirmada;
    }

    /**
     * Set numeroExpedienteReferencia
     *
     * @param string $numeroExpedienteReferencia
     * @return CitCitasprocedimientos
     */
    public function setNumeroExpedienteReferencia($numeroExpedienteReferencia)
    {
        $this->numeroExpedienteReferencia = $numeroExpedienteReferencia;

        return $this;
    }

    /**
     * Get numeroExpedienteReferencia
     *
     * @return string 
     */
    public function getNumeroExpedienteReferencia()
    {
        return $this->numeroExpedienteReferencia;
    }

    /**
     * Set idEstado
     *
     * @param \Minsal\shcpBundle\Entity\CitEstadoCita $idEstado
     * @return CitCitasprocedimientos
     */
    public function setIdEstado(\Minsal\shcpBundle\Entity\CitEstadoCita $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \Minsal\shcpBundle\Entity\CitEstadoCita 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CitCitasprocedimientos
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idEstablecimientoReferencia
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimientoReferencia
     * @return CitCitasprocedimientos
     */
    public function setIdEstablecimientoReferencia(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimientoReferencia = null)
    {
        $this->idEstablecimientoReferencia = $idEstablecimientoReferencia;

        return $this;
    }

    /**
     * Get idEstablecimientoReferencia
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoReferencia()
    {
        return $this->idEstablecimientoReferencia;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return CitCitasprocedimientos
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return CitCitasprocedimientos
     */
    public function setIdAreaModEstab(\Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab = null)
    {
        $this->idAreaModEstab = $idAreaModEstab;

        return $this;
    }

    /**
     * Get idAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAreaModEstab 
     */
    public function getIdAreaModEstab()
    {
        return $this->idAreaModEstab;
    }

    /**
     * Set idAtenAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab
     * @return CitCitasprocedimientos
     */
    public function setIdAtenAreaModEstab(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab = null)
    {
        $this->idAtenAreaModEstab = $idAtenAreaModEstab;

        return $this;
    }

    /**
     * Get idAtenAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtenAreaModEstab()
    {
        return $this->idAtenAreaModEstab;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return CitCitasprocedimientos
     */
    public function setIdEmpleado(\Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idExpediente
     * @return CitCitasprocedimientos
     */
    public function setIdExpediente(\Minsal\shcpBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idCiqEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento $idCiqEstablecimiento
     * @return CitCitasprocedimientos
     */
    public function setIdCiqEstablecimiento(\Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento $idCiqEstablecimiento = null)
    {
        $this->idCiqEstablecimiento = $idCiqEstablecimiento;

        return $this;
    }

    /**
     * Get idCiqEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento 
     */
    public function getIdCiqEstablecimiento()
    {
        return $this->idCiqEstablecimiento;
    }

    /**
     * Set idRangohora
     *
     * @param \Minsal\shcpBundle\Entity\MntRangohora $idRangohora
     * @return CitCitasprocedimientos
     */
    public function setIdRangohora(\Minsal\shcpBundle\Entity\MntRangohora $idRangohora = null)
    {
        $this->idRangohora = $idRangohora;

        return $this;
    }

    /**
     * Get idRangohora
     *
     * @return \Minsal\shcpBundle\Entity\MntRangohora 
     */
    public function getIdRangohora()
    {
        return $this->idRangohora;
    }
}
