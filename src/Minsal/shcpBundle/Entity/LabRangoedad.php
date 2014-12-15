<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabRangoedad
 *
 * @ORM\Table(name="lab_rangoedad")
 * @ORM\Entity
 */
class LabRangoedad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_rangoedad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="edadinicio", type="integer", nullable=false)
     */
    private $edadinicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="edadfinal", type="integer", nullable=false)
     */
    private $edadfinal;

    /**
     * @var string
     *
     * @ORM\Column(name="unidadtiempo", type="string", length=1, nullable=true)
     */
    private $unidadtiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=1, nullable=true)
     */
    private $clasificacion;

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
     * @ORM\Column(name="idusuariomod", type="integer", nullable=true)
     */
    private $idusuariomod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;



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
     * Set edadinicio
     *
     * @param integer $edadinicio
     * @return LabRangoedad
     */
    public function setEdadinicio($edadinicio)
    {
        $this->edadinicio = $edadinicio;

        return $this;
    }

    /**
     * Get edadinicio
     *
     * @return integer 
     */
    public function getEdadinicio()
    {
        return $this->edadinicio;
    }

    /**
     * Set edadfinal
     *
     * @param integer $edadfinal
     * @return LabRangoedad
     */
    public function setEdadfinal($edadfinal)
    {
        $this->edadfinal = $edadfinal;

        return $this;
    }

    /**
     * Get edadfinal
     *
     * @return integer 
     */
    public function getEdadfinal()
    {
        return $this->edadfinal;
    }

    /**
     * Set unidadtiempo
     *
     * @param string $unidadtiempo
     * @return LabRangoedad
     */
    public function setUnidadtiempo($unidadtiempo)
    {
        $this->unidadtiempo = $unidadtiempo;

        return $this;
    }

    /**
     * Get unidadtiempo
     *
     * @return string 
     */
    public function getUnidadtiempo()
    {
        return $this->unidadtiempo;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return LabRangoedad
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return LabRangoedad
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
     * @return LabRangoedad
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
     * Set idusuariomod
     *
     * @param integer $idusuariomod
     * @return LabRangoedad
     */
    public function setIdusuariomod($idusuariomod)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return integer 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return LabRangoedad
     */
    public function setFechahoramod($fechahoramod)
    {
        $this->fechahoramod = $fechahoramod;

        return $this;
    }

    /**
     * Get fechahoramod
     *
     * @return \DateTime 
     */
    public function getFechahoramod()
    {
        return $this->fechahoramod;
    }
}
