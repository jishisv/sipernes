<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmMedicinarecetada
 *
 * @ORM\Table(name="farm_medicinarecetada", indexes={@ORM\Index(name="IDX_D91F469BF58EA699", columns={"idmedicina"}), @ORM\Index(name="IDX_D91F469BD42EE4E2", columns={"idreceta"})})
 * @ORM\Entity
 */
class FarmMedicinarecetada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_medicinarecetada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis", type="text", nullable=false)
     */
    private $dosis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentrega", type="date", nullable=true)
     */
    private $fechaentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="idestado", type="string", nullable=true)
     */
    private $idestado;

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
     * @var \FarmRecetas
     *
     * @ORM\ManyToOne(targetEntity="FarmRecetas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idreceta", referencedColumnName="id")
     * })
     */
    private $idreceta;



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
     * @return FarmMedicinarecetada
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
     * Set dosis
     *
     * @param string $dosis
     * @return FarmMedicinarecetada
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
     * Set fechaentrega
     *
     * @param \DateTime $fechaentrega
     * @return FarmMedicinarecetada
     */
    public function setFechaentrega($fechaentrega)
    {
        $this->fechaentrega = $fechaentrega;

        return $this;
    }

    /**
     * Get fechaentrega
     *
     * @return \DateTime 
     */
    public function getFechaentrega()
    {
        return $this->fechaentrega;
    }

    /**
     * Set idestado
     *
     * @param string $idestado
     * @return FarmMedicinarecetada
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
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmMedicinarecetada
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
     * @return FarmMedicinarecetada
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
     * @return FarmMedicinarecetada
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
     * Set idreceta
     *
     * @param \Minsal\shcpBundle\Entity\FarmRecetas $idreceta
     * @return FarmMedicinarecetada
     */
    public function setIdreceta(\Minsal\shcpBundle\Entity\FarmRecetas $idreceta = null)
    {
        $this->idreceta = $idreceta;

        return $this;
    }

    /**
     * Get idreceta
     *
     * @return \Minsal\shcpBundle\Entity\FarmRecetas 
     */
    public function getIdreceta()
    {
        return $this->idreceta;
    }
}
