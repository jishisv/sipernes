<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntEmpleadoEspecialidadEstab
 *
 * @ORM\Table(name="mnt_empleado_especialidad_estab", indexes={@ORM\Index(name="IDX_7D18E09E8627A85B", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="IDX_7D18E09E890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class MntEmpleadoEspecialidadEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_empleado_especialidad_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;

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
     * Set idAtenAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab
     * @return MntEmpleadoEspecialidadEstab
     */
    public function setIdAtenAreaModEstab(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab = null)
    {
        $this->idAtenAreaModEstab = $idAtenAreaModEstab;

        return $this;
    }

    /**
     * Get idAtenAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtenAreaModEstab()
    {
        return $this->idAtenAreaModEstab;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idEmpleado
     * @return MntEmpleadoEspecialidadEstab
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
