<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfEsquemaVac
 *
 * @ORM\Table(name="enf_esquema_vac")
 * @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\CatalogoEsqVacRepository")
 */
class EnfEsquemaVac
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_esquema_vac_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="anio_esquema_vac", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $anioEsquemaVac;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_esquema_vac", type="string", length=40, nullable=true)
     */
    private $nombreEsquemaVac;

    /**
     * @var string
     *
     * @ORM\Column(name="edad_minima", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $edadMinima;

    /**
     * @var string
     *
     * @ORM\Column(name="edad_maxima", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $edadMaxima;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_vac", type="boolean", nullable=true)
     */
    private $estadoVac;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_vac", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoVac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_vac", type="date", nullable=true)
     */
    private $fechaIngresoVac;



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
     * Set anioEsquemaVac
     *
     * @param string $anioEsquemaVac
     * @return EnfEsquemaVac
     */
    public function setAnioEsquemaVac($anioEsquemaVac)
    {
        $this->anioEsquemaVac = $anioEsquemaVac;

        return $this;
    }

    /**
     * Get anioEsquemaVac
     *
     * @return string 
     */
    public function getAnioEsquemaVac()
    {
        return $this->anioEsquemaVac;
    }

    /**
     * Set nombreEsquemaVac
     *
     * @param string $nombreEsquemaVac
     * @return EnfEsquemaVac
     */
    public function setNombreEsquemaVac($nombreEsquemaVac)
    {
        $this->nombreEsquemaVac = $nombreEsquemaVac;

        return $this;
    }

    /**
     * Get nombreEsquemaVac
     *
     * @return string 
     */
    public function getNombreEsquemaVac()
    {
        return $this->nombreEsquemaVac;
    }

    /**
     * Set edadMinima
     *
     * @param string $edadMinima
     * @return EnfEsquemaVac
     */
    public function setEdadMinima($edadMinima)
    {
        $this->edadMinima = $edadMinima;

        return $this;
    }

    /**
     * Get edadMinima
     *
     * @return string 
     */
    public function getEdadMinima()
    {
        return $this->edadMinima;
    }

    /**
     * Set edadMaxima
     *
     * @param string $edadMaxima
     * @return EnfEsquemaVac
     */
    public function setEdadMaxima($edadMaxima)
    {
        $this->edadMaxima = $edadMaxima;

        return $this;
    }

    /**
     * Get edadMaxima
     *
     * @return string 
     */
    public function getEdadMaxima()
    {
        return $this->edadMaxima;
    }

    /**
     * Set estadoVac
     *
     * @param boolean $estadoVac
     * @return EnfEsquemaVac
     */
    public function setEstadoVac($estadoVac)
    {
        $this->estadoVac = $estadoVac;

        return $this;
    }

    /**
     * Get estadoVac
     *
     * @return boolean 
     */
    public function getEstadoVac()
    {
        return $this->estadoVac;
    }

    /**
     * Set usuarioIngresoVac
     *
     * @param string $usuarioIngresoVac
     * @return EnfEsquemaVac
     */
    public function setUsuarioIngresoVac($usuarioIngresoVac)
    {
        $this->usuarioIngresoVac = $usuarioIngresoVac;

        return $this;
    }

    /**
     * Get usuarioIngresoVac
     *
     * @return string 
     */
    public function getUsuarioIngresoVac()
    {
        return $this->usuarioIngresoVac;
    }

    /**
     * Set fechaIngresoVac
     *
     * @param \DateTime $fechaIngresoVac
     * @return EnfEsquemaVac
     */
    public function setFechaIngresoVac($fechaIngresoVac)
    {
        $this->fechaIngresoVac = $fechaIngresoVac;

        return $this;
    }

    /**
     * Get fechaIngresoVac
     *
     * @return \DateTime 
     */
    public function getFechaIngresoVac()
    {
        return $this->fechaIngresoVac;
    }
    
     public function __toString() {
    return $this->nombreEsquemaVac ? $this->nombreEsquemaVac : '';
    }
}
