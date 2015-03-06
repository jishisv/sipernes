<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabProcedimientosporexamen
 *
 * @ORM\Table(name="lab_procedimientosporexamen", indexes={@ORM\Index(name="IDX_8E89EC9445BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_8E89EC9475BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_8E89EC9435F12240", columns={"idexamen"}), @ORM\Index(name="IDX_8E89EC946724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_8E89EC9413B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_8E89EC94FA038581", columns={"idrangoedad"}), @ORM\Index(name="IDX_8E89EC94FFF6A732", columns={"idsexo"})})
 * @ORM\Entity
 */
class LabProcedimientosporexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_procedimientosporexamen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreprocedimiento", type="string", length=150, nullable=true)
     */
    private $nombreprocedimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="unidades", type="string", length=60, nullable=true)
     */
    private $unidades;

    /**
     * @var float
     *
     * @ORM\Column(name="rangoinicio", type="float", precision=10, scale=0, nullable=true)
     */
    private $rangoinicio;

    /**
     * @var float
     *
     * @ORM\Column(name="rangofin", type="float", precision=10, scale=0, nullable=true)
     */
    private $rangofin;

    /**
     * @var string
     *
     * @ORM\Column(name="controldiario", type="string", length=150, nullable=true)
     */
    private $controldiario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaini", type="date", nullable=true)
     */
    private $fechaini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=true)
     */
    private $fechafin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;

    /**
     * @var \CtlAreaServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="id")
     * })
     */
    private $idarea;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestablecimiento", referencedColumnName="id")
     * })
     */
    private $idestablecimiento;

    /**
     * @var \CtlExamenServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexamen", referencedColumnName="id")
     * })
     */
    private $idexamen;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

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
     * @var \CtlRangoEdad
     *
     * @ORM\ManyToOne(targetEntity="CtlRangoEdad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrangoedad", referencedColumnName="id")
     * })
     */
    private $idrangoedad;

    /**
     * @var \CtlSexo
     *
     * @ORM\ManyToOne(targetEntity="CtlSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsexo", referencedColumnName="id")
     * })
     */
    private $idsexo;



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
     * Set nombreprocedimiento
     *
     * @param string $nombreprocedimiento
     * @return LabProcedimientosporexamen
     */
    public function setNombreprocedimiento($nombreprocedimiento)
    {
        $this->nombreprocedimiento = $nombreprocedimiento;

        return $this;
    }

    /**
     * Get nombreprocedimiento
     *
     * @return string 
     */
    public function getNombreprocedimiento()
    {
        return $this->nombreprocedimiento;
    }

    /**
     * Set unidades
     *
     * @param string $unidades
     * @return LabProcedimientosporexamen
     */
    public function setUnidades($unidades)
    {
        $this->unidades = $unidades;

        return $this;
    }

    /**
     * Get unidades
     *
     * @return string 
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * Set rangoinicio
     *
     * @param float $rangoinicio
     * @return LabProcedimientosporexamen
     */
    public function setRangoinicio($rangoinicio)
    {
        $this->rangoinicio = $rangoinicio;

        return $this;
    }

    /**
     * Get rangoinicio
     *
     * @return float 
     */
    public function getRangoinicio()
    {
        return $this->rangoinicio;
    }

    /**
     * Set rangofin
     *
     * @param float $rangofin
     * @return LabProcedimientosporexamen
     */
    public function setRangofin($rangofin)
    {
        $this->rangofin = $rangofin;

        return $this;
    }

    /**
     * Get rangofin
     *
     * @return float 
     */
    public function getRangofin()
    {
        return $this->rangofin;
    }

    /**
     * Set controldiario
     *
     * @param string $controldiario
     * @return LabProcedimientosporexamen
     */
    public function setControldiario($controldiario)
    {
        $this->controldiario = $controldiario;

        return $this;
    }

    /**
     * Get controldiario
     *
     * @return string 
     */
    public function getControldiario()
    {
        return $this->controldiario;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return LabProcedimientosporexamen
     */
    public function setFechaini($fechaini)
    {
        $this->fechaini = $fechaini;

        return $this;
    }

    /**
     * Get fechaini
     *
     * @return \DateTime 
     */
    public function getFechaini()
    {
        return $this->fechaini;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return LabProcedimientosporexamen
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabProcedimientosporexamen
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
     * @return LabProcedimientosporexamen
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
     * Set idarea
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idarea
     * @return LabProcedimientosporexamen
     */
    public function setIdarea(\Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabProcedimientosporexamen
     */
    public function setIdestablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento = null)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idexamen
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idexamen
     * @return LabProcedimientosporexamen
     */
    public function setIdexamen(\Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idexamen = null)
    {
        $this->idexamen = $idexamen;

        return $this;
    }

    /**
     * Get idexamen
     *
     * @return \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return LabProcedimientosporexamen
     */
    public function setIdusuariomod(\Minsal\shcpBundle\Entity\FosUserUser $idusuariomod = null)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return LabProcedimientosporexamen
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
     * Set idrangoedad
     *
     * @param \Minsal\shcpBundle\Entity\CtlRangoEdad $idrangoedad
     * @return LabProcedimientosporexamen
     */
    public function setIdrangoedad(\Minsal\shcpBundle\Entity\CtlRangoEdad $idrangoedad = null)
    {
        $this->idrangoedad = $idrangoedad;

        return $this;
    }

    /**
     * Get idrangoedad
     *
     * @return \Minsal\shcpBundle\Entity\CtlRangoEdad 
     */
    public function getIdrangoedad()
    {
        return $this->idrangoedad;
    }

    /**
     * Set idsexo
     *
     * @param \Minsal\shcpBundle\Entity\CtlSexo $idsexo
     * @return LabProcedimientosporexamen
     */
    public function setIdsexo(\Minsal\shcpBundle\Entity\CtlSexo $idsexo = null)
    {
        $this->idsexo = $idsexo;

        return $this;
    }

    /**
     * Get idsexo
     *
     * @return \Minsal\shcpBundle\Entity\CtlSexo 
     */
    public function getIdsexo()
    {
        return $this->idsexo;
    }
}
