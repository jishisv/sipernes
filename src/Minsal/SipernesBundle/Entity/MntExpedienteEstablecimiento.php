<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntExpedienteEstablecimiento
 *
 * @ORM\Table(name="mnt_expediente_establecimiento", indexes={@ORM\Index(name="IDX_8715ED227DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class MntExpedienteEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_expediente_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_paciente_inicial", type="bigint", nullable=true)
     */
    private $idPacienteInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_paciente_siap_local", type="bigint", nullable=true)
     */
    private $idPacienteSiapLocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_numero_expediente", type="bigint", nullable=true)
     */
    private $idNumeroExpediente;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idPacienteInicial
     *
     * @param integer $idPacienteInicial
     * @return MntExpedienteEstablecimiento
     */
    public function setIdPacienteInicial($idPacienteInicial)
    {
        $this->idPacienteInicial = $idPacienteInicial;

        return $this;
    }

    /**
     * Get idPacienteInicial
     *
     * @return integer 
     */
    public function getIdPacienteInicial()
    {
        return $this->idPacienteInicial;
    }

    /**
     * Set idPacienteSiapLocal
     *
     * @param integer $idPacienteSiapLocal
     * @return MntExpedienteEstablecimiento
     */
    public function setIdPacienteSiapLocal($idPacienteSiapLocal)
    {
        $this->idPacienteSiapLocal = $idPacienteSiapLocal;

        return $this;
    }

    /**
     * Get idPacienteSiapLocal
     *
     * @return integer 
     */
    public function getIdPacienteSiapLocal()
    {
        return $this->idPacienteSiapLocal;
    }

    /**
     * Set idNumeroExpediente
     *
     * @param integer $idNumeroExpediente
     * @return MntExpedienteEstablecimiento
     */
    public function setIdNumeroExpediente($idNumeroExpediente)
    {
        $this->idNumeroExpediente = $idNumeroExpediente;

        return $this;
    }

    /**
     * Get idNumeroExpediente
     *
     * @return integer 
     */
    public function getIdNumeroExpediente()
    {
        return $this->idNumeroExpediente;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SipernesBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntExpedienteEstablecimiento
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
}
