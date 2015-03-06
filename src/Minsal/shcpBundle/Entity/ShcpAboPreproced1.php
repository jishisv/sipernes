<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboPreproced1
 *
 * @ORM\Table(name="shcp_abo_preproced1", indexes={@ORM\Index(name="IDX_2CC86897CDD53299", columns={"id_admin_proceden"})})
 * @ORM\Entity
 */
class ShcpAboPreproced1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_preproced1_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="prep1_pulso", type="integer", nullable=true)
     */
    private $prep1Pulso;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_pulso_may100_men60", type="string", nullable=true)
     */
    private $prep1PulsoMay100Men60;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_pa_sistole", type="string", nullable=true)
     */
    private $prep1PaSistole;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_pa_diastole", type="string", nullable=true)
     */
    private $prep1PaDiastole;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_pa_may140_90_men80_50", type="string", nullable=true)
     */
    private $prep1PaMay14090Men8050;

    /**
     * @var integer
     *
     * @ORM\Column(name="prep1_frec_respirat", type="integer", nullable=true)
     */
    private $prep1FrecRespirat;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_frec_respirat_may16", type="string", nullable=true)
     */
    private $prep1FrecRespiratMay16;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_temp", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prep1Temp;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_temp_may38", type="string", nullable=true)
     */
    private $prep1TempMay38;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_hemoglob", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prep1Hemoglob;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_hemoglob_men10", type="string", nullable=true)
     */
    private $prep1HemoglobMen10;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_sif_diagno", type="string", nullable=true)
     */
    private $prep1SifDiagno;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_sif_tratamient", type="string", nullable=true)
     */
    private $prep1SifTratamient;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_sif_tratamient_pareja", type="string", nullable=true)
     */
    private $prep1SifTratamientPareja;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_leucocitos", type="string", nullable=true)
     */
    private $prep1Leucocitos;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_plaquetas", type="string", nullable=true)
     */
    private $prep1Plaquetas;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_plaq_men100ml", type="string", nullable=true)
     */
    private $prep1PlaqMen100ml;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_vih", type="string", nullable=true)
     */
    private $prep1Vih;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_grupo_sang", type="string", nullable=true)
     */
    private $prep1GrupoSang;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_rh", type="string", nullable=true)
     */
    private $prep1Rh;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_inmuniza", type="string", nullable=true)
     */
    private $prep1Inmuniza;

    /**
     * @var string
     *
     * @ORM\Column(name="prep1_globuantid", type="string", nullable=true)
     */
    private $prep1Globuantid;

    /**
     * @var \ShcpAboAdmisionProceden
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboAdmisionProceden")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin_proceden", referencedColumnName="id")
     * })
     */
    private $idAdminProceden;

     //codigo para enlazar preproced2
    /**
     *
     * @ORM\OneToOne(targetEntity="ShcpAboPreproced2", mappedBy="idPreproced1", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $preproced2;
    
    //codigo para enlazar preproced3
    /**
     *
     * @ORM\OneToOne(targetEntity="ShcpAboPreproced3", mappedBy="idPreproced1", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $preproced3;
    
    

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
     * Set prep1Pulso
     *
     * @param integer $prep1Pulso
     * @return ShcpAboPreproced1
     */
    public function setPrep1Pulso($prep1Pulso)
    {
        $this->prep1Pulso = $prep1Pulso;

        return $this;
    }

    /**
     * Get prep1Pulso
     *
     * @return integer 
     */
    public function getPrep1Pulso()
    {
        return $this->prep1Pulso;
    }

    /**
     * Set prep1PulsoMay100Men60
     *
     * @param string $prep1PulsoMay100Men60
     * @return ShcpAboPreproced1
     */
    public function setPrep1PulsoMay100Men60($prep1PulsoMay100Men60)
    {
        $this->prep1PulsoMay100Men60 = $prep1PulsoMay100Men60;

        return $this;
    }

    /**
     * Get prep1PulsoMay100Men60
     *
     * @return string 
     */
    public function getPrep1PulsoMay100Men60()
    {
        return $this->prep1PulsoMay100Men60;
    }

    /**
     * Set prep1PaSistole
     *
     * @param string $prep1PaSistole
     * @return ShcpAboPreproced1
     */
    public function setPrep1PaSistole($prep1PaSistole)
    {
        $this->prep1PaSistole = $prep1PaSistole;

        return $this;
    }

    /**
     * Get prep1PaSistole
     *
     * @return string 
     */
    public function getPrep1PaSistole()
    {
        return $this->prep1PaSistole;
    }

    /**
     * Set prep1PaDiastole
     *
     * @param string $prep1PaDiastole
     * @return ShcpAboPreproced1
     */
    public function setPrep1PaDiastole($prep1PaDiastole)
    {
        $this->prep1PaDiastole = $prep1PaDiastole;

        return $this;
    }

    /**
     * Get prep1PaDiastole
     *
     * @return string 
     */
    public function getPrep1PaDiastole()
    {
        return $this->prep1PaDiastole;
    }

    /**
     * Set prep1PaMay14090Men8050
     *
     * @param string $prep1PaMay14090Men8050
     * @return ShcpAboPreproced1
     */
    public function setPrep1PaMay14090Men8050($prep1PaMay14090Men8050)
    {
        $this->prep1PaMay14090Men8050 = $prep1PaMay14090Men8050;

        return $this;
    }

    /**
     * Get prep1PaMay14090Men8050
     *
     * @return string 
     */
    public function getPrep1PaMay14090Men8050()
    {
        return $this->prep1PaMay14090Men8050;
    }

    /**
     * Set prep1FrecRespirat
     *
     * @param integer $prep1FrecRespirat
     * @return ShcpAboPreproced1
     */
    public function setPrep1FrecRespirat($prep1FrecRespirat)
    {
        $this->prep1FrecRespirat = $prep1FrecRespirat;

        return $this;
    }

    /**
     * Get prep1FrecRespirat
     *
     * @return integer 
     */
    public function getPrep1FrecRespirat()
    {
        return $this->prep1FrecRespirat;
    }

    /**
     * Set prep1FrecRespiratMay16
     *
     * @param string $prep1FrecRespiratMay16
     * @return ShcpAboPreproced1
     */
    public function setPrep1FrecRespiratMay16($prep1FrecRespiratMay16)
    {
        $this->prep1FrecRespiratMay16 = $prep1FrecRespiratMay16;

        return $this;
    }

    /**
     * Get prep1FrecRespiratMay16
     *
     * @return string 
     */
    public function getPrep1FrecRespiratMay16()
    {
        return $this->prep1FrecRespiratMay16;
    }

    /**
     * Set prep1Temp
     *
     * @param string $prep1Temp
     * @return ShcpAboPreproced1
     */
    public function setPrep1Temp($prep1Temp)
    {
        $this->prep1Temp = $prep1Temp;

        return $this;
    }

    /**
     * Get prep1Temp
     *
     * @return string 
     */
    public function getPrep1Temp()
    {
        return $this->prep1Temp;
    }

    /**
     * Set prep1TempMay38
     *
     * @param string $prep1TempMay38
     * @return ShcpAboPreproced1
     */
    public function setPrep1TempMay38($prep1TempMay38)
    {
        $this->prep1TempMay38 = $prep1TempMay38;

        return $this;
    }

    /**
     * Get prep1TempMay38
     *
     * @return string 
     */
    public function getPrep1TempMay38()
    {
        return $this->prep1TempMay38;
    }

    /**
     * Set prep1Hemoglob
     *
     * @param string $prep1Hemoglob
     * @return ShcpAboPreproced1
     */
    public function setPrep1Hemoglob($prep1Hemoglob)
    {
        $this->prep1Hemoglob = $prep1Hemoglob;

        return $this;
    }

    /**
     * Get prep1Hemoglob
     *
     * @return string 
     */
    public function getPrep1Hemoglob()
    {
        return $this->prep1Hemoglob;
    }

    /**
     * Set prep1HemoglobMen10
     *
     * @param string $prep1HemoglobMen10
     * @return ShcpAboPreproced1
     */
    public function setPrep1HemoglobMen10($prep1HemoglobMen10)
    {
        $this->prep1HemoglobMen10 = $prep1HemoglobMen10;

        return $this;
    }

    /**
     * Get prep1HemoglobMen10
     *
     * @return string 
     */
    public function getPrep1HemoglobMen10()
    {
        return $this->prep1HemoglobMen10;
    }

    /**
     * Set prep1SifDiagno
     *
     * @param string $prep1SifDiagno
     * @return ShcpAboPreproced1
     */
    public function setPrep1SifDiagno($prep1SifDiagno)
    {
        $this->prep1SifDiagno = $prep1SifDiagno;

        return $this;
    }

    /**
     * Get prep1SifDiagno
     *
     * @return string 
     */
    public function getPrep1SifDiagno()
    {
        return $this->prep1SifDiagno;
    }

    /**
     * Set prep1SifTratamient
     *
     * @param string $prep1SifTratamient
     * @return ShcpAboPreproced1
     */
    public function setPrep1SifTratamient($prep1SifTratamient)
    {
        $this->prep1SifTratamient = $prep1SifTratamient;

        return $this;
    }

    /**
     * Get prep1SifTratamient
     *
     * @return string 
     */
    public function getPrep1SifTratamient()
    {
        return $this->prep1SifTratamient;
    }

    /**
     * Set prep1SifTratamientPareja
     *
     * @param string $prep1SifTratamientPareja
     * @return ShcpAboPreproced1
     */
    public function setPrep1SifTratamientPareja($prep1SifTratamientPareja)
    {
        $this->prep1SifTratamientPareja = $prep1SifTratamientPareja;

        return $this;
    }

    /**
     * Get prep1SifTratamientPareja
     *
     * @return string 
     */
    public function getPrep1SifTratamientPareja()
    {
        return $this->prep1SifTratamientPareja;
    }

    /**
     * Set prep1Leucocitos
     *
     * @param string $prep1Leucocitos
     * @return ShcpAboPreproced1
     */
    public function setPrep1Leucocitos($prep1Leucocitos)
    {
        $this->prep1Leucocitos = $prep1Leucocitos;

        return $this;
    }

    /**
     * Get prep1Leucocitos
     *
     * @return string 
     */
    public function getPrep1Leucocitos()
    {
        return $this->prep1Leucocitos;
    }

    /**
     * Set prep1Plaquetas
     *
     * @param string $prep1Plaquetas
     * @return ShcpAboPreproced1
     */
    public function setPrep1Plaquetas($prep1Plaquetas)
    {
        $this->prep1Plaquetas = $prep1Plaquetas;

        return $this;
    }

    /**
     * Get prep1Plaquetas
     *
     * @return string 
     */
    public function getPrep1Plaquetas()
    {
        return $this->prep1Plaquetas;
    }

    /**
     * Set prep1PlaqMen100ml
     *
     * @param string $prep1PlaqMen100ml
     * @return ShcpAboPreproced1
     */
    public function setPrep1PlaqMen100ml($prep1PlaqMen100ml)
    {
        $this->prep1PlaqMen100ml = $prep1PlaqMen100ml;

        return $this;
    }

    /**
     * Get prep1PlaqMen100ml
     *
     * @return string 
     */
    public function getPrep1PlaqMen100ml()
    {
        return $this->prep1PlaqMen100ml;
    }

    /**
     * Set prep1Vih
     *
     * @param string $prep1Vih
     * @return ShcpAboPreproced1
     */
    public function setPrep1Vih($prep1Vih)
    {
        $this->prep1Vih = $prep1Vih;

        return $this;
    }

    /**
     * Get prep1Vih
     *
     * @return string 
     */
    public function getPrep1Vih()
    {
        return $this->prep1Vih;
    }

    /**
     * Set prep1GrupoSang
     *
     * @param string $prep1GrupoSang
     * @return ShcpAboPreproced1
     */
    public function setPrep1GrupoSang($prep1GrupoSang)
    {
        $this->prep1GrupoSang = $prep1GrupoSang;

        return $this;
    }

    /**
     * Get prep1GrupoSang
     *
     * @return string 
     */
    public function getPrep1GrupoSang()
    {
        return $this->prep1GrupoSang;
    }

    /**
     * Set prep1Rh
     *
     * @param string $prep1Rh
     * @return ShcpAboPreproced1
     */
    public function setPrep1Rh($prep1Rh)
    {
        $this->prep1Rh = $prep1Rh;

        return $this;
    }

    /**
     * Get prep1Rh
     *
     * @return string 
     */
    public function getPrep1Rh()
    {
        return $this->prep1Rh;
    }

    /**
     * Set prep1Inmuniza
     *
     * @param string $prep1Inmuniza
     * @return ShcpAboPreproced1
     */
    public function setPrep1Inmuniza($prep1Inmuniza)
    {
        $this->prep1Inmuniza = $prep1Inmuniza;

        return $this;
    }

    /**
     * Get prep1Inmuniza
     *
     * @return string 
     */
    public function getPrep1Inmuniza()
    {
        return $this->prep1Inmuniza;
    }

    /**
     * Set prep1Globuantid
     *
     * @param string $prep1Globuantid
     * @return ShcpAboPreproced1
     */
    public function setPrep1Globuantid($prep1Globuantid)
    {
        $this->prep1Globuantid = $prep1Globuantid;

        return $this;
    }

    /**
     * Get prep1Globuantid
     *
     * @return string 
     */
    public function getPrep1Globuantid()
    {
        return $this->prep1Globuantid;
    }

    /**
     * Set idAdminProceden
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden
     * @return ShcpAboPreproced1
     */
    public function setIdAdminProceden(\Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden = null)
    {
        $this->idAdminProceden = $idAdminProceden;

        return $this;
    }

    /**
     * Get idAdminProceden
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden 
     */
    public function getIdAdminProceden()
    {
        return $this->idAdminProceden;
    }
    
     
    //aca va el to string
    public function __toString() {
	      return $this->prep1GrupoSang;
	  }
    

    

    /**
     * Set preproced2
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced2 $preproced2
     * @return ShcpAboPreproced1
     */
    public function setPreproced2(\Minsal\shcpBundle\Entity\ShcpAboPreproced2 $preproced2 = null)
    {
        $this->preproced2 = $preproced2;

        return $this;
    }

    /**
     * Get preproced2
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboPreproced2 
     */
    public function getPreproced2()
    {
        return $this->preproced2;
    }

    /**
     * Set preproced3
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced3 $preproced3
     * @return ShcpAboPreproced1
     */
    public function setPreproced3(\Minsal\shcpBundle\Entity\ShcpAboPreproced3 $preproced3 = null)
    {
        $this->preproced3 = $preproced3;

        return $this;
    }

    /**
     * Get preproced3
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboPreproced3 
     */
    public function getPreproced3()
    {
        return $this->preproced3;
    }
}
