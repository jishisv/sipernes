<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabDetalleresultado
 *
 * @ORM\Table(name="lab_detalleresultado", indexes={@ORM\Index(name="fki_resultados_detalleresultado", columns={"idresultado"}), @ORM\Index(name="fki_tarjeta_detalleresultado", columns={"idtarjeta"}), @ORM\Index(name="fki_procedimientos", columns={"idprocedimiento"}), @ORM\Index(name="fki_establecimiento", columns={"idestablecimiento"}), @ORM\Index(name="fki_subelementos_detalleresultado", columns={"idsubelemento"}), @ORM\Index(name="fki_cantidad_detalleresultado", columns={"idcantidad"}), @ORM\Index(name="fki_baterias_detalleresultado", columns={"idbacteria"}), @ORM\Index(name="fki_elementos_detalleresultado", columns={"idelemento"})})
 * @ORM\Entity
 */
class LabDetalleresultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_detalleresultado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=200, nullable=true)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="text", nullable=true)
     */
    private $cantidad;

    /**
     * @var \LabBacterias
     *
     * @ORM\ManyToOne(targetEntity="LabBacterias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idbacteria", referencedColumnName="id")
     * })
     */
    private $idbacteria;

    /**
     * @var \LabCantidadestincion
     *
     * @ORM\ManyToOne(targetEntity="LabCantidadestincion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcantidad", referencedColumnName="id")
     * })
     */
    private $idcantidad;

    /**
     * @var \LabElementos
     *
     * @ORM\ManyToOne(targetEntity="LabElementos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idelemento", referencedColumnName="id")
     * })
     */
    private $idelemento;

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
     * @var \LabProcedimientosporexamen
     *
     * @ORM\ManyToOne(targetEntity="LabProcedimientosporexamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idprocedimiento", referencedColumnName="id")
     * })
     */
    private $idprocedimiento;

    /**
     * @var \LabResultados
     *
     * @ORM\ManyToOne(targetEntity="LabResultados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idresultado", referencedColumnName="id")
     * })
     */
    private $idresultado;

    /**
     * @var \LabSubelementos
     *
     * @ORM\ManyToOne(targetEntity="LabSubelementos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubelemento", referencedColumnName="id")
     * })
     */
    private $idsubelemento;

    /**
     * @var \LabTarjetasvitek
     *
     * @ORM\ManyToOne(targetEntity="LabTarjetasvitek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtarjeta", referencedColumnName="id")
     * })
     */
    private $idtarjeta;



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
     * @return LabDetalleresultado
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
     * Set observacion
     *
     * @param string $observacion
     * @return LabDetalleresultado
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
     * Set cantidad
     *
     * @param string $cantidad
     * @return LabDetalleresultado
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idbacteria
     *
     * @param \Minsal\shcpBundle\Entity\LabBacterias $idbacteria
     * @return LabDetalleresultado
     */
    public function setIdbacteria(\Minsal\shcpBundle\Entity\LabBacterias $idbacteria = null)
    {
        $this->idbacteria = $idbacteria;

        return $this;
    }

    /**
     * Get idbacteria
     *
     * @return \Minsal\shcpBundle\Entity\LabBacterias 
     */
    public function getIdbacteria()
    {
        return $this->idbacteria;
    }

    /**
     * Set idcantidad
     *
     * @param \Minsal\shcpBundle\Entity\LabCantidadestincion $idcantidad
     * @return LabDetalleresultado
     */
    public function setIdcantidad(\Minsal\shcpBundle\Entity\LabCantidadestincion $idcantidad = null)
    {
        $this->idcantidad = $idcantidad;

        return $this;
    }

    /**
     * Get idcantidad
     *
     * @return \Minsal\shcpBundle\Entity\LabCantidadestincion 
     */
    public function getIdcantidad()
    {
        return $this->idcantidad;
    }

    /**
     * Set idelemento
     *
     * @param \Minsal\shcpBundle\Entity\LabElementos $idelemento
     * @return LabDetalleresultado
     */
    public function setIdelemento(\Minsal\shcpBundle\Entity\LabElementos $idelemento = null)
    {
        $this->idelemento = $idelemento;

        return $this;
    }

    /**
     * Get idelemento
     *
     * @return \Minsal\shcpBundle\Entity\LabElementos 
     */
    public function getIdelemento()
    {
        return $this->idelemento;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabDetalleresultado
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
     * Set idprocedimiento
     *
     * @param \Minsal\shcpBundle\Entity\LabProcedimientosporexamen $idprocedimiento
     * @return LabDetalleresultado
     */
    public function setIdprocedimiento(\Minsal\shcpBundle\Entity\LabProcedimientosporexamen $idprocedimiento = null)
    {
        $this->idprocedimiento = $idprocedimiento;

        return $this;
    }

    /**
     * Get idprocedimiento
     *
     * @return \Minsal\shcpBundle\Entity\LabProcedimientosporexamen 
     */
    public function getIdprocedimiento()
    {
        return $this->idprocedimiento;
    }

    /**
     * Set idresultado
     *
     * @param \Minsal\shcpBundle\Entity\LabResultados $idresultado
     * @return LabDetalleresultado
     */
    public function setIdresultado(\Minsal\shcpBundle\Entity\LabResultados $idresultado = null)
    {
        $this->idresultado = $idresultado;

        return $this;
    }

    /**
     * Get idresultado
     *
     * @return \Minsal\shcpBundle\Entity\LabResultados 
     */
    public function getIdresultado()
    {
        return $this->idresultado;
    }

    /**
     * Set idsubelemento
     *
     * @param \Minsal\shcpBundle\Entity\LabSubelementos $idsubelemento
     * @return LabDetalleresultado
     */
    public function setIdsubelemento(\Minsal\shcpBundle\Entity\LabSubelementos $idsubelemento = null)
    {
        $this->idsubelemento = $idsubelemento;

        return $this;
    }

    /**
     * Get idsubelemento
     *
     * @return \Minsal\shcpBundle\Entity\LabSubelementos 
     */
    public function getIdsubelemento()
    {
        return $this->idsubelemento;
    }

    /**
     * Set idtarjeta
     *
     * @param \Minsal\shcpBundle\Entity\LabTarjetasvitek $idtarjeta
     * @return LabDetalleresultado
     */
    public function setIdtarjeta(\Minsal\shcpBundle\Entity\LabTarjetasvitek $idtarjeta = null)
    {
        $this->idtarjeta = $idtarjeta;

        return $this;
    }

    /**
     * Get idtarjeta
     *
     * @return \Minsal\shcpBundle\Entity\LabTarjetasvitek 
     */
    public function getIdtarjeta()
    {
        return $this->idtarjeta;
    }
}
