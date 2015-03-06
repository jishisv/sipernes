<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPersonaTestNacionalidades
 *
 * @ORM\Table(name="ctl_persona_test_nacionalidades", indexes={@ORM\Index(name="IDX_5515643BB0DC2AB1", columns={"id_nacionalidad"}), @ORM\Index(name="IDX_5515643B8F781FEB", columns={"id_persona"})})
 * @ORM\Entity
 */
class CtlPersonaTestNacionalidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_persona_test_nacionalidades_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlNacionalidad
     *
     * @ORM\ManyToOne(targetEntity="CtlNacionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nacionalidad", referencedColumnName="id")
     * })
     */
    private $idNacionalidad;

    /**
     * @var \CtlPersonaTest
     *
     * @ORM\ManyToOne(targetEntity="CtlPersonaTest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id")
     * })
     */
    private $idPersona;



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
     * Set idNacionalidad
     *
     * @param \Minsal\shcpBundle\Entity\CtlNacionalidad $idNacionalidad
     * @return CtlPersonaTestNacionalidades
     */
    public function setIdNacionalidad(\Minsal\shcpBundle\Entity\CtlNacionalidad $idNacionalidad = null)
    {
        $this->idNacionalidad = $idNacionalidad;

        return $this;
    }

    /**
     * Get idNacionalidad
     *
     * @return \Minsal\shcpBundle\Entity\CtlNacionalidad 
     */
    public function getIdNacionalidad()
    {
        return $this->idNacionalidad;
    }

    /**
     * Set idPersona
     *
     * @param \Minsal\shcpBundle\Entity\CtlPersonaTest $idPersona
     * @return CtlPersonaTestNacionalidades
     */
    public function setIdPersona(\Minsal\shcpBundle\Entity\CtlPersonaTest $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \Minsal\shcpBundle\Entity\CtlPersonaTest 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }
}
