<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FarmMedicinadespachada
 *
 * @ORM\Table(name="farm_medicinadespachada", indexes={@ORM\Index(name="IDX_77178FE4B67BC33F", columns={"idlote"}), @ORM\Index(name="IDX_77178FE4ABDD25B5", columns={"idmedicinarecetada"})})
 * @ORM\Entity
 */
class FarmMedicinadespachada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="farm_medicinadespachada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidaddespachada", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $cantidaddespachada;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=false)
     */
    private $idestablecimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=false)
     */
    private $idmodalidad;

    /**
     * @var \FarmLotes
     *
     * @ORM\ManyToOne(targetEntity="FarmLotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idlote", referencedColumnName="id")
     * })
     */
    private $idlote;

    /**
     * @var \FarmMedicinarecetada
     *
     * @ORM\ManyToOne(targetEntity="FarmMedicinarecetada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmedicinarecetada", referencedColumnName="id")
     * })
     */
    private $idmedicinarecetada;



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
     * Set cantidaddespachada
     *
     * @param string $cantidaddespachada
     * @return FarmMedicinadespachada
     */
    public function setCantidaddespachada($cantidaddespachada)
    {
        $this->cantidaddespachada = $cantidaddespachada;

        return $this;
    }

    /**
     * Get cantidaddespachada
     *
     * @return string 
     */
    public function getCantidaddespachada()
    {
        return $this->cantidaddespachada;
    }

    /**
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return FarmMedicinadespachada
     */
    public function setIdestablecimiento($idestablecimiento)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return integer 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return FarmMedicinadespachada
     */
    public function setIdmodalidad($idmodalidad)
    {
        $this->idmodalidad = $idmodalidad;

        return $this;
    }

    /**
     * Get idmodalidad
     *
     * @return integer 
     */
    public function getIdmodalidad()
    {
        return $this->idmodalidad;
    }

    /**
     * Set idlote
     *
     * @param \Minsal\shcpBundle\Entity\FarmLotes $idlote
     * @return FarmMedicinadespachada
     */
    public function setIdlote(\Minsal\shcpBundle\Entity\FarmLotes $idlote = null)
    {
        $this->idlote = $idlote;

        return $this;
    }

    /**
     * Get idlote
     *
     * @return \Minsal\shcpBundle\Entity\FarmLotes 
     */
    public function getIdlote()
    {
        return $this->idlote;
    }

    /**
     * Set idmedicinarecetada
     *
     * @param \Minsal\shcpBundle\Entity\FarmMedicinarecetada $idmedicinarecetada
     * @return FarmMedicinadespachada
     */
    public function setIdmedicinarecetada(\Minsal\shcpBundle\Entity\FarmMedicinarecetada $idmedicinarecetada = null)
    {
        $this->idmedicinarecetada = $idmedicinarecetada;

        return $this;
    }

    /**
     * Get idmedicinarecetada
     *
     * @return \Minsal\shcpBundle\Entity\FarmMedicinarecetada 
     */
    public function getIdmedicinarecetada()
    {
        return $this->idmedicinarecetada;
    }
}
