<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitEvento
 *
 * @ORM\Table(name="cit_evento", indexes={@ORM\Index(name="fki_mnt_ciq_cit_eventos", columns={"id_ciq_establecimiento"}), @ORM\Index(name="fki_mnt_area_mod_estab_cit_evento", columns={"id_area_mod_estab"}), @ORM\Index(name="fki_ctl_establecimiento_cit_evento", columns={"id_establecimiento"}), @ORM\Index(name="fki_fos_user_user_reg_cit_evento", columns={"idusuarioreg"}), @ORM\Index(name="fki_mnt_rango_hora_cit_evento", columns={"id_rangohora"}), @ORM\Index(name="fki_cit_tipoevento_cit_evento", columns={"id_tipoevento"}), @ORM\Index(name="IDX_22594C68730CF75F", columns={"idempleado"})})
 * @ORM\Entity
 */
class CitEvento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_evento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaini", type="date", nullable=true)
     */
    private $fechaini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaini", type="time", nullable=true)
     */
    private $horaini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=true)
     */
    private $fechafin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horafin", type="time", nullable=true)
     */
    private $horafin;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=750, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var integer
     *
     * @ORM\Column(name="dia_semana", type="smallint", nullable=true)
     */
    private $diaSemana;

    /**
     * @var \CitTipoevento
     *
     * @ORM\ManyToOne(targetEntity="CitTipoevento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipoevento", referencedColumnName="id")
     * })
     */
    private $idTipoevento;

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
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

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
     *   @ORM\JoinColumn(name="idempleado", referencedColumnName="id")
     * })
     */
    private $idempleado;

    /**
     * @var \MntProcedimientoEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntProcedimientoEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciq_establecimiento", referencedColumnName="id")
     * })
     */
    private $idCiqEstablecimiento;

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
     * Set fechaini
     *
     * @param \DateTime $fechaini
     * @return CitEvento
     */
    public function setFechaini($fechaini)
    {
        $this->fechaini = $fechaini;

        return $this;
    }

    /**
     * Get fechaini
     *
     * @return \DateTime 
     */
    public function getFechaini()
    {
        return $this->fechaini;
    }

    /**
     * Set horaini
     *
     * @param \DateTime $horaini
     * @return CitEvento
     */
    public function setHoraini($horaini)
    {
        $this->horaini = $horaini;

        return $this;
    }

    /**
     * Get horaini
     *
     * @return \DateTime 
     */
    public function getHoraini()
    {
        return $this->horaini;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return CitEvento
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set horafin
     *
     * @param \DateTime $horafin
     * @return CitEvento
     */
    public function setHorafin($horafin)
    {
        $this->horafin = $horafin;

        return $this;
    }

    /**
     * Get horafin
     *
     * @return \DateTime 
     */
    public function getHorafin()
    {
        return $this->horafin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CitEvento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CitEvento
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
     * Set diaSemana
     *
     * @param integer $diaSemana
     * @return CitEvento
     */
    public function setDiaSemana($diaSemana)
    {
        $this->diaSemana = $diaSemana;

        return $this;
    }

    /**
     * Get diaSemana
     *
     * @return integer 
     */
    public function getDiaSemana()
    {
        return $this->diaSemana;
    }

    /**
     * Set idTipoevento
     *
     * @param \Minsal\shcpBundle\Entity\CitTipoevento $idTipoevento
     * @return CitEvento
     */
    public function setIdTipoevento(\Minsal\shcpBundle\Entity\CitTipoevento $idTipoevento = null)
    {
        $this->idTipoevento = $idTipoevento;

        return $this;
    }

    /**
     * Get idTipoevento
     *
     * @return \Minsal\shcpBundle\Entity\CitTipoevento 
     */
    public function getIdTipoevento()
    {
        return $this->idTipoevento;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CitEvento
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
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return CitEvento
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
     * Set idAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return CitEvento
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
     * Set idempleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idempleado
     * @return CitEvento
     */
    public function setIdempleado(\Minsal\shcpBundle\Entity\MntEmpleado $idempleado = null)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set idCiqEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento $idCiqEstablecimiento
     * @return CitEvento
     */
    public function setIdCiqEstablecimiento(\Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento $idCiqEstablecimiento = null)
    {
        $this->idCiqEstablecimiento = $idCiqEstablecimiento;

        return $this;
    }

    /**
     * Get idCiqEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\MntProcedimientoEstablecimiento 
     */
    public function getIdCiqEstablecimiento()
    {
        return $this->idCiqEstablecimiento;
    }

    /**
     * Set idRangohora
     *
     * @param \Minsal\shcpBundle\Entity\MntRangohora $idRangohora
     * @return CitEvento
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
