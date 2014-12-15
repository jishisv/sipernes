<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmLotes
 *
 * @ORM\Table(name="farm_lotes")
 * @ORM\Entity
 */
class FarmLotes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_lotes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lote", type="string", length=60, nullable=false)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="preciolote", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $preciolote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechavencimiento", type="date", nullable=false)
     */
    private $fechavencimiento;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lote
     *
     * @param string $lote
     * @return FarmLotes
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Get lote
     *
     * @return string 
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set preciolote
     *
     * @param string $preciolote
     * @return FarmLotes
     */
    public function setPreciolote($preciolote)
    {
        $this->preciolote = $preciolote;

        return $this;
    }

    /**
     * Get preciolote
     *
     * @return string 
     */
    public function getPreciolote()
    {
        return $this->preciolote;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     * @return FarmLotes
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime 
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmLotes
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
     * @return FarmLotes
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
}
