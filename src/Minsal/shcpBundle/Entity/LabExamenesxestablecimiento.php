<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabExamenesxestablecimiento
 *
 * @ORM\Table(name="lab_examenesxestablecimiento", indexes={@ORM\Index(name="IDX_778454F235F12240", columns={"idexamen"}), @ORM\Index(name="IDX_778454F212C7E9A0", columns={"idestandarrep"}), @ORM\Index(name="IDX_778454F26724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_778454F213B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_778454F28865BA6", columns={"idplantilla"})})
 * @ORM\Entity
 */
class LabExamenesxestablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_examenesxestablecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion", type="string", nullable=false)
     */
    private $condicion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idformulario", type="integer", nullable=false)
     */
    private $idformulario;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgente", type="integer", nullable=true)
     */
    private $urgente;

    /**
     * @var string
     *
     * @ORM\Column(name="impresion", type="string", nullable=true)
     */
    private $impresion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ubicacion", type="smallint", nullable=true)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigosumi", type="string", length=8, nullable=true)
     */
    private $codigosumi;

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
     * @var string
     *
     * @ORM\Column(name="nombre_examen", type="string", length=250, nullable=true)
     */
    private $nombreExamen;

    /**
     * @var \MntAreaExamenEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntAreaExamenEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexamen", referencedColumnName="id")
     * })
     */
    private $idexamen;

    /**
     * @var \CtlExamenServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestandarrep", referencedColumnName="id")
     * })
     */
    private $idestandarrep;

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
     * @var \LabPlantilla
     *
     * @ORM\ManyToOne(targetEntity="LabPlantilla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idplantilla", referencedColumnName="id")
     * })
     */
    private $idplantilla;



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
     * Set condicion
     *
     * @param string $condicion
     * @return LabExamenesxestablecimiento
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;

        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set idformulario
     *
     * @param integer $idformulario
     * @return LabExamenesxestablecimiento
     */
    public function setIdformulario($idformulario)
    {
        $this->idformulario = $idformulario;

        return $this;
    }

    /**
     * Get idformulario
     *
     * @return integer 
     */
    public function getIdformulario()
    {
        return $this->idformulario;
    }

    /**
     * Set urgente
     *
     * @param integer $urgente
     * @return LabExamenesxestablecimiento
     */
    public function setUrgente($urgente)
    {
        $this->urgente = $urgente;

        return $this;
    }

    /**
     * Get urgente
     *
     * @return integer 
     */
    public function getUrgente()
    {
        return $this->urgente;
    }

    /**
     * Set impresion
     *
     * @param string $impresion
     * @return LabExamenesxestablecimiento
     */
    public function setImpresion($impresion)
    {
        $this->impresion = $impresion;

        return $this;
    }

    /**
     * Get impresion
     *
     * @return string 
     */
    public function getImpresion()
    {
        return $this->impresion;
    }

    /**
     * Set ubicacion
     *
     * @param integer $ubicacion
     * @return LabExamenesxestablecimiento
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return integer 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set codigosumi
     *
     * @param string $codigosumi
     * @return LabExamenesxestablecimiento
     */
    public function setCodigosumi($codigosumi)
    {
        $this->codigosumi = $codigosumi;

        return $this;
    }

    /**
     * Get codigosumi
     *
     * @return string 
     */
    public function getCodigosumi()
    {
        return $this->codigosumi;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabExamenesxestablecimiento
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
     * @return LabExamenesxestablecimiento
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
     * Set nombreExamen
     *
     * @param string $nombreExamen
     * @return LabExamenesxestablecimiento
     */
    public function setNombreExamen($nombreExamen)
    {
        $this->nombreExamen = $nombreExamen;

        return $this;
    }

    /**
     * Get nombreExamen
     *
     * @return string 
     */
    public function getNombreExamen()
    {
        return $this->nombreExamen;
    }

    /**
     * Set idexamen
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaExamenEstablecimiento $idexamen
     * @return LabExamenesxestablecimiento
     */
    public function setIdexamen(\Minsal\shcpBundle\Entity\MntAreaExamenEstablecimiento $idexamen = null)
    {
        $this->idexamen = $idexamen;

        return $this;
    }

    /**
     * Get idexamen
     *
     * @return \Minsal\shcpBundle\Entity\MntAreaExamenEstablecimiento 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }

    /**
     * Set idestandarrep
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idestandarrep
     * @return LabExamenesxestablecimiento
     */
    public function setIdestandarrep(\Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idestandarrep = null)
    {
        $this->idestandarrep = $idestandarrep;

        return $this;
    }

    /**
     * Get idestandarrep
     *
     * @return \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo 
     */
    public function getIdestandarrep()
    {
        return $this->idestandarrep;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return LabExamenesxestablecimiento
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
     * @return LabExamenesxestablecimiento
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
     * Set idplantilla
     *
     * @param \Minsal\shcpBundle\Entity\LabPlantilla $idplantilla
     * @return LabExamenesxestablecimiento
     */
    public function setIdplantilla(\Minsal\shcpBundle\Entity\LabPlantilla $idplantilla = null)
    {
        $this->idplantilla = $idplantilla;

        return $this;
    }

    /**
     * Get idplantilla
     *
     * @return \Minsal\shcpBundle\Entity\LabPlantilla 
     */
    public function getIdplantilla()
    {
        return $this->idplantilla;
    }
}
