<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfHistoricoActividad
 *
 * @ORM\Table(name="enf_historico_actividad", indexes={@ORM\Index(name="IDX_313F15F49BC097A1", columns={"id_registro_actividad"})})
 * @ORM\Entity
 */
class EnfHistoricoActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_historico_actividad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ingreso_hist_act", type="string", length=40, nullable=true)
     */
    private $usuarioIngresoHistAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_act", type="date", nullable=true)
     */
    private $fechaIngresoHistAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_hist_act", type="date", nullable=true)
     */
    private $fechaModificacionHistAct;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad_hist_act_enf", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $cantidadHistActEnf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo_hist_act_enf", type="time", nullable=true)
     */
    private $tiempoHistActEnf;

    /**
     * @var string
     *
     * @ORM\Column(name="expediente_hist_act", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $expedienteHistAct;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_his_act", type="boolean", nullable=true)
     */
    private $estadoHisAct;

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
     * Set usuarioIngresoHistAct
     *
     * @param string $usuarioIngresoHistAct
     * @return EnfHistoricoActividad
     */
    public function setUsuarioIngresoHistAct($usuarioIngresoHistAct)
    {
        $this->usuarioIngresoHistAct = $usuarioIngresoHistAct;

        return $this;
    }

    /**
     * Get usuarioIngresoHistAct
     *
     * @return string 
     */
    public function getUsuarioIngresoHistAct()
    {
        return $this->usuarioIngresoHistAct;
    }

    /**
     * Set fechaIngresoHistAct
     *
     * @param \DateTime $fechaIngresoHistAct
     * @return EnfHistoricoActividad
     */
    public function setFechaIngresoHistAct($fechaIngresoHistAct)
    {
        $this->fechaIngresoHistAct = $fechaIngresoHistAct;

        return $this;
    }

    /**
     * Get fechaIngresoHistAct
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistAct()
    {
        return $this->fechaIngresoHistAct;
    }

    /**
     * Set fechaModificacionHistAct
     *
     * @param \DateTime $fechaModificacionHistAct
     * @return EnfHistoricoActividad
     */
    public function setFechaModificacionHistAct($fechaModificacionHistAct)
    {
        $this->fechaModificacionHistAct = $fechaModificacionHistAct;

        return $this;
    }

    /**
     * Get fechaModificacionHistAct
     *
     * @return \DateTime 
     */
    public function getFechaModificacionHistAct()
    {
        return $this->fechaModificacionHistAct;
    }

    /**
     * Set cantidadHistActEnf
     *
     * @param string $cantidadHistActEnf
     * @return EnfHistoricoActividad
     */
    public function setCantidadHistActEnf($cantidadHistActEnf)
    {
        $this->cantidadHistActEnf = $cantidadHistActEnf;

        return $this;
    }

    /**
     * Get cantidadHistActEnf
     *
     * @return string 
     */
    public function getCantidadHistActEnf()
    {
        return $this->cantidadHistActEnf;
    }

    /**
     * Set tiempoHistActEnf
     *
     * @param \DateTime $tiempoHistActEnf
     * @return EnfHistoricoActividad
     */
    public function setTiempoHistActEnf($tiempoHistActEnf)
    {
        $this->tiempoHistActEnf = $tiempoHistActEnf;

        return $this;
    }

    /**
     * Get tiempoHistActEnf
     *
     * @return \DateTime 
     */
    public function getTiempoHistActEnf()
    {
        return $this->tiempoHistActEnf;
    }

    /**
     * Set expedienteHistAct
     *
     * @param string $expedienteHistAct
     * @return EnfHistoricoActividad
     */
    public function setExpedienteHistAct($expedienteHistAct)
    {
        $this->expedienteHistAct = $expedienteHistAct;

        return $this;
    }

    /**
     * Get expedienteHistAct
     *
     * @return string 
     */
    public function getExpedienteHistAct()
    {
        return $this->expedienteHistAct;
    }

    /**
     * Set estadoHisAct
     *
     * @param boolean $estadoHisAct
     * @return EnfHistoricoActividad
     */
    public function setEstadoHisAct($estadoHisAct)
    {
        $this->estadoHisAct = $estadoHisAct;

        return $this;
    }

    /**
     * Get estadoHisAct
     *
     * @return boolean 
     */
    public function getEstadoHisAct()
    {
        return $this->estadoHisAct;
    }

    /**
     * Set idRegistroActividad
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlActividad $idRegistroActividad
     * @return EnfHistoricoActividad
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
}
