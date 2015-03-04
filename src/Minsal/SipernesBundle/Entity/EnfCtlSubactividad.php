<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlSubactividad
 *
 * @ORM\Table(name="enf_ctl_subactividad", indexes={@ORM\Index(name="IDX_E7BB2606DC70121", columns={"id_actividad"})})
 * @ORM\Entity
 */
class EnfCtlSubactividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_subactividad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_subactividad", type="string", length=50, nullable=true)
     */
    private $nombreSubactividad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_subact", type="date", nullable=true)
     */
    private $fechaIngresoSubact;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_subact", type="date", nullable=true)
     */
    private $fechaModificacionSubact;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_subact", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoSubact;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_subact", type="boolean", nullable=true)
     */
    private $estadoSubact;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_subact", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidadSubact;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo_subact", type="time", nullable=true)
     */
    private $tiempoSubact;

    /**
     * @var \EnfCtlActividad
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlActividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_actividad", referencedColumnName="id")
     * })
     */
    private $idActividad;



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
     * Set nombreSubactividad
     *
     * @param string $nombreSubactividad
     * @return EnfCtlSubactividad
     */
    public function setNombreSubactividad($nombreSubactividad)
    {
        $this->nombreSubactividad = $nombreSubactividad;

        return $this;
    }

    /**
     * Get nombreSubactividad
     *
     * @return string 
     */
    public function getNombreSubactividad()
    {
        return $this->nombreSubactividad;
    }

    /**
     * Set fechaIngresoSubact
     *
     * @param \DateTime $fechaIngresoSubact
     * @return EnfCtlSubactividad
     */
    public function setFechaIngresoSubact($fechaIngresoSubact)
    {
        $this->fechaIngresoSubact = $fechaIngresoSubact;

        return $this;
    }

    /**
     * Get fechaIngresoSubact
     *
     * @return \DateTime 
     */
    public function getFechaIngresoSubact()
    {
        return $this->fechaIngresoSubact;
    }

    /**
     * Set fechaModificacionSubact
     *
     * @param \DateTime $fechaModificacionSubact
     * @return EnfCtlSubactividad
     */
    public function setFechaModificacionSubact($fechaModificacionSubact)
    {
        $this->fechaModificacionSubact = $fechaModificacionSubact;

        return $this;
    }

    /**
     * Get fechaModificacionSubact
     *
     * @return \DateTime 
     */
    public function getFechaModificacionSubact()
    {
        return $this->fechaModificacionSubact;
    }

    /**
     * Set usuarioIngresoSubact
     *
     * @param string $usuarioIngresoSubact
     * @return EnfCtlSubactividad
     */
    public function setUsuarioIngresoSubact($usuarioIngresoSubact)
    {
        $this->usuarioIngresoSubact = $usuarioIngresoSubact;

        return $this;
    }

    /**
     * Get usuarioIngresoSubact
     *
     * @return string 
     */
    public function getUsuarioIngresoSubact()
    {
        return $this->usuarioIngresoSubact;
    }

    /**
     * Set estadoSubact
     *
     * @param boolean $estadoSubact
     * @return EnfCtlSubactividad
     */
    public function setEstadoSubact($estadoSubact)
    {
        $this->estadoSubact = $estadoSubact;

        return $this;
    }

    /**
     * Get estadoSubact
     *
     * @return boolean 
     */
    public function getEstadoSubact()
    {
        return $this->estadoSubact;
    }

    /**
     * Set cantidadSubact
     *
     * @param string $cantidadSubact
     * @return EnfCtlSubactividad
     */
    public function setCantidadSubact($cantidadSubact)
    {
        $this->cantidadSubact = $cantidadSubact;

        return $this;
    }

    /**
     * Get cantidadSubact
     *
     * @return string 
     */
    public function getCantidadSubact()
    {
        return $this->cantidadSubact;
    }

    /**
     * Set tiempoSubact
     *
     * @param \DateTime $tiempoSubact
     * @return EnfCtlSubactividad
     */
    public function setTiempoSubact($tiempoSubact)
    {
        $this->tiempoSubact = $tiempoSubact;

        return $this;
    }

    /**
     * Get tiempoSubact
     *
     * @return \DateTime 
     */
    public function getTiempoSubact()
    {
        return $this->tiempoSubact;
    }

    /**
     * Set idActividad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlActividad $idActividad
     * @return EnfCtlSubactividad
     */
    public function setIdActividad(\Minsal\SipernesBundle\Entity\EnfCtlActividad $idActividad = null)
    {
        $this->idActividad = $idActividad;

        return $this;
    }

    /**
     * Get idActividad
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlActividad 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }
}
