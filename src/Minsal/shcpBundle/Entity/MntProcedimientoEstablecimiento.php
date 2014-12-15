<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProcedimientoEstablecimiento
 *
 * @ORM\Table(name="mnt_procedimiento_establecimiento", indexes={@ORM\Index(name="fki_mnt_empleado_mnt_procedimiento_establecimiento", columns={"id_empleado"}), @ORM\Index(name="fki_mnt_rango_hora_mnt_procedimiento_establecimiento", columns={"id_rangohora"}), @ORM\Index(name="fki_mnt_ciq_mnt_procedimiento_establecimiento", columns={"id_ciq"}), @ORM\Index(name="fki_mnt_area_mod_estab_mnt_procedimiento_establecimiento", columns={"id_area_mod_estab"}), @ORM\Index(name="fki_ctl_establecimiento_mnt_procedimiento_establecimiento", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class MntProcedimientoEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_procedimiento_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="techomaximo", type="integer", nullable=true)
     */
    private $techomaximo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidadacupo", type="integer", nullable=true)
     */
    private $cantidadacupo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempoprevio", type="integer", nullable=true)
     */
    private $tiempoprevio;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia", type="integer", nullable=true)
     */
    private $dia;

    /**
     * @var integer
     *
     * @ORM\Column(name="yrs", type="integer", nullable=true)
     */
    private $yrs;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarioreg", type="smallint", nullable=true)
     */
    private $idusuarioreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuariomod", type="smallint", nullable=true)
     */
    private $idusuariomod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;

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
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAreaModEstab;

    /**
     * @var \MntCiq
     *
     * @ORM\ManyToOne(targetEntity="MntCiq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciq", referencedColumnName="id")
     * })
     */
    private $idCiq;

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
     * Set techomaximo
     *
     * @param integer $techomaximo
     * @return MntProcedimientoEstablecimiento
     */
    public function setTechomaximo($techomaximo)
    {
        $this->techomaximo = $techomaximo;

        return $this;
    }

    /**
     * Get techomaximo
     *
     * @return integer 
     */
    public function getTechomaximo()
    {
        return $this->techomaximo;
    }

    /**
     * Set cantidadacupo
     *
     * @param integer $cantidadacupo
     * @return MntProcedimientoEstablecimiento
     */
    public function setCantidadacupo($cantidadacupo)
    {
        $this->cantidadacupo = $cantidadacupo;

        return $this;
    }

    /**
     * Get cantidadacupo
     *
     * @return integer 
     */
    public function getCantidadacupo()
    {
        return $this->cantidadacupo;
    }

    /**
     * Set tiempoprevio
     *
     * @param integer $tiempoprevio
     * @return MntProcedimientoEstablecimiento
     */
    public function setTiempoprevio($tiempoprevio)
    {
        $this->tiempoprevio = $tiempoprevio;

        return $this;
    }

    /**
     * Get tiempoprevio
     *
     * @return integer 
     */
    public function getTiempoprevio()
    {
        return $this->tiempoprevio;
    }

    /**
     * Set dia
     *
     * @param integer $dia
     * @return MntProcedimientoEstablecimiento
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set yrs
     *
     * @param integer $yrs
     * @return MntProcedimientoEstablecimiento
     */
    public function setYrs($yrs)
    {
        $this->yrs = $yrs;

        return $this;
    }

    /**
     * Get yrs
     *
     * @return integer 
     */
    public function getYrs()
    {
        return $this->yrs;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return MntProcedimientoEstablecimiento
     */
    public function setIdusuarioreg($idusuarioreg)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return integer 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return MntProcedimientoEstablecimiento
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
     * Set idusuariomod
     *
     * @param integer $idusuariomod
     * @return MntProcedimientoEstablecimiento
     */
    public function setIdusuariomod($idusuariomod)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return integer 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return MntProcedimientoEstablecimiento
     */
    public function setFechahoramod($fechahoramod)
    {
        $this->fechahoramod = $fechahoramod;

        return $this;
    }

    /**
     * Get fechahoramod
     *
     * @return \DateTime 
     */
    public function getFechahoramod()
    {
        return $this->fechahoramod;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntProcedimientoEstablecimiento
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
     * Set idAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return MntProcedimientoEstablecimiento
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
     * Set idCiq
     *
     * @param \Minsal\shcpBundle\Entity\MntCiq $idCiq
     * @return MntProcedimientoEstablecimiento
     */
    public function setIdCiq(\Minsal\shcpBundle\Entity\MntCiq $idCiq = null)
    {
        $this->idCiq = $idCiq;

        return $this;
    }

    /**
     * Get idCiq
     *
     * @return \Minsal\shcpBundle\Entity\MntCiq 
     */
    public function getIdCiq()
    {
        return $this->idCiq;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return MntProcedimientoEstablecimiento
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
     * Set idRangohora
     *
     * @param \Minsal\shcpBundle\Entity\MntRangohora $idRangohora
     * @return MntProcedimientoEstablecimiento
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
