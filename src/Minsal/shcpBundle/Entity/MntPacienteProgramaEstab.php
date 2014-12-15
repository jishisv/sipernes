<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntPacienteProgramaEstab
 *
 * @ORM\Table(name="mnt_paciente_programa_estab", indexes={@ORM\Index(name="IDX_D6B515707DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_D6B51570961045CB", columns={"id_paciente"}), @ORM\Index(name="IDX_D6B515704C6E5D28", columns={"id_programa_establecimiento"})})
 * @ORM\Entity
 */
class MntPacienteProgramaEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_paciente_programa_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inscripcion", type="date", nullable=false)
     */
    private $fechaInscripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_alta", type="date", nullable=true)
     */
    private $fechaAlta;

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
     * @var \MntProgramaEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntProgramaEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_programa_establecimiento", referencedColumnName="id")
     * })
     */
    private $idProgramaEstablecimiento;



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
     * Set fechaInscripcion
     *
     * @param \DateTime $fechaInscripcion
     * @return MntPacienteProgramaEstab
     */
    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;

        return $this;
    }

    /**
     * Get fechaInscripcion
     *
     * @return \DateTime 
     */
    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return MntPacienteProgramaEstab
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntPacienteProgramaEstab
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
     * Set idPaciente
     *
     * @param \Minsal\shcpBundle\Entity\MntPaciente $idPaciente
     * @return MntPacienteProgramaEstab
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

    /**
     * Set idProgramaEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntProgramaEstablecimiento $idProgramaEstablecimiento
     * @return MntPacienteProgramaEstab
     */
    public function setIdProgramaEstablecimiento(\Minsal\shcpBundle\Entity\MntProgramaEstablecimiento $idProgramaEstablecimiento = null)
    {
        $this->idProgramaEstablecimiento = $idProgramaEstablecimiento;

        return $this;
    }

    /**
     * Get idProgramaEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\MntProgramaEstablecimiento 
     */
    public function getIdProgramaEstablecimiento()
    {
        return $this->idProgramaEstablecimiento;
    }
}
