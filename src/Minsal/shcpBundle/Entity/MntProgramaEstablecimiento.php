<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntProgramaEstablecimiento
 *
 * @ORM\Table(name="mnt_programa_establecimiento", indexes={@ORM\Index(name="IDX_FFEE60ED7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_FFEE60ED522BF898", columns={"id_programa"})})
 * @ORM\Entity
 */
class MntProgramaEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_programa_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion", type="string", nullable=true)
     */
    private $condicion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlPrograma
     *
     * @ORM\ManyToOne(targetEntity="CtlPrograma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_programa", referencedColumnName="id")
     * })
     */
    private $idPrograma;



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
     * Set condicion
     *
     * @param string $condicion
     * @return MntProgramaEstablecimiento
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;

        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntProgramaEstablecimiento
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idPrograma
     *
     * @param \Minsal\shcpBundle\Entity\CtlPrograma $idPrograma
     * @return MntProgramaEstablecimiento
     */
    public function setIdPrograma(\Minsal\shcpBundle\Entity\CtlPrograma $idPrograma = null)
    {
        $this->idPrograma = $idPrograma;

        return $this;
    }

    /**
     * Get idPrograma
     *
     * @return \Minsal\shcpBundle\Entity\CtlPrograma 
     */
    public function getIdPrograma()
    {
        return $this->idPrograma;
    }
}
