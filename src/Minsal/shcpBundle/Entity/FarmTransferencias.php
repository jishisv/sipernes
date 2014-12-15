<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmTransferencias
 *
 * @ORM\Table(name="farm_transferencias", indexes={@ORM\Index(name="IDX_92D2D473F58EA699", columns={"idmedicina"})})
 * @ORM\Entity
 */
class FarmTransferencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_transferencias_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idareaorigen", type="integer", nullable=false)
     */
    private $idareaorigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="idareadestino", type="integer", nullable=true)
     */
    private $idareadestino;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="text", nullable=false)
     */
    private $justificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatransferencia", type="date", nullable=false)
     */
    private $fechatransferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonal", type="integer", nullable=false)
     */
    private $idpersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="idestado", type="string", nullable=false)
     */
    private $idestado;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad1", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $cantidad1;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlote", type="integer", nullable=false)
     */
    private $idlote;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad2", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $cantidad2;

    /**
     * @var integer
     *
     * @ORM\Column(name="idlote2", type="integer", nullable=true)
     */
    private $idlote2;

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
     * @var \FarmCatalogoproductos
     *
     * @ORM\ManyToOne(targetEntity="FarmCatalogoproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmedicina", referencedColumnName="id")
     * })
     */
    private $idmedicina;



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
     * Set cantidad
     *
     * @param string $cantidad
     * @return FarmTransferencias
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idareaorigen
     *
     * @param integer $idareaorigen
     * @return FarmTransferencias
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
     * Set idareadestino
     *
     * @param integer $idareadestino
     * @return FarmTransferencias
     */
    public function setIdareadestino($idareadestino)
    {
        $this->idareadestino = $idareadestino;

        return $this;
    }

    /**
     * Get idareadestino
     *
     * @return integer 
     */
    public function getIdareadestino()
    {
        return $this->idareadestino;
    }

    /**
     * Set justificacion
     *
     * @param string $justificacion
     * @return FarmTransferencias
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
     * Set fechatransferencia
     *
     * @param \DateTime $fechatransferencia
     * @return FarmTransferencias
     */
    public function setFechatransferencia($fechatransferencia)
    {
        $this->fechatransferencia = $fechatransferencia;

        return $this;
    }

    /**
     * Get fechatransferencia
     *
     * @return \DateTime 
     */
    public function getFechatransferencia()
    {
        return $this->fechatransferencia;
    }

    /**
     * Set idpersonal
     *
     * @param integer $idpersonal
     * @return FarmTransferencias
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
     * Set idestado
     *
     * @param string $idestado
     * @return FarmTransferencias
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
     * Set cantidad1
     *
     * @param string $cantidad1
     * @return FarmTransferencias
     */
    public function setCantidad1($cantidad1)
    {
        $this->cantidad1 = $cantidad1;

        return $this;
    }

    /**
     * Get cantidad1
     *
     * @return string 
     */
    public function getCantidad1()
    {
        return $this->cantidad1;
    }

    /**
     * Set idlote
     *
     * @param integer $idlote
     * @return FarmTransferencias
     */
    public function setIdlote($idlote)
    {
        $this->idlote = $idlote;

        return $this;
    }

    /**
     * Get idlote
     *
     * @return integer 
     */
    public function getIdlote()
    {
        return $this->idlote;
    }

    /**
     * Set cantidad2
     *
     * @param string $cantidad2
     * @return FarmTransferencias
     */
    public function setCantidad2($cantidad2)
    {
        $this->cantidad2 = $cantidad2;

        return $this;
    }

    /**
     * Get cantidad2
     *
     * @return string 
     */
    public function getCantidad2()
    {
        return $this->cantidad2;
    }

    /**
     * Set idlote2
     *
     * @param integer $idlote2
     * @return FarmTransferencias
     */
    public function setIdlote2($idlote2)
    {
        $this->idlote2 = $idlote2;

        return $this;
    }

    /**
     * Get idlote2
     *
     * @return integer 
     */
    public function getIdlote2()
    {
        return $this->idlote2;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmTransferencias
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
     * @return FarmTransferencias
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
     * Set idmedicina
     *
     * @param \Minsal\shcpBundle\Entity\FarmCatalogoproductos $idmedicina
     * @return FarmTransferencias
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
}
