<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfBitacoraIntervencion
 *
 * @ORM\Table(name="enf_bitacora_intervencion", indexes={@ORM\Index(name="IDX_FB496741675DADD6", columns={"id_registro_intervencion"})})
 * @ORM\Entity
 */
class EnfBitacoraIntervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_bitacora_intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_hist_interv", type="string", length=500, nullable=true)
     */
    private $observacionHistInterv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_inter", type="date", nullable=true)
     */
    private $fechaIngresoHistInter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_hist_interv", type="date", nullable=true)
     */
    private $fechaModificacionHistInterv;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_hist_interv", type="string", length=40, nullable=true)
     */
    private $usuarioHistInterv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="efectivo_hist_interv", type="boolean", nullable=true)
     */
    private $efectivoHistInterv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_hist_interv", type="boolean", nullable=true)
     */
    private $estadoHistInterv;

    /**
     * @var \EnfMtlIntervencion
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlIntervencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_intervencion", referencedColumnName="id")
     * })
     */
    private $idRegistroIntervencion;



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
     * Set observacionHistInterv
     *
     * @param string $observacionHistInterv
     * @return EnfBitacoraIntervencion
     */
    public function setObservacionHistInterv($observacionHistInterv)
    {
        $this->observacionHistInterv = $observacionHistInterv;

        return $this;
    }

    /**
     * Get observacionHistInterv
     *
     * @return string 
     */
    public function getObservacionHistInterv()
    {
        return $this->observacionHistInterv;
    }

    /**
     * Set fechaIngresoHistInter
     *
     * @param \DateTime $fechaIngresoHistInter
     * @return EnfBitacoraIntervencion
     */
    public function setFechaIngresoHistInter($fechaIngresoHistInter)
    {
        $this->fechaIngresoHistInter = $fechaIngresoHistInter;

        return $this;
    }

    /**
     * Get fechaIngresoHistInter
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistInter()
    {
        return $this->fechaIngresoHistInter;
    }

    /**
     * Set fechaModificacionHistInterv
     *
     * @param \DateTime $fechaModificacionHistInterv
     * @return EnfBitacoraIntervencion
     */
    public function setFechaModificacionHistInterv($fechaModificacionHistInterv)
    {
        $this->fechaModificacionHistInterv = $fechaModificacionHistInterv;

        return $this;
    }

    /**
     * Get fechaModificacionHistInterv
     *
     * @return \DateTime 
     */
    public function getFechaModificacionHistInterv()
    {
        return $this->fechaModificacionHistInterv;
    }

    /**
     * Set usuarioHistInterv
     *
     * @param string $usuarioHistInterv
     * @return EnfBitacoraIntervencion
     */
    public function setUsuarioHistInterv($usuarioHistInterv)
    {
        $this->usuarioHistInterv = $usuarioHistInterv;

        return $this;
    }

    /**
     * Get usuarioHistInterv
     *
     * @return string 
     */
    public function getUsuarioHistInterv()
    {
        return $this->usuarioHistInterv;
    }

    /**
     * Set efectivoHistInterv
     *
     * @param boolean $efectivoHistInterv
     * @return EnfBitacoraIntervencion
     */
    public function setEfectivoHistInterv($efectivoHistInterv)
    {
        $this->efectivoHistInterv = $efectivoHistInterv;

        return $this;
    }

    /**
     * Get efectivoHistInterv
     *
     * @return boolean 
     */
    public function getEfectivoHistInterv()
    {
        return $this->efectivoHistInterv;
    }

    /**
     * Set estadoHistInterv
     *
     * @param boolean $estadoHistInterv
     * @return EnfBitacoraIntervencion
     */
    public function setEstadoHistInterv($estadoHistInterv)
    {
        $this->estadoHistInterv = $estadoHistInterv;

        return $this;
    }

    /**
     * Get estadoHistInterv
     *
     * @return boolean 
     */
    public function getEstadoHistInterv()
    {
        return $this->estadoHistInterv;
    }

    /**
     * Set idRegistroIntervencion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlIntervencion $idRegistroIntervencion
     * @return EnfBitacoraIntervencion
     */
    public function setIdRegistroIntervencion(\Minsal\SipernesBundle\Entity\EnfMtlIntervencion $idRegistroIntervencion = null)
    {
        $this->idRegistroIntervencion = $idRegistroIntervencion;

        return $this;
    }

    /**
     * Get idRegistroIntervencion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlIntervencion 
     */
    public function getIdRegistroIntervencion()
    {
        return $this->idRegistroIntervencion;
    }
}
