<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitCitasServiciodeapoyo
 *
 * @ORM\Table(name="cit_citas_serviciodeapoyo", indexes={@ORM\Index(name="fki_fos_user_user_reg_cit_citas_serviciodeapoyo", columns={"idusuarioreg"}), @ORM\Index(name="IDX_AC187888F8EAA696", columns={"id_solicitudestudios"})})
 * @ORM\Entity
 */
class CitCitasServiciodeapoyo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_citas_serviciodeapoyo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_detallesolicitudestudios", type="integer", nullable=true)
     */
    private $idDetallesolicitudestudios;

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
     * @var \SecSolicitudestudios
     *
     * @ORM\ManyToOne(targetEntity="SecSolicitudestudios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitudestudios", referencedColumnName="id")
     * })
     */
    private $idSolicitudestudios;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CitCitasServiciodeapoyo
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
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CitCitasServiciodeapoyo
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
     * Set idDetallesolicitudestudios
     *
     * @param integer $idDetallesolicitudestudios
     * @return CitCitasServiciodeapoyo
     */
    public function setIdDetallesolicitudestudios($idDetallesolicitudestudios)
    {
        $this->idDetallesolicitudestudios = $idDetallesolicitudestudios;

        return $this;
    }

    /**
     * Get idDetallesolicitudestudios
     *
     * @return integer 
     */
    public function getIdDetallesolicitudestudios()
    {
        return $this->idDetallesolicitudestudios;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return CitCitasServiciodeapoyo
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

    /**
     * Set idSolicitudestudios
     *
     * @param \Minsal\shcpBundle\Entity\SecSolicitudestudios $idSolicitudestudios
     * @return CitCitasServiciodeapoyo
     */
    public function setIdSolicitudestudios(\Minsal\shcpBundle\Entity\SecSolicitudestudios $idSolicitudestudios = null)
    {
        $this->idSolicitudestudios = $idSolicitudestudios;

        return $this;
    }

    /**
     * Get idSolicitudestudios
     *
     * @return \Minsal\shcpBundle\Entity\SecSolicitudestudios 
     */
    public function getIdSolicitudestudios()
    {
        return $this->idSolicitudestudios;
    }
}
