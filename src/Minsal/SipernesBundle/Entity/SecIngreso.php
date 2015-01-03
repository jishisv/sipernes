<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecIngreso
 *
 * @ORM\Table(name="sec_ingreso", indexes={@ORM\Index(name="IDX_8396ED40890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_8396ED40701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_8396ED40721098ED", columns={"id_usuario_modifica"}), @ORM\Index(name="IDX_8396ED40D58F2214", columns={"id_usuario_registra"})})
 * @ORM\Entity
 */
class SecIngreso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_ingreso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=false)
     */
    private $hora;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_aten_are_mod_estab", type="integer", nullable=false)
     */
    private $idAtenAreModEstab;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ambiente_ingreso", type="integer", nullable=false)
     */
    private $idAmbienteIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="text", nullable=false)
     */
    private $diagnostico;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cie10", type="integer", nullable=true)
     */
    private $idCie10;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado", type="integer", nullable=false)
     */
    private $idEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_procedencia_ingreso", type="integer", nullable=false)
     */
    private $idProcedenciaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_circunstancia_ingreso", type="integer", nullable=false)
     */
    private $idCircunstanciaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_accidente", type="integer", nullable=true)
     */
    private $idTipoAccidente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="embarazada", type="boolean", nullable=true)
     */
    private $embarazada;

    /**
     * @var integer
     *
     * @ORM\Column(name="semanas_amenorrea", type="integer", nullable=true)
     */
    private $semanasAmenorrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_probable_parto", type="date", nullable=true)
     */
    private $fechaProbableParto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_establecimiento_referencia", type="integer", nullable=true)
     */
    private $idEstablecimientoReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo_referencia", type="text", nullable=true)
     */
    private $motivoReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tarjetas_entregadas", type="integer", nullable=true)
     */
    private $tarjetasEntregadas;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable_tarjeta", type="string", length=80, nullable=true)
     */
    private $responsableTarjeta;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_modifica", referencedColumnName="id")
     * })
     */
    private $idUsuarioModifica;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_registra", referencedColumnName="id")
     * })
     */
    private $idUsuarioRegistra;



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
     * @return SecIngreso
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
     * Set hora
     *
     * @param \DateTime $hora
     * @return SecIngreso
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set idAtenAreModEstab
     *
     * @param integer $idAtenAreModEstab
     * @return SecIngreso
     */
    public function setIdAtenAreModEstab($idAtenAreModEstab)
    {
        $this->idAtenAreModEstab = $idAtenAreModEstab;

        return $this;
    }

    /**
     * Get idAtenAreModEstab
     *
     * @return integer 
     */
    public function getIdAtenAreModEstab()
    {
        return $this->idAtenAreModEstab;
    }

    /**
     * Set idAmbienteIngreso
     *
     * @param integer $idAmbienteIngreso
     * @return SecIngreso
     */
    public function setIdAmbienteIngreso($idAmbienteIngreso)
    {
        $this->idAmbienteIngreso = $idAmbienteIngreso;

        return $this;
    }

    /**
     * Get idAmbienteIngreso
     *
     * @return integer 
     */
    public function getIdAmbienteIngreso()
    {
        return $this->idAmbienteIngreso;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     * @return SecIngreso
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string 
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set idCie10
     *
     * @param integer $idCie10
     * @return SecIngreso
     */
    public function setIdCie10($idCie10)
    {
        $this->idCie10 = $idCie10;

        return $this;
    }

    /**
     * Get idCie10
     *
     * @return integer 
     */
    public function getIdCie10()
    {
        return $this->idCie10;
    }

    /**
     * Set idEstado
     *
     * @param integer $idEstado
     * @return SecIngreso
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idProcedenciaIngreso
     *
     * @param integer $idProcedenciaIngreso
     * @return SecIngreso
     */
    public function setIdProcedenciaIngreso($idProcedenciaIngreso)
    {
        $this->idProcedenciaIngreso = $idProcedenciaIngreso;

        return $this;
    }

    /**
     * Get idProcedenciaIngreso
     *
     * @return integer 
     */
    public function getIdProcedenciaIngreso()
    {
        return $this->idProcedenciaIngreso;
    }

    /**
     * Set idCircunstanciaIngreso
     *
     * @param integer $idCircunstanciaIngreso
     * @return SecIngreso
     */
    public function setIdCircunstanciaIngreso($idCircunstanciaIngreso)
    {
        $this->idCircunstanciaIngreso = $idCircunstanciaIngreso;

        return $this;
    }

    /**
     * Get idCircunstanciaIngreso
     *
     * @return integer 
     */
    public function getIdCircunstanciaIngreso()
    {
        return $this->idCircunstanciaIngreso;
    }

    /**
     * Set idTipoAccidente
     *
     * @param integer $idTipoAccidente
     * @return SecIngreso
     */
    public function setIdTipoAccidente($idTipoAccidente)
    {
        $this->idTipoAccidente = $idTipoAccidente;

        return $this;
    }

    /**
     * Get idTipoAccidente
     *
     * @return integer 
     */
    public function getIdTipoAccidente()
    {
        return $this->idTipoAccidente;
    }

    /**
     * Set embarazada
     *
     * @param boolean $embarazada
     * @return SecIngreso
     */
    public function setEmbarazada($embarazada)
    {
        $this->embarazada = $embarazada;

        return $this;
    }

    /**
     * Get embarazada
     *
     * @return boolean 
     */
    public function getEmbarazada()
    {
        return $this->embarazada;
    }

    /**
     * Set semanasAmenorrea
     *
     * @param integer $semanasAmenorrea
     * @return SecIngreso
     */
    public function setSemanasAmenorrea($semanasAmenorrea)
    {
        $this->semanasAmenorrea = $semanasAmenorrea;

        return $this;
    }

    /**
     * Get semanasAmenorrea
     *
     * @return integer 
     */
    public function getSemanasAmenorrea()
    {
        return $this->semanasAmenorrea;
    }

    /**
     * Set fechaProbableParto
     *
     * @param \DateTime $fechaProbableParto
     * @return SecIngreso
     */
    public function setFechaProbableParto($fechaProbableParto)
    {
        $this->fechaProbableParto = $fechaProbableParto;

        return $this;
    }

    /**
     * Get fechaProbableParto
     *
     * @return \DateTime 
     */
    public function getFechaProbableParto()
    {
        return $this->fechaProbableParto;
    }

    /**
     * Set idEstablecimientoReferencia
     *
     * @param integer $idEstablecimientoReferencia
     * @return SecIngreso
     */
    public function setIdEstablecimientoReferencia($idEstablecimientoReferencia)
    {
        $this->idEstablecimientoReferencia = $idEstablecimientoReferencia;

        return $this;
    }

    /**
     * Get idEstablecimientoReferencia
     *
     * @return integer 
     */
    public function getIdEstablecimientoReferencia()
    {
        return $this->idEstablecimientoReferencia;
    }

    /**
     * Set motivoReferencia
     *
     * @param string $motivoReferencia
     * @return SecIngreso
     */
    public function setMotivoReferencia($motivoReferencia)
    {
        $this->motivoReferencia = $motivoReferencia;

        return $this;
    }

    /**
     * Get motivoReferencia
     *
     * @return string 
     */
    public function getMotivoReferencia()
    {
        return $this->motivoReferencia;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return SecIngreso
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return SecIngreso
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set tarjetasEntregadas
     *
     * @param integer $tarjetasEntregadas
     * @return SecIngreso
     */
    public function setTarjetasEntregadas($tarjetasEntregadas)
    {
        $this->tarjetasEntregadas = $tarjetasEntregadas;

        return $this;
    }

    /**
     * Get tarjetasEntregadas
     *
     * @return integer 
     */
    public function getTarjetasEntregadas()
    {
        return $this->tarjetasEntregadas;
    }

    /**
     * Set responsableTarjeta
     *
     * @param string $responsableTarjeta
     * @return SecIngreso
     */
    public function setResponsableTarjeta($responsableTarjeta)
    {
        $this->responsableTarjeta = $responsableTarjeta;

        return $this;
    }

    /**
     * Get responsableTarjeta
     *
     * @return string 
     */
    public function getResponsableTarjeta()
    {
        return $this->responsableTarjeta;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\SipernesBundle\Entity\MntEmpleado $idEmpleado
     * @return SecIngreso
     */
    public function setIdEmpleado(\Minsal\SipernesBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\SipernesBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\SipernesBundle\Entity\MntExpediente $idExpediente
     * @return SecIngreso
     */
    public function setIdExpediente(\Minsal\SipernesBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\SipernesBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idUsuarioModifica
     *
     * @param \Minsal\SipernesBundle\Entity\FosUserUser $idUsuarioModifica
     * @return SecIngreso
     */
    public function setIdUsuarioModifica(\Minsal\SipernesBundle\Entity\FosUserUser $idUsuarioModifica = null)
    {
        $this->idUsuarioModifica = $idUsuarioModifica;

        return $this;
    }

    /**
     * Get idUsuarioModifica
     *
     * @return \Minsal\SipernesBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioModifica()
    {
        return $this->idUsuarioModifica;
    }

    /**
     * Set idUsuarioRegistra
     *
     * @param \Minsal\SipernesBundle\Entity\FosUserUser $idUsuarioRegistra
     * @return SecIngreso
     */
    public function setIdUsuarioRegistra(\Minsal\SipernesBundle\Entity\FosUserUser $idUsuarioRegistra = null)
    {
        $this->idUsuarioRegistra = $idUsuarioRegistra;

        return $this;
    }

    /**
     * Get idUsuarioRegistra
     *
     * @return \Minsal\SipernesBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioRegistra()
    {
        return $this->idUsuarioRegistra;
    }
    
    public function __toString() {
    return $this->idCie10 ? $this->idCie10 : '';
    }
}
