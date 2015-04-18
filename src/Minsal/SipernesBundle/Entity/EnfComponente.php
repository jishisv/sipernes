<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfComponente
 *
 * @ORM\Table(name="enf_componente", indexes={@ORM\Index(name="IDX_F8EF86BD6244810C", columns={"id_tipo_componente"})})
 * @ORM\Entity
 */
class EnfComponente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_componente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="presentacion", type="string", length=100, nullable=true)
     */
    private $presentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_componente", type="string", length=40, nullable=true)
     */
    private $usuarioComponente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_componente", type="date", nullable=true)
     */
    private $fechaIngresoComponente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_componente", type="date", nullable=true)
     */
    private $fechaModificacionComponente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_componente", type="boolean", nullable=true)
     */
    private $estadoComponente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_componente", type="string", length=50, nullable=true)
     */
    private $nombreComponente;

    /**
     * @var \EnfCtlTipoComponente
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlTipoComponente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_componente", referencedColumnName="id")
     * })
     */
    private $idTipoComponente;



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
     * Set presentacion
     *
     * @param string $presentacion
     * @return EnfComponente
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get presentacion
     *
     * @return string 
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set usuarioComponente
     *
     * @param string $usuarioComponente
     * @return EnfComponente
     */
    public function setUsuarioComponente($usuarioComponente)
    {
        $this->usuarioComponente = $usuarioComponente;

        return $this;
    }

    /**
     * Get usuarioComponente
     *
     * @return string 
     */
    public function getUsuarioComponente()
    {
        return $this->usuarioComponente;
    }

    /**
     * Set fechaIngresoComponente
     *
     * @param \DateTime $fechaIngresoComponente
     * @return EnfComponente
     */
    public function setFechaIngresoComponente($fechaIngresoComponente)
    {
        $this->fechaIngresoComponente = $fechaIngresoComponente;

        return $this;
    }

    /**
     * Get fechaIngresoComponente
     *
     * @return \DateTime 
     */
    public function getFechaIngresoComponente()
    {
        return $this->fechaIngresoComponente;
    }

    /**
     * Set fechaModificacionComponente
     *
     * @param \DateTime $fechaModificacionComponente
     * @return EnfComponente
     */
    public function setFechaModificacionComponente($fechaModificacionComponente)
    {
        $this->fechaModificacionComponente = $fechaModificacionComponente;

        return $this;
    }

    /**
     * Get fechaModificacionComponente
     *
     * @return \DateTime 
     */
    public function getFechaModificacionComponente()
    {
        return $this->fechaModificacionComponente;
    }

    /**
     * Set estadoComponente
     *
     * @param boolean $estadoComponente
     * @return EnfComponente
     */
    public function setEstadoComponente($estadoComponente)
    {
        $this->estadoComponente = $estadoComponente;

        return $this;
    }

    /**
     * Get estadoComponente
     *
     * @return boolean 
     */
    public function getEstadoComponente()
    {
        return $this->estadoComponente;
    }

    /**
     * Set nombreComponente
     *
     * @param string $nombreComponente
     * @return EnfComponente
     */
    public function setNombreComponente($nombreComponente)
    {
        $this->nombreComponente = $nombreComponente;

        return $this;
    }

    /**
     * Get nombreComponente
     *
     * @return string 
     */
    public function getNombreComponente()
    {
        return $this->nombreComponente;
    }

    /**
     * Set idTipoComponente
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlTipoComponente $idTipoComponente
     * @return EnfComponente
     */
    public function setIdTipoComponente(\Minsal\SipernesBundle\Entity\EnfCtlTipoComponente $idTipoComponente = null)
    {
        $this->idTipoComponente = $idTipoComponente;

        return $this;
    }

    /**
     * Get idTipoComponente
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlTipoComponente 
     */
    public function getIdTipoComponente()
    {
        return $this->idTipoComponente;
    }
    
    public function __toString() {
        return '';
    }
}
