<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitDistribucion
 *
 * @ORM\Table(name="cit_distribucion", indexes={@ORM\Index(name="fki_fos_user_user_mod_cit_distribucion", columns={"idusuariomod"}), @ORM\Index(name="fki_mnt_empleados_cit_distribucion", columns={"id_empleado"}), @ORM\Index(name="fki_mnt_consultorios_cit_distribucion", columns={"id_consultorio"}), @ORM\Index(name="fki_mnt_rangohoras_cit_distribucion", columns={"id_rangohora"}), @ORM\Index(name="fki_fos_user_user_cit_distribucion", columns={"idusuarioreg"}), @ORM\Index(name="fki_mnt_area_mod_estab_cit_distribucion", columns={"id_area_mod_estab"}), @ORM\Index(name="IDX_714607E8627A85B", columns={"id_aten_area_mod_estab"})})
 * @ORM\Entity
 */
class CitDistribucion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_distribucion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="primera", type="integer", nullable=true)
     */
    private $primera;

    /**
     * @var integer
     *
     * @ORM\Column(name="subsecuente", type="integer", nullable=true)
     */
    private $subsecuente;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=true)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="yrs", type="integer", nullable=true)
     */
    private $yrs;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia", type="integer", nullable=true)
     */
    private $dia;

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
     * @var string
     *
     * @ORM\Column(name="tipocon", type="string", length=5, nullable=true)
     */
    private $tipocon;

    /**
     * @var string
     *
     * @ORM\Column(name="distribucionmed", type="string", length=6, nullable=true)
     */
    private $distribucionmed;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_citas_agregadas", type="integer", nullable=false)
     */
    private $maxCitasAgregadas = '0';

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;

    /**
     * @var \MntConsultorio
     *
     * @ORM\ManyToOne(targetEntity="MntConsultorio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_consultorio", referencedColumnName="id")
     * })
     */
    private $idConsultorio;

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
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

    /**
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAreaModEstab;

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
     * @var \MntRangohora
     *
     * @ORM\ManyToOne(targetEntity="MntRangohora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rangohora", referencedColumnName="id")
     * })
     */
    private $idRangohora;



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
     * Set primera
     *
     * @param integer $primera
     * @return CitDistribucion
     */
    public function setPrimera($primera)
    {
        $this->primera = $primera;

        return $this;
    }

    /**
     * Get primera
     *
     * @return integer 
     */
    public function getPrimera()
    {
        return $this->primera;
    }

    /**
     * Set subsecuente
     *
     * @param integer $subsecuente
     * @return CitDistribucion
     */
    public function setSubsecuente($subsecuente)
    {
        $this->subsecuente = $subsecuente;

        return $this;
    }

    /**
     * Get subsecuente
     *
     * @return integer 
     */
    public function getSubsecuente()
    {
        return $this->subsecuente;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return CitDistribucion
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set yrs
     *
     * @param integer $yrs
     * @return CitDistribucion
     */
    public function setYrs($yrs)
    {
        $this->yrs = $yrs;

        return $this;
    }

    /**
     * Get yrs
     *
     * @return integer 
     */
    public function getYrs()
    {
        return $this->yrs;
    }

    /**
     * Set dia
     *
     * @param integer $dia
     * @return CitDistribucion
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return integer 
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CitDistribucion
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
     * @return CitDistribucion
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
     * Set tipocon
     *
     * @param string $tipocon
     * @return CitDistribucion
     */
    public function setTipocon($tipocon)
    {
        $this->tipocon = $tipocon;

        return $this;
    }

    /**
     * Get tipocon
     *
     * @return string 
     */
    public function getTipocon()
    {
        return $this->tipocon;
    }

    /**
     * Set distribucionmed
     *
     * @param string $distribucionmed
     * @return CitDistribucion
     */
    public function setDistribucionmed($distribucionmed)
    {
        $this->distribucionmed = $distribucionmed;

        return $this;
    }

    /**
     * Get distribucionmed
     *
     * @return string 
     */
    public function getDistribucionmed()
    {
        return $this->distribucionmed;
    }

    /**
     * Set maxCitasAgregadas
     *
     * @param integer $maxCitasAgregadas
     * @return CitDistribucion
     */
    public function setMaxCitasAgregadas($maxCitasAgregadas)
    {
        $this->maxCitasAgregadas = $maxCitasAgregadas;

        return $this;
    }

    /**
     * Get maxCitasAgregadas
     *
     * @return integer 
     */
    public function getMaxCitasAgregadas()
    {
        return $this->maxCitasAgregadas;
    }

    /**
     * Set idAtenAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab
     * @return CitDistribucion
     */
    public function setIdAtenAreaModEstab(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab = null)
    {
        $this->idAtenAreaModEstab = $idAtenAreaModEstab;

        return $this;
    }

    /**
     * Get idAtenAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtenAreaModEstab()
    {
        return $this->idAtenAreaModEstab;
    }

    /**
     * Set idConsultorio
     *
     * @param \Minsal\shcpBundle\Entity\MntConsultorio $idConsultorio
     * @return CitDistribucion
     */
    public function setIdConsultorio(\Minsal\shcpBundle\Entity\MntConsultorio $idConsultorio = null)
    {
        $this->idConsultorio = $idConsultorio;

        return $this;
    }

    /**
     * Get idConsultorio
     *
     * @return \Minsal\shcpBundle\Entity\MntConsultorio 
     */
    public function getIdConsultorio()
    {
        return $this->idConsultorio;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return CitDistribucion
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
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return CitDistribucion
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
     * Set idAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return CitDistribucion
     */
    public function setIdAreaModEstab(\Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab = null)
    {
        $this->idAreaModEstab = $idAreaModEstab;

        return $this;
    }

    /**
     * Get idAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAreaModEstab 
     */
    public function getIdAreaModEstab()
    {
        return $this->idAreaModEstab;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return CitDistribucion
     */
    public function setIdEmpleado(\Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idRangohora
     *
     * @param \Minsal\shcpBundle\Entity\MntRangohora $idRangohora
     * @return CitDistribucion
     */
    public function setIdRangohora(\Minsal\shcpBundle\Entity\MntRangohora $idRangohora = null)
    {
        $this->idRangohora = $idRangohora;

        return $this;
    }

    /**
     * Get idRangohora
     *
     * @return \Minsal\shcpBundle\Entity\MntRangohora 
     */
    public function getIdRangohora()
    {
        return $this->idRangohora;
    }
}
