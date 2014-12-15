<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParCtlIndicacion
 *
 * @ORM\Table(name="shcp_par_ctl_indicacion")
 * @ORM\Entity
 */
class ShcpParCtlIndicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_ctl_indicacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_detalle", type="string", length=50, nullable=true)
     */
    private $indDetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="ind_estado", type="string", nullable=true)
     */
    private $indEstado;



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
     * Set indDetalle
     *
     * @param string $indDetalle
     * @return ShcpParCtlIndicacion
     */
    public function setIndDetalle($indDetalle)
    {
        $this->indDetalle = $indDetalle;

        return $this;
    }

    /**
     * Get indDetalle
     *
     * @return string 
     */
    public function getIndDetalle()
    {
        return $this->indDetalle;
    }

    /**
     * Set indEstado
     *
     * @param string $indEstado
     * @return ShcpParCtlIndicacion
     */
    public function setIndEstado($indEstado)
    {
        $this->indEstado = $indEstado;

        return $this;
    }

    /**
     * Get indEstado
     *
     * @return string 
     */
    public function getIndEstado()
    {
        return $this->indEstado;
    }

    public function __toString() {
        return $this->indDetalle;
    }

}
