<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfModalidad
 *
 * @ORM\Table(name="enf_modalidad")
 * @ORM\Entity
 */
class EnfModalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_modalidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modalidad", type="string", length=50, nullable=true)
     */
    private $nombreModalidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mod", type="boolean", nullable=true)
     */
    private $estadoMod;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_mod", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_mod", type="date", nullable=true)
     */
    private $fechaIngresoMod;



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
     * Set nombreModalidad
     *
     * @param string $nombreModalidad
     * @return EnfModalidad
     */
    public function setNombreModalidad($nombreModalidad)
    {
        $this->nombreModalidad = $nombreModalidad;

        return $this;
    }

    /**
     * Get nombreModalidad
     *
     * @return string 
     */
    public function getNombreModalidad()
    {
        return $this->nombreModalidad;
    }

    /**
     * Set estadoMod
     *
     * @param boolean $estadoMod
     * @return EnfModalidad
     */
    public function setEstadoMod($estadoMod)
    {
        $this->estadoMod = $estadoMod;

        return $this;
    }

    /**
     * Get estadoMod
     *
     * @return boolean 
     */
    public function getEstadoMod()
    {
        return $this->estadoMod;
    }

    /**
     * Set usuarioIngresoMod
     *
     * @param string $usuarioIngresoMod
     * @return EnfModalidad
     */
    public function setUsuarioIngresoMod($usuarioIngresoMod)
    {
        $this->usuarioIngresoMod = $usuarioIngresoMod;

        return $this;
    }

    /**
     * Get usuarioIngresoMod
     *
     * @return string 
     */
    public function getUsuarioIngresoMod()
    {
        return $this->usuarioIngresoMod;
    }

    /**
     * Set fechaIngresoMod
     *
     * @param \DateTime $fechaIngresoMod
     * @return EnfModalidad
     */
    public function setFechaIngresoMod($fechaIngresoMod)
    {
        $this->fechaIngresoMod = $fechaIngresoMod;

        return $this;
    }

    /**
     * Get fechaIngresoMod
     *
     * @return \DateTime 
     */
    public function getFechaIngresoMod()
    {
        return $this->fechaIngresoMod;
    }
    
    public function __toString() {
    return $this->nombreModalidad ? $this->nombreModalidad : '';
    }
}
