<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmFormItem
 *
 * @ORM\Table(name="frm_form_item", indexes={@ORM\Index(name="IDX_D77F6F37AAE0DD79", columns={"id_tipo_objeto"})})
 * @ORM\Entity
 */
class FrmFormItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_form_item_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_descriptivo", type="text", nullable=false)
     */
    private $nombreDescriptivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_origen", type="integer", nullable=false)
     */
    private $tipoOrigen;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje_ayuda", type="text", nullable=true)
     */
    private $mensajeAyuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="inscripcion", type="integer", nullable=true)
     */
    private $inscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="validacion_especial", type="text", nullable=true)
     */
    private $validacionEspecial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio = 'now';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var \CtlTipoObjeto
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoObjeto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_objeto", referencedColumnName="id")
     * })
     */
    private $idTipoObjeto;



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
     * Set nombreDescriptivo
     *
     * @param string $nombreDescriptivo
     * @return FrmFormItem
     */
    public function setNombreDescriptivo($nombreDescriptivo)
    {
        $this->nombreDescriptivo = $nombreDescriptivo;

        return $this;
    }

    /**
     * Get nombreDescriptivo
     *
     * @return string 
     */
    public function getNombreDescriptivo()
    {
        return $this->nombreDescriptivo;
    }

    /**
     * Set tipoOrigen
     *
     * @param integer $tipoOrigen
     * @return FrmFormItem
     */
    public function setTipoOrigen($tipoOrigen)
    {
        $this->tipoOrigen = $tipoOrigen;

        return $this;
    }

    /**
     * Get tipoOrigen
     *
     * @return integer 
     */
    public function getTipoOrigen()
    {
        return $this->tipoOrigen;
    }

    /**
     * Set mensajeAyuda
     *
     * @param string $mensajeAyuda
     * @return FrmFormItem
     */
    public function setMensajeAyuda($mensajeAyuda)
    {
        $this->mensajeAyuda = $mensajeAyuda;

        return $this;
    }

    /**
     * Get mensajeAyuda
     *
     * @return string 
     */
    public function getMensajeAyuda()
    {
        return $this->mensajeAyuda;
    }

    /**
     * Set inscripcion
     *
     * @param integer $inscripcion
     * @return FrmFormItem
     */
    public function setInscripcion($inscripcion)
    {
        $this->inscripcion = $inscripcion;

        return $this;
    }

    /**
     * Get inscripcion
     *
     * @return integer 
     */
    public function getInscripcion()
    {
        return $this->inscripcion;
    }

    /**
     * Set validacionEspecial
     *
     * @param string $validacionEspecial
     * @return FrmFormItem
     */
    public function setValidacionEspecial($validacionEspecial)
    {
        $this->validacionEspecial = $validacionEspecial;

        return $this;
    }

    /**
     * Get validacionEspecial
     *
     * @return string 
     */
    public function getValidacionEspecial()
    {
        return $this->validacionEspecial;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return FrmFormItem
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return FrmFormItem
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return FrmFormItem
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set idTipoObjeto
     *
     * @param \Minsal\shcpBundle\Entity\CtlTipoObjeto $idTipoObjeto
     * @return FrmFormItem
     */
    public function setIdTipoObjeto(\Minsal\shcpBundle\Entity\CtlTipoObjeto $idTipoObjeto = null)
    {
        $this->idTipoObjeto = $idTipoObjeto;

        return $this;
    }

    /**
     * Get idTipoObjeto
     *
     * @return \Minsal\shcpBundle\Entity\CtlTipoObjeto 
     */
    public function getIdTipoObjeto()
    {
        return $this->idTipoObjeto;
    }
}
