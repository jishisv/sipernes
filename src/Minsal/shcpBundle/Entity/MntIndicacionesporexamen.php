<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntIndicacionesporexamen
 *
 * @ORM\Table(name="mnt_indicacionesporexamen", indexes={@ORM\Index(name="IDX_91AAC0DC45BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_91AAC0DC6153BA27", columns={"idservicio"}), @ORM\Index(name="IDX_91AAC0DC35F12240", columns={"idexamen"}), @ORM\Index(name="IDX_91AAC0DC6724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_91AAC0DC13B895A1", columns={"idusuarioreg"})})
 * @ORM\Entity
 */
class MntIndicacionesporexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_indicacionesporexamen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacion", type="string", length=250, nullable=false)
     */
    private $indicacion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;

    /**
     * @var \CtlAreaServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="id")
     * })
     */
    private $idarea;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idservicio", referencedColumnName="id")
     * })
     */
    private $idservicio;

    /**
     * @var \CtlExamenServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexamen", referencedColumnName="id")
     * })
     */
    private $idexamen;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;



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
     * Set indicacion
     *
     * @param string $indicacion
     * @return MntIndicacionesporexamen
     */
    public function setIndicacion($indicacion)
    {
        $this->indicacion = $indicacion;

        return $this;
    }

    /**
     * Get indicacion
     *
     * @return string 
     */
    public function getIndicacion()
    {
        return $this->indicacion;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return MntIndicacionesporexamen
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
     * @return MntIndicacionesporexamen
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

    /**
     * Set idarea
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idarea
     * @return MntIndicacionesporexamen
     */
    public function setIdarea(\Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set idservicio
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idservicio
     * @return MntIndicacionesporexamen
     */
    public function setIdservicio(\Minsal\shcpBundle\Entity\CtlAtencion $idservicio = null)
    {
        $this->idservicio = $idservicio;

        return $this;
    }

    /**
     * Get idservicio
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set idexamen
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idexamen
     * @return MntIndicacionesporexamen
     */
    public function setIdexamen(\Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idexamen = null)
    {
        $this->idexamen = $idexamen;

        return $this;
    }

    /**
     * Get idexamen
     *
     * @return \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo 
     */
    public function getIdexamen()
    {
        return $this->idexamen;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return MntIndicacionesporexamen
     */
    public function setIdusuariomod(\Minsal\shcpBundle\Entity\FosUserUser $idusuariomod = null)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return MntIndicacionesporexamen
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }
}
