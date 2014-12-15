<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsExamen
 *
 * @ORM\Table(name="shcp_ins_examen", indexes={@ORM\Index(name="IDX_ADDC684593489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsExamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_examen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_odont", type="string", nullable=true)
     */
    private $exaOdont;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_mama", type="string", nullable=true)
     */
    private $exaMama;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_cervix_insp_visual", type="string", nullable=true)
     */
    private $exaCervixInspVisual;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_cervix_insp_pap", type="string", nullable=true)
     */
    private $exaCervixInspPap;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_cervix_insp_colp", type="string", nullable=true)
     */
    private $exaCervixInspColp;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_gpo_rh", type="string", nullable=true)
     */
    private $exaGpoRh;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_rh_signo", type="string", nullable=true)
     */
    private $exaRhSigno;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_globulina_antid", type="string", nullable=true)
     */
    private $exaGlobulinaAntid;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_toxo_igg_mnos20", type="string", nullable=true)
     */
    private $exaToxoIggMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_toxo_igg_mas20", type="string", nullable=true)
     */
    private $exaToxoIggMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_toxo_consulta1_igm", type="string", nullable=true)
     */
    private $exaToxoConsulta1Igm;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_hb_mnos20", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $exaHbMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_hb_11g_mnos20", type="string", nullable=true)
     */
    private $exaHb11gMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_hb_mas20", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $exaHbMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_hb_11g_mas20", type="string", nullable=true)
     */
    private $exaHb11gMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_fe", type="string", nullable=true)
     */
    private $exaFe;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_folatos", type="string", nullable=true)
     */
    private $exaFolatos;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_bacte_mnos20", type="string", nullable=true)
     */
    private $exaBacteMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_bacte_mas20", type="string", nullable=true)
     */
    private $exaBacteMas20;

    /**
     * @var integer
     *
     * @ORM\Column(name="exa_gluce_mnos20", type="integer", nullable=true)
     */
    private $exaGluceMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_gluce_105_mnos20", type="string", nullable=true)
     */
    private $exaGluce105Mnos20;

    /**
     * @var integer
     *
     * @ORM\Column(name="exa_gluce_mas30", type="integer", nullable=true)
     */
    private $exaGluceMas30;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_gluce_105_mas30", type="string", nullable=true)
     */
    private $exaGluce105Mas30;

    /**
     * @var string
     *
     * @ORM\Column(name="exa_estcocob", type="string", nullable=true)
     */
    private $exaEstcocob;

    /**
     * @var \ShcpExpMaterno
     *
     * @ORM\ManyToOne(targetEntity="ShcpExpMaterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exp_materno", referencedColumnName="id")
     * })
     */
    private $idExpMaterno;



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
     * Set exaOdont
     *
     * @param string $exaOdont
     * @return ShcpInsExamen
     */
    public function setExaOdont($exaOdont)
    {
        $this->exaOdont = $exaOdont;

        return $this;
    }

    /**
     * Get exaOdont
     *
     * @return string 
     */
    public function getExaOdont()
    {
        return $this->exaOdont;
    }

    /**
     * Set exaMama
     *
     * @param string $exaMama
     * @return ShcpInsExamen
     */
    public function setExaMama($exaMama)
    {
        $this->exaMama = $exaMama;

        return $this;
    }

    /**
     * Get exaMama
     *
     * @return string 
     */
    public function getExaMama()
    {
        return $this->exaMama;
    }

    /**
     * Set exaCervixInspVisual
     *
     * @param string $exaCervixInspVisual
     * @return ShcpInsExamen
     */
    public function setExaCervixInspVisual($exaCervixInspVisual)
    {
        $this->exaCervixInspVisual = $exaCervixInspVisual;

        return $this;
    }

    /**
     * Get exaCervixInspVisual
     *
     * @return string 
     */
    public function getExaCervixInspVisual()
    {
        return $this->exaCervixInspVisual;
    }

    /**
     * Set exaCervixInspPap
     *
     * @param string $exaCervixInspPap
     * @return ShcpInsExamen
     */
    public function setExaCervixInspPap($exaCervixInspPap)
    {
        $this->exaCervixInspPap = $exaCervixInspPap;

        return $this;
    }

    /**
     * Get exaCervixInspPap
     *
     * @return string 
     */
    public function getExaCervixInspPap()
    {
        return $this->exaCervixInspPap;
    }

    /**
     * Set exaCervixInspColp
     *
     * @param string $exaCervixInspColp
     * @return ShcpInsExamen
     */
    public function setExaCervixInspColp($exaCervixInspColp)
    {
        $this->exaCervixInspColp = $exaCervixInspColp;

        return $this;
    }

    /**
     * Get exaCervixInspColp
     *
     * @return string 
     */
    public function getExaCervixInspColp()
    {
        return $this->exaCervixInspColp;
    }

    /**
     * Set exaGpoRh
     *
     * @param string $exaGpoRh
     * @return ShcpInsExamen
     */
    public function setExaGpoRh($exaGpoRh)
    {
        $this->exaGpoRh = $exaGpoRh;

        return $this;
    }

    /**
     * Get exaGpoRh
     *
     * @return string 
     */
    public function getExaGpoRh()
    {
        return $this->exaGpoRh;
    }

    /**
     * Set exaRhSigno
     *
     * @param string $exaRhSigno
     * @return ShcpInsExamen
     */
    public function setExaRhSigno($exaRhSigno)
    {
        $this->exaRhSigno = $exaRhSigno;

        return $this;
    }

    /**
     * Get exaRhSigno
     *
     * @return string 
     */
    public function getExaRhSigno()
    {
        return $this->exaRhSigno;
    }

    /**
     * Set exaGlobulinaAntid
     *
     * @param string $exaGlobulinaAntid
     * @return ShcpInsExamen
     */
    public function setExaGlobulinaAntid($exaGlobulinaAntid)
    {
        $this->exaGlobulinaAntid = $exaGlobulinaAntid;

        return $this;
    }

    /**
     * Get exaGlobulinaAntid
     *
     * @return string 
     */
    public function getExaGlobulinaAntid()
    {
        return $this->exaGlobulinaAntid;
    }

    /**
     * Set exaToxoIggMnos20
     *
     * @param string $exaToxoIggMnos20
     * @return ShcpInsExamen
     */
    public function setExaToxoIggMnos20($exaToxoIggMnos20)
    {
        $this->exaToxoIggMnos20 = $exaToxoIggMnos20;

        return $this;
    }

    /**
     * Get exaToxoIggMnos20
     *
     * @return string 
     */
    public function getExaToxoIggMnos20()
    {
        return $this->exaToxoIggMnos20;
    }

    /**
     * Set exaToxoIggMas20
     *
     * @param string $exaToxoIggMas20
     * @return ShcpInsExamen
     */
    public function setExaToxoIggMas20($exaToxoIggMas20)
    {
        $this->exaToxoIggMas20 = $exaToxoIggMas20;

        return $this;
    }

    /**
     * Get exaToxoIggMas20
     *
     * @return string 
     */
    public function getExaToxoIggMas20()
    {
        return $this->exaToxoIggMas20;
    }

    /**
     * Set exaToxoConsulta1Igm
     *
     * @param string $exaToxoConsulta1Igm
     * @return ShcpInsExamen
     */
    public function setExaToxoConsulta1Igm($exaToxoConsulta1Igm)
    {
        $this->exaToxoConsulta1Igm = $exaToxoConsulta1Igm;

        return $this;
    }

    /**
     * Get exaToxoConsulta1Igm
     *
     * @return string 
     */
    public function getExaToxoConsulta1Igm()
    {
        return $this->exaToxoConsulta1Igm;
    }

    /**
     * Set exaHbMnos20
     *
     * @param string $exaHbMnos20
     * @return ShcpInsExamen
     */
    public function setExaHbMnos20($exaHbMnos20)
    {
        $this->exaHbMnos20 = $exaHbMnos20;

        return $this;
    }

    /**
     * Get exaHbMnos20
     *
     * @return string 
     */
    public function getExaHbMnos20()
    {
        return $this->exaHbMnos20;
    }

    /**
     * Set exaHb11gMnos20
     *
     * @param string $exaHb11gMnos20
     * @return ShcpInsExamen
     */
    public function setExaHb11gMnos20($exaHb11gMnos20)
    {
        $this->exaHb11gMnos20 = $exaHb11gMnos20;

        return $this;
    }

    /**
     * Get exaHb11gMnos20
     *
     * @return string 
     */
    public function getExaHb11gMnos20()
    {
        return $this->exaHb11gMnos20;
    }

    /**
     * Set exaHbMas20
     *
     * @param string $exaHbMas20
     * @return ShcpInsExamen
     */
    public function setExaHbMas20($exaHbMas20)
    {
        $this->exaHbMas20 = $exaHbMas20;

        return $this;
    }

    /**
     * Get exaHbMas20
     *
     * @return string 
     */
    public function getExaHbMas20()
    {
        return $this->exaHbMas20;
    }

    /**
     * Set exaHb11gMas20
     *
     * @param string $exaHb11gMas20
     * @return ShcpInsExamen
     */
    public function setExaHb11gMas20($exaHb11gMas20)
    {
        $this->exaHb11gMas20 = $exaHb11gMas20;

        return $this;
    }

    /**
     * Get exaHb11gMas20
     *
     * @return string 
     */
    public function getExaHb11gMas20()
    {
        return $this->exaHb11gMas20;
    }

    /**
     * Set exaFe
     *
     * @param string $exaFe
     * @return ShcpInsExamen
     */
    public function setExaFe($exaFe)
    {
        $this->exaFe = $exaFe;

        return $this;
    }

    /**
     * Get exaFe
     *
     * @return string 
     */
    public function getExaFe()
    {
        return $this->exaFe;
    }

    /**
     * Set exaFolatos
     *
     * @param string $exaFolatos
     * @return ShcpInsExamen
     */
    public function setExaFolatos($exaFolatos)
    {
        $this->exaFolatos = $exaFolatos;

        return $this;
    }

    /**
     * Get exaFolatos
     *
     * @return string 
     */
    public function getExaFolatos()
    {
        return $this->exaFolatos;
    }

    /**
     * Set exaBacteMnos20
     *
     * @param string $exaBacteMnos20
     * @return ShcpInsExamen
     */
    public function setExaBacteMnos20($exaBacteMnos20)
    {
        $this->exaBacteMnos20 = $exaBacteMnos20;

        return $this;
    }

    /**
     * Get exaBacteMnos20
     *
     * @return string 
     */
    public function getExaBacteMnos20()
    {
        return $this->exaBacteMnos20;
    }

    /**
     * Set exaBacteMas20
     *
     * @param string $exaBacteMas20
     * @return ShcpInsExamen
     */
    public function setExaBacteMas20($exaBacteMas20)
    {
        $this->exaBacteMas20 = $exaBacteMas20;

        return $this;
    }

    /**
     * Get exaBacteMas20
     *
     * @return string 
     */
    public function getExaBacteMas20()
    {
        return $this->exaBacteMas20;
    }

    /**
     * Set exaGluceMnos20
     *
     * @param integer $exaGluceMnos20
     * @return ShcpInsExamen
     */
    public function setExaGluceMnos20($exaGluceMnos20)
    {
        $this->exaGluceMnos20 = $exaGluceMnos20;

        return $this;
    }

    /**
     * Get exaGluceMnos20
     *
     * @return integer 
     */
    public function getExaGluceMnos20()
    {
        return $this->exaGluceMnos20;
    }

    /**
     * Set exaGluce105Mnos20
     *
     * @param string $exaGluce105Mnos20
     * @return ShcpInsExamen
     */
    public function setExaGluce105Mnos20($exaGluce105Mnos20)
    {
        $this->exaGluce105Mnos20 = $exaGluce105Mnos20;

        return $this;
    }

    /**
     * Get exaGluce105Mnos20
     *
     * @return string 
     */
    public function getExaGluce105Mnos20()
    {
        return $this->exaGluce105Mnos20;
    }

    /**
     * Set exaGluceMas30
     *
     * @param integer $exaGluceMas30
     * @return ShcpInsExamen
     */
    public function setExaGluceMas30($exaGluceMas30)
    {
        $this->exaGluceMas30 = $exaGluceMas30;

        return $this;
    }

    /**
     * Get exaGluceMas30
     *
     * @return integer 
     */
    public function getExaGluceMas30()
    {
        return $this->exaGluceMas30;
    }

    /**
     * Set exaGluce105Mas30
     *
     * @param string $exaGluce105Mas30
     * @return ShcpInsExamen
     */
    public function setExaGluce105Mas30($exaGluce105Mas30)
    {
        $this->exaGluce105Mas30 = $exaGluce105Mas30;

        return $this;
    }

    /**
     * Get exaGluce105Mas30
     *
     * @return string 
     */
    public function getExaGluce105Mas30()
    {
        return $this->exaGluce105Mas30;
    }

    /**
     * Set exaEstcocob
     *
     * @param string $exaEstcocob
     * @return ShcpInsExamen
     */
    public function setExaEstcocob($exaEstcocob)
    {
        $this->exaEstcocob = $exaEstcocob;

        return $this;
    }

    /**
     * Get exaEstcocob
     *
     * @return string 
     */
    public function getExaEstcocob()
    {
        return $this->exaEstcocob;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsExamen
     */
    public function setIdExpMaterno(\Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno = null)
    {
        $this->idExpMaterno = $idExpMaterno;

        return $this;
    }

    /**
     * Get idExpMaterno
     *
     * @return \Minsal\shcpBundle\Entity\ShcpExpMaterno 
     */
    public function getIdExpMaterno()
    {
        return $this->idExpMaterno;
    }
}
