<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabCodigosxexamen
 *
 * @ORM\Table(name="lab_codigosxexamen", indexes={@ORM\Index(name="IDX_785F404E753570E9", columns={"idresultado"}), @ORM\Index(name="IDX_785F404EE8574B1D", columns={"idestandar"})})
 * @ORM\Entity
 */
class LabCodigosxexamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_codigosxexamen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \LabCodigosresultados
     *
     * @ORM\ManyToOne(targetEntity="LabCodigosresultados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idresultado", referencedColumnName="id")
     * })
     */
    private $idresultado;

    /**
     * @var \CtlExamenServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestandar", referencedColumnName="id")
     * })
     */
    private $idestandar;



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
     * Set idresultado
     *
     * @param \Minsal\shcpBundle\Entity\LabCodigosresultados $idresultado
     * @return LabCodigosxexamen
     */
    public function setIdresultado(\Minsal\shcpBundle\Entity\LabCodigosresultados $idresultado = null)
    {
        $this->idresultado = $idresultado;

        return $this;
    }

    /**
     * Get idresultado
     *
     * @return \Minsal\shcpBundle\Entity\LabCodigosresultados 
     */
    public function getIdresultado()
    {
        return $this->idresultado;
    }

    /**
     * Set idestandar
     *
     * @param \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idestandar
     * @return LabCodigosxexamen
     */
    public function setIdestandar(\Minsal\shcpBundle\Entity\CtlExamenServicioApoyo $idestandar = null)
    {
        $this->idestandar = $idestandar;

        return $this;
    }

    /**
     * Get idestandar
     *
     * @return \Minsal\shcpBundle\Entity\CtlExamenServicioApoyo 
     */
    public function getIdestandar()
    {
        return $this->idestandar;
    }
}
