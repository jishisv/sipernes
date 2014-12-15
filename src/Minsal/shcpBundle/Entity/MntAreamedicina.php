<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAreamedicina
 *
 * @ORM\Table(name="mnt_areamedicina", indexes={@ORM\Index(name="IDX_FDD2A77C45BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_FDD2A77CF58EA699", columns={"idmedicina"})})
 * @ORM\Entity
 */
class MntAreamedicina
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_areamedicina_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="dispensada", type="integer", nullable=true)
     */
    private $dispensada;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dispensada
     *
     * @param integer $dispensada
     * @return MntAreamedicina
     */
    public function setDispensada($dispensada)
    {
        $this->dispensada = $dispensada;

        return $this;
    }

    /**
     * Get dispensada
     *
     * @return integer 
     */
    public function getDispensada()
    {
        return $this->dispensada;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return MntAreamedicina
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
     * @return MntAreamedicina
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
     * @return MntAreamedicina
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
     * @return MntAreamedicina
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
