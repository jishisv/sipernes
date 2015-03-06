<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecReferencias
 *
 * @ORM\Table(name="sec_referencias", indexes={@ORM\Index(name="IDX_CD1B1789A92D004C", columns={"idhistorialclinico"}), @ORM\Index(name="IDX_CD1B17897E989CC0", columns={"idtiporeferencia"})})
 * @ORM\Entity
 */
class SecReferencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idreferencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_referencias_idreferencia_seq", allocationSize=1, initialValue=1)
     */
    private $idreferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="string", length=1000, nullable=true)
     */
    private $diagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="resumenclinico", type="text", nullable=true)
     */
    private $resumenclinico;

    /**
     * @var string
     *
     * @ORM\Column(name="tratamientorecibido", type="string", length=1400, nullable=true)
     */
    private $tratamientorecibido;

    /**
     * @var string
     *
     * @ORM\Column(name="referidoa", type="string", length=100, nullable=true)
     */
    private $referidoa;

    /**
     * @var string
     *
     * @ORM\Column(name="parapor", type="string", length=100, nullable=true)
     */
    private $parapor;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio", type="string", length=6, nullable=true)
     */
    private $servicio;

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
     * @var \SecTiporeferencia
     *
     * @ORM\ManyToOne(targetEntity="SecTiporeferencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtiporeferencia", referencedColumnName="idtiporeferencia")
     * })
     */
    private $idtiporeferencia;



    /**
     * Get idreferencia
     *
     * @return integer 
     */
    public function getIdreferencia()
    {
        return $this->idreferencia;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     * @return SecReferencias
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string 
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set resumenclinico
     *
     * @param string $resumenclinico
     * @return SecReferencias
     */
    public function setResumenclinico($resumenclinico)
    {
        $this->resumenclinico = $resumenclinico;

        return $this;
    }

    /**
     * Get resumenclinico
     *
     * @return string 
     */
    public function getResumenclinico()
    {
        return $this->resumenclinico;
    }

    /**
     * Set tratamientorecibido
     *
     * @param string $tratamientorecibido
     * @return SecReferencias
     */
    public function setTratamientorecibido($tratamientorecibido)
    {
        $this->tratamientorecibido = $tratamientorecibido;

        return $this;
    }

    /**
     * Get tratamientorecibido
     *
     * @return string 
     */
    public function getTratamientorecibido()
    {
        return $this->tratamientorecibido;
    }

    /**
     * Set referidoa
     *
     * @param string $referidoa
     * @return SecReferencias
     */
    public function setReferidoa($referidoa)
    {
        $this->referidoa = $referidoa;

        return $this;
    }

    /**
     * Get referidoa
     *
     * @return string 
     */
    public function getReferidoa()
    {
        return $this->referidoa;
    }

    /**
     * Set parapor
     *
     * @param string $parapor
     * @return SecReferencias
     */
    public function setParapor($parapor)
    {
        $this->parapor = $parapor;

        return $this;
    }

    /**
     * Get parapor
     *
     * @return string 
     */
    public function getParapor()
    {
        return $this->parapor;
    }

    /**
     * Set servicio
     *
     * @param string $servicio
     * @return SecReferencias
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return string 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set idhistorialclinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idhistorialclinico
     * @return SecReferencias
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

    /**
     * Set idtiporeferencia
     *
     * @param \Minsal\shcpBundle\Entity\SecTiporeferencia $idtiporeferencia
     * @return SecReferencias
     */
    public function setIdtiporeferencia(\Minsal\shcpBundle\Entity\SecTiporeferencia $idtiporeferencia = null)
    {
        $this->idtiporeferencia = $idtiporeferencia;

        return $this;
    }

    /**
     * Get idtiporeferencia
     *
     * @return \Minsal\shcpBundle\Entity\SecTiporeferencia 
     */
    public function getIdtiporeferencia()
    {
        return $this->idtiporeferencia;
    }
}
