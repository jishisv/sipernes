<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCondicionegreso
 *
 * @ORM\Table(name="mnt_condicionegreso")
 * @ORM\Entity
 */
class MntCondicionegreso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcondicion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_condicionegreso_idcondicion_seq", allocationSize=1, initialValue=1)
     */
    private $idcondicion;

    /**
     * @var string
     *
     * @ORM\Column(name="desccondicion", type="string", length=25, nullable=false)
     */
    private $desccondicion = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarioreg", type="smallint", nullable=false)
     */
    private $idusuarioreg = '(0)::smallint';

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuariomod", type="smallint", nullable=false)
     */
    private $idusuariomod = '(0)::smallint';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=false)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=false)
     */
    private $fechahoramod;



    /**
     * Get idcondicion
     *
     * @return integer 
     */
    public function getIdcondicion()
    {
        return $this->idcondicion;
    }

    /**
     * Set desccondicion
     *
     * @param string $desccondicion
     * @return MntCondicionegreso
     */
    public function setDesccondicion($desccondicion)
    {
        $this->desccondicion = $desccondicion;

        return $this;
    }

    /**
     * Get desccondicion
     *
     * @return string 
     */
    public function getDesccondicion()
    {
        return $this->desccondicion;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return MntCondicionegreso
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
     * Set idusuariomod
     *
     * @param integer $idusuariomod
     * @return MntCondicionegreso
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
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return MntCondicionegreso
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
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return MntCondicionegreso
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
