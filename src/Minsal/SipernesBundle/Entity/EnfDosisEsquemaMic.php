<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfDosisEsquemaMic
 *
 * @ORM\Table(name="enf_dosis_esquema_mic", indexes={@ORM\Index(name="IDX_8308CD063FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_8308CD06701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_8308CD068E3BF975", columns={"id_tipo_esq_mic"})})
 * @ORM\Entity
 */
class EnfDosisEsquemaMic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_dosis_esquema_mic_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis_mic", type="string", length=10, nullable=true)
     */
    private $dosisMic;

    /**
     * @var string
     *
     * @ORM\Column(name="centro_educativo_mic", type="string", length=200, nullable=true)
     */
    private $centroEducativoMic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_dosis_esq_mic", type="date", nullable=true)
     */
    private $fechaDosisEsqMic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_dosis_esq_mic", type="boolean", nullable=true)
     */
    private $estadoDosisEsqMic;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_dosis_esq_mic", type="string", length=40, nullable=true)
     */
    private $usuarioDosisEsqMic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_dosis_esq_mic", type="date", nullable=true)
     */
    private $fechaIngresoDosisEsqMic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_dosis_mic", type="date", nullable=true)
     */
    private $fechaModDosisMic;

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
     * @var \EnfTipoEsquemaMic
     *
     * @ORM\ManyToOne(targetEntity="EnfTipoEsquemaMic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_esq_mic", referencedColumnName="id")
     * })
     */
    private $idTipoEsqMic;



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
     * Set dosisMic
     *
     * @param string $dosisMic
     * @return EnfDosisEsquemaMic
     */
    public function setDosisMic($dosisMic)
    {
        $this->dosisMic = $dosisMic;

        return $this;
    }

    /**
     * Get dosisMic
     *
     * @return string 
     */
    public function getDosisMic()
    {
        return $this->dosisMic;
    }

    /**
     * Set centroEducativoMic
     *
     * @param string $centroEducativoMic
     * @return EnfDosisEsquemaMic
     */
    public function setCentroEducativoMic($centroEducativoMic)
    {
        $this->centroEducativoMic = $centroEducativoMic;

        return $this;
    }

    /**
     * Get centroEducativoMic
     *
     * @return string 
     */
    public function getCentroEducativoMic()
    {
        return $this->centroEducativoMic;
    }

    /**
     * Set fechaDosisEsqMic
     *
     * @param \DateTime $fechaDosisEsqMic
     * @return EnfDosisEsquemaMic
     */
    public function setFechaDosisEsqMic($fechaDosisEsqMic)
    {
        $this->fechaDosisEsqMic = $fechaDosisEsqMic;

        return $this;
    }

    /**
     * Get fechaDosisEsqMic
     *
     * @return \DateTime 
     */
    public function getFechaDosisEsqMic()
    {
        return $this->fechaDosisEsqMic;
    }

    /**
     * Set estadoDosisEsqMic
     *
     * @param boolean $estadoDosisEsqMic
     * @return EnfDosisEsquemaMic
     */
    public function setEstadoDosisEsqMic($estadoDosisEsqMic)
    {
        $this->estadoDosisEsqMic = $estadoDosisEsqMic;

        return $this;
    }

    /**
     * Get estadoDosisEsqMic
     *
     * @return boolean 
     */
    public function getEstadoDosisEsqMic()
    {
        return $this->estadoDosisEsqMic;
    }

    /**
     * Set usuarioDosisEsqMic
     *
     * @param string $usuarioDosisEsqMic
     * @return EnfDosisEsquemaMic
     */
    public function setUsuarioDosisEsqMic($usuarioDosisEsqMic)
    {
        $this->usuarioDosisEsqMic = $usuarioDosisEsqMic;

        return $this;
    }

    /**
     * Get usuarioDosisEsqMic
     *
     * @return string 
     */
    public function getUsuarioDosisEsqMic()
    {
        return $this->usuarioDosisEsqMic;
    }

    /**
     * Set fechaIngresoDosisEsqMic
     *
     * @param \DateTime $fechaIngresoDosisEsqMic
     * @return EnfDosisEsquemaMic
     */
    public function setFechaIngresoDosisEsqMic($fechaIngresoDosisEsqMic)
    {
        $this->fechaIngresoDosisEsqMic = $fechaIngresoDosisEsqMic;

        return $this;
    }

    /**
     * Get fechaIngresoDosisEsqMic
     *
     * @return \DateTime 
     */
    public function getFechaIngresoDosisEsqMic()
    {
        return $this->fechaIngresoDosisEsqMic;
    }

    /**
     * Set fechaModDosisMic
     *
     * @param \DateTime $fechaModDosisMic
     * @return EnfDosisEsquemaMic
     */
    public function setFechaModDosisMic($fechaModDosisMic)
    {
        $this->fechaModDosisMic = $fechaModDosisMic;

        return $this;
    }

    /**
     * Get fechaModDosisMic
     *
     * @return \DateTime 
     */
    public function getFechaModDosisMic()
    {
        return $this->fechaModDosisMic;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfDosisEsquemaMic
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
     * @return EnfDosisEsquemaMic
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

    /**
     * Set idTipoEsqMic
     *
     * @param \Minsal\SipernesBundle\Entity\EnfTipoEsquemaMic $idTipoEsqMic
     * @return EnfDosisEsquemaMic
     */
    public function setIdTipoEsqMic(\Minsal\SipernesBundle\Entity\EnfTipoEsquemaMic $idTipoEsqMic = null)
    {
        $this->idTipoEsqMic = $idTipoEsqMic;

        return $this;
    }

    /**
     * Get idTipoEsqMic
     *
     * @return \Minsal\SipernesBundle\Entity\EnfTipoEsquemaMic 
     */
    public function getIdTipoEsqMic()
    {
        return $this->idTipoEsqMic;
    }
}
