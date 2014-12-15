<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfAnotacion
 *
 * @ORM\Table(name="enf_anotacion", indexes={@ORM\Index(name="IDX_CC29885ABFAE4CCD", columns={"id_registro_nota"})})
 * @ORM\Entity
 */
class EnfAnotacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_anotacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="edad_anotacion", type="string", length=1024, nullable=true)
     */
    private $edadAnotacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_anotacion", type="boolean", nullable=true)
     */
    private $estadoAnotacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_anotacion", type="string", length=40, nullable=true)
     */
    private $usuarioAnotacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_anota", type="date", nullable=true)
     */
    private $fechaIngresoAnota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_anota", type="date", nullable=true)
     */
    private $fechaModAnota;

    /**
     * @var \EnfMtlNota
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlNota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_nota", referencedColumnName="id")
     * })
     */
    private $idRegistroNota;



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
     * Set edadAnotacion
     *
     * @param string $edadAnotacion
     * @return EnfAnotacion
     */
    public function setEdadAnotacion($edadAnotacion)
    {
        $this->edadAnotacion = $edadAnotacion;

        return $this;
    }

    /**
     * Get edadAnotacion
     *
     * @return string 
     */
    public function getEdadAnotacion()
    {
        return $this->edadAnotacion;
    }

    /**
     * Set estadoAnotacion
     *
     * @param boolean $estadoAnotacion
     * @return EnfAnotacion
     */
    public function setEstadoAnotacion($estadoAnotacion)
    {
        $this->estadoAnotacion = $estadoAnotacion;

        return $this;
    }

    /**
     * Get estadoAnotacion
     *
     * @return boolean 
     */
    public function getEstadoAnotacion()
    {
        return $this->estadoAnotacion;
    }

    /**
     * Set usuarioAnotacion
     *
     * @param string $usuarioAnotacion
     * @return EnfAnotacion
     */
    public function setUsuarioAnotacion($usuarioAnotacion)
    {
        $this->usuarioAnotacion = $usuarioAnotacion;

        return $this;
    }

    /**
     * Get usuarioAnotacion
     *
     * @return string 
     */
    public function getUsuarioAnotacion()
    {
        return $this->usuarioAnotacion;
    }

    /**
     * Set fechaIngresoAnota
     *
     * @param \DateTime $fechaIngresoAnota
     * @return EnfAnotacion
     */
    public function setFechaIngresoAnota($fechaIngresoAnota)
    {
        $this->fechaIngresoAnota = $fechaIngresoAnota;

        return $this;
    }

    /**
     * Get fechaIngresoAnota
     *
     * @return \DateTime 
     */
    public function getFechaIngresoAnota()
    {
        return $this->fechaIngresoAnota;
    }

    /**
     * Set fechaModAnota
     *
     * @param \DateTime $fechaModAnota
     * @return EnfAnotacion
     */
    public function setFechaModAnota($fechaModAnota)
    {
        $this->fechaModAnota = $fechaModAnota;

        return $this;
    }

    /**
     * Get fechaModAnota
     *
     * @return \DateTime 
     */
    public function getFechaModAnota()
    {
        return $this->fechaModAnota;
    }

    /**
     * Set idRegistroNota
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota
     * @return EnfAnotacion
     */
    public function setIdRegistroNota(\Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota = null)
    {
        $this->idRegistroNota = $idRegistroNota;

        return $this;
    }

    /**
     * Get idRegistroNota
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlNota 
     */
    public function getIdRegistroNota()
    {
        return $this->idRegistroNota;
    }
}
