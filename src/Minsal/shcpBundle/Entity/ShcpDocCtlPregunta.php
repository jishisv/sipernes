<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocCtlPregunta
 *
 * @ORM\Table(name="shcp_doc_ctl_pregunta")
 * @ORM\Entity
 */
class ShcpDocCtlPregunta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_ctl_pregunta_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="preg_detalle", type="string", length=150, nullable=true)
     */
    private $pregDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="preg_tipo", type="string", nullable=true)
     */
    private $pregTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="preg_estado", type="string", nullable=true)
     */
    private $pregEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="preg_seccion", type="string", nullable=true)
     */
    private $pregSeccion;



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
     * Set pregDetalle
     *
     * @param string $pregDetalle
     * @return ShcpDocCtlPregunta
     */
    public function setPregDetalle($pregDetalle)
    {
        $this->pregDetalle = $pregDetalle;

        return $this;
    }

    /**
     * Get pregDetalle
     *
     * @return string 
     */
    public function getPregDetalle()
    {
        return $this->pregDetalle;
    }

    /**
     * Set pregTipo
     *
     * @param string $pregTipo
     * @return ShcpDocCtlPregunta
     */
    public function setPregTipo($pregTipo)
    {
        $this->pregTipo = $pregTipo;

        return $this;
    }

    /**
     * Get pregTipo
     *
     * @return string 
     */
    public function getPregTipo()
    {
        return $this->pregTipo;
    }

    /**
     * Set pregEstado
     *
     * @param string $pregEstado
     * @return ShcpDocCtlPregunta
     */
    public function setPregEstado($pregEstado)
    {
        $this->pregEstado = $pregEstado;

        return $this;
    }

    /**
     * Get pregEstado
     *
     * @return string 
     */
    public function getPregEstado()
    {
        return $this->pregEstado;
    }

    /**
     * Set pregSeccion
     *
     * @param string $pregSeccion
     * @return ShcpDocCtlPregunta
     */
    public function setPregSeccion($pregSeccion)
    {
        $this->pregSeccion = $pregSeccion;

        return $this;
    }

    /**
     * Get pregSeccion
     *
     * @return string 
     */
    public function getPregSeccion()
    {
        return $this->pregSeccion;
    }
}
