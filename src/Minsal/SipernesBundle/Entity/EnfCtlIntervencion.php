<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlIntervencion
 *
 * @ORM\Table(name="enf_ctl_intervencion", indexes={@ORM\Index(name="IDX_E2F04BB4C7038008", columns={"id_subprotocolo"})})
 * @ORM\Entity
 */
class EnfCtlIntervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_interven", type="string", length=500, nullable=true)
     */
    private $descripcionInterven;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_interven", type="date", nullable=true)
     */
    private $fechaIngresoInterven;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_interven", type="string", length=40, nullable=true)
     */
    private $usuarioInterven;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_interven", type="date", nullable=true)
     */
    private $fechaModificacionInterven;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_clt_interv", type="boolean", nullable=true)
     */
    private $estadoCltInterv;

    /**
     * @var \EnfCtlSubprotocolo
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlSubprotocolo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_subprotocolo", referencedColumnName="id")
     * })
     */
    private $idSubprotocolo;



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
     * Set descripcionInterven
     *
     * @param string $descripcionInterven
     * @return EnfCtlIntervencion
     */
    public function setDescripcionInterven($descripcionInterven)
    {
        $this->descripcionInterven = $descripcionInterven;

        return $this;
    }

    /**
     * Get descripcionInterven
     *
     * @return string 
     */
    public function getDescripcionInterven()
    {
        return $this->descripcionInterven;
    }

    /**
     * Set fechaIngresoInterven
     *
     * @param \DateTime $fechaIngresoInterven
     * @return EnfCtlIntervencion
     */
    public function setFechaIngresoInterven($fechaIngresoInterven)
    {
        $this->fechaIngresoInterven = $fechaIngresoInterven;

        return $this;
    }

    /**
     * Get fechaIngresoInterven
     *
     * @return \DateTime 
     */
    public function getFechaIngresoInterven()
    {
        return $this->fechaIngresoInterven;
    }

    /**
     * Set usuarioInterven
     *
     * @param string $usuarioInterven
     * @return EnfCtlIntervencion
     */
    public function setUsuarioInterven($usuarioInterven)
    {
        $this->usuarioInterven = $usuarioInterven;

        return $this;
    }

    /**
     * Get usuarioInterven
     *
     * @return string 
     */
    public function getUsuarioInterven()
    {
        return $this->usuarioInterven;
    }

    /**
     * Set fechaModificacionInterven
     *
     * @param \DateTime $fechaModificacionInterven
     * @return EnfCtlIntervencion
     */
    public function setFechaModificacionInterven($fechaModificacionInterven)
    {
        $this->fechaModificacionInterven = $fechaModificacionInterven;

        return $this;
    }

    /**
     * Get fechaModificacionInterven
     *
     * @return \DateTime 
     */
    public function getFechaModificacionInterven()
    {
        return $this->fechaModificacionInterven;
    }

    /**
     * Set estadoCltInterv
     *
     * @param boolean $estadoCltInterv
     * @return EnfCtlIntervencion
     */
    public function setEstadoCltInterv($estadoCltInterv)
    {
        $this->estadoCltInterv = $estadoCltInterv;

        return $this;
    }

    /**
     * Get estadoCltInterv
     *
     * @return boolean 
     */
    public function getEstadoCltInterv()
    {
        return $this->estadoCltInterv;
    }

    /**
     * Set idSubprotocolo
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlSubprotocolo $idSubprotocolo
     * @return EnfCtlIntervencion
     */
    public function setIdSubprotocolo(\Minsal\SipernesBundle\Entity\EnfCtlSubprotocolo $idSubprotocolo = null)
    {
        $this->idSubprotocolo = $idSubprotocolo;

        return $this;
    }

    /**
     * Get idSubprotocolo
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlSubprotocolo 
     */
    public function getIdSubprotocolo()
    {
        return $this->idSubprotocolo;
    }
    
    public function __toString() {
    return $this->descripcionInterven ? $this->descripcionInterven : '';
    }
}
