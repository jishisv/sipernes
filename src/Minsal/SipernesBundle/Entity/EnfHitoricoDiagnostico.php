<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfHitoricoDiagnostico
 *
 * @ORM\Table(name="enf_hitorico_diagnostico", indexes={@ORM\Index(name="IDX_C17FEDB9A48933A", columns={"id_registro_diag"})})
 * @ORM\Entity
 */
class EnfHitoricoDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_hitorico_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_hist", type="string", length=500, nullable=true)
     */
    private $observacionHist;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_hist_diag", type="string", length=40, nullable=true)
     */
    private $usuarioHistDiag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_diag", type="date", nullable=true)
     */
    private $fechaIngresoHistDiag;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_hist_diag", type="date", nullable=true)
     */
    private $fechaModificacionHistDiag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_hist_diag", type="boolean", nullable=true)
     */
    private $estadoHistDiag;

    /**
     * @var \EnfMtlDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_diag", referencedColumnName="id")
     * })
     */
    private $idRegistroDiag;



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
     * Set observacionHist
     *
     * @param string $observacionHist
     * @return EnfHitoricoDiagnostico
     */
    public function setObservacionHist($observacionHist)
    {
        $this->observacionHist = $observacionHist;

        return $this;
    }

    /**
     * Get observacionHist
     *
     * @return string 
     */
    public function getObservacionHist()
    {
        return $this->observacionHist;
    }

    /**
     * Set usuarioHistDiag
     *
     * @param string $usuarioHistDiag
     * @return EnfHitoricoDiagnostico
     */
    public function setUsuarioHistDiag($usuarioHistDiag)
    {
        $this->usuarioHistDiag = $usuarioHistDiag;

        return $this;
    }

    /**
     * Get usuarioHistDiag
     *
     * @return string 
     */
    public function getUsuarioHistDiag()
    {
        return $this->usuarioHistDiag;
    }

    /**
     * Set fechaIngresoHistDiag
     *
     * @param \DateTime $fechaIngresoHistDiag
     * @return EnfHitoricoDiagnostico
     */
    public function setFechaIngresoHistDiag($fechaIngresoHistDiag)
    {
        $this->fechaIngresoHistDiag = $fechaIngresoHistDiag;

        return $this;
    }

    /**
     * Get fechaIngresoHistDiag
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistDiag()
    {
        return $this->fechaIngresoHistDiag;
    }

    /**
     * Set fechaModificacionHistDiag
     *
     * @param \DateTime $fechaModificacionHistDiag
     * @return EnfHitoricoDiagnostico
     */
    public function setFechaModificacionHistDiag($fechaModificacionHistDiag)
    {
        $this->fechaModificacionHistDiag = $fechaModificacionHistDiag;

        return $this;
    }

    /**
     * Get fechaModificacionHistDiag
     *
     * @return \DateTime 
     */
    public function getFechaModificacionHistDiag()
    {
        return $this->fechaModificacionHistDiag;
    }

    /**
     * Set estadoHistDiag
     *
     * @param boolean $estadoHistDiag
     * @return EnfHitoricoDiagnostico
     */
    public function setEstadoHistDiag($estadoHistDiag)
    {
        $this->estadoHistDiag = $estadoHistDiag;

        return $this;
    }

    /**
     * Get estadoHistDiag
     *
     * @return boolean 
     */
    public function getEstadoHistDiag()
    {
        return $this->estadoHistDiag;
    }

    /**
     * Set idRegistroDiag
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlDiagnostico $idRegistroDiag
     * @return EnfHitoricoDiagnostico
     */
    public function setIdRegistroDiag(\Minsal\SipernesBundle\Entity\EnfMtlDiagnostico $idRegistroDiag = null)
    {
        $this->idRegistroDiag = $idRegistroDiag;

        return $this;
    }

    /**
     * Get idRegistroDiag
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlDiagnostico 
     */
    public function getIdRegistroDiag()
    {
        return $this->idRegistroDiag;
    }
}
