<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecEmergencia
 *
 * @ORM\Table(name="sec_emergencia", uniqueConstraints={@ORM\UniqueConstraint(name="idx_numero_emergencia_anio", columns={"numero_emergencia", "anio_emergencia"})}, indexes={@ORM\Index(name="IDX_C23C64A2721098ED", columns={"id_usuario_modifica"}), @ORM\Index(name="IDX_C23C64A2D58F2214", columns={"id_usuario_registra"}), @ORM\Index(name="IDX_C23C64A2961045CB", columns={"id_paciente"})})
 * @ORM\Entity
 */
class SecEmergencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_emergencia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_emergencia", type="string", length=15, nullable=false)
     */
    private $numeroEmergencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registra", type="datetime", nullable=false)
     */
    private $fechaRegistra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modifica", type="datetime", nullable=true)
     */
    private $fechaModifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio_emergencia", type="integer", nullable=false)
     */
    private $anioEmergencia;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_modifica", referencedColumnName="id")
     * })
     */
    private $idUsuarioModifica;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_registra", referencedColumnName="id")
     * })
     */
    private $idUsuarioRegistra;

    /**
     * @var \MntPaciente
     *
     * @ORM\ManyToOne(targetEntity="MntPaciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id")
     * })
     */
    private $idPaciente;



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
     * Set numeroEmergencia
     *
     * @param string $numeroEmergencia
     * @return SecEmergencia
     */
    public function setNumeroEmergencia($numeroEmergencia)
    {
        $this->numeroEmergencia = $numeroEmergencia;

        return $this;
    }

    /**
     * Get numeroEmergencia
     *
     * @return string 
     */
    public function getNumeroEmergencia()
    {
        return $this->numeroEmergencia;
    }

    /**
     * Set fechaRegistra
     *
     * @param \DateTime $fechaRegistra
     * @return SecEmergencia
     */
    public function setFechaRegistra($fechaRegistra)
    {
        $this->fechaRegistra = $fechaRegistra;

        return $this;
    }

    /**
     * Get fechaRegistra
     *
     * @return \DateTime 
     */
    public function getFechaRegistra()
    {
        return $this->fechaRegistra;
    }

    /**
     * Set fechaModifica
     *
     * @param \DateTime $fechaModifica
     * @return SecEmergencia
     */
    public function setFechaModifica($fechaModifica)
    {
        $this->fechaModifica = $fechaModifica;

        return $this;
    }

    /**
     * Get fechaModifica
     *
     * @return \DateTime 
     */
    public function getFechaModifica()
    {
        return $this->fechaModifica;
    }

    /**
     * Set anioEmergencia
     *
     * @param integer $anioEmergencia
     * @return SecEmergencia
     */
    public function setAnioEmergencia($anioEmergencia)
    {
        $this->anioEmergencia = $anioEmergencia;

        return $this;
    }

    /**
     * Get anioEmergencia
     *
     * @return integer 
     */
    public function getAnioEmergencia()
    {
        return $this->anioEmergencia;
    }

    /**
     * Set idUsuarioModifica
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUsuarioModifica
     * @return SecEmergencia
     */
    public function setIdUsuarioModifica(\Minsal\shcpBundle\Entity\FosUserUser $idUsuarioModifica = null)
    {
        $this->idUsuarioModifica = $idUsuarioModifica;

        return $this;
    }

    /**
     * Get idUsuarioModifica
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioModifica()
    {
        return $this->idUsuarioModifica;
    }

    /**
     * Set idUsuarioRegistra
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUsuarioRegistra
     * @return SecEmergencia
     */
    public function setIdUsuarioRegistra(\Minsal\shcpBundle\Entity\FosUserUser $idUsuarioRegistra = null)
    {
        $this->idUsuarioRegistra = $idUsuarioRegistra;

        return $this;
    }

    /**
     * Get idUsuarioRegistra
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUsuarioRegistra()
    {
        return $this->idUsuarioRegistra;
    }

    /**
     * Set idPaciente
     *
     * @param \Minsal\shcpBundle\Entity\MntPaciente $idPaciente
     * @return SecEmergencia
     */
    public function setIdPaciente(\Minsal\shcpBundle\Entity\MntPaciente $idPaciente = null)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return \Minsal\shcpBundle\Entity\MntPaciente 
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }
}
