<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabResultados
 *
 * @ORM\Table(name="lab_resultados", indexes={@ORM\Index(name="IDX_67576A867053008E", columns={"idcodigoresultado"}), @ORM\Index(name="IDX_67576A86F4D2E8F0", columns={"iddetallesolicitud"}), @ORM\Index(name="IDX_67576A8675BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_67576A8635F12240", columns={"idexamen"}), @ORM\Index(name="IDX_67576A866724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_67576A8613B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_67576A8610AA7931", columns={"id_observacion"}), @ORM\Index(name="IDX_67576A86D986AF39", columns={"idrecepcionmuestra"}), @ORM\Index(name="IDX_67576A86F06DFE3D", columns={"idsolicitudestudio"})})
 * @ORM\Entity
 */
class LabResultados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_resultados_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=250, nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="lectura", type="string", length=100, nullable=true)
     */
    private $lectura;

    /**
     * @var string
     *
     * @ORM\Column(name="interpretacion", type="string", length=100, nullable=true)
     */
    private $interpretacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=7, nullable=true)
     */
    private $responsable;

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
     * @var \LabCodigosresultados
     *
     * @ORM\ManyToOne(targetEntity="LabCodigosresultados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcodigoresultado", referencedColumnName="id")
     * })
     */
    private $idcodigoresultado;

    /**
     * @var \SecDetallesolicitudestudios
     *
     * @ORM\ManyToOne(targetEntity="SecDetallesolicitudestudios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddetallesolicitud", referencedColumnName="id")
     * })
     */
    private $iddetallesolicitud;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestablecimiento", referencedColumnName="id")
     * })
     */
    private $idestablecimiento;

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
     * @var \LabObservaciones
     *
     * @ORM\ManyToOne(targetEntity="LabObservaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_observacion", referencedColumnName="id")
     * })
     */
    private $idObservacion;

    /**
     * @var \LabRecepcionmuestra
     *
     * @ORM\ManyToOne(targetEntity="LabRecepcionmuestra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrecepcionmuestra", referencedColumnName="id")
     * })
     */
    private $idrecepcionmuestra;

    /**
     * @var \SecSolicitudestudios
     *
     * @ORM\ManyToOne(targetEntity="SecSolicitudestudios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsolicitudestudio", referencedColumnName="id")
     * })
     */
    private $idsolicitudestudio;



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
     * Set resultado
     *
     * @param string $resultado
     * @return LabResultados
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set lectura
     *
     * @param string $lectura
     * @return LabResultados
     */
    public function setLectura($lectura)
    {
        $this->lectura = $lectura;

        return $this;
    }

    /**
     * Get lectura
     *
     * @return string 
     */
    public function getLectura()
    {
        return $this->lectura;
    }

    /**
     * Set interpretacion
     *
     * @param string $interpretacion
     * @return LabResultados
     */
    public function setInterpretacion($interpretacion)
    {
        $this->interpretacion = $interpretacion;

        return $this;
    }

    /**
     * Get interpretacion
     *
     * @return string 
     */
    public function getInterpretacion()
    {
        return $this->interpretacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return LabResultados
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return LabResultados
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabResultados
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
     * @return LabResultados
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
     * Set idcodigoresultado
     *
     * @param \Minsal\shcpBundle\Entity\LabCodigosresultados $idcodigoresultado
     * @return LabResultados
     */
    public function setIdcodigoresultado(\Minsal\shcpBundle\Entity\LabCodigosresultados $idcodigoresultado = null)
    {
        $this->idcodigoresultado = $idcodigoresultado;

        return $this;
    }

    /**
     * Get idcodigoresultado
     *
     * @return \Minsal\shcpBundle\Entity\LabCodigosresultados 
     */
    public function getIdcodigoresultado()
    {
        return $this->idcodigoresultado;
    }

    /**
     * Set iddetallesolicitud
     *
     * @param \Minsal\shcpBundle\Entity\SecDetallesolicitudestudios $iddetallesolicitud
     * @return LabResultados
     */
    public function setIddetallesolicitud(\Minsal\shcpBundle\Entity\SecDetallesolicitudestudios $iddetallesolicitud = null)
    {
        $this->iddetallesolicitud = $iddetallesolicitud;

        return $this;
    }

    /**
     * Get iddetallesolicitud
     *
     * @return \Minsal\shcpBundle\Entity\SecDetallesolicitudestudios 
     */
    public function getIddetallesolicitud()
    {
        return $this->iddetallesolicitud;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabResultados
     */
    public function setIdestablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento = null)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idexamen
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idexamen
     * @return LabResultados
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
     * @return LabResultados
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
     * @return LabResultados
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
     * Set idObservacion
     *
     * @param \Minsal\shcpBundle\Entity\LabObservaciones $idObservacion
     * @return LabResultados
     */
    public function setIdObservacion(\Minsal\shcpBundle\Entity\LabObservaciones $idObservacion = null)
    {
        $this->idObservacion = $idObservacion;

        return $this;
    }

    /**
     * Get idObservacion
     *
     * @return \Minsal\shcpBundle\Entity\LabObservaciones 
     */
    public function getIdObservacion()
    {
        return $this->idObservacion;
    }

    /**
     * Set idrecepcionmuestra
     *
     * @param \Minsal\shcpBundle\Entity\LabRecepcionmuestra $idrecepcionmuestra
     * @return LabResultados
     */
    public function setIdrecepcionmuestra(\Minsal\shcpBundle\Entity\LabRecepcionmuestra $idrecepcionmuestra = null)
    {
        $this->idrecepcionmuestra = $idrecepcionmuestra;

        return $this;
    }

    /**
     * Get idrecepcionmuestra
     *
     * @return \Minsal\shcpBundle\Entity\LabRecepcionmuestra 
     */
    public function getIdrecepcionmuestra()
    {
        return $this->idrecepcionmuestra;
    }

    /**
     * Set idsolicitudestudio
     *
     * @param \Minsal\shcpBundle\Entity\SecSolicitudestudios $idsolicitudestudio
     * @return LabResultados
     */
    public function setIdsolicitudestudio(\Minsal\shcpBundle\Entity\SecSolicitudestudios $idsolicitudestudio = null)
    {
        $this->idsolicitudestudio = $idsolicitudestudio;

        return $this;
    }

    /**
     * Get idsolicitudestudio
     *
     * @return \Minsal\shcpBundle\Entity\SecSolicitudestudios 
     */
    public function getIdsolicitudestudio()
    {
        return $this->idsolicitudestudio;
    }
}
