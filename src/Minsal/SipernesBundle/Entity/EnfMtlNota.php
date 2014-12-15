<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMtlNota
 *
 * @ORM\Table(name="enf_mtl_nota", indexes={@ORM\Index(name="IDX_C7BCADA15F5B16B6", columns={"id_ctl_nota"}), @ORM\Index(name="IDX_C7BCADA1E007AEB5", columns={"id_sec_histo_clin"}), @ORM\Index(name="IDX_C7BCADA19B8420B7", columns={"id_sec_ingreso"})})
 * @ORM\Entity
 */
class EnfMtlNota
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mtl_nota_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_nota", type="date", nullable=true)
     */
    private $fechaModificacionNota;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_nota", type="string", length=40, nullable=true)
     */
    private $usuarioNota;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_nota", type="string", length=500, nullable=true)
     */
    private $observacionNota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mtl_nota", type="boolean", nullable=true)
     */
    private $estadoMtlNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_nota", type="date", nullable=true)
     */
    private $fechaIngresoNota;

    /**
     * @var \EnfCtlNota
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlNota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ctl_nota", referencedColumnName="id")
     * })
     */
    private $idCtlNota;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sec_histo_clin", referencedColumnName="id")
     * })
     */
    private $idSecHistoClin;

    /**
     * @var \SecIngreso
     *
     * @ORM\ManyToOne(targetEntity="SecIngreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sec_ingreso", referencedColumnName="id")
     * })
     */
    private $idSecIngreso;



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
     * Set fechaModificacionNota
     *
     * @param \DateTime $fechaModificacionNota
     * @return EnfMtlNota
     */
    public function setFechaModificacionNota($fechaModificacionNota)
    {
        $this->fechaModificacionNota = $fechaModificacionNota;

        return $this;
    }

    /**
     * Get fechaModificacionNota
     *
     * @return \DateTime 
     */
    public function getFechaModificacionNota()
    {
        return $this->fechaModificacionNota;
    }

    /**
     * Set usuarioNota
     *
     * @param string $usuarioNota
     * @return EnfMtlNota
     */
    public function setUsuarioNota($usuarioNota)
    {
        $this->usuarioNota = $usuarioNota;

        return $this;
    }

    /**
     * Get usuarioNota
     *
     * @return string 
     */
    public function getUsuarioNota()
    {
        return $this->usuarioNota;
    }

    /**
     * Set observacionNota
     *
     * @param string $observacionNota
     * @return EnfMtlNota
     */
    public function setObservacionNota($observacionNota)
    {
        $this->observacionNota = $observacionNota;

        return $this;
    }

    /**
     * Get observacionNota
     *
     * @return string 
     */
    public function getObservacionNota()
    {
        return $this->observacionNota;
    }

    /**
     * Set estadoMtlNota
     *
     * @param boolean $estadoMtlNota
     * @return EnfMtlNota
     */
    public function setEstadoMtlNota($estadoMtlNota)
    {
        $this->estadoMtlNota = $estadoMtlNota;

        return $this;
    }

    /**
     * Get estadoMtlNota
     *
     * @return boolean 
     */
    public function getEstadoMtlNota()
    {
        return $this->estadoMtlNota;
    }

    /**
     * Set fechaIngresoNota
     *
     * @param \DateTime $fechaIngresoNota
     * @return EnfMtlNota
     */
    public function setFechaIngresoNota($fechaIngresoNota)
    {
        $this->fechaIngresoNota = $fechaIngresoNota;

        return $this;
    }

    /**
     * Get fechaIngresoNota
     *
     * @return \DateTime 
     */
    public function getFechaIngresoNota()
    {
        return $this->fechaIngresoNota;
    }

    /**
     * Set idCtlNota
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlNota $idCtlNota
     * @return EnfMtlNota
     */
    public function setIdCtlNota(\Minsal\SipernesBundle\Entity\EnfCtlNota $idCtlNota = null)
    {
        $this->idCtlNota = $idCtlNota;

        return $this;
    }

    /**
     * Get idCtlNota
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlNota 
     */
    public function getIdCtlNota()
    {
        return $this->idCtlNota;
    }

    /**
     * Set idSecHistoClin
     *
     * @param \Minsal\SipernesBundle\Entity\SecHistorialClinico $idSecHistoClin
     * @return EnfMtlNota
     */
    public function setIdSecHistoClin(\Minsal\SipernesBundle\Entity\SecHistorialClinico $idSecHistoClin = null)
    {
        $this->idSecHistoClin = $idSecHistoClin;

        return $this;
    }

    /**
     * Get idSecHistoClin
     *
     * @return \Minsal\SipernesBundle\Entity\SecHistorialClinico 
     */
    public function getIdSecHistoClin()
    {
        return $this->idSecHistoClin;
    }

    /**
     * Set idSecIngreso
     *
     * @param \Minsal\SipernesBundle\Entity\SecIngreso $idSecIngreso
     * @return EnfMtlNota
     */
    public function setIdSecIngreso(\Minsal\SipernesBundle\Entity\SecIngreso $idSecIngreso = null)
    {
        $this->idSecIngreso = $idSecIngreso;

        return $this;
    }

    /**
     * Get idSecIngreso
     *
     * @return \Minsal\SipernesBundle\Entity\SecIngreso 
     */
    public function getIdSecIngreso()
    {
        return $this->idSecIngreso;
    }
}
