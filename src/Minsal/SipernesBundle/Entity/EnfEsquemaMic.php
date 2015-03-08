<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfEsquemaMic
 *
 * @ORM\Table(name="enf_esquema_mic")
 * @ORM\Entity
 */
class EnfEsquemaMic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_esquema_mic_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="anio_esquema_mic", type="decimal", precision=4, scale=0, nullable=true)
     */
    private $anioEsquemaMic;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_esquema_mic", type="string", length=40, nullable=true)
     */
    private $nombreEsquemaMic;

    /**
     * @var string
     *
     * @ORM\Column(name="edad_minima_mic", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $edadMinimaMic;

    /**
     * @var string
     *
     * @ORM\Column(name="edad_maxima_mic", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $edadMaximaMic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mic", type="boolean", nullable=true)
     */
    private $estadoMic;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_mic", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoMic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_mic", type="date", nullable=true)
     */
    private $fechaIngresoMic;



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
     * Set anioEsquemaMic
     *
     * @param string $anioEsquemaMic
     * @return EnfEsquemaMic
     */
    public function setAnioEsquemaMic($anioEsquemaMic)
    {
        $this->anioEsquemaMic = $anioEsquemaMic;

        return $this;
    }

    /**
     * Get anioEsquemaMic
     *
     * @return string 
     */
    public function getAnioEsquemaMic()
    {
        return $this->anioEsquemaMic;
    }

    /**
     * Set nombreEsquemaMic
     *
     * @param string $nombreEsquemaMic
     * @return EnfEsquemaMic
     */
    public function setNombreEsquemaMic($nombreEsquemaMic)
    {
        $this->nombreEsquemaMic = $nombreEsquemaMic;

        return $this;
    }

    /**
     * Get nombreEsquemaMic
     *
     * @return string 
     */
    public function getNombreEsquemaMic()
    {
        return $this->nombreEsquemaMic;
    }

    /**
     * Set edadMinimaMic
     *
     * @param string $edadMinimaMic
     * @return EnfEsquemaMic
     */
    public function setEdadMinimaMic($edadMinimaMic)
    {
        $this->edadMinimaMic = $edadMinimaMic;

        return $this;
    }

    /**
     * Get edadMinimaMic
     *
     * @return string 
     */
    public function getEdadMinimaMic()
    {
        return $this->edadMinimaMic;
    }

    /**
     * Set edadMaximaMic
     *
     * @param string $edadMaximaMic
     * @return EnfEsquemaMic
     */
    public function setEdadMaximaMic($edadMaximaMic)
    {
        $this->edadMaximaMic = $edadMaximaMic;

        return $this;
    }

    /**
     * Get edadMaximaMic
     *
     * @return string 
     */
    public function getEdadMaximaMic()
    {
        return $this->edadMaximaMic;
    }

    /**
     * Set estadoMic
     *
     * @param boolean $estadoMic
     * @return EnfEsquemaMic
     */
    public function setEstadoMic($estadoMic)
    {
        $this->estadoMic = $estadoMic;

        return $this;
    }

    /**
     * Get estadoMic
     *
     * @return boolean 
     */
    public function getEstadoMic()
    {
        return $this->estadoMic;
    }

    /**
     * Set usuarioIngresoMic
     *
     * @param string $usuarioIngresoMic
     * @return EnfEsquemaMic
     */
    public function setUsuarioIngresoMic($usuarioIngresoMic)
    {
        $this->usuarioIngresoMic = $usuarioIngresoMic;

        return $this;
    }

    /**
     * Get usuarioIngresoMic
     *
     * @return string 
     */
    public function getUsuarioIngresoMic()
    {
        return $this->usuarioIngresoMic;
    }

    /**
     * Set fechaIngresoMic
     *
     * @param \DateTime $fechaIngresoMic
     * @return EnfEsquemaMic
     */
    public function setFechaIngresoMic($fechaIngresoMic)
    {
        $this->fechaIngresoMic = $fechaIngresoMic;

        return $this;
    }

    /**
     * Get fechaIngresoMic
     *
     * @return \DateTime 
     */
    public function getFechaIngresoMic()
    {
        return $this->fechaIngresoMic;
    }
    
     public function __toString() {
    return $this->nombreEsquemaMic ? $this->nombreEsquemaMic : '';
    }
    
}
