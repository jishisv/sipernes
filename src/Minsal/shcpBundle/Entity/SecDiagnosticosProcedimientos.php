<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecDiagnosticosProcedimientos
 *
 * @ORM\Table(name="sec_diagnosticos_procedimientos", indexes={@ORM\Index(name="IDX_F90777BB6D73F0C", columns={"idsubservicio"})})
 * @ORM\Entity
 */
class SecDiagnosticosProcedimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddiagnosticosproc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_diagnosticos_procedimientos_iddiagnosticosproc_seq", allocationSize=1, initialValue=1)
     */
    private $iddiagnosticosproc;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubservicio", referencedColumnName="id")
     * })
     */
    private $idsubservicio;



    /**
     * Get iddiagnosticosproc
     *
     * @return integer 
     */
    public function getIddiagnosticosproc()
    {
        return $this->iddiagnosticosproc;
    }

    /**
     * Set idsubservicio
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idsubservicio
     * @return SecDiagnosticosProcedimientos
     */
    public function setIdsubservicio(\Minsal\shcpBundle\Entity\CtlAtencion $idsubservicio = null)
    {
        $this->idsubservicio = $idsubservicio;

        return $this;
    }

    /**
     * Get idsubservicio
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdsubservicio()
    {
        return $this->idsubservicio;
    }
}
