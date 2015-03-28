<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaActividad
 *
 * @ORM\Table(name="enf_traza_actividad", indexes={@ORM\Index(name="IDX_CB0DD4949BC097A1", columns={"id_registro_actividad"})})
 * @ORM\Entity
 */
class EnfTrazaActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_actividad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_act", type="string", length=40, nullable=true)
     */
    private $usuarioTraAct;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_tra_act", type="string", length=200, nullable=true)
     */
    private $cambioTraAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_traza_act", type="date", nullable=true)
     */
    private $fechaTrazaAct;

    /**
     * @var \EnfMtlActividad
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlActividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_actividad", referencedColumnName="id")
     * })
     */
    private $idRegistroActividad;



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
     * Set usuarioTraAct
     *
     * @param string $usuarioTraAct
     * @return EnfTrazaActividad
     */
    public function setUsuarioTraAct($usuarioTraAct)
    {
        $this->usuarioTraAct = $usuarioTraAct;

        return $this;
    }

    /**
     * Get usuarioTraAct
     *
     * @return string 
     */
    public function getUsuarioTraAct()
    {
        return $this->usuarioTraAct;
    }

    /**
     * Set cambioTraAct
     *
     * @param string $cambioTraAct
     * @return EnfTrazaActividad
     */
    public function setCambioTraAct($cambioTraAct)
    {
        $this->cambioTraAct = $cambioTraAct;

        return $this;
    }

    /**
     * Get cambioTraAct
     *
     * @return string 
     */
    public function getCambioTraAct()
    {
        return $this->cambioTraAct;
    }

    /**
     * Set fechaTrazaAct
     *
     * @param \DateTime $fechaTrazaAct
     * @return EnfTrazaActividad
     */
    public function setFechaTrazaAct($fechaTrazaAct)
    {
        $this->fechaTrazaAct = $fechaTrazaAct;

        return $this;
    }

    /**
     * Get fechaTrazaAct
     *
     * @return \DateTime 
     */
    public function getFechaTrazaAct()
    {
        return $this->fechaTrazaAct;
    }

    /**
     * Set idRegistroActividad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlActividad $idRegistroActividad
     * @return EnfTrazaActividad
     */
    public function setIdRegistroActividad(\Minsal\SipernesBundle\Entity\EnfMtlActividad $idRegistroActividad = null)
    {
        $this->idRegistroActividad = $idRegistroActividad;

        return $this;
    }

    /**
     * Get idRegistroActividad
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlActividad 
     */
    public function getIdRegistroActividad()
    {
        return $this->idRegistroActividad;
    }
    
    public function __toString() {
        return '';
    }
}
