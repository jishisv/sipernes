<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAreaServicioApoyo
 *
 * @ORM\Table(name="ctl_area_servicio_apoyo", indexes={@ORM\Index(name="IDX_730091695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_7300916724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_73009113B895A1", columns={"idusuarioreg"})})
 * @ORM\Entity
 */
class CtlAreaServicioApoyo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_area_servicio_apoyo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="idarea", type="string", length=4, nullable=false)
     */
    private $idarea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrearea", type="string", length=30, nullable=true)
     */
    private $nombrearea;

    /**
     * @var string
     *
     * @ORM\Column(name="administrativa", type="string", nullable=true)
     */
    private $administrativa = 'N';

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
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

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
     * Set idarea
     *
     * @param string $idarea
     * @return CtlAreaServicioApoyo
     */
    public function setIdarea($idarea)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return string 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set nombrearea
     *
     * @param string $nombrearea
     * @return CtlAreaServicioApoyo
     */
    public function setNombrearea($nombrearea)
    {
        $this->nombrearea = $nombrearea;

        return $this;
    }

    /**
     * Get nombrearea
     *
     * @return string 
     */
    public function getNombrearea()
    {
        return $this->nombrearea;
    }

    /**
     * Set administrativa
     *
     * @param string $administrativa
     * @return CtlAreaServicioApoyo
     */
    public function setAdministrativa($administrativa)
    {
        $this->administrativa = $administrativa;

        return $this;
    }

    /**
     * Get administrativa
     *
     * @return string 
     */
    public function getAdministrativa()
    {
        return $this->administrativa;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CtlAreaServicioApoyo
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
     * @return CtlAreaServicioApoyo
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
     * Set idAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idAtencion
     * @return CtlAreaServicioApoyo
     */
    public function setIdAtencion(\Minsal\shcpBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return CtlAreaServicioApoyo
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
     * @return CtlAreaServicioApoyo
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
