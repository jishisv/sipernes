<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlProtocolo
 *
 * @ORM\Table(name="enf_ctl_protocolo")
 *  @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\CatalogoProtRepository")
 */
class EnfCtlProtocolo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_protocolo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_protocolo", type="string", length=150, nullable=true)
     */
    private $nombreProtocolo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_proto", type="date", nullable=true)
     */
    private $fechaIngresoProto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_proto", type="date", nullable=true)
     */
    private $fechaModificacionProto;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_proto", type="string", length=40, nullable=true)
     */
    private $usuarioProto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_prot", type="boolean", nullable=true)
     */
    private $estadoProt;



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
     * Set nombreProtocolo
     *
     * @param string $nombreProtocolo
     * @return EnfCtlProtocolo
     */
    public function setNombreProtocolo($nombreProtocolo)
    {
        $this->nombreProtocolo = $nombreProtocolo;

        return $this;
    }

    /**
     * Get nombreProtocolo
     *
     * @return string 
     */
    public function getNombreProtocolo()
    {
        return $this->nombreProtocolo;
    }

    /**
     * Set fechaIngresoProto
     *
     * @param \DateTime $fechaIngresoProto
     * @return EnfCtlProtocolo
     */
    public function setFechaIngresoProto($fechaIngresoProto)
    {
        $this->fechaIngresoProto = $fechaIngresoProto;

        return $this;
    }

    /**
     * Get fechaIngresoProto
     *
     * @return \DateTime 
     */
    public function getFechaIngresoProto()
    {
        return $this->fechaIngresoProto;
    }

    /**
     * Set fechaModificacionProto
     *
     * @param \DateTime $fechaModificacionProto
     * @return EnfCtlProtocolo
     */
    public function setFechaModificacionProto($fechaModificacionProto)
    {
        $this->fechaModificacionProto = $fechaModificacionProto;

        return $this;
    }

    /**
     * Get fechaModificacionProto
     *
     * @return \DateTime 
     */
    public function getFechaModificacionProto()
    {
        return $this->fechaModificacionProto;
    }

    /**
     * Set usuarioProto
     *
     * @param string $usuarioProto
     * @return EnfCtlProtocolo
     */
    public function setUsuarioProto($usuarioProto)
    {
        $this->usuarioProto = $usuarioProto;

        return $this;
    }

    /**
     * Get usuarioProto
     *
     * @return string 
     */
    public function getUsuarioProto()
    {
        return $this->usuarioProto;
    }

    /**
     * Set estadoProt
     *
     * @param boolean $estadoProt
     * @return EnfCtlProtocolo
     */
    public function setEstadoProt($estadoProt)
    {
        $this->estadoProt = $estadoProt;

        return $this;
    }

    /**
     * Get estadoProt
     *
     * @return boolean 
     */
    public function getEstadoProt()
    {
        return $this->estadoProt;
    }
    
     public function __toString() {
    return $this->nombreProtocolo ? $this->nombreProtocolo : '';
    }
}
