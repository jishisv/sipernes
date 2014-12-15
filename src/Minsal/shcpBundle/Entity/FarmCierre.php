<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmCierre
 *
 * @ORM\Table(name="farm_cierre")
 * @ORM\Entity
 */
class FarmCierre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_cierre_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="anocierre", type="integer", nullable=true)
     */
    private $anocierre;

    /**
     * @var string
     *
     * @ORM\Column(name="mescierre", type="string", length=15, nullable=true)
     */
    private $mescierre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarioreg", type="integer", nullable=true)
     */
    private $idusuarioreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

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
     * Set anocierre
     *
     * @param integer $anocierre
     * @return FarmCierre
     */
    public function setAnocierre($anocierre)
    {
        $this->anocierre = $anocierre;

        return $this;
    }

    /**
     * Get anocierre
     *
     * @return integer 
     */
    public function getAnocierre()
    {
        return $this->anocierre;
    }

    /**
     * Set mescierre
     *
     * @param string $mescierre
     * @return FarmCierre
     */
    public function setMescierre($mescierre)
    {
        $this->mescierre = $mescierre;

        return $this;
    }

    /**
     * Get mescierre
     *
     * @return string 
     */
    public function getMescierre()
    {
        return $this->mescierre;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return FarmCierre
     */
    public function setIdusuarioreg($idusuarioreg)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return integer 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return FarmCierre
     */
    public function setFechahorareg($fechahorareg)
    {
        $this->fechahorareg = $fechahorareg;

        return $this;
    }

    /**
     * Get fechahorareg
     *
     * @return \DateTime 
     */
    public function getFechahorareg()
    {
        return $this->fechahorareg;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmCierre
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
     * @return FarmCierre
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
