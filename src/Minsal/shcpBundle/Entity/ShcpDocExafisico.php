<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocExafisico
 *
 * @ORM\Table(name="shcp_doc_exafisico", indexes={@ORM\Index(name="IDX_B1279CA5AF1DFD", columns={"id_hoja_post"})})
 * @ORM\Entity
 */
class ShcpDocExafisico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_exafisico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="exafi_fre_cardiaca", type="integer", nullable=true)
     */
    private $exafiFreCardiaca;

    /**
     * @var integer
     *
     * @ORM\Column(name="exafi_fre_respirat", type="integer", nullable=true)
     */
    private $exafiFreRespirat;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_pa_sistole", type="string", nullable=true)
     */
    private $exafiPaSistole;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_pa_diastole", type="string", nullable=true)
     */
    private $exafiPaDiastole;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_tempe", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $exafiTempe;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_peso", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $exafiPeso;

    /**
     * @var integer
     *
     * @ORM\Column(name="exafi_altura", type="integer", nullable=true)
     */
    private $exafiAltura;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_imc", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $exafiImc;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_cabeza", type="string", length=75, nullable=true)
     */
    private $exafiCabeza;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_cuello", type="string", length=75, nullable=true)
     */
    private $exafiCuello;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_torax", type="string", length=75, nullable=true)
     */
    private $exafiTorax;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_mamas", type="string", length=75, nullable=true)
     */
    private $exafiMamas;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_abdomen", type="string", length=75, nullable=true)
     */
    private $exafiAbdomen;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_utero", type="string", length=75, nullable=true)
     */
    private $exafiUtero;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_cesa_eqb", type="string", length=75, nullable=true)
     */
    private $exafiCesaEqb;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_genitales", type="string", length=75, nullable=true)
     */
    private $exafiGenitales;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_loquios", type="string", length=75, nullable=true)
     */
    private $exafiLoquios;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_epi", type="string", length=75, nullable=true)
     */
    private $exafiEpi;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_diag", type="string", length=150, nullable=true)
     */
    private $exafiDiag;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_conse", type="string", length=150, nullable=true)
     */
    private $exafiConse;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_tratam", type="string", length=150, nullable=true)
     */
    private $exafiTratam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exafi_fecha_cita", type="date", nullable=true)
     */
    private $exafiFechaCita;

    /**
     * @var string
     *
     * @ORM\Column(name="exafi_responsa", type="string", length=100, nullable=true)
     */
    private $exafiResponsa;

    /**
     * @var \ShcpDocHojaPostparto
     *
     * @ORM\ManyToOne(targetEntity="ShcpDocHojaPostparto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hoja_post", referencedColumnName="id")
     * })
     */
    private $idHojaPost;



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
     * Set exafiFreCardiaca
     *
     * @param integer $exafiFreCardiaca
     * @return ShcpDocExafisico
     */
    public function setExafiFreCardiaca($exafiFreCardiaca)
    {
        $this->exafiFreCardiaca = $exafiFreCardiaca;

        return $this;
    }

    /**
     * Get exafiFreCardiaca
     *
     * @return integer 
     */
    public function getExafiFreCardiaca()
    {
        return $this->exafiFreCardiaca;
    }

    /**
     * Set exafiFreRespirat
     *
     * @param integer $exafiFreRespirat
     * @return ShcpDocExafisico
     */
    public function setExafiFreRespirat($exafiFreRespirat)
    {
        $this->exafiFreRespirat = $exafiFreRespirat;

        return $this;
    }

    /**
     * Get exafiFreRespirat
     *
     * @return integer 
     */
    public function getExafiFreRespirat()
    {
        return $this->exafiFreRespirat;
    }

    /**
     * Set exafiPaSistole
     *
     * @param string $exafiPaSistole
     * @return ShcpDocExafisico
     */
    public function setExafiPaSistole($exafiPaSistole)
    {
        $this->exafiPaSistole = $exafiPaSistole;

        return $this;
    }

    /**
     * Get exafiPaSistole
     *
     * @return string 
     */
    public function getExafiPaSistole()
    {
        return $this->exafiPaSistole;
    }

    /**
     * Set exafiPaDiastole
     *
     * @param string $exafiPaDiastole
     * @return ShcpDocExafisico
     */
    public function setExafiPaDiastole($exafiPaDiastole)
    {
        $this->exafiPaDiastole = $exafiPaDiastole;

        return $this;
    }

    /**
     * Get exafiPaDiastole
     *
     * @return string 
     */
    public function getExafiPaDiastole()
    {
        return $this->exafiPaDiastole;
    }

    /**
     * Set exafiTempe
     *
     * @param string $exafiTempe
     * @return ShcpDocExafisico
     */
    public function setExafiTempe($exafiTempe)
    {
        $this->exafiTempe = $exafiTempe;

        return $this;
    }

    /**
     * Get exafiTempe
     *
     * @return string 
     */
    public function getExafiTempe()
    {
        return $this->exafiTempe;
    }

    /**
     * Set exafiPeso
     *
     * @param string $exafiPeso
     * @return ShcpDocExafisico
     */
    public function setExafiPeso($exafiPeso)
    {
        $this->exafiPeso = $exafiPeso;

        return $this;
    }

    /**
     * Get exafiPeso
     *
     * @return string 
     */
    public function getExafiPeso()
    {
        return $this->exafiPeso;
    }

    /**
     * Set exafiAltura
     *
     * @param integer $exafiAltura
     * @return ShcpDocExafisico
     */
    public function setExafiAltura($exafiAltura)
    {
        $this->exafiAltura = $exafiAltura;

        return $this;
    }

    /**
     * Get exafiAltura
     *
     * @return integer 
     */
    public function getExafiAltura()
    {
        return $this->exafiAltura;
    }

    /**
     * Set exafiImc
     *
     * @param string $exafiImc
     * @return ShcpDocExafisico
     */
    public function setExafiImc($exafiImc)
    {
        $this->exafiImc = $exafiImc;

        return $this;
    }

    /**
     * Get exafiImc
     *
     * @return string 
     */
    public function getExafiImc()
    {
        return $this->exafiImc;
    }

    /**
     * Set exafiCabeza
     *
     * @param string $exafiCabeza
     * @return ShcpDocExafisico
     */
    public function setExafiCabeza($exafiCabeza)
    {
        $this->exafiCabeza = $exafiCabeza;

        return $this;
    }

    /**
     * Get exafiCabeza
     *
     * @return string 
     */
    public function getExafiCabeza()
    {
        return $this->exafiCabeza;
    }

    /**
     * Set exafiCuello
     *
     * @param string $exafiCuello
     * @return ShcpDocExafisico
     */
    public function setExafiCuello($exafiCuello)
    {
        $this->exafiCuello = $exafiCuello;

        return $this;
    }

    /**
     * Get exafiCuello
     *
     * @return string 
     */
    public function getExafiCuello()
    {
        return $this->exafiCuello;
    }

    /**
     * Set exafiTorax
     *
     * @param string $exafiTorax
     * @return ShcpDocExafisico
     */
    public function setExafiTorax($exafiTorax)
    {
        $this->exafiTorax = $exafiTorax;

        return $this;
    }

    /**
     * Get exafiTorax
     *
     * @return string 
     */
    public function getExafiTorax()
    {
        return $this->exafiTorax;
    }

    /**
     * Set exafiMamas
     *
     * @param string $exafiMamas
     * @return ShcpDocExafisico
     */
    public function setExafiMamas($exafiMamas)
    {
        $this->exafiMamas = $exafiMamas;

        return $this;
    }

    /**
     * Get exafiMamas
     *
     * @return string 
     */
    public function getExafiMamas()
    {
        return $this->exafiMamas;
    }

    /**
     * Set exafiAbdomen
     *
     * @param string $exafiAbdomen
     * @return ShcpDocExafisico
     */
    public function setExafiAbdomen($exafiAbdomen)
    {
        $this->exafiAbdomen = $exafiAbdomen;

        return $this;
    }

    /**
     * Get exafiAbdomen
     *
     * @return string 
     */
    public function getExafiAbdomen()
    {
        return $this->exafiAbdomen;
    }

    /**
     * Set exafiUtero
     *
     * @param string $exafiUtero
     * @return ShcpDocExafisico
     */
    public function setExafiUtero($exafiUtero)
    {
        $this->exafiUtero = $exafiUtero;

        return $this;
    }

    /**
     * Get exafiUtero
     *
     * @return string 
     */
    public function getExafiUtero()
    {
        return $this->exafiUtero;
    }

    /**
     * Set exafiCesaEqb
     *
     * @param string $exafiCesaEqb
     * @return ShcpDocExafisico
     */
    public function setExafiCesaEqb($exafiCesaEqb)
    {
        $this->exafiCesaEqb = $exafiCesaEqb;

        return $this;
    }

    /**
     * Get exafiCesaEqb
     *
     * @return string 
     */
    public function getExafiCesaEqb()
    {
        return $this->exafiCesaEqb;
    }

    /**
     * Set exafiGenitales
     *
     * @param string $exafiGenitales
     * @return ShcpDocExafisico
     */
    public function setExafiGenitales($exafiGenitales)
    {
        $this->exafiGenitales = $exafiGenitales;

        return $this;
    }

    /**
     * Get exafiGenitales
     *
     * @return string 
     */
    public function getExafiGenitales()
    {
        return $this->exafiGenitales;
    }

    /**
     * Set exafiLoquios
     *
     * @param string $exafiLoquios
     * @return ShcpDocExafisico
     */
    public function setExafiLoquios($exafiLoquios)
    {
        $this->exafiLoquios = $exafiLoquios;

        return $this;
    }

    /**
     * Get exafiLoquios
     *
     * @return string 
     */
    public function getExafiLoquios()
    {
        return $this->exafiLoquios;
    }

    /**
     * Set exafiEpi
     *
     * @param string $exafiEpi
     * @return ShcpDocExafisico
     */
    public function setExafiEpi($exafiEpi)
    {
        $this->exafiEpi = $exafiEpi;

        return $this;
    }

    /**
     * Get exafiEpi
     *
     * @return string 
     */
    public function getExafiEpi()
    {
        return $this->exafiEpi;
    }

    /**
     * Set exafiDiag
     *
     * @param string $exafiDiag
     * @return ShcpDocExafisico
     */
    public function setExafiDiag($exafiDiag)
    {
        $this->exafiDiag = $exafiDiag;

        return $this;
    }

    /**
     * Get exafiDiag
     *
     * @return string 
     */
    public function getExafiDiag()
    {
        return $this->exafiDiag;
    }

    /**
     * Set exafiConse
     *
     * @param string $exafiConse
     * @return ShcpDocExafisico
     */
    public function setExafiConse($exafiConse)
    {
        $this->exafiConse = $exafiConse;

        return $this;
    }

    /**
     * Get exafiConse
     *
     * @return string 
     */
    public function getExafiConse()
    {
        return $this->exafiConse;
    }

    /**
     * Set exafiTratam
     *
     * @param string $exafiTratam
     * @return ShcpDocExafisico
     */
    public function setExafiTratam($exafiTratam)
    {
        $this->exafiTratam = $exafiTratam;

        return $this;
    }

    /**
     * Get exafiTratam
     *
     * @return string 
     */
    public function getExafiTratam()
    {
        return $this->exafiTratam;
    }

    /**
     * Set exafiFechaCita
     *
     * @param \DateTime $exafiFechaCita
     * @return ShcpDocExafisico
     */
    public function setExafiFechaCita($exafiFechaCita)
    {
        $this->exafiFechaCita = $exafiFechaCita;

        return $this;
    }

    /**
     * Get exafiFechaCita
     *
     * @return \DateTime 
     */
    public function getExafiFechaCita()
    {
        return $this->exafiFechaCita;
    }

    /**
     * Set exafiResponsa
     *
     * @param string $exafiResponsa
     * @return ShcpDocExafisico
     */
    public function setExafiResponsa($exafiResponsa)
    {
        $this->exafiResponsa = $exafiResponsa;

        return $this;
    }

    /**
     * Get exafiResponsa
     *
     * @return string 
     */
    public function getExafiResponsa()
    {
        return $this->exafiResponsa;
    }

    /**
     * Set idHojaPost
     *
     * @param \Minsal\shcpBundle\Entity\ShcpDocHojaPostparto $idHojaPost
     * @return ShcpDocExafisico
     */
    public function setIdHojaPost(\Minsal\shcpBundle\Entity\ShcpDocHojaPostparto $idHojaPost = null)
    {
        $this->idHojaPost = $idHojaPost;

        return $this;
    }

    /**
     * Get idHojaPost
     *
     * @return \Minsal\shcpBundle\Entity\ShcpDocHojaPostparto 
     */
    public function getIdHojaPost()
    {
        return $this->idHojaPost;
    }
}
