<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPersonaTestDetalle
 *
 * @ORM\Table(name="ctl_persona_test_detalle", indexes={@ORM\Index(name="IDX_10C2F2A2B0DC2AB1", columns={"id_nacionalidad"}), @ORM\Index(name="IDX_10C2F2A234DD027C", columns={"id_persona_test"}), @ORM\Index(name="IDX_10C2F2A22D9C6F7C", columns={"id_tipo_zona"})})
 * @ORM\Entity
 */
class CtlPersonaTestDetalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_persona_test_detalle_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_departamento", type="integer", nullable=true)
     */
    private $idDepartamento;

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
     *   @ORM\JoinColumn(name="id_persona_test", referencedColumnName="id")
     * })
     */
    private $idPersonaTest;

    /**
     * @var \CtlAreaGeografica
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaGeografica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_zona", referencedColumnName="id")
     * })
     */
    private $idTipoZona;



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
     * Set idDepartamento
     *
     * @param integer $idDepartamento
     * @return CtlPersonaTestDetalle
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return integer 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set idNacionalidad
     *
     * @param \Minsal\shcpBundle\Entity\CtlNacionalidad $idNacionalidad
     * @return CtlPersonaTestDetalle
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
     * Set idPersonaTest
     *
     * @param \Minsal\shcpBundle\Entity\CtlPersonaTest $idPersonaTest
     * @return CtlPersonaTestDetalle
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

    /**
     * Set idTipoZona
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaGeografica $idTipoZona
     * @return CtlPersonaTestDetalle
     */
    public function setIdTipoZona(\Minsal\shcpBundle\Entity\CtlAreaGeografica $idTipoZona = null)
    {
        $this->idTipoZona = $idTipoZona;

        return $this;
    }

    /**
     * Get idTipoZona
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaGeografica 
     */
    public function getIdTipoZona()
    {
        return $this->idTipoZona;
    }
}
