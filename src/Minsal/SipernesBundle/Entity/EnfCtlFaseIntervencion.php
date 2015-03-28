<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlFaseIntervencion
 *
 * @ORM\Table(name="enf_ctl_fase_intervencion", indexes={@ORM\Index(name="IDX_3654D7AD3F170EFF", columns={"id_intervencion"})})
 * @ORM\Entity
 */
class EnfCtlFaseIntervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_fase_intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_fase", type="string", length=100, nullable=true)
     */
    private $nombreFase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_fase", type="date", nullable=true)
     */
    private $fechaIngresoFase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_fase", type="date", nullable=true)
     */
    private $fechaModificacionFase;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_fase", type="string", length=40, nullable=true)
     */
    private $usuarioFase;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_fase", type="boolean", nullable=true)
     */
    private $estadoFase;

    /**
     * @var \EnfCtlIntervencion
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlIntervencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intervencion", referencedColumnName="id")
     * })
     */
    private $idIntervencion;



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
     * Set nombreFase
     *
     * @param string $nombreFase
     * @return EnfCtlFaseIntervencion
     */
    public function setNombreFase($nombreFase)
    {
        $this->nombreFase = $nombreFase;

        return $this;
    }

    /**
     * Get nombreFase
     *
     * @return string 
     */
    public function getNombreFase()
    {
        return $this->nombreFase;
    }

    /**
     * Set fechaIngresoFase
     *
     * @param \DateTime $fechaIngresoFase
     * @return EnfCtlFaseIntervencion
     */
    public function setFechaIngresoFase($fechaIngresoFase)
    {
        $this->fechaIngresoFase = $fechaIngresoFase;

        return $this;
    }

    /**
     * Get fechaIngresoFase
     *
     * @return \DateTime 
     */
    public function getFechaIngresoFase()
    {
        return $this->fechaIngresoFase;
    }

    /**
     * Set fechaModificacionFase
     *
     * @param \DateTime $fechaModificacionFase
     * @return EnfCtlFaseIntervencion
     */
    public function setFechaModificacionFase($fechaModificacionFase)
    {
        $this->fechaModificacionFase = $fechaModificacionFase;

        return $this;
    }

    /**
     * Get fechaModificacionFase
     *
     * @return \DateTime 
     */
    public function getFechaModificacionFase()
    {
        return $this->fechaModificacionFase;
    }

    /**
     * Set usuarioFase
     *
     * @param string $usuarioFase
     * @return EnfCtlFaseIntervencion
     */
    public function setUsuarioFase($usuarioFase)
    {
        $this->usuarioFase = $usuarioFase;

        return $this;
    }

    /**
     * Get usuarioFase
     *
     * @return string 
     */
    public function getUsuarioFase()
    {
        return $this->usuarioFase;
    }

    /**
     * Set estadoFase
     *
     * @param boolean $estadoFase
     * @return EnfCtlFaseIntervencion
     */
    public function setEstadoFase($estadoFase)
    {
        $this->estadoFase = $estadoFase;

        return $this;
    }

    /**
     * Get estadoFase
     *
     * @return boolean 
     */
    public function getEstadoFase()
    {
        return $this->estadoFase;
    }

    /**
     * Set idIntervencion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlIntervencion $idIntervencion
     * @return EnfCtlFaseIntervencion
     */
    public function setIdIntervencion(\Minsal\SipernesBundle\Entity\EnfCtlIntervencion $idIntervencion = null)
    {
        $this->idIntervencion = $idIntervencion;

        return $this;
    }

    /**
     * Get idIntervencion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlIntervencion 
     */
    public function getIdIntervencion()
    {
        return $this->idIntervencion;
    }
    
    public function __toString() {
        return '';
    }
}
