<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecDiagnosticospaciente
 *
 * @ORM\Table(name="sec_diagnosticospaciente", indexes={@ORM\Index(name="IDX_121FCE97BDEFC8C8", columns={"iddiagnostico1"}), @ORM\Index(name="IDX_121FCE9724E69972", columns={"iddiagnostico2"}), @ORM\Index(name="IDX_121FCE9753E1A9E4", columns={"iddiagnostico3"}), @ORM\Index(name="IDX_121FCE97A92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecDiagnosticospaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_diagnosticospaciente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="procedimientos", type="text", nullable=true)
     */
    private $procedimientos;

    /**
     * @var string
     *
     * @ORM\Column(name="examenesgabinete", type="text", nullable=true)
     */
    private $examenesgabinete;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcioncie101", type="text", nullable=true)
     */
    private $descripcioncie101;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcioncie102", type="text", nullable=true)
     */
    private $descripcioncie102;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcioncie103", type="text", nullable=true)
     */
    private $descripcioncie103;

    /**
     * @var \MntCie10
     *
     * @ORM\ManyToOne(targetEntity="MntCie10")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnostico1", referencedColumnName="id")
     * })
     */
    private $iddiagnostico1;

    /**
     * @var \MntCie10
     *
     * @ORM\ManyToOne(targetEntity="MntCie10")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnostico2", referencedColumnName="id")
     * })
     */
    private $iddiagnostico2;

    /**
     * @var \MntCie10
     *
     * @ORM\ManyToOne(targetEntity="MntCie10")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnostico3", referencedColumnName="id")
     * })
     */
    private $iddiagnostico3;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhistorialclinico", referencedColumnName="id")
     * })
     */
    private $idhistorialclinico;



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
     * Set procedimientos
     *
     * @param string $procedimientos
     * @return SecDiagnosticospaciente
     */
    public function setProcedimientos($procedimientos)
    {
        $this->procedimientos = $procedimientos;

        return $this;
    }

    /**
     * Get procedimientos
     *
     * @return string 
     */
    public function getProcedimientos()
    {
        return $this->procedimientos;
    }

    /**
     * Set examenesgabinete
     *
     * @param string $examenesgabinete
     * @return SecDiagnosticospaciente
     */
    public function setExamenesgabinete($examenesgabinete)
    {
        $this->examenesgabinete = $examenesgabinete;

        return $this;
    }

    /**
     * Get examenesgabinete
     *
     * @return string 
     */
    public function getExamenesgabinete()
    {
        return $this->examenesgabinete;
    }

    /**
     * Set descripcioncie101
     *
     * @param string $descripcioncie101
     * @return SecDiagnosticospaciente
     */
    public function setDescripcioncie101($descripcioncie101)
    {
        $this->descripcioncie101 = $descripcioncie101;

        return $this;
    }

    /**
     * Get descripcioncie101
     *
     * @return string 
     */
    public function getDescripcioncie101()
    {
        return $this->descripcioncie101;
    }

    /**
     * Set descripcioncie102
     *
     * @param string $descripcioncie102
     * @return SecDiagnosticospaciente
     */
    public function setDescripcioncie102($descripcioncie102)
    {
        $this->descripcioncie102 = $descripcioncie102;

        return $this;
    }

    /**
     * Get descripcioncie102
     *
     * @return string 
     */
    public function getDescripcioncie102()
    {
        return $this->descripcioncie102;
    }

    /**
     * Set descripcioncie103
     *
     * @param string $descripcioncie103
     * @return SecDiagnosticospaciente
     */
    public function setDescripcioncie103($descripcioncie103)
    {
        $this->descripcioncie103 = $descripcioncie103;

        return $this;
    }

    /**
     * Get descripcioncie103
     *
     * @return string 
     */
    public function getDescripcioncie103()
    {
        return $this->descripcioncie103;
    }

    /**
     * Set iddiagnostico1
     *
     * @param \Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico1
     * @return SecDiagnosticospaciente
     */
    public function setIddiagnostico1(\Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico1 = null)
    {
        $this->iddiagnostico1 = $iddiagnostico1;

        return $this;
    }

    /**
     * Get iddiagnostico1
     *
     * @return \Minsal\shcpBundle\Entity\MntCie10 
     */
    public function getIddiagnostico1()
    {
        return $this->iddiagnostico1;
    }

    /**
     * Set iddiagnostico2
     *
     * @param \Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico2
     * @return SecDiagnosticospaciente
     */
    public function setIddiagnostico2(\Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico2 = null)
    {
        $this->iddiagnostico2 = $iddiagnostico2;

        return $this;
    }

    /**
     * Get iddiagnostico2
     *
     * @return \Minsal\shcpBundle\Entity\MntCie10 
     */
    public function getIddiagnostico2()
    {
        return $this->iddiagnostico2;
    }

    /**
     * Set iddiagnostico3
     *
     * @param \Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico3
     * @return SecDiagnosticospaciente
     */
    public function setIddiagnostico3(\Minsal\shcpBundle\Entity\MntCie10 $iddiagnostico3 = null)
    {
        $this->iddiagnostico3 = $iddiagnostico3;

        return $this;
    }

    /**
     * Get iddiagnostico3
     *
     * @return \Minsal\shcpBundle\Entity\MntCie10 
     */
    public function getIddiagnostico3()
    {
        return $this->iddiagnostico3;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecDiagnosticospaciente
     */
    public function setIdhistorialclinico(\Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico = null)
    {
        $this->idhistorialclinico = $idhistorialclinico;

        return $this;
    }

    /**
     * Get idhistorialclinico
     *
     * @return \Minsal\shcpBundle\Entity\SecHistorialClinico 
     */
    public function getIdhistorialclinico()
    {
        return $this->idhistorialclinico;
    }
}
