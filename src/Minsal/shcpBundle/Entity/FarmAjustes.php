<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmAjustes
 *
 * @ORM\Table(name="farm_ajustes", indexes={@ORM\Index(name="IDX_B01EE00B45BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_B01EE00BF58EA699", columns={"idmedicina"}), @ORM\Index(name="IDX_B01EE00BB67BC33F", columns={"idlote"}), @ORM\Index(name="IDX_B01EE00B9E316910", columns={"idexistencia"}), @ORM\Index(name="IDX_B01EE00B5B5F2589", columns={"idpersonal"})})
 * @ORM\Entity
 */
class FarmAjustes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_ajustes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="actanumero", type="string", length=60, nullable=false)
     */
    private $actanumero;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $existencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaajuste", type="date", nullable=false)
     */
    private $fechaajuste;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="text", nullable=false)
     */
    private $justificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="idestado", type="string", nullable=false)
     */
    private $idestado = 'X';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoraingreso", type="datetime", nullable=false)
     */
    private $fechahoraingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=false)
     */
    private $idestablecimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=false)
     */
    private $idmodalidad;

    /**
     * @var \MntFarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntFarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="id")
     * })
     */
    private $idarea;

    /**
     * @var \FarmCatalogoproductos
     *
     * @ORM\ManyToOne(targetEntity="FarmCatalogoproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmedicina", referencedColumnName="id")
     * })
     */
    private $idmedicina;

    /**
     * @var \FarmLotes
     *
     * @ORM\ManyToOne(targetEntity="FarmLotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlote", referencedColumnName="id")
     * })
     */
    private $idlote;

    /**
     * @var \FarmMedicinaexistenciaxarea
     *
     * @ORM\ManyToOne(targetEntity="FarmMedicinaexistenciaxarea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexistencia", referencedColumnName="id")
     * })
     */
    private $idexistencia;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpersonal", referencedColumnName="id")
     * })
     */
    private $idpersonal;



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
     * Set actanumero
     *
     * @param string $actanumero
     * @return FarmAjustes
     */
    public function setActanumero($actanumero)
    {
        $this->actanumero = $actanumero;

        return $this;
    }

    /**
     * Get actanumero
     *
     * @return string 
     */
    public function getActanumero()
    {
        return $this->actanumero;
    }

    /**
     * Set existencia
     *
     * @param string $existencia
     * @return FarmAjustes
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return string 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set fechaajuste
     *
     * @param \DateTime $fechaajuste
     * @return FarmAjustes
     */
    public function setFechaajuste($fechaajuste)
    {
        $this->fechaajuste = $fechaajuste;

        return $this;
    }

    /**
     * Get fechaajuste
     *
     * @return \DateTime 
     */
    public function getFechaajuste()
    {
        return $this->fechaajuste;
    }

    /**
     * Set justificacion
     *
     * @param string $justificacion
     * @return FarmAjustes
     */
    public function setJustificacion($justificacion)
    {
        $this->justificacion = $justificacion;

        return $this;
    }

    /**
     * Get justificacion
     *
     * @return string 
     */
    public function getJustificacion()
    {
        return $this->justificacion;
    }

    /**
     * Set idestado
     *
     * @param string $idestado
     * @return FarmAjustes
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
     * Set fechahoraingreso
     *
     * @param \DateTime $fechahoraingreso
     * @return FarmAjustes
     */
    public function setFechahoraingreso($fechahoraingreso)
    {
        $this->fechahoraingreso = $fechahoraingreso;

        return $this;
    }

    /**
     * Get fechahoraingreso
     *
     * @return \DateTime 
     */
    public function getFechahoraingreso()
    {
        return $this->fechahoraingreso;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmAjustes
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
     * @return FarmAjustes
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
     * @param \Minsal\shcpBundle\Entity\MntFarmacia $idarea
     * @return FarmAjustes
     */
    public function setIdarea(\Minsal\shcpBundle\Entity\MntFarmacia $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \Minsal\shcpBundle\Entity\MntFarmacia 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set idmedicina
     *
     * @param \Minsal\shcpBundle\Entity\FarmCatalogoproductos $idmedicina
     * @return FarmAjustes
     */
    public function setIdmedicina(\Minsal\shcpBundle\Entity\FarmCatalogoproductos $idmedicina = null)
    {
        $this->idmedicina = $idmedicina;

        return $this;
    }

    /**
     * Get idmedicina
     *
     * @return \Minsal\shcpBundle\Entity\FarmCatalogoproductos 
     */
    public function getIdmedicina()
    {
        return $this->idmedicina;
    }

    /**
     * Set idlote
     *
     * @param \Minsal\shcpBundle\Entity\FarmLotes $idlote
     * @return FarmAjustes
     */
    public function setIdlote(\Minsal\shcpBundle\Entity\FarmLotes $idlote = null)
    {
        $this->idlote = $idlote;

        return $this;
    }

    /**
     * Get idlote
     *
     * @return \Minsal\shcpBundle\Entity\FarmLotes 
     */
    public function getIdlote()
    {
        return $this->idlote;
    }

    /**
     * Set idexistencia
     *
     * @param \Minsal\shcpBundle\Entity\FarmMedicinaexistenciaxarea $idexistencia
     * @return FarmAjustes
     */
    public function setIdexistencia(\Minsal\shcpBundle\Entity\FarmMedicinaexistenciaxarea $idexistencia = null)
    {
        $this->idexistencia = $idexistencia;

        return $this;
    }

    /**
     * Get idexistencia
     *
     * @return \Minsal\shcpBundle\Entity\FarmMedicinaexistenciaxarea 
     */
    public function getIdexistencia()
    {
        return $this->idexistencia;
    }

    /**
     * Set idpersonal
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idpersonal
     * @return FarmAjustes
     */
    public function setIdpersonal(\Minsal\shcpBundle\Entity\FosUserUser $idpersonal = null)
    {
        $this->idpersonal = $idpersonal;

        return $this;
    }

    /**
     * Get idpersonal
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdpersonal()
    {
        return $this->idpersonal;
    }
}
