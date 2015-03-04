<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTipoEsquemaMic
 *
 * @ORM\Table(name="enf_tipo_esquema_mic", indexes={@ORM\Index(name="IDX_665692DE3653B628", columns={"id_esquema_mic"})})
 * @ORM\Entity
 */
class EnfTipoEsquemaMic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_tipo_esquema_mic_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_esq_mic", type="string", length=100, nullable=true)
     */
    private $nombreTipoEsqMic;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis_maxima_mic", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $dosisMaximaMic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_tipo_mic", type="boolean", nullable=true)
     */
    private $estadoTipoMic;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_tipo_mic", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoTipoMic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tipo_mic", type="date", nullable=true)
     */
    private $fechaIngresoTipoMic;

    /**
     * @var \EnfEsquemaMic
     *
     * @ORM\ManyToOne(targetEntity="EnfEsquemaMic")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_esquema_mic", referencedColumnName="id")
     * })
     */
    private $idEsquemaMic;



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
     * Set nombreTipoEsqMic
     *
     * @param string $nombreTipoEsqMic
     * @return EnfTipoEsquemaMic
     */
    public function setNombreTipoEsqMic($nombreTipoEsqMic)
    {
        $this->nombreTipoEsqMic = $nombreTipoEsqMic;

        return $this;
    }

    /**
     * Get nombreTipoEsqMic
     *
     * @return string 
     */
    public function getNombreTipoEsqMic()
    {
        return $this->nombreTipoEsqMic;
    }

    /**
     * Set dosisMaximaMic
     *
     * @param string $dosisMaximaMic
     * @return EnfTipoEsquemaMic
     */
    public function setDosisMaximaMic($dosisMaximaMic)
    {
        $this->dosisMaximaMic = $dosisMaximaMic;

        return $this;
    }

    /**
     * Get dosisMaximaMic
     *
     * @return string 
     */
    public function getDosisMaximaMic()
    {
        return $this->dosisMaximaMic;
    }

    /**
     * Set estadoTipoMic
     *
     * @param boolean $estadoTipoMic
     * @return EnfTipoEsquemaMic
     */
    public function setEstadoTipoMic($estadoTipoMic)
    {
        $this->estadoTipoMic = $estadoTipoMic;

        return $this;
    }

    /**
     * Get estadoTipoMic
     *
     * @return boolean 
     */
    public function getEstadoTipoMic()
    {
        return $this->estadoTipoMic;
    }

    /**
     * Set usuarioIngresoTipoMic
     *
     * @param string $usuarioIngresoTipoMic
     * @return EnfTipoEsquemaMic
     */
    public function setUsuarioIngresoTipoMic($usuarioIngresoTipoMic)
    {
        $this->usuarioIngresoTipoMic = $usuarioIngresoTipoMic;

        return $this;
    }

    /**
     * Get usuarioIngresoTipoMic
     *
     * @return string 
     */
    public function getUsuarioIngresoTipoMic()
    {
        return $this->usuarioIngresoTipoMic;
    }

    /**
     * Set fechaIngresoTipoMic
     *
     * @param \DateTime $fechaIngresoTipoMic
     * @return EnfTipoEsquemaMic
     */
    public function setFechaIngresoTipoMic($fechaIngresoTipoMic)
    {
        $this->fechaIngresoTipoMic = $fechaIngresoTipoMic;

        return $this;
    }

    /**
     * Get fechaIngresoTipoMic
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTipoMic()
    {
        return $this->fechaIngresoTipoMic;
    }

    /**
     * Set idEsquemaMic
     *
     * @param \Minsal\SipernesBundle\Entity\EnfEsquemaMic $idEsquemaMic
     * @return EnfTipoEsquemaMic
     */
    public function setIdEsquemaMic(\Minsal\SipernesBundle\Entity\EnfEsquemaMic $idEsquemaMic = null)
    {
        $this->idEsquemaMic = $idEsquemaMic;

        return $this;
    }

    /**
     * Get idEsquemaMic
     *
     * @return \Minsal\SipernesBundle\Entity\EnfEsquemaMic 
     */
    public function getIdEsquemaMic()
    {
        return $this->idEsquemaMic;
    }
}
