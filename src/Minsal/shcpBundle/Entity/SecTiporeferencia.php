<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecTiporeferencia
 *
 * @ORM\Table(name="sec_tiporeferencia")
 * @ORM\Entity
 */
class SecTiporeferencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtiporeferencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_tiporeferencia_idtiporeferencia_seq", allocationSize=1, initialValue=1)
     */
    private $idtiporeferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="tiporeferencia", type="string", length=100, nullable=true)
     */
    private $tiporeferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarioreg", type="smallint", nullable=true)
     */
    private $idusuarioreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;



    /**
     * Get idtiporeferencia
     *
     * @return integer 
     */
    public function getIdtiporeferencia()
    {
        return $this->idtiporeferencia;
    }

    /**
     * Set tiporeferencia
     *
     * @param string $tiporeferencia
     * @return SecTiporeferencia
     */
    public function setTiporeferencia($tiporeferencia)
    {
        $this->tiporeferencia = $tiporeferencia;

        return $this;
    }

    /**
     * Get tiporeferencia
     *
     * @return string 
     */
    public function getTiporeferencia()
    {
        return $this->tiporeferencia;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return SecTiporeferencia
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
     * @return SecTiporeferencia
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
}
