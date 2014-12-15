<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecSegconsultaexterna
 *
 * @ORM\Table(name="sec_segconsultaexterna", indexes={@ORM\Index(name="IDX_1A98CC9DA92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecSegconsultaexterna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idseguimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_segconsultaexterna_idseguimiento_seq", allocationSize=1, initialValue=1)
     */
    private $idseguimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="control", type="text", nullable=true)
     */
    private $control;

    /**
     * @var string
     *
     * @ORM\Column(name="ingreso", type="text", nullable=true)
     */
    private $ingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="altapaciente", type="string", nullable=false)
     */
    private $altapaciente;

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
     * Get idseguimiento
     *
     * @return integer 
     */
    public function getIdseguimiento()
    {
        return $this->idseguimiento;
    }

    /**
     * Set control
     *
     * @param string $control
     * @return SecSegconsultaexterna
     */
    public function setControl($control)
    {
        $this->control = $control;

        return $this;
    }

    /**
     * Get control
     *
     * @return string 
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Set ingreso
     *
     * @param string $ingreso
     * @return SecSegconsultaexterna
     */
    public function setIngreso($ingreso)
    {
        $this->ingreso = $ingreso;

        return $this;
    }

    /**
     * Get ingreso
     *
     * @return string 
     */
    public function getIngreso()
    {
        return $this->ingreso;
    }

    /**
     * Set altapaciente
     *
     * @param string $altapaciente
     * @return SecSegconsultaexterna
     */
    public function setAltapaciente($altapaciente)
    {
        $this->altapaciente = $altapaciente;

        return $this;
    }

    /**
     * Get altapaciente
     *
     * @return string 
     */
    public function getAltapaciente()
    {
        return $this->altapaciente;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecSegconsultaexterna
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
