<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmPeriododesabastecido
 *
 * @ORM\Table(name="farm_periododesabastecido", indexes={@ORM\Index(name="IDX_7E114945F58EA699", columns={"idmedicina"})})
 * @ORM\Entity
 */
class FarmPeriododesabastecido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_periododesabastecido_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var integer
     *
     * @ORM\Column(name="promediorecetas", type="integer", nullable=false)
     */
    private $promediorecetas;

    /**
     * @var string
     *
     * @ORM\Column(name="promediodiarias", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $promediodiarias;

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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return FarmPeriododesabastecido
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return FarmPeriododesabastecido
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set promediorecetas
     *
     * @param integer $promediorecetas
     * @return FarmPeriododesabastecido
     */
    public function setPromediorecetas($promediorecetas)
    {
        $this->promediorecetas = $promediorecetas;

        return $this;
    }

    /**
     * Get promediorecetas
     *
     * @return integer 
     */
    public function getPromediorecetas()
    {
        return $this->promediorecetas;
    }

    /**
     * Set promediodiarias
     *
     * @param string $promediodiarias
     * @return FarmPeriododesabastecido
     */
    public function setPromediodiarias($promediodiarias)
    {
        $this->promediodiarias = $promediodiarias;

        return $this;
    }

    /**
     * Get promediodiarias
     *
     * @return string 
     */
    public function getPromediodiarias()
    {
        return $this->promediodiarias;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmPeriododesabastecido
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
     * @return FarmPeriododesabastecido
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
     * @return FarmPeriododesabastecido
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
