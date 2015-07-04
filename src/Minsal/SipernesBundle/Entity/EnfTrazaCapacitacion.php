<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaCapacitacion
 *
 * @ORM\Table(name="enf_traza_capacitacion", indexes={@ORM\Index(name="IDX_3DE95E9A79827853", columns={"id_capacitacion"})})
 * @ORM\Entity
 */
class EnfTrazaCapacitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_capacitacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_cap", type="string", length=40, nullable=true)
     */
    private $usuarioTraCap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tra_capa", type="datetime", nullable=true)
     */
    private $fechaIngresoTraCapa;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_tra_capa", type="string", length=200, nullable=true)
     */
    private $cambioTraCapa;

    /**
     * @var \EnfMtlCapacitacion
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlCapacitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_capacitacion", referencedColumnName="id")
     * })
     */
    private $idCapacitacion;



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
     * Set usuarioTraCap
     *
     * @param string $usuarioTraCap
     * @return EnfTrazaCapacitacion
     */
    public function setUsuarioTraCap($usuarioTraCap)
    {
        $this->usuarioTraCap = $usuarioTraCap;

        return $this;
    }

    /**
     * Get usuarioTraCap
     *
     * @return string 
     */
    public function getUsuarioTraCap()
    {
        return $this->usuarioTraCap;
    }

    /**
     * Set fechaIngresoTraCapa
     *
     * @param \DateTime $fechaIngresoTraCapa
     * @return EnfTrazaCapacitacion
     */
    public function setFechaIngresoTraCapa($fechaIngresoTraCapa)
    {
        $this->fechaIngresoTraCapa = $fechaIngresoTraCapa;

        return $this;
    }

    /**
     * Get fechaIngresoTraCapa
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTraCapa()
    {
        return $this->fechaIngresoTraCapa;
    }

    /**
     * Set cambioTraCapa
     *
     * @param string $cambioTraCapa
     * @return EnfTrazaCapacitacion
     */
    public function setCambioTraCapa($cambioTraCapa)
    {
        $this->cambioTraCapa = $cambioTraCapa;

        return $this;
    }

    /**
     * Get cambioTraCapa
     *
     * @return string 
     */
    public function getCambioTraCapa()
    {
        return $this->cambioTraCapa;
    }

    /**
     * Set idCapacitacion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlCapacitacion $idCapacitacion
     * @return EnfTrazaCapacitacion
     */
    public function setIdCapacitacion(\Minsal\SipernesBundle\Entity\EnfMtlCapacitacion $idCapacitacion = null)
    {
        $this->idCapacitacion = $idCapacitacion;

        return $this;
    }

    /**
     * Get idCapacitacion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlCapacitacion 
     */
    public function getIdCapacitacion()
    {
        return $this->idCapacitacion;
    }
    
    public function __toString() {
        return '';
    }
}
