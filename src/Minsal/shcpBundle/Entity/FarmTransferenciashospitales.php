<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmTransferenciashospitales
 *
 * @ORM\Table(name="farm_transferenciashospitales", indexes={@ORM\Index(name="IDX_345519DEF58EA699", columns={"idmedicina"}), @ORM\Index(name="IDX_345519DE5B5F2589", columns={"idpersonal"})})
 * @ORM\Entity
 */
class FarmTransferenciashospitales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_transferenciashospitales_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="idestablecimientoorigen", type="integer", nullable=false)
     */
    private $idestablecimientoorigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimientodestino", type="integer", nullable=false)
     */
    private $idestablecimientodestino;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="text", nullable=false)
     */
    private $justificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatransferencia", type="datetime", nullable=false)
     */
    private $fechatransferencia;

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
     * @ORM\Column(name="idlote", type="integer", nullable=true)
     */
    private $idlote;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad2", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $cantidad2;

    /**
     * @var string
     *
     * @ORM\Column(name="idlote2", type="decimal", precision=11, scale=3, nullable=true)
     */
    private $idlote2;

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
     * @var \FarmUsuarios
     *
     * @ORM\ManyToOne(targetEntity="FarmUsuarios")
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return FarmTransferenciashospitales
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
     * Set idestablecimientoorigen
     *
     * @param integer $idestablecimientoorigen
     * @return FarmTransferenciashospitales
     */
    public function setIdestablecimientoorigen($idestablecimientoorigen)
    {
        $this->idestablecimientoorigen = $idestablecimientoorigen;

        return $this;
    }

    /**
     * Get idestablecimientoorigen
     *
     * @return integer 
     */
    public function getIdestablecimientoorigen()
    {
        return $this->idestablecimientoorigen;
    }

    /**
     * Set idestablecimientodestino
     *
     * @param integer $idestablecimientodestino
     * @return FarmTransferenciashospitales
     */
    public function setIdestablecimientodestino($idestablecimientodestino)
    {
        $this->idestablecimientodestino = $idestablecimientodestino;

        return $this;
    }

    /**
     * Get idestablecimientodestino
     *
     * @return integer 
     */
    public function getIdestablecimientodestino()
    {
        return $this->idestablecimientodestino;
    }

    /**
     * Set justificacion
     *
     * @param string $justificacion
     * @return FarmTransferenciashospitales
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
     * @return FarmTransferenciashospitales
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
     * Set idestado
     *
     * @param string $idestado
     * @return FarmTransferenciashospitales
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
     * @return FarmTransferenciashospitales
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
     * @return FarmTransferenciashospitales
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
     * @return FarmTransferenciashospitales
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
     * @param string $idlote2
     * @return FarmTransferenciashospitales
     */
    public function setIdlote2($idlote2)
    {
        $this->idlote2 = $idlote2;

        return $this;
    }

    /**
     * Get idlote2
     *
     * @return string 
     */
    public function getIdlote2()
    {
        return $this->idlote2;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return FarmTransferenciashospitales
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
     * @return FarmTransferenciashospitales
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
     * @param \Minsal\shcpBundle\Entity\FarmUsuarios $idpersonal
     * @return FarmTransferenciashospitales
     */
    public function setIdpersonal(\Minsal\shcpBundle\Entity\FarmUsuarios $idpersonal = null)
    {
        $this->idpersonal = $idpersonal;

        return $this;
    }

    /**
     * Get idpersonal
     *
     * @return \Minsal\shcpBundle\Entity\FarmUsuarios 
     */
    public function getIdpersonal()
    {
        return $this->idpersonal;
    }
}
