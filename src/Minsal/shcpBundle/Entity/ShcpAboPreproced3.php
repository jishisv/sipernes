<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboPreproced3
 *
 * @ORM\Table(name="shcp_abo_preproced3", indexes={@ORM\Index(name="IDX_C2C609BB70374B77", columns={"id_preproced1"}), @ORM\Index(name="IDX_C2C609BB1E833DEC", columns={"id_cie10"})})
 * @ORM\Entity
 */
class ShcpAboPreproced3
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_preproced3_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prep3_condicion_ingr", type="string", nullable=true)
     */
    private $prep3CondicionIngr;

    /**
     * @var string
     *
     * @ORM\Column(name="prep3_otro_danio", type="string", length=30, nullable=true)
     */
    private $prep3OtroDanio;

    /**
     * @var string
     *
     * @ORM\Column(name="prep3_estado_actual", type="string", nullable=true)
     */
    private $prep3EstadoActual;

    /**
     * @var string
     *
     * @ORM\Column(name="prep3_tipo_aborto", type="string", nullable=true)
     */
    private $prep3TipoAborto;

    /**
     * @var string
     *
     * @ORM\Column(name="prep3_respons", type="string", length=100, nullable=true)
     */
    private $prep3Respons;

    /**
     * @var \ShcpAboPreproced1
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboPreproced1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_preproced1", referencedColumnName="id")
     * })
     */
    private $idPreproced1;

    /**
     * @var \ShcpAboCtlCie10
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboCtlCie10")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cie10", referencedColumnName="id")
     * })
     */
    private $idCie10;
    
    

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
     * Set prep3CondicionIngr
     *
     * @param string $prep3CondicionIngr
     * @return ShcpAboPreproced3
     */
    public function setPrep3CondicionIngr($prep3CondicionIngr)
    {
        $this->prep3CondicionIngr = $prep3CondicionIngr;

        return $this;
    }

    /**
     * Get prep3CondicionIngr
     *
     * @return string 
     */
    public function getPrep3CondicionIngr()
    {
        return $this->prep3CondicionIngr;
    }

    /**
     * Set prep3OtroDanio
     *
     * @param string $prep3OtroDanio
     * @return ShcpAboPreproced3
     */
    public function setPrep3OtroDanio($prep3OtroDanio)
    {
        $this->prep3OtroDanio = $prep3OtroDanio;

        return $this;
    }

    /**
     * Get prep3OtroDanio
     *
     * @return string 
     */
    public function getPrep3OtroDanio()
    {
        return $this->prep3OtroDanio;
    }

    /**
     * Set prep3EstadoActual
     *
     * @param string $prep3EstadoActual
     * @return ShcpAboPreproced3
     */
    public function setPrep3EstadoActual($prep3EstadoActual)
    {
        $this->prep3EstadoActual = $prep3EstadoActual;

        return $this;
    }

    /**
     * Get prep3EstadoActual
     *
     * @return string 
     */
    public function getPrep3EstadoActual()
    {
        return $this->prep3EstadoActual;
    }

    /**
     * Set prep3TipoAborto
     *
     * @param string $prep3TipoAborto
     * @return ShcpAboPreproced3
     */
    public function setPrep3TipoAborto($prep3TipoAborto)
    {
        $this->prep3TipoAborto = $prep3TipoAborto;

        return $this;
    }

    /**
     * Get prep3TipoAborto
     *
     * @return string 
     */
    public function getPrep3TipoAborto()
    {
        return $this->prep3TipoAborto;
    }

    /**
     * Set prep3Respons
     *
     * @param string $prep3Respons
     * @return ShcpAboPreproced3
     */
    public function setPrep3Respons($prep3Respons)
    {
        $this->prep3Respons = $prep3Respons;

        return $this;
    }

    /**
     * Get prep3Respons
     *
     * @return string 
     */
    public function getPrep3Respons()
    {
        return $this->prep3Respons;
    }

    /**
     * Set idPreproced1
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced1 $idPreproced1
     * @return ShcpAboPreproced3
     */
    public function setIdPreproced1(\Minsal\shcpBundle\Entity\ShcpAboPreproced1 $idPreproced1 = null)
    {
        $this->idPreproced1 = $idPreproced1;

        return $this;
    }

    /**
     * Get idPreproced1
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboPreproced1 
     */
    public function getIdPreproced1()
    {
        return $this->idPreproced1;
    }

    /**
     * Set idCie10
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboCtlCie10 $idCie10
     * @return ShcpAboPreproced3
     */
    public function setIdCie10(\Minsal\shcpBundle\Entity\ShcpAboCtlCie10 $idCie10 = null)
    {
        $this->idCie10 = $idCie10;

        return $this;
    }

    /**
     * Get idCie10
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboCtlCie10 
     */
    public function getIdCie10()
    {
        return $this->idCie10;
    }
}
