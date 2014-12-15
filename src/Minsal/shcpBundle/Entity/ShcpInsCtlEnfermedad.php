<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsCtlEnfermedad
 *
 * @ORM\Table(name="shcp_ins_ctl_enfermedad")
 * @ORM\Entity
 */
class ShcpInsCtlEnfermedad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_ctl_enfermedad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_nombre", type="string", length=60, nullable=true)
     */
    private $enfNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_tipo", type="string", nullable=true)
     */
    private $enfTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_estado", type="string", nullable=true)
     */
    private $enfEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_codigo", type="string", nullable=true)
     */
    private $enfCodigo;



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
     * Set enfNombre
     *
     * @param string $enfNombre
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfNombre($enfNombre)
    {
        $this->enfNombre = $enfNombre;

        return $this;
    }

    /**
     * Get enfNombre
     *
     * @return string 
     */
    public function getEnfNombre()
    {
        return $this->enfNombre;
    }

    /**
     * Set enfTipo
     *
     * @param string $enfTipo
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfTipo($enfTipo)
    {
        $this->enfTipo = $enfTipo;

        return $this;
    }

    /**
     * Get enfTipo
     *
     * @return string 
     */
    public function getEnfTipo()
    {
        return $this->enfTipo;
    }

    /**
     * Set enfEstado
     *
     * @param string $enfEstado
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfEstado($enfEstado)
    {
        $this->enfEstado = $enfEstado;

        return $this;
    }

    /**
     * Get enfEstado
     *
     * @return string 
     */
    public function getEnfEstado()
    {
        return $this->enfEstado;
    }

    /**
     * Set enfCodigo
     *
     * @param string $enfCodigo
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfCodigo($enfCodigo)
    {
        $this->enfCodigo = $enfCodigo;

        return $this;
    }

    /**
     * Get enfCodigo
     *
     * @return string 
     */
    public function getEnfCodigo()
    {
        return $this->enfCodigo;
    }
}
