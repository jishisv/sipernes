<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlNota
 *
 * @ORM\Table(name="enf_ctl_nota")
 * @ORM\Entity
 */
class EnfCtlNota
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_nota_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_nota", type="string", length=20, nullable=true)
     */
    private $tipoNota;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_nota", type="string", length=50, nullable=true)
     */
    private $nombreNota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_ctl_nota", type="boolean", nullable=true)
     */
    private $estadoCtlNota;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ctl_nota", type="string", length=40, nullable=true)
     */
    private $usuarioCtlNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_ctl_nota", type="date", nullable=true)
     */
    private $fechaIngresoCtlNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_ctl_nota", type="date", nullable=true)
     */
    private $fechaModCtlNota;



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
     * Set tipoNota
     *
     * @param string $tipoNota
     * @return EnfCtlNota
     */
    public function setTipoNota($tipoNota)
    {
        $this->tipoNota = $tipoNota;

        return $this;
    }

    /**
     * Get tipoNota
     *
     * @return string 
     */
    public function getTipoNota()
    {
        return $this->tipoNota;
    }

    /**
     * Set nombreNota
     *
     * @param string $nombreNota
     * @return EnfCtlNota
     */
    public function setNombreNota($nombreNota)
    {
        $this->nombreNota = $nombreNota;

        return $this;
    }

    /**
     * Get nombreNota
     *
     * @return string 
     */
    public function getNombreNota()
    {
        return $this->nombreNota;
    }

    /**
     * Set estadoCtlNota
     *
     * @param boolean $estadoCtlNota
     * @return EnfCtlNota
     */
    public function setEstadoCtlNota($estadoCtlNota)
    {
        $this->estadoCtlNota = $estadoCtlNota;

        return $this;
    }

    /**
     * Get estadoCtlNota
     *
     * @return boolean 
     */
    public function getEstadoCtlNota()
    {
        return $this->estadoCtlNota;
    }

    /**
     * Set usuarioCtlNota
     *
     * @param string $usuarioCtlNota
     * @return EnfCtlNota
     */
    public function setUsuarioCtlNota($usuarioCtlNota)
    {
        $this->usuarioCtlNota = $usuarioCtlNota;

        return $this;
    }

    /**
     * Get usuarioCtlNota
     *
     * @return string 
     */
    public function getUsuarioCtlNota()
    {
        return $this->usuarioCtlNota;
    }

    /**
     * Set fechaIngresoCtlNota
     *
     * @param \DateTime $fechaIngresoCtlNota
     * @return EnfCtlNota
     */
    public function setFechaIngresoCtlNota($fechaIngresoCtlNota)
    {
        $this->fechaIngresoCtlNota = $fechaIngresoCtlNota;

        return $this;
    }

    /**
     * Get fechaIngresoCtlNota
     *
     * @return \DateTime 
     */
    public function getFechaIngresoCtlNota()
    {
        return $this->fechaIngresoCtlNota;
    }

    /**
     * Set fechaModCtlNota
     *
     * @param \DateTime $fechaModCtlNota
     * @return EnfCtlNota
     */
    public function setFechaModCtlNota($fechaModCtlNota)
    {
        $this->fechaModCtlNota = $fechaModCtlNota;

        return $this;
    }

    /**
     * Get fechaModCtlNota
     *
     * @return \DateTime 
     */
    public function getFechaModCtlNota()
    {
        return $this->fechaModCtlNota;
    }
    
    public function __toString() {
        return '';
    }
}
