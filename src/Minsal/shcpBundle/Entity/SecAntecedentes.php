<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecAntecedentes
 *
 * @ORM\Table(name="sec_antecedentes", indexes={@ORM\Index(name="IDX_F1330D83A92D004C", columns={"idhistorialclinico"})})
 * @ORM\Entity
 */
class SecAntecedentes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_antecedentes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="afamiliar", type="text", nullable=true)
     */
    private $afamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="apersonal", type="text", nullable=true)
     */
    private $apersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="aecologicosocial", type="text", nullable=true)
     */
    private $aecologicosocial;

    /**
     * @var string
     *
     * @ORM\Column(name="motivoconsulta", type="text", nullable=true)
     */
    private $motivoconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="presentaenfermedad", type="text", nullable=true)
     */
    private $presentaenfermedad;

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
     * Set afamiliar
     *
     * @param string $afamiliar
     * @return SecAntecedentes
     */
    public function setAfamiliar($afamiliar)
    {
        $this->afamiliar = $afamiliar;

        return $this;
    }

    /**
     * Get afamiliar
     *
     * @return string 
     */
    public function getAfamiliar()
    {
        return $this->afamiliar;
    }

    /**
     * Set apersonal
     *
     * @param string $apersonal
     * @return SecAntecedentes
     */
    public function setApersonal($apersonal)
    {
        $this->apersonal = $apersonal;

        return $this;
    }

    /**
     * Get apersonal
     *
     * @return string 
     */
    public function getApersonal()
    {
        return $this->apersonal;
    }

    /**
     * Set aecologicosocial
     *
     * @param string $aecologicosocial
     * @return SecAntecedentes
     */
    public function setAecologicosocial($aecologicosocial)
    {
        $this->aecologicosocial = $aecologicosocial;

        return $this;
    }

    /**
     * Get aecologicosocial
     *
     * @return string 
     */
    public function getAecologicosocial()
    {
        return $this->aecologicosocial;
    }

    /**
     * Set motivoconsulta
     *
     * @param string $motivoconsulta
     * @return SecAntecedentes
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
     * Set presentaenfermedad
     *
     * @param string $presentaenfermedad
     * @return SecAntecedentes
     */
    public function setPresentaenfermedad($presentaenfermedad)
    {
        $this->presentaenfermedad = $presentaenfermedad;

        return $this;
    }

    /**
     * Get presentaenfermedad
     *
     * @return string 
     */
    public function getPresentaenfermedad()
    {
        return $this->presentaenfermedad;
    }

    /**
     * Set hxexamenes
     *
     * @param string $hxexamenes
     * @return SecAntecedentes
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
     * @return SecAntecedentes
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
