<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfMtlIntervencion
 *
 * @ORM\Table(name="enf_mtl_intervencion", indexes={@ORM\Index(name="IDX_C272BD1F3FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_C272BD1F3F170EFF", columns={"id_intervencion"}), @ORM\Index(name="IDX_C272BD1F9B8420B7", columns={"id_sec_ingreso"})})
 * @ORM\Entity
 */
class EnfMtlIntervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_mtl_intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_interv", type="date", nullable=true)
     */
    private $fechaIngresoInterv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_interv", type="date", nullable=true)
     */
    private $fechaModificacionInterv;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_interv", type="string", length=500, nullable=true)
     */
    private $observacionInterv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="efectivo_interv", type="boolean", nullable=true)
     */
    private $efectivoInterv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_mtl_interv", type="boolean", nullable=true)
     */
    private $estadoMtlInterv;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emp_corr", referencedColumnName="id")
     * })
     */
    private $idEmpCorr;

    /**
     * @var \EnfCtlIntervencion
     *
     * @ORM\ManyToOne(targetEntity="EnfCtlIntervencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intervencion", referencedColumnName="id")
     * })
     */
    private $idIntervencion;

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
     * Set fechaIngresoInterv
     *
     * @param \DateTime $fechaIngresoInterv
     * @return EnfMtlIntervencion
     */
    public function setFechaIngresoInterv($fechaIngresoInterv)
    {
        $this->fechaIngresoInterv = $fechaIngresoInterv;

        return $this;
    }

    /**
     * Get fechaIngresoInterv
     *
     * @return \DateTime 
     */
    public function getFechaIngresoInterv()
    {
        return $this->fechaIngresoInterv;
    }

    /**
     * Set fechaModificacionInterv
     *
     * @param \DateTime $fechaModificacionInterv
     * @return EnfMtlIntervencion
     */
    public function setFechaModificacionInterv($fechaModificacionInterv)
    {
        $this->fechaModificacionInterv = $fechaModificacionInterv;

        return $this;
    }

    /**
     * Get fechaModificacionInterv
     *
     * @return \DateTime 
     */
    public function getFechaModificacionInterv()
    {
        return $this->fechaModificacionInterv;
    }

    /**
     * Set observacionInterv
     *
     * @param string $observacionInterv
     * @return EnfMtlIntervencion
     */
    public function setObservacionInterv($observacionInterv)
    {
        $this->observacionInterv = $observacionInterv;

        return $this;
    }

    /**
     * Get observacionInterv
     *
     * @return string 
     */
    public function getObservacionInterv()
    {
        return $this->observacionInterv;
    }

    /**
     * Set efectivoInterv
     *
     * @param boolean $efectivoInterv
     * @return EnfMtlIntervencion
     */
    public function setEfectivoInterv($efectivoInterv)
    {
        $this->efectivoInterv = $efectivoInterv;

        return $this;
    }

    /**
     * Get efectivoInterv
     *
     * @return boolean 
     */
    public function getEfectivoInterv()
    {
        return $this->efectivoInterv;
    }

    /**
     * Set estadoMtlInterv
     *
     * @param boolean $estadoMtlInterv
     * @return EnfMtlIntervencion
     */
    public function setEstadoMtlInterv($estadoMtlInterv)
    {
        $this->estadoMtlInterv = $estadoMtlInterv;

        return $this;
    }

    /**
     * Get estadoMtlInterv
     *
     * @return boolean 
     */
    public function getEstadoMtlInterv()
    {
        return $this->estadoMtlInterv;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfMtlIntervencion
     */
    public function setIdEmpCorr(\Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr = null)
    {
        $this->idEmpCorr = $idEmpCorr;

        return $this;
    }

    /**
     * Get idEmpCorr
     *
     * @return \Minsal\SipernesBundle\Entity\MntEmpleado 
     */
    public function getIdEmpCorr()
    {
        return $this->idEmpCorr;
    }

    /**
     * Set idIntervencion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfCtlIntervencion $idIntervencion
     * @return EnfMtlIntervencion
     */
    public function setIdIntervencion(\Minsal\SipernesBundle\Entity\EnfCtlIntervencion $idIntervencion = null)
    {
        $this->idIntervencion = $idIntervencion;

        return $this;
    }

    /**
     * Get idIntervencion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfCtlIntervencion 
     */
    public function getIdIntervencion()
    {
        return $this->idIntervencion;
    }

    /**
     * Set idSecIngreso
     *
     * @param \Minsal\SipernesBundle\Entity\SecIngreso $idSecIngreso
     * @return EnfMtlIntervencion
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
