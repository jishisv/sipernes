<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntUsuarios
 *
 * @ORM\Table(name="mnt_usuarios", indexes={@ORM\Index(name="fki_aten_mod_area_estab_usuarios", columns={"id_atencion_establecimiento"})})
 * @ORM\Entity
 */
class MntUsuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_usuarios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=25, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer", nullable=true)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="modulo", type="string", length=3, nullable=true)
     */
    private $modulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo", type="integer", nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="idempleado", type="string", length=7, nullable=true)
     */
    private $idempleado;

    /**
     * @var string
     *
     * @ORM\Column(name="estadocuenta", type="string", nullable=true)
     */
    private $estadocuenta = 'H';

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=false)
     */
    private $idestablecimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=true)
     */
    private $idmodalidad;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion_establecimiento", referencedColumnName="id")
     * })
     */
    private $idAtencionEstablecimiento;



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
     * Set login
     *
     * @param string $login
     * @return MntUsuarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return MntUsuarios
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
     * Set nivel
     *
     * @param integer $nivel
     * @return MntUsuarios
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
     * Set modulo
     *
     * @param string $modulo
     * @return MntUsuarios
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    /**
     * Get modulo
     *
     * @return string 
     */
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     * @return MntUsuarios
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set idempleado
     *
     * @param string $idempleado
     * @return MntUsuarios
     */
    public function setIdempleado($idempleado)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return string 
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set estadocuenta
     *
     * @param string $estadocuenta
     * @return MntUsuarios
     */
    public function setEstadocuenta($estadocuenta)
    {
        $this->estadocuenta = $estadocuenta;

        return $this;
    }

    /**
     * Get estadocuenta
     *
     * @return string 
     */
    public function getEstadocuenta()
    {
        return $this->estadocuenta;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return MntUsuarios
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
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return MntUsuarios
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
     * Set idAtencionEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtencionEstablecimiento
     * @return MntUsuarios
     */
    public function setIdAtencionEstablecimiento(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtencionEstablecimiento = null)
    {
        $this->idAtencionEstablecimiento = $idAtencionEstablecimiento;

        return $this;
    }

    /**
     * Get idAtencionEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtencionEstablecimiento()
    {
        return $this->idAtencionEstablecimiento;
    }
}
