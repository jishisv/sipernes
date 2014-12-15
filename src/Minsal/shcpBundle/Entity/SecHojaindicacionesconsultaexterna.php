<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecHojaindicacionesconsultaexterna
 *
 * @ORM\Table(name="sec_hojaindicacionesconsultaexterna", indexes={@ORM\Index(name="IDX_421CAADEA92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecHojaindicacionesconsultaexterna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhojaindicacionesconsultaexterna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_hojaindicacionesconsultaexterna_idhojaindicacionesconsultaexterna_seq", allocationSize=1, initialValue=1)
     */
    private $idhojaindicacionesconsultaexterna;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacionesmedicas", type="text", nullable=true)
     */
    private $indicacionesmedicas;

    /**
     * @var string
     *
     * @ORM\Column(name="plantratamiento", type="text", nullable=true)
     */
    private $plantratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="otros", type="text", nullable=true)
     */
    private $otros;

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
     * Get idhojaindicacionesconsultaexterna
     *
     * @return integer 
     */
    public function getIdhojaindicacionesconsultaexterna()
    {
        return $this->idhojaindicacionesconsultaexterna;
    }

    /**
     * Set indicacionesmedicas
     *
     * @param string $indicacionesmedicas
     * @return SecHojaindicacionesconsultaexterna
     */
    public function setIndicacionesmedicas($indicacionesmedicas)
    {
        $this->indicacionesmedicas = $indicacionesmedicas;

        return $this;
    }

    /**
     * Get indicacionesmedicas
     *
     * @return string 
     */
    public function getIndicacionesmedicas()
    {
        return $this->indicacionesmedicas;
    }

    /**
     * Set plantratamiento
     *
     * @param string $plantratamiento
     * @return SecHojaindicacionesconsultaexterna
     */
    public function setPlantratamiento($plantratamiento)
    {
        $this->plantratamiento = $plantratamiento;

        return $this;
    }

    /**
     * Get plantratamiento
     *
     * @return string 
     */
    public function getPlantratamiento()
    {
        return $this->plantratamiento;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return SecHojaindicacionesconsultaexterna
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecHojaindicacionesconsultaexterna
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
