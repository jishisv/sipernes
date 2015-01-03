<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlDiagnostico
 *
 * @ORM\Table(name="enf_ctl_diagnostico", indexes={@ORM\Index(name="IDX_69BA9BD0F71AEDFE", columns={"id_clase"})})
 * @ORM\Entity
 */
class EnfCtlDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_diagnostico", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $codDiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_diagnostico", type="string", length=50, nullable=true)
     */
    private $nombreDiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_diag", type="string", length=500, nullable=true)
     */
    private $descripcionDiag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_ctl_diag", type="date", nullable=true)
     */
    private $fechaIngresoCtlDiag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_ctl_diag", type="date", nullable=true)
     */
    private $fechaModificacionCtlDiag;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ctl_diag", type="string", length=40, nullable=true)
     */
    private $usuarioCtlDiag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_ctl_diag", type="boolean", nullable=true)
     */
    private $estadoCtlDiag;

    /**
     * @var \EnfClase
     *
     * @ORM\ManyToOne(targetEntity="EnfClase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_clase", referencedColumnName="id")
     * })
     */
    private $idClase;



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
     * Set codDiagnostico
     *
     * @param string $codDiagnostico
     * @return EnfCtlDiagnostico
     */
    public function setCodDiagnostico($codDiagnostico)
    {
        $this->codDiagnostico = $codDiagnostico;

        return $this;
    }

    /**
     * Get codDiagnostico
     *
     * @return string 
     */
    public function getCodDiagnostico()
    {
        return $this->codDiagnostico;
    }

    /**
     * Set nombreDiagnostico
     *
     * @param string $nombreDiagnostico
     * @return EnfCtlDiagnostico
     */
    public function setNombreDiagnostico($nombreDiagnostico)
    {
        $this->nombreDiagnostico = $nombreDiagnostico;

        return $this;
    }

    /**
     * Get nombreDiagnostico
     *
     * @return string 
     */
    public function getNombreDiagnostico()
    {
        return $this->nombreDiagnostico;
    }

    /**
     * Set descripcionDiag
     *
     * @param string $descripcionDiag
     * @return EnfCtlDiagnostico
     */
    public function setDescripcionDiag($descripcionDiag)
    {
        $this->descripcionDiag = $descripcionDiag;

        return $this;
    }

    /**
     * Get descripcionDiag
     *
     * @return string 
     */
    public function getDescripcionDiag()
    {
        return $this->descripcionDiag;
    }

    /**
     * Set fechaIngresoCtlDiag
     *
     * @param \DateTime $fechaIngresoCtlDiag
     * @return EnfCtlDiagnostico
     */
    public function setFechaIngresoCtlDiag($fechaIngresoCtlDiag)
    {
        $this->fechaIngresoCtlDiag = $fechaIngresoCtlDiag;

        return $this;
    }

    /**
     * Get fechaIngresoCtlDiag
     *
     * @return \DateTime 
     */
    public function getFechaIngresoCtlDiag()
    {
        return $this->fechaIngresoCtlDiag;
    }

    /**
     * Set fechaModificacionCtlDiag
     *
     * @param \DateTime $fechaModificacionCtlDiag
     * @return EnfCtlDiagnostico
     */
    public function setFechaModificacionCtlDiag($fechaModificacionCtlDiag)
    {
        $this->fechaModificacionCtlDiag = $fechaModificacionCtlDiag;

        return $this;
    }

    /**
     * Get fechaModificacionCtlDiag
     *
     * @return \DateTime 
     */
    public function getFechaModificacionCtlDiag()
    {
        return $this->fechaModificacionCtlDiag;
    }

    /**
     * Set usuarioCtlDiag
     *
     * @param string $usuarioCtlDiag
     * @return EnfCtlDiagnostico
     */
    public function setUsuarioCtlDiag($usuarioCtlDiag)
    {
        $this->usuarioCtlDiag = $usuarioCtlDiag;

        return $this;
    }

    /**
     * Get usuarioCtlDiag
     *
     * @return string 
     */
    public function getUsuarioCtlDiag()
    {
        return $this->usuarioCtlDiag;
    }

    /**
     * Set estadoCtlDiag
     *
     * @param boolean $estadoCtlDiag
     * @return EnfCtlDiagnostico
     */
    public function setEstadoCtlDiag($estadoCtlDiag)
    {
        $this->estadoCtlDiag = $estadoCtlDiag;

        return $this;
    }

    /**
     * Get estadoCtlDiag
     *
     * @return boolean 
     */
    public function getEstadoCtlDiag()
    {
        return $this->estadoCtlDiag;
    }

    /**
     * Set idClase
     *
     * @param \Minsal\SipernesBundle\Entity\EnfClase $idClase
     * @return EnfCtlDiagnostico
     */
    public function setIdClase(\Minsal\SipernesBundle\Entity\EnfClase $idClase = null)
    {
        $this->idClase = $idClase;

        return $this;
    }

    /**
     * Get idClase
     *
     * @return \Minsal\SipernesBundle\Entity\EnfClase 
     */
    public function getIdClase()
    {
        return $this->idClase;
    }
    
     public function __toString() {
    return $this->nombreDiagnostico ? $this->nombreDiagnostico : '';
    }
}
