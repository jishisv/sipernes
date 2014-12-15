<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntFormularios
 *
 * @ORM\Table(name="mnt_formularios")
 * @ORM\Entity
 */
class MntFormularios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_formularios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreformulario", type="string", length=100, nullable=false)
     */
    private $nombreformulario;

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
     * @var integer
     *
     * @ORM\Column(name="idusuariomod", type="smallint", nullable=true)
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
     * Set nombreformulario
     *
     * @param string $nombreformulario
     * @return MntFormularios
     */
    public function setNombreformulario($nombreformulario)
    {
        $this->nombreformulario = $nombreformulario;

        return $this;
    }

    /**
     * Get nombreformulario
     *
     * @return string 
     */
    public function getNombreformulario()
    {
        return $this->nombreformulario;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return MntFormularios
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
     * @return MntFormularios
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
     * @return MntFormularios
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
     * @return MntFormularios
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
