<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsAntecedentObste
 *
 * @ORM\Table(name="shcp_ins_antecedent_obste", indexes={@ORM\Index(name="IDX_89DC4E6B93489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsAntecedentObste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_antecedent_obste_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_gestas_previas", type="integer", nullable=true)
     */
    private $antGestasPrevias;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_emb_ectopico", type="integer", nullable=true)
     */
    private $antEmbEctopico;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_abortos", type="integer", nullable=true)
     */
    private $antAbortos;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_3esp_abortos", type="string", nullable=true)
     */
    private $ant3espAbortos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_partos", type="integer", nullable=true)
     */
    private $antPartos;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_peso_ult_emb", type="string", nullable=true)
     */
    private $antPesoUltEmb;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_gemelares", type="string", nullable=true)
     */
    private $antGemelares;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_vaginales", type="integer", nullable=true)
     */
    private $antVaginales;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_cesareas", type="integer", nullable=true)
     */
    private $antCesareas;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_nac_vivos", type="integer", nullable=true)
     */
    private $antNacVivos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_viven", type="integer", nullable=true)
     */
    private $antViven;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_muert_1sem", type="integer", nullable=true)
     */
    private $antMuert1sem;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_muert_1sem_dsp", type="integer", nullable=true)
     */
    private $antMuert1semDsp;

    /**
     * @var integer
     *
     * @ORM\Column(name="ant_nac_muertos", type="integer", nullable=true)
     */
    private $antNacMuertos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ant_fe_fin_emb_ant", type="date", nullable=true)
     */
    private $antFeFinEmbAnt;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_fe_emb_mnos1", type="string", nullable=true)
     */
    private $antFeEmbMnos1;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_emb_planeado", type="string", nullable=true)
     */
    private $antEmbPlaneado;

    /**
     * @var string
     *
     * @ORM\Column(name="ant_fra_met_anti", type="string", nullable=true)
     */
    private $antFraMetAnti;

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
     * Set antGestasPrevias
     *
     * @param integer $antGestasPrevias
     * @return ShcpInsAntecedentObste
     */
    public function setAntGestasPrevias($antGestasPrevias)
    {
        $this->antGestasPrevias = $antGestasPrevias;

        return $this;
    }

    /**
     * Get antGestasPrevias
     *
     * @return integer 
     */
    public function getAntGestasPrevias()
    {
        return $this->antGestasPrevias;
    }

    /**
     * Set antEmbEctopico
     *
     * @param integer $antEmbEctopico
     * @return ShcpInsAntecedentObste
     */
    public function setAntEmbEctopico($antEmbEctopico)
    {
        $this->antEmbEctopico = $antEmbEctopico;

        return $this;
    }

    /**
     * Get antEmbEctopico
     *
     * @return integer 
     */
    public function getAntEmbEctopico()
    {
        return $this->antEmbEctopico;
    }

    /**
     * Set antAbortos
     *
     * @param integer $antAbortos
     * @return ShcpInsAntecedentObste
     */
    public function setAntAbortos($antAbortos)
    {
        $this->antAbortos = $antAbortos;

        return $this;
    }

    /**
     * Get antAbortos
     *
     * @return integer 
     */
    public function getAntAbortos()
    {
        return $this->antAbortos;
    }

    /**
     * Set ant3espAbortos
     *
     * @param string $ant3espAbortos
     * @return ShcpInsAntecedentObste
     */
    public function setAnt3espAbortos($ant3espAbortos)
    {
        $this->ant3espAbortos = $ant3espAbortos;

        return $this;
    }

    /**
     * Get ant3espAbortos
     *
     * @return string 
     */
    public function getAnt3espAbortos()
    {
        return $this->ant3espAbortos;
    }

    /**
     * Set antPartos
     *
     * @param integer $antPartos
     * @return ShcpInsAntecedentObste
     */
    public function setAntPartos($antPartos)
    {
        $this->antPartos = $antPartos;

        return $this;
    }

    /**
     * Get antPartos
     *
     * @return integer 
     */
    public function getAntPartos()
    {
        return $this->antPartos;
    }

    /**
     * Set antPesoUltEmb
     *
     * @param string $antPesoUltEmb
     * @return ShcpInsAntecedentObste
     */
    public function setAntPesoUltEmb($antPesoUltEmb)
    {
        $this->antPesoUltEmb = $antPesoUltEmb;

        return $this;
    }

    /**
     * Get antPesoUltEmb
     *
     * @return string 
     */
    public function getAntPesoUltEmb()
    {
        return $this->antPesoUltEmb;
    }

    /**
     * Set antGemelares
     *
     * @param string $antGemelares
     * @return ShcpInsAntecedentObste
     */
    public function setAntGemelares($antGemelares)
    {
        $this->antGemelares = $antGemelares;

        return $this;
    }

    /**
     * Get antGemelares
     *
     * @return string 
     */
    public function getAntGemelares()
    {
        return $this->antGemelares;
    }

    /**
     * Set antVaginales
     *
     * @param integer $antVaginales
     * @return ShcpInsAntecedentObste
     */
    public function setAntVaginales($antVaginales)
    {
        $this->antVaginales = $antVaginales;

        return $this;
    }

    /**
     * Get antVaginales
     *
     * @return integer 
     */
    public function getAntVaginales()
    {
        return $this->antVaginales;
    }

    /**
     * Set antCesareas
     *
     * @param integer $antCesareas
     * @return ShcpInsAntecedentObste
     */
    public function setAntCesareas($antCesareas)
    {
        $this->antCesareas = $antCesareas;

        return $this;
    }

    /**
     * Get antCesareas
     *
     * @return integer 
     */
    public function getAntCesareas()
    {
        return $this->antCesareas;
    }

    /**
     * Set antNacVivos
     *
     * @param integer $antNacVivos
     * @return ShcpInsAntecedentObste
     */
    public function setAntNacVivos($antNacVivos)
    {
        $this->antNacVivos = $antNacVivos;

        return $this;
    }

    /**
     * Get antNacVivos
     *
     * @return integer 
     */
    public function getAntNacVivos()
    {
        return $this->antNacVivos;
    }

    /**
     * Set antViven
     *
     * @param integer $antViven
     * @return ShcpInsAntecedentObste
     */
    public function setAntViven($antViven)
    {
        $this->antViven = $antViven;

        return $this;
    }

    /**
     * Get antViven
     *
     * @return integer 
     */
    public function getAntViven()
    {
        return $this->antViven;
    }

    /**
     * Set antMuert1sem
     *
     * @param integer $antMuert1sem
     * @return ShcpInsAntecedentObste
     */
    public function setAntMuert1sem($antMuert1sem)
    {
        $this->antMuert1sem = $antMuert1sem;

        return $this;
    }

    /**
     * Get antMuert1sem
     *
     * @return integer 
     */
    public function getAntMuert1sem()
    {
        return $this->antMuert1sem;
    }

    /**
     * Set antMuert1semDsp
     *
     * @param integer $antMuert1semDsp
     * @return ShcpInsAntecedentObste
     */
    public function setAntMuert1semDsp($antMuert1semDsp)
    {
        $this->antMuert1semDsp = $antMuert1semDsp;

        return $this;
    }

    /**
     * Get antMuert1semDsp
     *
     * @return integer 
     */
    public function getAntMuert1semDsp()
    {
        return $this->antMuert1semDsp;
    }

    /**
     * Set antNacMuertos
     *
     * @param integer $antNacMuertos
     * @return ShcpInsAntecedentObste
     */
    public function setAntNacMuertos($antNacMuertos)
    {
        $this->antNacMuertos = $antNacMuertos;

        return $this;
    }

    /**
     * Get antNacMuertos
     *
     * @return integer 
     */
    public function getAntNacMuertos()
    {
        return $this->antNacMuertos;
    }

    /**
     * Set antFeFinEmbAnt
     *
     * @param \DateTime $antFeFinEmbAnt
     * @return ShcpInsAntecedentObste
     */
    public function setAntFeFinEmbAnt($antFeFinEmbAnt)
    {
        $this->antFeFinEmbAnt = $antFeFinEmbAnt;

        return $this;
    }

    /**
     * Get antFeFinEmbAnt
     *
     * @return \DateTime 
     */
    public function getAntFeFinEmbAnt()
    {
        return $this->antFeFinEmbAnt;
    }

    /**
     * Set antFeEmbMnos1
     *
     * @param string $antFeEmbMnos1
     * @return ShcpInsAntecedentObste
     */
    public function setAntFeEmbMnos1($antFeEmbMnos1)
    {
        $this->antFeEmbMnos1 = $antFeEmbMnos1;

        return $this;
    }

    /**
     * Get antFeEmbMnos1
     *
     * @return string 
     */
    public function getAntFeEmbMnos1()
    {
        return $this->antFeEmbMnos1;
    }

    /**
     * Set antEmbPlaneado
     *
     * @param string $antEmbPlaneado
     * @return ShcpInsAntecedentObste
     */
    public function setAntEmbPlaneado($antEmbPlaneado)
    {
        $this->antEmbPlaneado = $antEmbPlaneado;

        return $this;
    }

    /**
     * Get antEmbPlaneado
     *
     * @return string 
     */
    public function getAntEmbPlaneado()
    {
        return $this->antEmbPlaneado;
    }

    /**
     * Set antFraMetAnti
     *
     * @param string $antFraMetAnti
     * @return ShcpInsAntecedentObste
     */
    public function setAntFraMetAnti($antFraMetAnti)
    {
        $this->antFraMetAnti = $antFraMetAnti;

        return $this;
    }

    /**
     * Get antFraMetAnti
     *
     * @return string 
     */
    public function getAntFraMetAnti()
    {
        return $this->antFraMetAnti;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsAntecedentObste
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
