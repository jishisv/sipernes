<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAreaModEstab
 *
 * @ORM\Table(name="mnt_area_mod_estab", uniqueConstraints={@ORM\UniqueConstraint(name="idx_id_mod_estab_id_area", columns={"id_area_atencion", "id_modalidad_estab", "id_servicio_externo_estab", "id_establecimiento"})}, indexes={@ORM\Index(name="IDX_B00EFC8B44A2C069", columns={"id_area_atencion"}), @ORM\Index(name="IDX_B00EFC8B7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_B00EFC8B6B60B8BD", columns={"id_modalidad_estab"}), @ORM\Index(name="IDX_B00EFC8BBF515C33", columns={"id_servicio_externo_estab"})})
 * @ORM\Entity
 */
class MntAreaModEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_area_mod_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlAreaAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_atencion", referencedColumnName="id")
     * })
     */
    private $idAreaAtencion;

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
     * @var \MntModalidadEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntModalidadEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_estab", referencedColumnName="id")
     * })
     */
    private $idModalidadEstab;

    /**
     * @var \MntServicioExternoEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="MntServicioExternoEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio_externo_estab", referencedColumnName="id")
     * })
     */
    private $idServicioExternoEstab;



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
     * Set idAreaAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaAtencion $idAreaAtencion
     * @return MntAreaModEstab
     */
    public function setIdAreaAtencion(\Minsal\shcpBundle\Entity\CtlAreaAtencion $idAreaAtencion = null)
    {
        $this->idAreaAtencion = $idAreaAtencion;

        return $this;
    }

    /**
     * Get idAreaAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaAtencion 
     */
    public function getIdAreaAtencion()
    {
        return $this->idAreaAtencion;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntAreaModEstab
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
     * Set idModalidadEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab
     * @return MntAreaModEstab
     */
    public function setIdModalidadEstab(\Minsal\shcpBundle\Entity\MntModalidadEstablecimiento $idModalidadEstab = null)
    {
        $this->idModalidadEstab = $idModalidadEstab;

        return $this;
    }

    /**
     * Get idModalidadEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntModalidadEstablecimiento 
     */
    public function getIdModalidadEstab()
    {
        return $this->idModalidadEstab;
    }

    /**
     * Set idServicioExternoEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntServicioExternoEstablecimiento $idServicioExternoEstab
     * @return MntAreaModEstab
     */
    public function setIdServicioExternoEstab(\Minsal\shcpBundle\Entity\MntServicioExternoEstablecimiento $idServicioExternoEstab = null)
    {
        $this->idServicioExternoEstab = $idServicioExternoEstab;

        return $this;
    }

    /**
     * Get idServicioExternoEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntServicioExternoEstablecimiento 
     */
    public function getIdServicioExternoEstab()
    {
        return $this->idServicioExternoEstab;
    }
}
