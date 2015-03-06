<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntServicioExternoEstablecimiento
 *
 * @ORM\Table(name="mnt_servicio_externo_establecimiento", indexes={@ORM\Index(name="fki_servicio_externo_servicio_externo_establecimiento", columns={"id_servicio_externo"}), @ORM\Index(name="IDX_6C7E62007DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class MntServicioExternoEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_servicio_externo_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \MntServicioExterno
     *
     * @ORM\ManyToOne(targetEntity="MntServicioExterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio_externo", referencedColumnName="id")
     * })
     */
    private $idServicioExterno;



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
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntServicioExternoEstablecimiento
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
     * Set idServicioExterno
     *
     * @param \Minsal\shcpBundle\Entity\MntServicioExterno $idServicioExterno
     * @return MntServicioExternoEstablecimiento
     */
    public function setIdServicioExterno(\Minsal\shcpBundle\Entity\MntServicioExterno $idServicioExterno = null)
    {
        $this->idServicioExterno = $idServicioExterno;

        return $this;
    }

    /**
     * Get idServicioExterno
     *
     * @return \Minsal\shcpBundle\Entity\MntServicioExterno 
     */
    public function getIdServicioExterno()
    {
        return $this->idServicioExterno;
    }
}
