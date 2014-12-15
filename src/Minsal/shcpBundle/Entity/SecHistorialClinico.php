<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecHistorialClinico
 *
 * @ORM\Table(name="sec_historial_clinico", indexes={@ORM\Index(name="fki_mnt_aten_area_mod_estab_sec_historial_clinico", columns={"idsubservicio"}), @ORM\Index(name="fki_fos_user_user_sec_historial_clinico", columns={"idusuarioreg"}), @ORM\Index(name="IDX_B5886216890253C7", columns={"id_empleado"}), @ORM\Index(name="IDX_B5886216445651A7", columns={"id_numero_expediente"}), @ORM\Index(name="IDX_B588621675BB31F7", columns={"idestablecimiento"})})
 * @ORM\Entity
 */
class SecHistorialClinico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_historial_clinico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="datosclinicos", type="string", length=200, nullable=true)
     */
    private $datosclinicos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaconsulta", type="date", nullable=true)
     */
    private $fechaconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="seguimientoconsultaext", type="string", nullable=true)
     */
    private $seguimientoconsultaext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var string
     *
     * @ORM\Column(name="piloto", type="string", nullable=true)
     */
    private $piloto;

    /**
     * @var string
     *
     * @ORM\Column(name="ipaddress", type="string", length=15, nullable=true)
     */
    private $ipaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="idnumeroexp", type="string", nullable=true)
     */
    private $idnumeroexp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=true)
     */
    private $idmodalidad;

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
     *   @ORM\JoinColumn(name="id_numero_expediente", referencedColumnName="id")
     * })
     */
    private $idNumeroExpediente;

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
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubservicio", referencedColumnName="id")
     * })
     */
    private $idsubservicio;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set datosclinicos
     *
     * @param string $datosclinicos
     * @return SecHistorialClinico
     */
    public function setDatosclinicos($datosclinicos)
    {
        $this->datosclinicos = $datosclinicos;

        return $this;
    }

    /**
     * Get datosclinicos
     *
     * @return string 
     */
    public function getDatosclinicos()
    {
        return $this->datosclinicos;
    }

    /**
     * Set fechaconsulta
     *
     * @param \DateTime $fechaconsulta
     * @return SecHistorialClinico
     */
    public function setFechaconsulta($fechaconsulta)
    {
        $this->fechaconsulta = $fechaconsulta;

        return $this;
    }

    /**
     * Get fechaconsulta
     *
     * @return \DateTime 
     */
    public function getFechaconsulta()
    {
        return $this->fechaconsulta;
    }

    /**
     * Set seguimientoconsultaext
     *
     * @param string $seguimientoconsultaext
     * @return SecHistorialClinico
     */
    public function setSeguimientoconsultaext($seguimientoconsultaext)
    {
        $this->seguimientoconsultaext = $seguimientoconsultaext;

        return $this;
    }

    /**
     * Get seguimientoconsultaext
     *
     * @return string 
     */
    public function getSeguimientoconsultaext()
    {
        return $this->seguimientoconsultaext;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return SecHistorialClinico
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
     * Set piloto
     *
     * @param string $piloto
     * @return SecHistorialClinico
     */
    public function setPiloto($piloto)
    {
        $this->piloto = $piloto;

        return $this;
    }

    /**
     * Get piloto
     *
     * @return string 
     */
    public function getPiloto()
    {
        return $this->piloto;
    }

    /**
     * Set ipaddress
     *
     * @param string $ipaddress
     * @return SecHistorialClinico
     */
    public function setIpaddress($ipaddress)
    {
        $this->ipaddress = $ipaddress;

        return $this;
    }

    /**
     * Get ipaddress
     *
     * @return string 
     */
    public function getIpaddress()
    {
        return $this->ipaddress;
    }

    /**
     * Set idnumeroexp
     *
     * @param string $idnumeroexp
     * @return SecHistorialClinico
     */
    public function setIdnumeroexp($idnumeroexp)
    {
        $this->idnumeroexp = $idnumeroexp;

        return $this;
    }

    /**
     * Get idnumeroexp
     *
     * @return string 
     */
    public function getIdnumeroexp()
    {
        return $this->idnumeroexp;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return SecHistorialClinico
     */
    public function setIdmodalidad($idmodalidad)
    {
        $this->idmodalidad = $idmodalidad;

        return $this;
    }

    /**
     * Get idmodalidad
     *
     * @return integer 
     */
    public function getIdmodalidad()
    {
        return $this->idmodalidad;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return SecHistorialClinico
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
     * Set idNumeroExpediente
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idNumeroExpediente
     * @return SecHistorialClinico
     */
    public function setIdNumeroExpediente(\Minsal\shcpBundle\Entity\MntExpediente $idNumeroExpediente = null)
    {
        $this->idNumeroExpediente = $idNumeroExpediente;

        return $this;
    }

    /**
     * Get idNumeroExpediente
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdNumeroExpediente()
    {
        return $this->idNumeroExpediente;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return SecHistorialClinico
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
     * Set idsubservicio
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idsubservicio
     * @return SecHistorialClinico
     */
    public function setIdsubservicio(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idsubservicio = null)
    {
        $this->idsubservicio = $idsubservicio;

        return $this;
    }

    /**
     * Get idsubservicio
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdsubservicio()
    {
        return $this->idsubservicio;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return SecHistorialClinico
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
}
