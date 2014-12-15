<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPersonaTest
 *
 * @ORM\Table(name="ctl_persona_test")
 * @ORM\Entity
 */
class CtlPersonaTest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_persona_test_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_persona", type="string", length=150, nullable=true)
     */
    private $nombrePersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="promedio_notas", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $promedioNotas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acepta_condiciones", type="boolean", nullable=false)
     */
    private $aceptaCondiciones = false;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=50, nullable=true)
     */
    private $userName;



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
     * Set nombrePersona
     *
     * @param string $nombrePersona
     * @return CtlPersonaTest
     */
    public function setNombrePersona($nombrePersona)
    {
        $this->nombrePersona = $nombrePersona;

        return $this;
    }

    /**
     * Get nombrePersona
     *
     * @return string 
     */
    public function getNombrePersona()
    {
        return $this->nombrePersona;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return CtlPersonaTest
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return CtlPersonaTest
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set promedioNotas
     *
     * @param string $promedioNotas
     * @return CtlPersonaTest
     */
    public function setPromedioNotas($promedioNotas)
    {
        $this->promedioNotas = $promedioNotas;

        return $this;
    }

    /**
     * Get promedioNotas
     *
     * @return string 
     */
    public function getPromedioNotas()
    {
        return $this->promedioNotas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CtlPersonaTest
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
     * Set email
     *
     * @param string $email
     * @return CtlPersonaTest
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set aceptaCondiciones
     *
     * @param boolean $aceptaCondiciones
     * @return CtlPersonaTest
     */
    public function setAceptaCondiciones($aceptaCondiciones)
    {
        $this->aceptaCondiciones = $aceptaCondiciones;

        return $this;
    }

    /**
     * Get aceptaCondiciones
     *
     * @return boolean 
     */
    public function getAceptaCondiciones()
    {
        return $this->aceptaCondiciones;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return CtlPersonaTest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }
}
