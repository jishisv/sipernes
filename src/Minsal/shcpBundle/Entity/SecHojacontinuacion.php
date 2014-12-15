<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecHojacontinuacion
 *
 * @ORM\Table(name="sec_hojacontinuacion", indexes={@ORM\Index(name="IDX_59E02586A92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecHojacontinuacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_hojacontinuacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="motivoconsulta", type="text", nullable=false)
     */
    private $motivoconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="evolucionpaciente", type="text", nullable=false)
     */
    private $evolucionpaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="hxexamenes", type="text", nullable=true)
     */
    private $hxexamenes;

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
     * Set motivoconsulta
     *
     * @param string $motivoconsulta
     * @return SecHojacontinuacion
     */
    public function setMotivoconsulta($motivoconsulta)
    {
        $this->motivoconsulta = $motivoconsulta;

        return $this;
    }

    /**
     * Get motivoconsulta
     *
     * @return string 
     */
    public function getMotivoconsulta()
    {
        return $this->motivoconsulta;
    }

    /**
     * Set evolucionpaciente
     *
     * @param string $evolucionpaciente
     * @return SecHojacontinuacion
     */
    public function setEvolucionpaciente($evolucionpaciente)
    {
        $this->evolucionpaciente = $evolucionpaciente;

        return $this;
    }

    /**
     * Get evolucionpaciente
     *
     * @return string 
     */
    public function getEvolucionpaciente()
    {
        return $this->evolucionpaciente;
    }

    /**
     * Set hxexamenes
     *
     * @param string $hxexamenes
     * @return SecHojacontinuacion
     */
    public function setHxexamenes($hxexamenes)
    {
        $this->hxexamenes = $hxexamenes;

        return $this;
    }

    /**
     * Get hxexamenes
     *
     * @return string 
     */
    public function getHxexamenes()
    {
        return $this->hxexamenes;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecHojacontinuacion
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
