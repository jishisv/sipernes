<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabSubelementos
 *
 * @ORM\Table(name="lab_subelementos", indexes={@ORM\Index(name="IDX_CD09BA9F8794B5D6", columns={"idedad"}), @ORM\Index(name="IDX_CD09BA9FFFF6A732", columns={"idsexo"}), @ORM\Index(name="IDX_CD09BA9F75BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_CD09BA9FFA9E131F", columns={"idelemento"})})
 * @ORM\Entity
 */
class LabSubelementos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_subelementos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="subelemento", type="string", length=80, nullable=true)
     */
    private $subelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="observsubelem", type="string", length=250, nullable=true)
     */
    private $observsubelem;

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
     * @ORM\Column(name="unidad", type="string", length=12, nullable=true)
     */
    private $unidad;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestablecimiento", referencedColumnName="id")
     * })
     */
    private $idestablecimiento;

    /**
     * @var \LabElementos
     *
     * @ORM\ManyToOne(targetEntity="LabElementos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idelemento", referencedColumnName="id")
     * })
     */
    private $idelemento;



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
     * @return LabSubelementos
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
     * Set observsubelem
     *
     * @param string $observsubelem
     * @return LabSubelementos
     */
    public function setObservsubelem($observsubelem)
    {
        $this->observsubelem = $observsubelem;

        return $this;
    }

    /**
     * Get observsubelem
     *
     * @return string 
     */
    public function getObservsubelem()
    {
        return $this->observsubelem;
    }

    /**
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return LabSubelementos
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
     * @return LabSubelementos
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
     * Set rangoinicio
     *
     * @param float $rangoinicio
     * @return LabSubelementos
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
     * @return LabSubelementos
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
     * Set unidad
     *
     * @param string $unidad
     * @return LabSubelementos
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set idedad
     *
     * @param \Minsal\shcpBundle\Entity\CtlRangoEdad $idedad
     * @return LabSubelementos
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
     * @return LabSubelementos
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

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabSubelementos
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
     * Set idelemento
     *
     * @param \Minsal\shcpBundle\Entity\LabElementos $idelemento
     * @return LabSubelementos
     */
    public function setIdelemento(\Minsal\shcpBundle\Entity\LabElementos $idelemento = null)
    {
        $this->idelemento = $idelemento;

        return $this;
    }

    /**
     * Get idelemento
     *
     * @return \Minsal\shcpBundle\Entity\LabElementos 
     */
    public function getIdelemento()
    {
        return $this->idelemento;
    }
}
