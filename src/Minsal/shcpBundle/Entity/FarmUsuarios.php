<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmUsuarios
 *
 * @ORM\Table(name="farm_usuarios", indexes={@ORM\Index(name="IDX_56FDD1A845BCCC8", columns={"idarea"}), @ORM\Index(name="IDX_56FDD1A8947B0200", columns={"idfarmacia"})})
 * @ORM\Entity
 */
class FarmUsuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_usuarios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=15, nullable=false)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=75, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="datos", type="integer", nullable=false)
     */
    private $datos = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reportes", type="integer", nullable=false)
     */
    private $reportes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="administracion", type="integer", nullable=false)
     */
    private $administracion = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="primeravez", type="integer", nullable=false)
     */
    private $primeravez = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="idestadocuenta", type="string", nullable=false)
     */
    private $idestadocuenta = 'H';

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=false)
     */
    private $idestablecimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="conectado", type="string", nullable=false)
     */
    private $conectado = 'N';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultimaconexion", type="datetime", nullable=true)
     */
    private $ultimaconexion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=false)
     */
    private $idmodalidad;

    /**
     * @var \MntAreafarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntAreafarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idarea", referencedColumnName="id")
     * })
     */
    private $idarea;

    /**
     * @var \MntFarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntFarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfarmacia", referencedColumnName="id")
     * })
     */
    private $idfarmacia;



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
     * Set nick
     *
     * @param string $nick
     * @return FarmUsuarios
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return FarmUsuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return FarmUsuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return FarmUsuarios
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set datos
     *
     * @param integer $datos
     * @return FarmUsuarios
     */
    public function setDatos($datos)
    {
        $this->datos = $datos;

        return $this;
    }

    /**
     * Get datos
     *
     * @return integer 
     */
    public function getDatos()
    {
        return $this->datos;
    }

    /**
     * Set reportes
     *
     * @param integer $reportes
     * @return FarmUsuarios
     */
    public function setReportes($reportes)
    {
        $this->reportes = $reportes;

        return $this;
    }

    /**
     * Get reportes
     *
     * @return integer 
     */
    public function getReportes()
    {
        return $this->reportes;
    }

    /**
     * Set administracion
     *
     * @param integer $administracion
     * @return FarmUsuarios
     */
    public function setAdministracion($administracion)
    {
        $this->administracion = $administracion;

        return $this;
    }

    /**
     * Get administracion
     *
     * @return integer 
     */
    public function getAdministracion()
    {
        return $this->administracion;
    }

    /**
     * Set primeravez
     *
     * @param integer $primeravez
     * @return FarmUsuarios
     */
    public function setPrimeravez($primeravez)
    {
        $this->primeravez = $primeravez;

        return $this;
    }

    /**
     * Get primeravez
     *
     * @return integer 
     */
    public function getPrimeravez()
    {
        return $this->primeravez;
    }

    /**
     * Set idestadocuenta
     *
     * @param string $idestadocuenta
     * @return FarmUsuarios
     */
    public function setIdestadocuenta($idestadocuenta)
    {
        $this->idestadocuenta = $idestadocuenta;

        return $this;
    }

    /**
     * Get idestadocuenta
     *
     * @return string 
     */
    public function getIdestadocuenta()
    {
        return $this->idestadocuenta;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmUsuarios
     */
    public function setIdestablecimiento($idestablecimiento)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return integer 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set conectado
     *
     * @param string $conectado
     * @return FarmUsuarios
     */
    public function setConectado($conectado)
    {
        $this->conectado = $conectado;

        return $this;
    }

    /**
     * Get conectado
     *
     * @return string 
     */
    public function getConectado()
    {
        return $this->conectado;
    }

    /**
     * Set ultimaconexion
     *
     * @param \DateTime $ultimaconexion
     * @return FarmUsuarios
     */
    public function setUltimaconexion($ultimaconexion)
    {
        $this->ultimaconexion = $ultimaconexion;

        return $this;
    }

    /**
     * Get ultimaconexion
     *
     * @return \DateTime 
     */
    public function getUltimaconexion()
    {
        return $this->ultimaconexion;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return FarmUsuarios
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
     * Set idarea
     *
     * @param \Minsal\shcpBundle\Entity\MntAreafarmacia $idarea
     * @return FarmUsuarios
     */
    public function setIdarea(\Minsal\shcpBundle\Entity\MntAreafarmacia $idarea = null)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return \Minsal\shcpBundle\Entity\MntAreafarmacia 
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set idfarmacia
     *
     * @param \Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia
     * @return FarmUsuarios
     */
    public function setIdfarmacia(\Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia = null)
    {
        $this->idfarmacia = $idfarmacia;

        return $this;
    }

    /**
     * Get idfarmacia
     *
     * @return \Minsal\shcpBundle\Entity\MntFarmacia 
     */
    public function getIdfarmacia()
    {
        return $this->idfarmacia;
    }
}
