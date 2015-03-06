<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParEgrRecienNacido
 *
 * @ORM\Table(name="shcp_par_egr_recien_nacido", indexes={@ORM\Index(name="IDX_9E873A8F7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_9E873A8FD766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParEgrRecienNacido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_egr_recien_nacido_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_orden", type="string", nullable=true)
     */
    private $egrnOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_condicion", type="string", nullable=true)
     */
    private $egrnCondicion;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_fallece_traslado", type="string", nullable=true)
     */
    private $egrnFalleceTraslado;

    /**
     * @var integer
     *
     * @ORM\Column(name="egrn_edad", type="integer", nullable=true)
     */
    private $egrnEdad;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_menor_1dia", type="string", nullable=true)
     */
    private $egrnMenor1dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egrn_fecha", type="date", nullable=true)
     */
    private $egrnFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egrn_hora", type="time", nullable=true)
     */
    private $egrnHora;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_nombre", type="string", length=100, nullable=true)
     */
    private $egrnNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_apellido", type="string", length=100, nullable=true)
     */
    private $egrnApellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="egrn_responsa", type="bigint", nullable=true)
     */
    private $egrnResponsa;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_alimento_alta", type="string", nullable=true)
     */
    private $egrnAlimentoAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_boca_arriba", type="string", nullable=true)
     */
    private $egrnBocaArriba;

    /**
     * @var string
     *
     * @ORM\Column(name="egrn_bcg", type="string", nullable=true)
     */
    private $egrnBcg;

    /**
     * @var integer
     *
     * @ORM\Column(name="egrn_peso", type="integer", nullable=true)
     */
    private $egrnPeso;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;



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
     * Set egrnOrden
     *
     * @param string $egrnOrden
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnOrden($egrnOrden)
    {
        $this->egrnOrden = $egrnOrden;

        return $this;
    }

    /**
     * Get egrnOrden
     *
     * @return string 
     */
    public function getEgrnOrden()
    {
        return $this->egrnOrden;
    }

    /**
     * Set egrnCondicion
     *
     * @param string $egrnCondicion
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnCondicion($egrnCondicion)
    {
        $this->egrnCondicion = $egrnCondicion;

        return $this;
    }

    /**
     * Get egrnCondicion
     *
     * @return string 
     */
    public function getEgrnCondicion()
    {
        return $this->egrnCondicion;
    }

    /**
     * Set egrnFalleceTraslado
     *
     * @param string $egrnFalleceTraslado
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnFalleceTraslado($egrnFalleceTraslado)
    {
        $this->egrnFalleceTraslado = $egrnFalleceTraslado;

        return $this;
    }

    /**
     * Get egrnFalleceTraslado
     *
     * @return string 
     */
    public function getEgrnFalleceTraslado()
    {
        return $this->egrnFalleceTraslado;
    }

    /**
     * Set egrnEdad
     *
     * @param integer $egrnEdad
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnEdad($egrnEdad)
    {
        $this->egrnEdad = $egrnEdad;

        return $this;
    }

    /**
     * Get egrnEdad
     *
     * @return integer 
     */
    public function getEgrnEdad()
    {
        return $this->egrnEdad;
    }

    /**
     * Set egrnMenor1dia
     *
     * @param string $egrnMenor1dia
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnMenor1dia($egrnMenor1dia)
    {
        $this->egrnMenor1dia = $egrnMenor1dia;

        return $this;
    }

    /**
     * Get egrnMenor1dia
     *
     * @return string 
     */
    public function getEgrnMenor1dia()
    {
        return $this->egrnMenor1dia;
    }

    /**
     * Set egrnFecha
     *
     * @param \DateTime $egrnFecha
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnFecha($egrnFecha)
    {
        $this->egrnFecha = $egrnFecha;

        return $this;
    }

    /**
     * Get egrnFecha
     *
     * @return \DateTime 
     */
    public function getEgrnFecha()
    {
        return $this->egrnFecha;
    }

    /**
     * Set egrnHora
     *
     * @param \DateTime $egrnHora
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnHora($egrnHora)
    {
        $this->egrnHora = $egrnHora;

        return $this;
    }

    /**
     * Get egrnHora
     *
     * @return \DateTime 
     */
    public function getEgrnHora()
    {
        return $this->egrnHora;
    }

    /**
     * Set egrnNombre
     *
     * @param string $egrnNombre
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnNombre($egrnNombre)
    {
        $this->egrnNombre = $egrnNombre;

        return $this;
    }

    /**
     * Get egrnNombre
     *
     * @return string 
     */
    public function getEgrnNombre()
    {
        return $this->egrnNombre;
    }

    /**
     * Set egrnApellido
     *
     * @param string $egrnApellido
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnApellido($egrnApellido)
    {
        $this->egrnApellido = $egrnApellido;

        return $this;
    }

    /**
     * Get egrnApellido
     *
     * @return string 
     */
    public function getEgrnApellido()
    {
        return $this->egrnApellido;
    }

    /**
     * Set egrnResponsa
     *
     * @param integer $egrnResponsa
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnResponsa($egrnResponsa)
    {
        $this->egrnResponsa = $egrnResponsa;

        return $this;
    }

    /**
     * Get egrnResponsa
     *
     * @return integer 
     */
    public function getEgrnResponsa()
    {
        return $this->egrnResponsa;
    }

    /**
     * Set egrnAlimentoAlta
     *
     * @param string $egrnAlimentoAlta
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnAlimentoAlta($egrnAlimentoAlta)
    {
        $this->egrnAlimentoAlta = $egrnAlimentoAlta;

        return $this;
    }

    /**
     * Get egrnAlimentoAlta
     *
     * @return string 
     */
    public function getEgrnAlimentoAlta()
    {
        return $this->egrnAlimentoAlta;
    }

    /**
     * Set egrnBocaArriba
     *
     * @param string $egrnBocaArriba
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnBocaArriba($egrnBocaArriba)
    {
        $this->egrnBocaArriba = $egrnBocaArriba;

        return $this;
    }

    /**
     * Get egrnBocaArriba
     *
     * @return string 
     */
    public function getEgrnBocaArriba()
    {
        return $this->egrnBocaArriba;
    }

    /**
     * Set egrnBcg
     *
     * @param string $egrnBcg
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnBcg($egrnBcg)
    {
        $this->egrnBcg = $egrnBcg;

        return $this;
    }

    /**
     * Get egrnBcg
     *
     * @return string 
     */
    public function getEgrnBcg()
    {
        return $this->egrnBcg;
    }

    /**
     * Set egrnPeso
     *
     * @param integer $egrnPeso
     * @return ShcpParEgrRecienNacido
     */
    public function setEgrnPeso($egrnPeso)
    {
        $this->egrnPeso = $egrnPeso;

        return $this;
    }

    /**
     * Get egrnPeso
     *
     * @return integer 
     */
    public function getEgrnPeso()
    {
        return $this->egrnPeso;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpParEgrRecienNacido
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParEgrRecienNacido
     */
    public function setIdAdmisionParto(\Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto = null)
    {
        $this->idAdmisionParto = $idAdmisionParto;

        return $this;
    }

    /**
     * Get idAdmisionParto
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParAdmision 
     */
    public function getIdAdmisionParto()
    {
        return $this->idAdmisionParto;
    }
}
