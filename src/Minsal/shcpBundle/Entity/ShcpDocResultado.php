<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocResultado
 *
 * @ORM\Table(name="shcp_doc_resultado", indexes={@ORM\Index(name="IDX_4EC8A1BA93489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpDocResultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_resultado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_hoja_filtro", type="string", nullable=true)
     */
    private $resulHojaFiltro;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_tamizaje", type="string", nullable=true)
     */
    private $resulTamizaje;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_observ_hoja_filtro", type="string", length=50, nullable=true)
     */
    private $resulObservHojaFiltro;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_num_control", type="string", nullable=true)
     */
    private $resulNumControl;

    /**
     * @var \ShcpExpMaterno
     *
     * @ORM\ManyToOne(targetEntity="ShcpExpMaterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exp_materno", referencedColumnName="id")
     * })
     */
    private $idExpMaterno;



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
     * Set resulHojaFiltro
     *
     * @param string $resulHojaFiltro
     * @return ShcpDocResultado
     */
    public function setResulHojaFiltro($resulHojaFiltro)
    {
        $this->resulHojaFiltro = $resulHojaFiltro;

        return $this;
    }

    /**
     * Get resulHojaFiltro
     *
     * @return string 
     */
    public function getResulHojaFiltro()
    {
        return $this->resulHojaFiltro;
    }

    /**
     * Set resulTamizaje
     *
     * @param string $resulTamizaje
     * @return ShcpDocResultado
     */
    public function setResulTamizaje($resulTamizaje)
    {
        $this->resulTamizaje = $resulTamizaje;

        return $this;
    }

    /**
     * Get resulTamizaje
     *
     * @return string 
     */
    public function getResulTamizaje()
    {
        return $this->resulTamizaje;
    }

    /**
     * Set resulObservHojaFiltro
     *
     * @param string $resulObservHojaFiltro
     * @return ShcpDocResultado
     */
    public function setResulObservHojaFiltro($resulObservHojaFiltro)
    {
        $this->resulObservHojaFiltro = $resulObservHojaFiltro;

        return $this;
    }

    /**
     * Get resulObservHojaFiltro
     *
     * @return string 
     */
    public function getResulObservHojaFiltro()
    {
        return $this->resulObservHojaFiltro;
    }

    /**
     * Set resulNumControl
     *
     * @param string $resulNumControl
     * @return ShcpDocResultado
     */
    public function setResulNumControl($resulNumControl)
    {
        $this->resulNumControl = $resulNumControl;

        return $this;
    }

    /**
     * Get resulNumControl
     *
     * @return string 
     */
    public function getResulNumControl()
    {
        return $this->resulNumControl;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpDocResultado
     */
    public function setIdExpMaterno(\Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno = null)
    {
        $this->idExpMaterno = $idExpMaterno;

        return $this;
    }

    /**
     * Get idExpMaterno
     *
     * @return \Minsal\shcpBundle\Entity\ShcpExpMaterno 
     */
    public function getIdExpMaterno()
    {
        return $this->idExpMaterno;
    }
}
