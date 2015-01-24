<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecSignosVitales
 *
 * @ORM\Table(name="sec_signos_vitales", indexes={@ORM\Index(name="IDX_9222FCE33FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_9222FCE3701624C4", columns={"id_expediente"})})
 * @ORM\Entity
 */
class SecSignosVitales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_signos_vitales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="frecuencia_cardiaca", type="string", length=10, nullable=true)
     */
    private $frecuenciaCardiaca;

    /**
     * @var string
     *
     * @ORM\Column(name="presion_arterial", type="string", length=10, nullable=true)
     */
    private $presionArterial;

    /**
     * @var string
     *
     * @ORM\Column(name="frecuencia_respiratoria", type="string", length=6, nullable=true)
     */
    private $frecuenciaRespiratoria;

    /**
     * @var float
     *
     * @ORM\Column(name="peso", type="float", precision=10, scale=0, nullable=true)
     */
    private $peso;

    /**
     * @var float
     *
     * @ORM\Column(name="talla", type="float", precision=10, scale=0, nullable=true)
     */
    private $talla;

    /**
     * @var float
     *
     * @ORM\Column(name="temperatura", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperatura;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_sig", type="string", length=500, nullable=true)
     */
    private $observacionSig;

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
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;



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
     * Set frecuenciaCardiaca
     *
     * @param string $frecuenciaCardiaca
     * @return SecSignosVitales
     */
    public function setFrecuenciaCardiaca($frecuenciaCardiaca)
    {
        $this->frecuenciaCardiaca = $frecuenciaCardiaca;

        return $this;
    }

    /**
     * Get frecuenciaCardiaca
     *
     * @return string 
     */
    public function getFrecuenciaCardiaca()
    {
        return $this->frecuenciaCardiaca;
    }

    /**
     * Set presionArterial
     *
     * @param string $presionArterial
     * @return SecSignosVitales
     */
    public function setPresionArterial($presionArterial)
    {
        $this->presionArterial = $presionArterial;

        return $this;
    }

    /**
     * Get presionArterial
     *
     * @return string 
     */
    public function getPresionArterial()
    {
        return $this->presionArterial;
    }

    /**
     * Set frecuenciaRespiratoria
     *
     * @param string $frecuenciaRespiratoria
     * @return SecSignosVitales
     */
    public function setFrecuenciaRespiratoria($frecuenciaRespiratoria)
    {
        $this->frecuenciaRespiratoria = $frecuenciaRespiratoria;

        return $this;
    }

    /**
     * Get frecuenciaRespiratoria
     *
     * @return string 
     */
    public function getFrecuenciaRespiratoria()
    {
        return $this->frecuenciaRespiratoria;
    }

    /**
     * Set peso
     *
     * @param float $peso
     * @return SecSignosVitales
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float 
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set talla
     *
     * @param float $talla
     * @return SecSignosVitales
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    /**
     * Get talla
     *
     * @return float 
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * Set temperatura
     *
     * @param float $temperatura
     * @return SecSignosVitales
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get temperatura
     *
     * @return float 
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set observacionSig
     *
     * @param string $observacionSig
     * @return SecSignosVitales
     */
    public function setObservacionSig($observacionSig)
    {
        $this->observacionSig = $observacionSig;

        return $this;
    }

    /**
     * Get observacionSig
     *
     * @return string 
     */
    public function getObservacionSig()
    {
        return $this->observacionSig;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return SecSignosVitales
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
     * Set idExpediente
     *
     * @param \Minsal\SipernesBundle\Entity\MntExpediente $idExpediente
     * @return SecSignosVitales
     */
    public function setIdExpediente(\Minsal\SipernesBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\SipernesBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }
}
