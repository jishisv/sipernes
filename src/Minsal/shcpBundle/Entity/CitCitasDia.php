<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitCitasDia
 *
 * @ORM\Table(name="cit_citas_dia", indexes={@ORM\Index(name="fki_mnt_expediente_cit_citas_dia", columns={"id_expediente"}), @ORM\Index(name="fki_mnt_empleado_cit_citas_dia", columns={"id_empleado"}), @ORM\Index(name="fki_fos_user_user_reg_cit_citas_diaa", columns={"idusuarioreg"}), @ORM\Index(name="IDX_92DF133E6A540E", columns={"id_estado"}), @ORM\Index(name="IDX_92DF133E3FCE8D8B", columns={"id_motivo"}), @ORM\Index(name="IDX_92DF133ECFE0D83", columns={"id_tipocita"}), @ORM\Index(name="IDX_92DF133E7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_92DF133ED5F9D21F", columns={"id_establecimiento_referencia"}), @ORM\Index(name="IDX_92DF133ECC2F8715", columns={"id_area_mod_estab"}), @ORM\Index(name="IDX_92DF133E8627A85B", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="IDX_92DF133EEB971272", columns={"id_rangohora"})})
 * @ORM\Entity
 */
class CitCitasDia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_citas_dia_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="ipconfirmado", type="string", length=15, nullable=true)
     */
    private $ipconfirmado;

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
     * @var \CitMotivoagregados
     *
     * @ORM\ManyToOne(targetEntity="CitMotivoagregados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_motivo", referencedColumnName="id")
     * })
     */
    private $idMotivo;

    /**
     * @var \CitTipocita
     *
     * @ORM\ManyToOne(targetEntity="CitTipocita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipocita", referencedColumnName="id")
     * })
     */
    private $idTipocita;

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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * Set ipconfirmado
     *
     * @param string $ipconfirmado
     * @return CitCitasDia
     */
    public function setIpconfirmado($ipconfirmado)
    {
        $this->ipconfirmado = $ipconfirmado;

        return $this;
    }

    /**
     * Get ipconfirmado
     *
     * @return string 
     */
    public function getIpconfirmado()
    {
        return $this->ipconfirmado;
    }

    /**
     * Set idEstado
     *
     * @param \Minsal\shcpBundle\Entity\CitEstadoCita $idEstado
     * @return CitCitasDia
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
     * Set idMotivo
     *
     * @param \Minsal\shcpBundle\Entity\CitMotivoagregados $idMotivo
     * @return CitCitasDia
     */
    public function setIdMotivo(\Minsal\shcpBundle\Entity\CitMotivoagregados $idMotivo = null)
    {
        $this->idMotivo = $idMotivo;

        return $this;
    }

    /**
     * Get idMotivo
     *
     * @return \Minsal\shcpBundle\Entity\CitMotivoagregados 
     */
    public function getIdMotivo()
    {
        return $this->idMotivo;
    }

    /**
     * Set idTipocita
     *
     * @param \Minsal\shcpBundle\Entity\CitTipocita $idTipocita
     * @return CitCitasDia
     */
    public function setIdTipocita(\Minsal\shcpBundle\Entity\CitTipocita $idTipocita = null)
    {
        $this->idTipocita = $idTipocita;

        return $this;
    }

    /**
     * Get idTipocita
     *
     * @return \Minsal\shcpBundle\Entity\CitTipocita 
     */
    public function getIdTipocita()
    {
        return $this->idTipocita;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * @return CitCitasDia
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
     * Set idRangohora
     *
     * @param \Minsal\shcpBundle\Entity\MntRangohora $idRangohora
     * @return CitCitasDia
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
