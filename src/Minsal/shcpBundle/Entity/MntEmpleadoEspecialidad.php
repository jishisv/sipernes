<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleadoEspecialidad
 *
 * @ORM\Table(name="mnt_empleado_especialidad", indexes={@ORM\Index(name="IDX_9CBC4EB1695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_9CBC4EB1890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class MntEmpleadoEspecialidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_especialidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;



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
     * Set idAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idAtencion
     * @return MntEmpleadoEspecialidad
     */
    public function setIdAtencion(\Minsal\shcpBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return MntEmpleadoEspecialidad
     */
    public function setIdEmpleado(\Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
