<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlActividad
 *
 * @ORM\Table(name="enf_ctl_actividad")
 * @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\CatalogoActividadRepository")
 */
class EnfCtlActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_actividad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_actividad", type="string", length=50, nullable=true)
     */
    private $nombreActividad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_act", type="boolean", nullable=true)
     */
    private $estadoAct;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_cat_act", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoCatAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_cat_act", type="date", nullable=true)
     */
    private $fechaIngresoCatAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_cat_act", type="date", nullable=true)
     */
    private $fechaModificacionCatAct;



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
     * Set nombreActividad
     *
     * @param string $nombreActividad
     * @return EnfCtlActividad
     */
    public function setNombreActividad($nombreActividad)
    {
        $this->nombreActividad = $nombreActividad;

        return $this;
    }

    /**
     * Get nombreActividad
     *
     * @return string 
     */
    public function getNombreActividad()
    {
        return $this->nombreActividad;
    }

    /**
     * Set estadoAct
     *
     * @param boolean $estadoAct
     * @return EnfCtlActividad
     */
    public function setEstadoAct($estadoAct)
    {
        $this->estadoAct = $estadoAct;

        return $this;
    }

    /**
     * Get estadoAct
     *
     * @return boolean 
     */
    public function getEstadoAct()
    {
        return $this->estadoAct;
    }

    /**
     * Set usuarioIngresoCatAct
     *
     * @param string $usuarioIngresoCatAct
     * @return EnfCtlActividad
     */
    public function setUsuarioIngresoCatAct($usuarioIngresoCatAct)
    {
        $this->usuarioIngresoCatAct = $usuarioIngresoCatAct;

        return $this;
    }

    /**
     * Get usuarioIngresoCatAct
     *
     * @return string 
     */
    public function getUsuarioIngresoCatAct()
    {
        return $this->usuarioIngresoCatAct;
    }

    /**
     * Set fechaIngresoCatAct
     *
     * @param \DateTime $fechaIngresoCatAct
     * @return EnfCtlActividad
     */
    public function setFechaIngresoCatAct($fechaIngresoCatAct)
    {
        $this->fechaIngresoCatAct = $fechaIngresoCatAct;

        return $this;
    }

    /**
     * Get fechaIngresoCatAct
     *
     * @return \DateTime 
     */
    public function getFechaIngresoCatAct()
    {
        return $this->fechaIngresoCatAct;
    }

    /**
     * Set fechaModificacionCatAct
     *
     * @param \DateTime $fechaModificacionCatAct
     * @return EnfCtlActividad
     */
    public function setFechaModificacionCatAct($fechaModificacionCatAct)
    {
        $this->fechaModificacionCatAct = $fechaModificacionCatAct;

        return $this;
    }

    /**
     * Get fechaModificacionCatAct
     *
     * @return \DateTime 
     */
    public function getFechaModificacionCatAct()
    {
        return $this->fechaModificacionCatAct;
    }
    
    public function __toString() {
    return $this->nombreActividad ? $this->nombreActividad : '';
    }
}
