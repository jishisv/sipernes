<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmBitacoramedicinaexistenciaxarea
 *
 * @ORM\Table(name="farm_bitacoramedicinaexistenciaxarea", indexes={@ORM\Index(name="IDX_D7257F8A45BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_D7257F8AF58EA699", columns={"idmedicina"}), @ORM\Index(name="IDX_D7257F8A5B5F2589", columns={"idpersonal"}), @ORM\Index(name="IDX_D7257F8AB67BC33F", columns={"idlote"})})
 * @ORM\Entity
 */
class FarmBitacoramedicinaexistenciaxarea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_bitacoramedicinaexistenciaxarea_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $existencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idexistenciaorigen", type="integer", nullable=true)
     */
    private $idexistenciaorigen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoraingreso", type="datetime", nullable=false)
     */
    private $fechahoraingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtransferencia", type="integer", nullable=false)
     */
    private $idtransferencia = '0';

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
     * @var \MntAreafarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntAreafarmacia")
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
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpersonal", referencedColumnName="id")
     * })
     */
    private $idpersonal;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set existencia
     *
     * @param string $existencia
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * Set idexistenciaorigen
     *
     * @param integer $idexistenciaorigen
     * @return FarmBitacoramedicinaexistenciaxarea
     */
    public function setIdexistenciaorigen($idexistenciaorigen)
    {
        $this->idexistenciaorigen = $idexistenciaorigen;

        return $this;
    }

    /**
     * Get idexistenciaorigen
     *
     * @return integer 
     */
    public function getIdexistenciaorigen()
    {
        return $this->idexistenciaorigen;
    }

    /**
     * Set fechahoraingreso
     *
     * @param \DateTime $fechahoraingreso
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * Set idtransferencia
     *
     * @param integer $idtransferencia
     * @return FarmBitacoramedicinaexistenciaxarea
     */
    public function setIdtransferencia($idtransferencia)
    {
        $this->idtransferencia = $idtransferencia;

        return $this;
    }

    /**
     * Get idtransferencia
     *
     * @return integer 
     */
    public function getIdtransferencia()
    {
        return $this->idtransferencia;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * Set idmedicina
     *
     * @param \Minsal\shcpBundle\Entity\FarmCatalogoproductos $idmedicina
     * @return FarmBitacoramedicinaexistenciaxarea
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
     * Set idpersonal
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idpersonal
     * @return FarmBitacoramedicinaexistenciaxarea
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

    /**
     * Set idlote
     *
     * @param \Minsal\shcpBundle\Entity\FarmLotes $idlote
     * @return FarmBitacoramedicinaexistenciaxarea
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
}
