<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmEntregamedicamento
 *
 * @ORM\Table(name="farm_entregamedicamento", indexes={@ORM\Index(name="IDX_7B5FB277F58EA699", columns={"idmedicina"})})
 * @ORM\Entity
 */
class FarmEntregamedicamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_entregamedicamento_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="idlote", type="integer", nullable=false)
     */
    private $idlote;

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
     * Set existencia
     *
     * @param string $existencia
     * @return FarmEntregamedicamento
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
     * Set idlote
     *
     * @param integer $idlote
     * @return FarmEntregamedicamento
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
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmEntregamedicamento
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
     * @return FarmEntregamedicamento
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
     * @return FarmEntregamedicamento
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
