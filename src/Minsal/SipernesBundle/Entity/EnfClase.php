<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfClase
 *
 * @ORM\Table(name="enf_clase", indexes={@ORM\Index(name="IDX_FF9FFAE2C95DE20F", columns={"id_dominio"})})
 * @ORM\Entity
 */
class EnfClase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_clase_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_clase", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $codClase;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_clase", type="string", length=50, nullable=true)
     */
    private $nombreClase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_clase", type="date", nullable=true)
     */
    private $fechaIngresoClase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_clase", type="date", nullable=true)
     */
    private $fechaModificacionClase;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_clase", type="string", length=40, nullable=true)
     */
    private $usuarioClase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_clase", type="boolean", nullable=true)
     */
    private $estadoClase;

    /**
     * @var \EnfDominio
     *
     * @ORM\ManyToOne(targetEntity="EnfDominio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dominio", referencedColumnName="id")
     * })
     */
    private $idDominio;



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
     * Set codClase
     *
     * @param string $codClase
     * @return EnfClase
     */
    public function setCodClase($codClase)
    {
        $this->codClase = $codClase;

        return $this;
    }

    /**
     * Get codClase
     *
     * @return string 
     */
    public function getCodClase()
    {
        return $this->codClase;
    }

    /**
     * Set nombreClase
     *
     * @param string $nombreClase
     * @return EnfClase
     */
    public function setNombreClase($nombreClase)
    {
        $this->nombreClase = $nombreClase;

        return $this;
    }

    /**
     * Get nombreClase
     *
     * @return string 
     */
    public function getNombreClase()
    {
        return $this->nombreClase;
    }

    /**
     * Set fechaIngresoClase
     *
     * @param \DateTime $fechaIngresoClase
     * @return EnfClase
     */
    public function setFechaIngresoClase($fechaIngresoClase)
    {
        $this->fechaIngresoClase = $fechaIngresoClase;

        return $this;
    }

    /**
     * Get fechaIngresoClase
     *
     * @return \DateTime 
     */
    public function getFechaIngresoClase()
    {
        return $this->fechaIngresoClase;
    }

    /**
     * Set fechaModificacionClase
     *
     * @param \DateTime $fechaModificacionClase
     * @return EnfClase
     */
    public function setFechaModificacionClase($fechaModificacionClase)
    {
        $this->fechaModificacionClase = $fechaModificacionClase;

        return $this;
    }

    /**
     * Get fechaModificacionClase
     *
     * @return \DateTime 
     */
    public function getFechaModificacionClase()
    {
        return $this->fechaModificacionClase;
    }

    /**
     * Set usuarioClase
     *
     * @param string $usuarioClase
     * @return EnfClase
     */
    public function setUsuarioClase($usuarioClase)
    {
        $this->usuarioClase = $usuarioClase;

        return $this;
    }

    /**
     * Get usuarioClase
     *
     * @return string 
     */
    public function getUsuarioClase()
    {
        return $this->usuarioClase;
    }

    /**
     * Set estadoClase
     *
     * @param boolean $estadoClase
     * @return EnfClase
     */
    public function setEstadoClase($estadoClase)
    {
        $this->estadoClase = $estadoClase;

        return $this;
    }

    /**
     * Get estadoClase
     *
     * @return boolean 
     */
    public function getEstadoClase()
    {
        return $this->estadoClase;
    }

    /**
     * Set idDominio
     *
     * @param \Minsal\SipernesBundle\Entity\EnfDominio $idDominio
     * @return EnfClase
     */
    public function setIdDominio(\Minsal\SipernesBundle\Entity\EnfDominio $idDominio = null)
    {
        $this->idDominio = $idDominio;

        return $this;
    }

    /**
     * Get idDominio
     *
     * @return \Minsal\SipernesBundle\Entity\EnfDominio 
     */
    public function getIdDominio()
    {
        return $this->idDominio;
    }
}
