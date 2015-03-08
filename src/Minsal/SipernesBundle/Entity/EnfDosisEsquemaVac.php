<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfDosisEsquemaVac
 *
 * @ORM\Table(name="enf_dosis_esquema_vac", indexes={@ORM\Index(name="IDX_5BA20B9FBF16C07B", columns={"id_componente"}), @ORM\Index(name="IDX_5BA20B9F3FE83A49", columns={"id_emp_corr"}), @ORM\Index(name="IDX_5BA20B9FEDEF355D", columns={"id_tipo_esq"}), @ORM\Index(name="IDX_5BA20B9F1D8176FA", columns={"id_modalidad"}), @ORM\Index(name="IDX_5BA20B9F701624C4", columns={"id_expediente"})})
 * @ORM\Entity
 */
class EnfDosisEsquemaVac
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_dosis_esquema_vac_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="string", length=10, nullable=true)
     */
    private $dosis;

    /**
     * @var string
     *
     * @ORM\Column(name="centro_educativo", type="string", length=200, nullable=true)
     */
    private $centroEducativo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_dosis_esq", type="date", nullable=true)
     */
    private $fechaDosisEsq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_dosis_esq", type="boolean", nullable=true)
     */
    private $estadoDosisEsq;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_dosis_esq", type="string", length=40, nullable=true)
     */
    private $usuarioDosisEsq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_dosis_esq", type="date", nullable=true)
     */
    private $fechaIngresoDosisEsq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_dosis", type="date", nullable=true)
     */
    private $fechaModDosis;

    /**
     * @var \EnfComponente
     *
     * @ORM\ManyToOne(targetEntity="EnfComponente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_componente", referencedColumnName="id")
     * })
     */
    private $idComponente;

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
     * @var \EnfTipoEsquemaVac
     *
     * @ORM\ManyToOne(targetEntity="EnfTipoEsquemaVac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_esq", referencedColumnName="id")
     * })
     */
    private $idTipoEsq;

    /**
     * @var \EnfModalidad
     *
     * @ORM\ManyToOne(targetEntity="EnfModalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad", referencedColumnName="id")
     * })
     */
    private $idModalidad;

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
     * Set dosis
     *
     * @param string $dosis
     * @return EnfDosisEsquemaVac
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;

        return $this;
    }

    /**
     * Get dosis
     *
     * @return string 
     */
    public function getDosis()
    {
        return $this->dosis;
    }

    /**
     * Set centroEducativo
     *
     * @param string $centroEducativo
     * @return EnfDosisEsquemaVac
     */
    public function setCentroEducativo($centroEducativo)
    {
        $this->centroEducativo = $centroEducativo;

        return $this;
    }

    /**
     * Get centroEducativo
     *
     * @return string 
     */
    public function getCentroEducativo()
    {
        return $this->centroEducativo;
    }

    /**
     * Set fechaDosisEsq
     *
     * @param \DateTime $fechaDosisEsq
     * @return EnfDosisEsquemaVac
     */
    public function setFechaDosisEsq($fechaDosisEsq)
    {
        $this->fechaDosisEsq = $fechaDosisEsq;

        return $this;
    }

    /**
     * Get fechaDosisEsq
     *
     * @return \DateTime 
     */
    public function getFechaDosisEsq()
    {
        return $this->fechaDosisEsq;
    }

    /**
     * Set estadoDosisEsq
     *
     * @param boolean $estadoDosisEsq
     * @return EnfDosisEsquemaVac
     */
    public function setEstadoDosisEsq($estadoDosisEsq)
    {
        $this->estadoDosisEsq = $estadoDosisEsq;

        return $this;
    }

    /**
     * Get estadoDosisEsq
     *
     * @return boolean 
     */
    public function getEstadoDosisEsq()
    {
        return $this->estadoDosisEsq;
    }

    /**
     * Set usuarioDosisEsq
     *
     * @param string $usuarioDosisEsq
     * @return EnfDosisEsquemaVac
     */
    public function setUsuarioDosisEsq($usuarioDosisEsq)
    {
        $this->usuarioDosisEsq = $usuarioDosisEsq;

        return $this;
    }

    /**
     * Get usuarioDosisEsq
     *
     * @return string 
     */
    public function getUsuarioDosisEsq()
    {
        return $this->usuarioDosisEsq;
    }

    /**
     * Set fechaIngresoDosisEsq
     *
     * @param \DateTime $fechaIngresoDosisEsq
     * @return EnfDosisEsquemaVac
     */
    public function setFechaIngresoDosisEsq($fechaIngresoDosisEsq)
    {
        $this->fechaIngresoDosisEsq = $fechaIngresoDosisEsq;

        return $this;
    }

    /**
     * Get fechaIngresoDosisEsq
     *
     * @return \DateTime 
     */
    public function getFechaIngresoDosisEsq()
    {
        return $this->fechaIngresoDosisEsq;
    }

    /**
     * Set fechaModDosis
     *
     * @param \DateTime $fechaModDosis
     * @return EnfDosisEsquemaVac
     */
    public function setFechaModDosis($fechaModDosis)
    {
        $this->fechaModDosis = $fechaModDosis;

        return $this;
    }

    /**
     * Get fechaModDosis
     *
     * @return \DateTime 
     */
    public function getFechaModDosis()
    {
        return $this->fechaModDosis;
    }

    /**
     * Set idComponente
     *
     * @param \Minsal\SipernesBundle\Entity\EnfComponente $idComponente
     * @return EnfDosisEsquemaVac
     */
    public function setIdComponente(\Minsal\SipernesBundle\Entity\EnfComponente $idComponente = null)
    {
        $this->idComponente = $idComponente;

        return $this;
    }

    /**
     * Get idComponente
     *
     * @return \Minsal\SipernesBundle\Entity\EnfComponente 
     */
    public function getIdComponente()
    {
        return $this->idComponente;
    }

    /**
     * Set idEmpCorr
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpCorr
     * @return EnfDosisEsquemaVac
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
     * Set idTipoEsq
     *
     * @param \Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac $idTipoEsq
     * @return EnfDosisEsquemaVac
     */
    public function setIdTipoEsq(\Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac $idTipoEsq = null)
    {
        $this->idTipoEsq = $idTipoEsq;

        return $this;
    }

    /**
     * Get idTipoEsq
     *
     * @return \Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac 
     */
    public function getIdTipoEsq()
    {
        return $this->idTipoEsq;
    }

    /**
     * Set idModalidad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfModalidad $idModalidad
     * @return EnfDosisEsquemaVac
     */
    public function setIdModalidad(\Minsal\SipernesBundle\Entity\EnfModalidad $idModalidad = null)
    {
        $this->idModalidad = $idModalidad;

        return $this;
    }

    /**
     * Get idModalidad
     *
     * @return \Minsal\SipernesBundle\Entity\EnfModalidad 
     */
    public function getIdModalidad()
    {
        return $this->idModalidad;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\SipernesBundle\Entity\MntExpediente $idExpediente
     * @return EnfDosisEsquemaVac
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
