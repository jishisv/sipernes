<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecEgresos
 *
 * @ORM\Table(name="sec_egresos", indexes={@ORM\Index(name="IDX_EC2A7FF82693E5E4", columns={"idsubserviciotraslado"}), @ORM\Index(name="IDX_EC2A7FF8E034E90", columns={"idcondicion"}), @ORM\Index(name="IDX_EC2A7FF86724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_EC2A7FF813B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_EC2A7FF84990AE1E", columns={"iddiagnosticosproc"})})
 * @ORM\Entity
 */
class SecEgresos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idegreso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_egresos_idegreso_seq", allocationSize=1, initialValue=1)
     */
    private $idegreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idingreso", type="integer", nullable=true)
     */
    private $idingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="egresosinconsenmedico", type="string", length=150, nullable=true)
     */
    private $egresosinconsenmedico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaegreso", type="date", nullable=false)
     */
    private $fechaegreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaegreso", type="time", nullable=false)
     */
    private $horaegreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentrega", type="date", nullable=false)
     */
    private $fechaentrega;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaentrega", type="time", nullable=false)
     */
    private $horaentrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="trasladootrohospital", type="integer", nullable=true)
     */
    private $trasladootrohospital = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idempleado", type="string", nullable=true)
     */
    private $idempleado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=false)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=false)
     */
    private $fechahoramod;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasuci", type="integer", nullable=true)
     */
    private $diasuci = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="embpartopuerperio", type="smallint", nullable=true)
     */
    private $embpartopuerperio;

    /**
     * @var string
     *
     * @ORM\Column(name="identificador", type="string", nullable=false)
     */
    private $identificador;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubserviciotraslado", referencedColumnName="id")
     * })
     */
    private $idsubserviciotraslado;

    /**
     * @var \MntCondicionegreso
     *
     * @ORM\ManyToOne(targetEntity="MntCondicionegreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcondicion", referencedColumnName="idcondicion")
     * })
     */
    private $idcondicion;

    /**
     * @var \MntUsuarios
     *
     * @ORM\ManyToOne(targetEntity="MntUsuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \SecDiagnosticosProcedimientos
     *
     * @ORM\ManyToOne(targetEntity="SecDiagnosticosProcedimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnosticosproc", referencedColumnName="iddiagnosticosproc")
     * })
     */
    private $iddiagnosticosproc;



    /**
     * Get idegreso
     *
     * @return integer 
     */
    public function getIdegreso()
    {
        return $this->idegreso;
    }

    /**
     * Set idingreso
     *
     * @param integer $idingreso
     * @return SecEgresos
     */
    public function setIdingreso($idingreso)
    {
        $this->idingreso = $idingreso;

        return $this;
    }

    /**
     * Get idingreso
     *
     * @return integer 
     */
    public function getIdingreso()
    {
        return $this->idingreso;
    }

    /**
     * Set egresosinconsenmedico
     *
     * @param string $egresosinconsenmedico
     * @return SecEgresos
     */
    public function setEgresosinconsenmedico($egresosinconsenmedico)
    {
        $this->egresosinconsenmedico = $egresosinconsenmedico;

        return $this;
    }

    /**
     * Get egresosinconsenmedico
     *
     * @return string 
     */
    public function getEgresosinconsenmedico()
    {
        return $this->egresosinconsenmedico;
    }

    /**
     * Set fechaegreso
     *
     * @param \DateTime $fechaegreso
     * @return SecEgresos
     */
    public function setFechaegreso($fechaegreso)
    {
        $this->fechaegreso = $fechaegreso;

        return $this;
    }

    /**
     * Get fechaegreso
     *
     * @return \DateTime 
     */
    public function getFechaegreso()
    {
        return $this->fechaegreso;
    }

    /**
     * Set horaegreso
     *
     * @param \DateTime $horaegreso
     * @return SecEgresos
     */
    public function setHoraegreso($horaegreso)
    {
        $this->horaegreso = $horaegreso;

        return $this;
    }

    /**
     * Get horaegreso
     *
     * @return \DateTime 
     */
    public function getHoraegreso()
    {
        return $this->horaegreso;
    }

    /**
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     * @return SecEgresos
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime 
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set horaentrega
     *
     * @param \DateTime $horaentrega
     * @return SecEgresos
     */
    public function setHoraentrega($horaentrega)
    {
        $this->horaentrega = $horaentrega;

        return $this;
    }

    /**
     * Get horaentrega
     *
     * @return \DateTime 
     */
    public function getHoraentrega()
    {
        return $this->horaentrega;
    }

    /**
     * Set trasladootrohospital
     *
     * @param integer $trasladootrohospital
     * @return SecEgresos
     */
    public function setTrasladootrohospital($trasladootrohospital)
    {
        $this->trasladootrohospital = $trasladootrohospital;

        return $this;
    }

    /**
     * Get trasladootrohospital
     *
     * @return integer 
     */
    public function getTrasladootrohospital()
    {
        return $this->trasladootrohospital;
    }

    /**
     * Set idempleado
     *
     * @param string $idempleado
     * @return SecEgresos
     */
    public function setIdempleado($idempleado)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return string 
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return SecEgresos
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
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return SecEgresos
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
     * Set diasuci
     *
     * @param integer $diasuci
     * @return SecEgresos
     */
    public function setDiasuci($diasuci)
    {
        $this->diasuci = $diasuci;

        return $this;
    }

    /**
     * Get diasuci
     *
     * @return integer 
     */
    public function getDiasuci()
    {
        return $this->diasuci;
    }

    /**
     * Set embpartopuerperio
     *
     * @param integer $embpartopuerperio
     * @return SecEgresos
     */
    public function setEmbpartopuerperio($embpartopuerperio)
    {
        $this->embpartopuerperio = $embpartopuerperio;

        return $this;
    }

    /**
     * Get embpartopuerperio
     *
     * @return integer 
     */
    public function getEmbpartopuerperio()
    {
        return $this->embpartopuerperio;
    }

    /**
     * Set identificador
     *
     * @param string $identificador
     * @return SecEgresos
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set idsubserviciotraslado
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idsubserviciotraslado
     * @return SecEgresos
     */
    public function setIdsubserviciotraslado(\Minsal\shcpBundle\Entity\CtlAtencion $idsubserviciotraslado = null)
    {
        $this->idsubserviciotraslado = $idsubserviciotraslado;

        return $this;
    }

    /**
     * Get idsubserviciotraslado
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdsubserviciotraslado()
    {
        return $this->idsubserviciotraslado;
    }

    /**
     * Set idcondicion
     *
     * @param \Minsal\shcpBundle\Entity\MntCondicionegreso $idcondicion
     * @return SecEgresos
     */
    public function setIdcondicion(\Minsal\shcpBundle\Entity\MntCondicionegreso $idcondicion = null)
    {
        $this->idcondicion = $idcondicion;

        return $this;
    }

    /**
     * Get idcondicion
     *
     * @return \Minsal\shcpBundle\Entity\MntCondicionegreso 
     */
    public function getIdcondicion()
    {
        return $this->idcondicion;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\MntUsuarios $idusuariomod
     * @return SecEgresos
     */
    public function setIdusuariomod(\Minsal\shcpBundle\Entity\MntUsuarios $idusuariomod = null)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return \Minsal\shcpBundle\Entity\MntUsuarios 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idusuarioreg
     * @return SecEgresos
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\MntEmpleado $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set iddiagnosticosproc
     *
     * @param \Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos $iddiagnosticosproc
     * @return SecEgresos
     */
    public function setIddiagnosticosproc(\Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos $iddiagnosticosproc = null)
    {
        $this->iddiagnosticosproc = $iddiagnosticosproc;

        return $this;
    }

    /**
     * Get iddiagnosticosproc
     *
     * @return \Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos 
     */
    public function getIddiagnosticosproc()
    {
        return $this->iddiagnosticosproc;
    }
}
