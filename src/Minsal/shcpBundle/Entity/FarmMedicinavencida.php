<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmMedicinavencida
 *
 * @ORM\Table(name="farm_medicinavencida", indexes={@ORM\Index(name="IDX_F621B83945BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_F621B839F58EA699", columns={"idmedicina"}), @ORM\Index(name="IDX_F621B839B67BC33F", columns={"idlote"})})
 * @ORM\Entity
 */
class FarmMedicinavencida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_medicinavencida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $existencia;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion", type="text", nullable=true)
     */
    private $justificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoraingreso", type="datetime", nullable=false)
     */
    private $fechahoraingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idpersonal", type="integer", nullable=false)
     */
    private $idpersonal;

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
     * @return FarmMedicinavencida
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
     * Set justificacion
     *
     * @param string $justificacion
     * @return FarmMedicinavencida
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FarmMedicinavencida
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
     * Set fechahoraingreso
     *
     * @param \DateTime $fechahoraingreso
     * @return FarmMedicinavencida
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
     * Set idpersonal
     *
     * @param integer $idpersonal
     * @return FarmMedicinavencida
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
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmMedicinavencida
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
     * @return FarmMedicinavencida
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
     * @return FarmMedicinavencida
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
     * @return FarmMedicinavencida
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
     * @return FarmMedicinavencida
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
