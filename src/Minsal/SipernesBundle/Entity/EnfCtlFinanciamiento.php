<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlFinanciamiento
 *
 * @ORM\Table(name="enf_ctl_financiamiento")
 * @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\CatalogoFinanciamientoRepository")
 */
class EnfCtlFinanciamiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_financiamiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_financiamiento", type="string", length=100, nullable=true)
     */
    private $nombreFinanciamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_finan", type="string", length=200, nullable=true)
     */
    private $usuarioFinan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_finan", type="date", nullable=true)
     */
    private $fechaIngresoFinan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_finan", type="date", nullable=true)
     */
    private $fechaModificacionFinan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_financiamiento", type="boolean", nullable=true)
     */
    private $estadoFinanciamiento;



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
     * Set nombreFinanciamiento
     *
     * @param string $nombreFinanciamiento
     * @return EnfCtlFinanciamiento
     */
    public function setNombreFinanciamiento($nombreFinanciamiento)
    {
        $this->nombreFinanciamiento = $nombreFinanciamiento;

        return $this;
    }

    /**
     * Get nombreFinanciamiento
     *
     * @return string 
     */
    public function getNombreFinanciamiento()
    {
        return $this->nombreFinanciamiento;
    }

    /**
     * Set usuarioFinan
     *
     * @param string $usuarioFinan
     * @return EnfCtlFinanciamiento
     */
    public function setUsuarioFinan($usuarioFinan)
    {
        $this->usuarioFinan = $usuarioFinan;

        return $this;
    }

    /**
     * Get usuarioFinan
     *
     * @return string 
     */
    public function getUsuarioFinan()
    {
        return $this->usuarioFinan;
    }

    /**
     * Set fechaIngresoFinan
     *
     * @param \DateTime $fechaIngresoFinan
     * @return EnfCtlFinanciamiento
     */
    public function setFechaIngresoFinan($fechaIngresoFinan)
    {
        $this->fechaIngresoFinan = $fechaIngresoFinan;

        return $this;
    }

    /**
     * Get fechaIngresoFinan
     *
     * @return \DateTime 
     */
    public function getFechaIngresoFinan()
    {
        return $this->fechaIngresoFinan;
    }

    /**
     * Set fechaModificacionFinan
     *
     * @param \DateTime $fechaModificacionFinan
     * @return EnfCtlFinanciamiento
     */
    public function setFechaModificacionFinan($fechaModificacionFinan)
    {
        $this->fechaModificacionFinan = $fechaModificacionFinan;

        return $this;
    }

    /**
     * Get fechaModificacionFinan
     *
     * @return \DateTime 
     */
    public function getFechaModificacionFinan()
    {
        return $this->fechaModificacionFinan;
    }

    /**
     * Set estadoFinanciamiento
     *
     * @param boolean $estadoFinanciamiento
     * @return EnfCtlFinanciamiento
     */
    public function setEstadoFinanciamiento($estadoFinanciamiento)
    {
        $this->estadoFinanciamiento = $estadoFinanciamiento;

        return $this;
    }

    /**
     * Get estadoFinanciamiento
     *
     * @return boolean 
     */
    public function getEstadoFinanciamiento()
    {
        return $this->estadoFinanciamiento;
    }
    
     public function __toString() {
    return $this->nombreFinanciamiento ? $this->nombreFinanciamiento : '';
    }
}
