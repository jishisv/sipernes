<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabDatosfijosresultado
 *
 * @ORM\Table(name="lab_datosfijosresultado", indexes={@ORM\Index(name="IDX_3FFD4FF745BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_3FFD4FF775BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_3FFD4FF735F12240", columns={"idexamen"}), @ORM\Index(name="IDX_3FFD4FF76724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_3FFD4FF713B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_3FFD4FF78794B5D6", columns={"idedad"}), @ORM\Index(name="IDX_3FFD4FF7FFF6A732", columns={"idsexo"})})
 * @ORM\Entity
 */
class LabDatosfijosresultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_datosfijosresultado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="unidades", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="nota", type="string", length=250, nullable=true)
     */
    private $nota;

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
     *   @ORM\JoinColumn(name="idedad", referencedColumnName="id")
     * })
     */
    private $idedad;

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
     * Set unidades
     *
     * @param string $unidades
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * Set nota
     *
     * @param string $nota
     * @return LabDatosfijosresultado
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * @return LabDatosfijosresultado
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
     * Set idedad
     *
     * @param \Minsal\shcpBundle\Entity\CtlRangoEdad $idedad
     * @return LabDatosfijosresultado
     */
    public function setIdedad(\Minsal\shcpBundle\Entity\CtlRangoEdad $idedad = null)
    {
        $this->idedad = $idedad;

        return $this;
    }

    /**
     * Get idedad
     *
     * @return \Minsal\shcpBundle\Entity\CtlRangoEdad 
     */
    public function getIdedad()
    {
        return $this->idedad;
    }

    /**
     * Set idsexo
     *
     * @param \Minsal\shcpBundle\Entity\CtlSexo $idsexo
     * @return LabDatosfijosresultado
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
