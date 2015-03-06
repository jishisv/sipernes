<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabElementos
 *
 * @ORM\Table(name="lab_elementos", indexes={@ORM\Index(name="fki_establecimiento_elementos", columns={"idestablecimiento"}), @ORM\Index(name="IDX_668316CA35F12240", columns={"idexamen"}), @ORM\Index(name="IDX_668316CA6724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_668316CA13B895A1", columns={"idusuarioreg"})})
 * @ORM\Entity
 */
class LabElementos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_elementos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subelemento", type="string", length=1, nullable=true)
     */
    private $subelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="elemento", type="string", length=150, nullable=true)
     */
    private $elemento;

    /**
     * @var string
     *
     * @ORM\Column(name="unidadelem", type="string", length=30, nullable=true)
     */
    private $unidadelem;

    /**
     * @var string
     *
     * @ORM\Column(name="observelem", type="string", length=250, nullable=true)
     */
    private $observelem;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subelemento
     *
     * @param string $subelemento
     * @return LabElementos
     */
    public function setSubelemento($subelemento)
    {
        $this->subelemento = $subelemento;

        return $this;
    }

    /**
     * Get subelemento
     *
     * @return string 
     */
    public function getSubelemento()
    {
        return $this->subelemento;
    }

    /**
     * Set elemento
     *
     * @param string $elemento
     * @return LabElementos
     */
    public function setElemento($elemento)
    {
        $this->elemento = $elemento;

        return $this;
    }

    /**
     * Get elemento
     *
     * @return string 
     */
    public function getElemento()
    {
        return $this->elemento;
    }

    /**
     * Set unidadelem
     *
     * @param string $unidadelem
     * @return LabElementos
     */
    public function setUnidadelem($unidadelem)
    {
        $this->unidadelem = $unidadelem;

        return $this;
    }

    /**
     * Get unidadelem
     *
     * @return string 
     */
    public function getUnidadelem()
    {
        return $this->unidadelem;
    }

    /**
     * Set observelem
     *
     * @param string $observelem
     * @return LabElementos
     */
    public function setObservelem($observelem)
    {
        $this->observelem = $observelem;

        return $this;
    }

    /**
     * Get observelem
     *
     * @return string 
     */
    public function getObservelem()
    {
        return $this->observelem;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return LabElementos
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
     * @return LabElementos
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
     * @return LabElementos
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
     * @return LabElementos
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
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabElementos
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
     * @return LabElementos
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
     * @return LabElementos
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
     * @return LabElementos
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
}
