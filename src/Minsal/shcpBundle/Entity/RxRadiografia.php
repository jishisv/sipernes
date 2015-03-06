<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxRadiografia
 *
 * @ORM\Table(name="rx_radiografia")
 * @ORM\Entity
 */
class RxRadiografia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_radiografia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanio", type="string", length=60, nullable=true)
     */
    private $tamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="lectura_placa", type="text", nullable=true)
     */
    private $lecturaPlaca;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_detalle_solicitud", type="integer", nullable=true)
     */
    private $idDetalleSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitud_estudio", type="integer", nullable=true)
     */
    private $idSolicitudEstudio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="id_empleado", type="string", length=50, nullable=true)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado_traslado", type="string", length=50, nullable=true)
     */
    private $encargadoTraslado;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnico", type="string", length=50, nullable=true)
     */
    private $tecnico;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=2, nullable=true)
     */
    private $habilitado;



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
     * Set tamanio
     *
     * @param string $tamanio
     * @return RxRadiografia
     */
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;

        return $this;
    }

    /**
     * Get tamanio
     *
     * @return string 
     */
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set lecturaPlaca
     *
     * @param string $lecturaPlaca
     * @return RxRadiografia
     */
    public function setLecturaPlaca($lecturaPlaca)
    {
        $this->lecturaPlaca = $lecturaPlaca;

        return $this;
    }

    /**
     * Get lecturaPlaca
     *
     * @return string 
     */
    public function getLecturaPlaca()
    {
        return $this->lecturaPlaca;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return RxRadiografia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idDetalleSolicitud
     *
     * @param integer $idDetalleSolicitud
     * @return RxRadiografia
     */
    public function setIdDetalleSolicitud($idDetalleSolicitud)
    {
        $this->idDetalleSolicitud = $idDetalleSolicitud;

        return $this;
    }

    /**
     * Get idDetalleSolicitud
     *
     * @return integer 
     */
    public function getIdDetalleSolicitud()
    {
        return $this->idDetalleSolicitud;
    }

    /**
     * Set idSolicitudEstudio
     *
     * @param integer $idSolicitudEstudio
     * @return RxRadiografia
     */
    public function setIdSolicitudEstudio($idSolicitudEstudio)
    {
        $this->idSolicitudEstudio = $idSolicitudEstudio;

        return $this;
    }

    /**
     * Get idSolicitudEstudio
     *
     * @return integer 
     */
    public function getIdSolicitudEstudio()
    {
        return $this->idSolicitudEstudio;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RxRadiografia
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
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return RxRadiografia
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set encargadoTraslado
     *
     * @param string $encargadoTraslado
     * @return RxRadiografia
     */
    public function setEncargadoTraslado($encargadoTraslado)
    {
        $this->encargadoTraslado = $encargadoTraslado;

        return $this;
    }

    /**
     * Get encargadoTraslado
     *
     * @return string 
     */
    public function getEncargadoTraslado()
    {
        return $this->encargadoTraslado;
    }

    /**
     * Set tecnico
     *
     * @param string $tecnico
     * @return RxRadiografia
     */
    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get tecnico
     *
     * @return string 
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set habilitado
     *
     * @param string $habilitado
     * @return RxRadiografia
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return string 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }
}
