<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmRecetas
 *
 * @ORM\Table(name="farm_recetas", indexes={@ORM\Index(name="IDX_E9C07BE845BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_E9C07BE8947B0200", columns={"idfarmacia"})})
 * @ORM\Entity
 */
class FarmRecetas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_recetas_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorialclinico", type="integer", nullable=false)
     */
    private $idhistorialclinico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="idestado", type="string", nullable=false)
     */
    private $idestado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonal", type="integer", nullable=true)
     */
    private $idpersonal;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroreceta", type="integer", nullable=true)
     */
    private $numeroreceta;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonalintro", type="integer", nullable=true)
     */
    private $idpersonalintro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idareaorigen", type="integer", nullable=true)
     */
    private $idareaorigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="correlativo", type="integer", nullable=true)
     */
    private $correlativo;

    /**
     * @var string
     *
     * @ORM\Column(name="correlativoanual", type="string", length=100, nullable=true)
     */
    private $correlativoanual;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonaldespacho", type="integer", nullable=true)
     */
    private $idpersonaldespacho;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=true)
     */
    private $idestablecimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=true)
     */
    private $idmodalidad;

    /**
     * @var \MntAreafarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntAreafarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="id")
     * })
     */
    private $idarea;

    /**
     * @var \MntFarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntFarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfarmacia", referencedColumnName="id")
     * })
     */
    private $idfarmacia;



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
     * Set idhistorialclinico
     *
     * @param integer $idhistorialclinico
     * @return FarmRecetas
     */
    public function setIdhistorialclinico($idhistorialclinico)
    {
        $this->idhistorialclinico = $idhistorialclinico;

        return $this;
    }

    /**
     * Get idhistorialclinico
     *
     * @return integer 
     */
    public function getIdhistorialclinico()
    {
        return $this->idhistorialclinico;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FarmRecetas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idestado
     *
     * @param string $idestado
     * @return FarmRecetas
     */
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

        return $this;
    }

    /**
     * Get idestado
     *
     * @return string 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set idpersonal
     *
     * @param integer $idpersonal
     * @return FarmRecetas
     */
    public function setIdpersonal($idpersonal)
    {
        $this->idpersonal = $idpersonal;

        return $this;
    }

    /**
     * Get idpersonal
     *
     * @return integer 
     */
    public function getIdpersonal()
    {
        return $this->idpersonal;
    }

    /**
     * Set numeroreceta
     *
     * @param integer $numeroreceta
     * @return FarmRecetas
     */
    public function setNumeroreceta($numeroreceta)
    {
        $this->numeroreceta = $numeroreceta;

        return $this;
    }

    /**
     * Get numeroreceta
     *
     * @return integer 
     */
    public function getNumeroreceta()
    {
        return $this->numeroreceta;
    }

    /**
     * Set idpersonalintro
     *
     * @param integer $idpersonalintro
     * @return FarmRecetas
     */
    public function setIdpersonalintro($idpersonalintro)
    {
        $this->idpersonalintro = $idpersonalintro;

        return $this;
    }

    /**
     * Get idpersonalintro
     *
     * @return integer 
     */
    public function getIdpersonalintro()
    {
        return $this->idpersonalintro;
    }

    /**
     * Set idareaorigen
     *
     * @param integer $idareaorigen
     * @return FarmRecetas
     */
    public function setIdareaorigen($idareaorigen)
    {
        $this->idareaorigen = $idareaorigen;

        return $this;
    }

    /**
     * Get idareaorigen
     *
     * @return integer 
     */
    public function getIdareaorigen()
    {
        return $this->idareaorigen;
    }

    /**
     * Set correlativo
     *
     * @param integer $correlativo
     * @return FarmRecetas
     */
    public function setCorrelativo($correlativo)
    {
        $this->correlativo = $correlativo;

        return $this;
    }

    /**
     * Get correlativo
     *
     * @return integer 
     */
    public function getCorrelativo()
    {
        return $this->correlativo;
    }

    /**
     * Set correlativoanual
     *
     * @param string $correlativoanual
     * @return FarmRecetas
     */
    public function setCorrelativoanual($correlativoanual)
    {
        $this->correlativoanual = $correlativoanual;

        return $this;
    }

    /**
     * Get correlativoanual
     *
     * @return string 
     */
    public function getCorrelativoanual()
    {
        return $this->correlativoanual;
    }

    /**
     * Set idpersonaldespacho
     *
     * @param integer $idpersonaldespacho
     * @return FarmRecetas
     */
    public function setIdpersonaldespacho($idpersonaldespacho)
    {
        $this->idpersonaldespacho = $idpersonaldespacho;

        return $this;
    }

    /**
     * Get idpersonaldespacho
     *
     * @return integer 
     */
    public function getIdpersonaldespacho()
    {
        return $this->idpersonaldespacho;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmRecetas
     */
    public function setIdestablecimiento($idestablecimiento)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return integer 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return FarmRecetas
     */
    public function setIdmodalidad($idmodalidad)
    {
        $this->idmodalidad = $idmodalidad;

        return $this;
    }

    /**
     * Get idmodalidad
     *
     * @return integer 
     */
    public function getIdmodalidad()
    {
        return $this->idmodalidad;
    }

    /**
     * Set idarea
     *
     * @param \Minsal\shcpBundle\Entity\MntAreafarmacia $idarea
     * @return FarmRecetas
     */
    public function setIdarea(\Minsal\shcpBundle\Entity\MntAreafarmacia $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \Minsal\shcpBundle\Entity\MntAreafarmacia 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set idfarmacia
     *
     * @param \Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia
     * @return FarmRecetas
     */
    public function setIdfarmacia(\Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia = null)
    {
        $this->idfarmacia = $idfarmacia;

        return $this;
    }

    /**
     * Get idfarmacia
     *
     * @return \Minsal\shcpBundle\Entity\MntFarmacia 
     */
    public function getIdfarmacia()
    {
        return $this->idfarmacia;
    }
}
