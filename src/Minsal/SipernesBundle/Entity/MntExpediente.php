<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntExpediente
 *
 * @ORM\Table(name="mnt_expediente", uniqueConstraints={@ORM\UniqueConstraint(name="idx_numero_expediente", columns={"numero"})}, indexes={@ORM\Index(name="IDX_E4950F577DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_E4950F57961045CB", columns={"id_paciente"})})
 * @ORM\Entity
 */
class MntExpediente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_expediente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=12, nullable=false)
     */
    private $numero;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=false)
     */
    private $habilitado = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_creacion_expediente", type="integer", nullable=true)
     */
    private $idCreacionExpediente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_creacion", type="time", nullable=true)
     */
    private $horaCreacion;

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
     * Set numero
     *
     * @param string $numero
     * @return MntExpediente
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return MntExpediente
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set idCreacionExpediente
     *
     * @param integer $idCreacionExpediente
     * @return MntExpediente
     */
    public function setIdCreacionExpediente($idCreacionExpediente)
    {
        $this->idCreacionExpediente = $idCreacionExpediente;

        return $this;
    }

    /**
     * Get idCreacionExpediente
     *
     * @return integer 
     */
    public function getIdCreacionExpediente()
    {
        return $this->idCreacionExpediente;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return MntExpediente
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set horaCreacion
     *
     * @param \DateTime $horaCreacion
     * @return MntExpediente
     */
    public function setHoraCreacion($horaCreacion)
    {
        $this->horaCreacion = $horaCreacion;

        return $this;
    }

    /**
     * Get horaCreacion
     *
     * @return \DateTime 
     */
    public function getHoraCreacion()
    {
        return $this->horaCreacion;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SipernesBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntExpediente
     */
    public function setIdEstablecimiento(\Minsal\SipernesBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\SipernesBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idPaciente
     *
     * @param \Minsal\SipernesBundle\Entity\MntPaciente $idPaciente
     * @return MntExpediente
     */
    public function setIdPaciente(\Minsal\SipernesBundle\Entity\MntPaciente $idPaciente = null)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return \Minsal\SipernesBundle\Entity\MntPaciente 
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }
    
     public function __toString() {
         $codigonombrepac = $this->getNumero()." - ".$this->getIdPaciente()->getPrimerNombre()." ".$this->getIdPaciente()->getPrimerApellido();
        return $codigonombrepac?:'';
    }
}
