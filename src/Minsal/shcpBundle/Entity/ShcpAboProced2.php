<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboProced2
 *
 * @ORM\Table(name="shcp_abo_proced2", indexes={@ORM\Index(name="IDX_C7B8D603C5D115CC", columns={"id_proced1"})})
 * @ORM\Entity
 */
class ShcpAboProced2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_proced2_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="proc2_tam_uterino", type="integer", nullable=true)
     */
    private $proc2TamUterino;

    /**
     * @var integer
     *
     * @ORM\Column(name="proc2_histeromet", type="integer", nullable=true)
     */
    private $proc2Histeromet;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_anexos", type="string", nullable=true)
     */
    private $proc2Anexos;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_fetidez", type="string", nullable=true)
     */
    private $proc2Fetidez;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_restos", type="string", nullable=true)
     */
    private $proc2Restos;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_restos_inspec", type="string", nullable=true)
     */
    private $proc2RestosInspec;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_anat_ptg", type="string", nullable=true)
     */
    private $proc2AnatPtg;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_compli", type="string", nullable=true)
     */
    private $proc2Compli;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_compli_quirur", type="string", nullable=true)
     */
    private $proc2CompliQuirur;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_otra_compli_quirur", type="string", length=25, nullable=true)
     */
    private $proc2OtraCompliQuirur;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_compli_anest", type="string", nullable=true)
     */
    private $proc2CompliAnest;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_otra_compli_anest", type="string", length=25, nullable=true)
     */
    private $proc2OtraCompliAnest;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_repa_lesion_uter", type="string", nullable=true)
     */
    private $proc2RepaLesionUter;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_repa_lesion_cerv", type="string", nullable=true)
     */
    private $proc2RepaLesionCerv;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_histerect", type="string", nullable=true)
     */
    private $proc2Histerect;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_sepsis", type="string", nullable=true)
     */
    private $proc2Sepsis;

    /**
     * @var string
     *
     * @ORM\Column(name="proc2_respons", type="string", length=100, nullable=true)
     */
    private $proc2Respons;

    /**
     * @var \ShcpAboProced1
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboProced1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proced1", referencedColumnName="id")
     * })
     */
    private $idProced1;



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
     * Set proc2TamUterino
     *
     * @param integer $proc2TamUterino
     * @return ShcpAboProced2
     */
    public function setProc2TamUterino($proc2TamUterino)
    {
        $this->proc2TamUterino = $proc2TamUterino;

        return $this;
    }

    /**
     * Get proc2TamUterino
     *
     * @return integer 
     */
    public function getProc2TamUterino()
    {
        return $this->proc2TamUterino;
    }

    /**
     * Set proc2Histeromet
     *
     * @param integer $proc2Histeromet
     * @return ShcpAboProced2
     */
    public function setProc2Histeromet($proc2Histeromet)
    {
        $this->proc2Histeromet = $proc2Histeromet;

        return $this;
    }

    /**
     * Get proc2Histeromet
     *
     * @return integer 
     */
    public function getProc2Histeromet()
    {
        return $this->proc2Histeromet;
    }

    /**
     * Set proc2Anexos
     *
     * @param string $proc2Anexos
     * @return ShcpAboProced2
     */
    public function setProc2Anexos($proc2Anexos)
    {
        $this->proc2Anexos = $proc2Anexos;

        return $this;
    }

    /**
     * Get proc2Anexos
     *
     * @return string 
     */
    public function getProc2Anexos()
    {
        return $this->proc2Anexos;
    }

    /**
     * Set proc2Fetidez
     *
     * @param string $proc2Fetidez
     * @return ShcpAboProced2
     */
    public function setProc2Fetidez($proc2Fetidez)
    {
        $this->proc2Fetidez = $proc2Fetidez;

        return $this;
    }

    /**
     * Get proc2Fetidez
     *
     * @return string 
     */
    public function getProc2Fetidez()
    {
        return $this->proc2Fetidez;
    }

    /**
     * Set proc2Restos
     *
     * @param string $proc2Restos
     * @return ShcpAboProced2
     */
    public function setProc2Restos($proc2Restos)
    {
        $this->proc2Restos = $proc2Restos;

        return $this;
    }

    /**
     * Get proc2Restos
     *
     * @return string 
     */
    public function getProc2Restos()
    {
        return $this->proc2Restos;
    }

    /**
     * Set proc2RestosInspec
     *
     * @param string $proc2RestosInspec
     * @return ShcpAboProced2
     */
    public function setProc2RestosInspec($proc2RestosInspec)
    {
        $this->proc2RestosInspec = $proc2RestosInspec;

        return $this;
    }

    /**
     * Get proc2RestosInspec
     *
     * @return string 
     */
    public function getProc2RestosInspec()
    {
        return $this->proc2RestosInspec;
    }

    /**
     * Set proc2AnatPtg
     *
     * @param string $proc2AnatPtg
     * @return ShcpAboProced2
     */
    public function setProc2AnatPtg($proc2AnatPtg)
    {
        $this->proc2AnatPtg = $proc2AnatPtg;

        return $this;
    }

    /**
     * Get proc2AnatPtg
     *
     * @return string 
     */
    public function getProc2AnatPtg()
    {
        return $this->proc2AnatPtg;
    }

    /**
     * Set proc2Compli
     *
     * @param string $proc2Compli
     * @return ShcpAboProced2
     */
    public function setProc2Compli($proc2Compli)
    {
        $this->proc2Compli = $proc2Compli;

        return $this;
    }

    /**
     * Get proc2Compli
     *
     * @return string 
     */
    public function getProc2Compli()
    {
        return $this->proc2Compli;
    }

    /**
     * Set proc2CompliQuirur
     *
     * @param string $proc2CompliQuirur
     * @return ShcpAboProced2
     */
    public function setProc2CompliQuirur($proc2CompliQuirur)
    {
        $this->proc2CompliQuirur = $proc2CompliQuirur;

        return $this;
    }

    /**
     * Get proc2CompliQuirur
     *
     * @return string 
     */
    public function getProc2CompliQuirur()
    {
        return $this->proc2CompliQuirur;
    }

    /**
     * Set proc2OtraCompliQuirur
     *
     * @param string $proc2OtraCompliQuirur
     * @return ShcpAboProced2
     */
    public function setProc2OtraCompliQuirur($proc2OtraCompliQuirur)
    {
        $this->proc2OtraCompliQuirur = $proc2OtraCompliQuirur;

        return $this;
    }

    /**
     * Get proc2OtraCompliQuirur
     *
     * @return string 
     */
    public function getProc2OtraCompliQuirur()
    {
        return $this->proc2OtraCompliQuirur;
    }

    /**
     * Set proc2CompliAnest
     *
     * @param string $proc2CompliAnest
     * @return ShcpAboProced2
     */
    public function setProc2CompliAnest($proc2CompliAnest)
    {
        $this->proc2CompliAnest = $proc2CompliAnest;

        return $this;
    }

    /**
     * Get proc2CompliAnest
     *
     * @return string 
     */
    public function getProc2CompliAnest()
    {
        return $this->proc2CompliAnest;
    }

    /**
     * Set proc2OtraCompliAnest
     *
     * @param string $proc2OtraCompliAnest
     * @return ShcpAboProced2
     */
    public function setProc2OtraCompliAnest($proc2OtraCompliAnest)
    {
        $this->proc2OtraCompliAnest = $proc2OtraCompliAnest;

        return $this;
    }

    /**
     * Get proc2OtraCompliAnest
     *
     * @return string 
     */
    public function getProc2OtraCompliAnest()
    {
        return $this->proc2OtraCompliAnest;
    }

    /**
     * Set proc2RepaLesionUter
     *
     * @param string $proc2RepaLesionUter
     * @return ShcpAboProced2
     */
    public function setProc2RepaLesionUter($proc2RepaLesionUter)
    {
        $this->proc2RepaLesionUter = $proc2RepaLesionUter;

        return $this;
    }

    /**
     * Get proc2RepaLesionUter
     *
     * @return string 
     */
    public function getProc2RepaLesionUter()
    {
        return $this->proc2RepaLesionUter;
    }

    /**
     * Set proc2RepaLesionCerv
     *
     * @param string $proc2RepaLesionCerv
     * @return ShcpAboProced2
     */
    public function setProc2RepaLesionCerv($proc2RepaLesionCerv)
    {
        $this->proc2RepaLesionCerv = $proc2RepaLesionCerv;

        return $this;
    }

    /**
     * Get proc2RepaLesionCerv
     *
     * @return string 
     */
    public function getProc2RepaLesionCerv()
    {
        return $this->proc2RepaLesionCerv;
    }

    /**
     * Set proc2Histerect
     *
     * @param string $proc2Histerect
     * @return ShcpAboProced2
     */
    public function setProc2Histerect($proc2Histerect)
    {
        $this->proc2Histerect = $proc2Histerect;

        return $this;
    }

    /**
     * Get proc2Histerect
     *
     * @return string 
     */
    public function getProc2Histerect()
    {
        return $this->proc2Histerect;
    }

    /**
     * Set proc2Sepsis
     *
     * @param string $proc2Sepsis
     * @return ShcpAboProced2
     */
    public function setProc2Sepsis($proc2Sepsis)
    {
        $this->proc2Sepsis = $proc2Sepsis;

        return $this;
    }

    /**
     * Get proc2Sepsis
     *
     * @return string 
     */
    public function getProc2Sepsis()
    {
        return $this->proc2Sepsis;
    }

    /**
     * Set proc2Respons
     *
     * @param string $proc2Respons
     * @return ShcpAboProced2
     */
    public function setProc2Respons($proc2Respons)
    {
        $this->proc2Respons = $proc2Respons;

        return $this;
    }

    /**
     * Get proc2Respons
     *
     * @return string 
     */
    public function getProc2Respons()
    {
        return $this->proc2Respons;
    }

    /**
     * Set idProced1
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboProced1 $idProced1
     * @return ShcpAboProced2
     */
    public function setIdProced1(\Minsal\shcpBundle\Entity\ShcpAboProced1 $idProced1 = null)
    {
        $this->idProced1 = $idProced1;

        return $this;
    }

    /**
     * Get idProced1
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboProced1 
     */
    public function getIdProced1()
    {
        return $this->idProced1;
    }
}
