<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParTrabajoParto
 *
 * @ORM\Table(name="shcp_par_trabajo_parto", indexes={@ORM\Index(name="IDX_4D44E3A2D766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParTrabajoParto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_trabajo_parto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_partograma", type="string", nullable=true)
     */
    private $trabPartograma;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trab_hora", type="time", nullable=true)
     */
    private $trabHora;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_posicion", type="string", nullable=true)
     */
    private $trabPosicion;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_pa_sistole", type="string", nullable=true)
     */
    private $trabPaSistole;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_pa_diastole", type="string", nullable=true)
     */
    private $trabPaDiastole;

    /**
     * @var integer
     *
     * @ORM\Column(name="trab_pulso", type="integer", nullable=true)
     */
    private $trabPulso;

    /**
     * @var integer
     *
     * @ORM\Column(name="trab_contrac", type="integer", nullable=true)
     */
    private $trabContrac;

    /**
     * @var integer
     *
     * @ORM\Column(name="trab_dilatacion", type="integer", nullable=true)
     */
    private $trabDilatacion;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_altura_present", type="string", nullable=true)
     */
    private $trabAlturaPresent;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_variedad_posic", type="string", nullable=true)
     */
    private $trabVariedadPosic;

    /**
     * @var string
     *
     * @ORM\Column(name="trab_meconio", type="string", nullable=true)
     */
    private $trabMeconio;

    /**
     * @var integer
     *
     * @ORM\Column(name="trab_fcf_dips", type="integer", nullable=true)
     */
    private $trabFcfDips;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision", inversedBy="trabajoparto")
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
     * Set trabPartograma
     *
     * @param string $trabPartograma
     * @return ShcpParTrabajoParto
     */
    public function setTrabPartograma($trabPartograma)
    {
        $this->trabPartograma = $trabPartograma;

        return $this;
    }

    /**
     * Get trabPartograma
     *
     * @return string 
     */
    public function getTrabPartograma()
    {
        return $this->trabPartograma;
    }

    /**
     * Set trabHora
     *
     * @param \DateTime $trabHora
     * @return ShcpParTrabajoParto
     */
    public function setTrabHora($trabHora)
    {
        $this->trabHora = $trabHora;

        return $this;
    }

    /**
     * Get trabHora
     *
     * @return \DateTime 
     */
    public function getTrabHora()
    {
        return $this->trabHora;
    }

    /**
     * Set trabPosicion
     *
     * @param string $trabPosicion
     * @return ShcpParTrabajoParto
     */
    public function setTrabPosicion($trabPosicion)
    {
        $this->trabPosicion = $trabPosicion;

        return $this;
    }

    /**
     * Get trabPosicion
     *
     * @return string 
     */
    public function getTrabPosicion()
    {
        return $this->trabPosicion;
    }

    /**
     * Set trabPaSistole
     *
     * @param string $trabPaSistole
     * @return ShcpParTrabajoParto
     */
    public function setTrabPaSistole($trabPaSistole)
    {
        $this->trabPaSistole = $trabPaSistole;

        return $this;
    }

    /**
     * Get trabPaSistole
     *
     * @return string 
     */
    public function getTrabPaSistole()
    {
        return $this->trabPaSistole;
    }

    /**
     * Set trabPaDiastole
     *
     * @param string $trabPaDiastole
     * @return ShcpParTrabajoParto
     */
    public function setTrabPaDiastole($trabPaDiastole)
    {
        $this->trabPaDiastole = $trabPaDiastole;

        return $this;
    }

    /**
     * Get trabPaDiastole
     *
     * @return string 
     */
    public function getTrabPaDiastole()
    {
        return $this->trabPaDiastole;
    }

    /**
     * Set trabPulso
     *
     * @param integer $trabPulso
     * @return ShcpParTrabajoParto
     */
    public function setTrabPulso($trabPulso)
    {
        $this->trabPulso = $trabPulso;

        return $this;
    }

    /**
     * Get trabPulso
     *
     * @return integer 
     */
    public function getTrabPulso()
    {
        return $this->trabPulso;
    }

    /**
     * Set trabContrac
     *
     * @param integer $trabContrac
     * @return ShcpParTrabajoParto
     */
    public function setTrabContrac($trabContrac)
    {
        $this->trabContrac = $trabContrac;

        return $this;
    }

    /**
     * Get trabContrac
     *
     * @return integer 
     */
    public function getTrabContrac()
    {
        return $this->trabContrac;
    }

    /**
     * Set trabDilatacion
     *
     * @param integer $trabDilatacion
     * @return ShcpParTrabajoParto
     */
    public function setTrabDilatacion($trabDilatacion)
    {
        $this->trabDilatacion = $trabDilatacion;

        return $this;
    }

    /**
     * Get trabDilatacion
     *
     * @return integer 
     */
    public function getTrabDilatacion()
    {
        return $this->trabDilatacion;
    }

    /**
     * Set trabAlturaPresent
     *
     * @param string $trabAlturaPresent
     * @return ShcpParTrabajoParto
     */
    public function setTrabAlturaPresent($trabAlturaPresent)
    {
        $this->trabAlturaPresent = $trabAlturaPresent;

        return $this;
    }

    /**
     * Get trabAlturaPresent
     *
     * @return string 
     */
    public function getTrabAlturaPresent()
    {
        return $this->trabAlturaPresent;
    }

    /**
     * Set trabVariedadPosic
     *
     * @param string $trabVariedadPosic
     * @return ShcpParTrabajoParto
     */
    public function setTrabVariedadPosic($trabVariedadPosic)
    {
        $this->trabVariedadPosic = $trabVariedadPosic;

        return $this;
    }

    /**
     * Get trabVariedadPosic
     *
     * @return string 
     */
    public function getTrabVariedadPosic()
    {
        return $this->trabVariedadPosic;
    }

    /**
     * Set trabMeconio
     *
     * @param string $trabMeconio
     * @return ShcpParTrabajoParto
     */
    public function setTrabMeconio($trabMeconio)
    {
        $this->trabMeconio = $trabMeconio;

        return $this;
    }

    /**
     * Get trabMeconio
     *
     * @return string 
     */
    public function getTrabMeconio()
    {
        return $this->trabMeconio;
    }

    /**
     * Set trabFcfDips
     *
     * @param integer $trabFcfDips
     * @return ShcpParTrabajoParto
     */
    public function setTrabFcfDips($trabFcfDips)
    {
        $this->trabFcfDips = $trabFcfDips;

        return $this;
    }

    /**
     * Get trabFcfDips
     *
     * @return integer 
     */
    public function getTrabFcfDips()
    {
        return $this->trabFcfDips;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParTrabajoParto
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
