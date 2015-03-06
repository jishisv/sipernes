<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPersonaTelefono
 *
 * @ORM\Table(name="ctl_persona_telefono", indexes={@ORM\Index(name="IDX_A4F6A1E334DD027C", columns={"id_persona_test"})})
 * @ORM\Entity
 */
class CtlPersonaTelefono
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_persona_telefono_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_telefono", type="string", length=50, nullable=true)
     */
    private $tipoTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilidad", type="string", length=50, nullable=true)
     */
    private $disponibilidad;

    /**
     * @var \CtlPersonaTest
     *
     * @ORM\ManyToOne(targetEntity="CtlPersonaTest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona_test", referencedColumnName="id")
     * })
     */
    private $idPersonaTest;



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
     * Set telefono
     *
     * @param integer $telefono
     * @return CtlPersonaTelefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tipoTelefono
     *
     * @param string $tipoTelefono
     * @return CtlPersonaTelefono
     */
    public function setTipoTelefono($tipoTelefono)
    {
        $this->tipoTelefono = $tipoTelefono;

        return $this;
    }

    /**
     * Get tipoTelefono
     *
     * @return string 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }

    /**
     * Set disponibilidad
     *
     * @param string $disponibilidad
     * @return CtlPersonaTelefono
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return string 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set idPersonaTest
     *
     * @param \Minsal\shcpBundle\Entity\CtlPersonaTest $idPersonaTest
     * @return CtlPersonaTelefono
     */
    public function setIdPersonaTest(\Minsal\shcpBundle\Entity\CtlPersonaTest $idPersonaTest = null)
    {
        $this->idPersonaTest = $idPersonaTest;

        return $this;
    }

    /**
     * Get idPersonaTest
     *
     * @return \Minsal\shcpBundle\Entity\CtlPersonaTest 
     */
    public function getIdPersonaTest()
    {
        return $this->idPersonaTest;
    }
}
