<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxEstado
 *
 * @ORM\Table(name="rx_estado")
 * @ORM\Entity
 */
class RxEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_estado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_estado", type="string", length=2, nullable=false)
     */
    private $codigoEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20, nullable=true)
     */
    private $estado;



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
     * Set codigoEstado
     *
     * @param string $codigoEstado
     * @return RxEstado
     */
    public function setCodigoEstado($codigoEstado)
    {
        $this->codigoEstado = $codigoEstado;

        return $this;
    }

    /**
     * Get codigoEstado
     *
     * @return string 
     */
    public function getCodigoEstado()
    {
        return $this->codigoEstado;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return RxEstado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
