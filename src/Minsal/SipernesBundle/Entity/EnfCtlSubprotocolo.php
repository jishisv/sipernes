<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlSubprotocolo
 *
 * @ORM\Table(name="enf_ctl_subprotocolo", indexes={@ORM\Index(name="IDX_1AE4C543F098E264", columns={"id_protocolo"})})
 * @ORM\Entity
 */
class EnfCtlSubprotocolo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_subprotocolo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=500, nullable=true)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="etiologia", type="string", length=100, nullable=true)
     */
    private $etiologia;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_subprotocolo", type="string", length=150, nullable=true)
     */
    private $nombreSubprotocolo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_subpro", type="date", nullable=true)
     */
    private $fechaIngresoSubpro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_subpro", type="date", nullable=true)
     */
    private $fechaModificacionSubpro;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_subpro", type="string", length=40, nullable=true)
     */
    private $usuarioSubpro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_subpro", type="boolean", nullable=true)
     */
    private $estadoSubpro;

    /**
     * @var \EnfCtlProtocolo
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlProtocolo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_protocolo", referencedColumnName="id")
     * })
     */
    private $idProtocolo;



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
     * Set concepto
     *
     * @param string $concepto
     * @return EnfCtlSubprotocolo
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string 
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set etiologia
     *
     * @param string $etiologia
     * @return EnfCtlSubprotocolo
     */
    public function setEtiologia($etiologia)
    {
        $this->etiologia = $etiologia;

        return $this;
    }

    /**
     * Get etiologia
     *
     * @return string 
     */
    public function getEtiologia()
    {
        return $this->etiologia;
    }

    /**
     * Set nombreSubprotocolo
     *
     * @param string $nombreSubprotocolo
     * @return EnfCtlSubprotocolo
     */
    public function setNombreSubprotocolo($nombreSubprotocolo)
    {
        $this->nombreSubprotocolo = $nombreSubprotocolo;

        return $this;
    }

    /**
     * Get nombreSubprotocolo
     *
     * @return string 
     */
    public function getNombreSubprotocolo()
    {
        return $this->nombreSubprotocolo;
    }

    /**
     * Set fechaIngresoSubpro
     *
     * @param \DateTime $fechaIngresoSubpro
     * @return EnfCtlSubprotocolo
     */
    public function setFechaIngresoSubpro($fechaIngresoSubpro)
    {
        $this->fechaIngresoSubpro = $fechaIngresoSubpro;

        return $this;
    }

    /**
     * Get fechaIngresoSubpro
     *
     * @return \DateTime 
     */
    public function getFechaIngresoSubpro()
    {
        return $this->fechaIngresoSubpro;
    }

    /**
     * Set fechaModificacionSubpro
     *
     * @param \DateTime $fechaModificacionSubpro
     * @return EnfCtlSubprotocolo
     */
    public function setFechaModificacionSubpro($fechaModificacionSubpro)
    {
        $this->fechaModificacionSubpro = $fechaModificacionSubpro;

        return $this;
    }

    /**
     * Get fechaModificacionSubpro
     *
     * @return \DateTime 
     */
    public function getFechaModificacionSubpro()
    {
        return $this->fechaModificacionSubpro;
    }

    /**
     * Set usuarioSubpro
     *
     * @param string $usuarioSubpro
     * @return EnfCtlSubprotocolo
     */
    public function setUsuarioSubpro($usuarioSubpro)
    {
        $this->usuarioSubpro = $usuarioSubpro;

        return $this;
    }

    /**
     * Get usuarioSubpro
     *
     * @return string 
     */
    public function getUsuarioSubpro()
    {
        return $this->usuarioSubpro;
    }

    /**
     * Set estadoSubpro
     *
     * @param boolean $estadoSubpro
     * @return EnfCtlSubprotocolo
     */
    public function setEstadoSubpro($estadoSubpro)
    {
        $this->estadoSubpro = $estadoSubpro;

        return $this;
    }

    /**
     * Get estadoSubpro
     *
     * @return boolean 
     */
    public function getEstadoSubpro()
    {
        return $this->estadoSubpro;
    }

    /**
     * Set idProtocolo
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlProtocolo $idProtocolo
     * @return EnfCtlSubprotocolo
     */
    public function setIdProtocolo(\Minsal\SipernesBundle\Entity\EnfCtlProtocolo $idProtocolo = null)
    {
        $this->idProtocolo = $idProtocolo;

        return $this;
    }

    /**
     * Get idProtocolo
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlProtocolo 
     */
    public function getIdProtocolo()
    {
        return $this->idProtocolo;
    }
    
    public function __toString() {
    return $this->nombreSubprotocolo ? $this->nombreSubprotocolo : '';
    }
}
