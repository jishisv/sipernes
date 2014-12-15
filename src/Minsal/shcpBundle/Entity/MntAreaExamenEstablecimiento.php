<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAreaExamenEstablecimiento
 *
 * @ORM\Table(name="mnt_area_examen_establecimiento", indexes={@ORM\Index(name="IDX_B9629B61D5FF2B57", columns={"id_area_servicio_apoyo"}), @ORM\Index(name="IDX_B9629B617DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_B9629B61338BD1B4", columns={"id_examen_servicio_apoyo"}), @ORM\Index(name="IDX_B9629B61735E702C", columns={"id_usuario_mod"}), @ORM\Index(name="IDX_B9629B617C22D51", columns={"id_usuario_reg"})})
 * @ORM\Entity
 */
class MntAreaExamenEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_area_examen_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_reg", type="date", nullable=false)
     */
    private $fechaHoraReg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_mod", type="date", nullable=true)
     */
    private $fechaHoraMod;

    /**
     * @var \CtlAreaServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_servicio_apoyo", referencedColumnName="id")
     * })
     */
    private $idAreaServicioApoyo;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlExamenServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_examen_servicio_apoyo", referencedColumnName="id")
     * })
     */
    private $idExamenServicioApoyo;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_mod", referencedColumnName="id")
     * })
     */
    private $idUsuarioMod;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_reg", referencedColumnName="id")
     * })
     */
    private $idUsuarioReg;



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
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return MntAreaExamenEstablecimiento
     */
    public function setFechaHoraReg($fechaHoraReg)
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    /**
     * Get fechaHoraReg
     *
     * @return \DateTime 
     */
    public function getFechaHoraReg()
    {
        return $this->fechaHoraReg;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return MntAreaExamenEstablecimiento
     */
    public function setFechaHoraMod($fechaHoraMod)
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    /**
     * Get fechaHoraMod
     *
     * @return \DateTime 
     */
    public function getFechaHoraMod()
    {
        return $this->fechaHoraMod;
    }

    /**
     * Set idAreaServicioApoyo
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idAreaServicioApoyo
     * @return MntAreaExamenEstablecimiento
     */
    public function setIdAreaServicioApoyo(\Minsal\shcpBundle\Entity\CtlAreaServicioApoyo $idAreaServicioApoyo = null)
    {
        $this->idAreaServicioApoyo = $idAreaServicioApoyo;

        return $this;
    }

    /**
     * Get idAreaServicioApoyo
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaServicioApoyo 
     */
    public function getIdAreaServicioApoyo()
    {
        return $this->idAreaServicioApoyo;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntAreaExamenEstablecimiento
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idExamenServicioApoyo
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idExamenServicioApoyo
     * @return MntAreaExamenEstablecimiento
     */
    public function setIdExamenServicioApoyo(\Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idExamenServicioApoyo = null)
    {
        $this->idExamenServicioApoyo = $idExamenServicioApoyo;

        return $this;
    }

    /**
     * Get idExamenServicioApoyo
     *
     * @return \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo 
     */
    public function getIdExamenServicioApoyo()
    {
        return $this->idExamenServicioApoyo;
    }

    /**
     * Set idUsuarioMod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUsuarioMod
     * @return MntAreaExamenEstablecimiento
     */
    public function setIdUsuarioMod(\Minsal\shcpBundle\Entity\FosUserUser $idUsuarioMod = null)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set idUsuarioReg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUsuarioReg
     * @return MntAreaExamenEstablecimiento
     */
    public function setIdUsuarioReg(\Minsal\shcpBundle\Entity\FosUserUser $idUsuarioReg = null)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }
}
