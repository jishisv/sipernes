<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxArea
 *
 * @ORM\Table(name="rx_area")
 * @ORM\Entity
 */
class RxArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_area_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_area", type="string", length=4, nullable=true)
     */
    private $codigoArea;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_area", type="string", length=150, nullable=true)
     */
    private $nombreArea;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=1, nullable=true)
     */
    private $habilitado;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=50, nullable=true)
     */
    private $direccion;



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
     * Set codigoArea
     *
     * @param string $codigoArea
     * @return RxArea
     */
    public function setCodigoArea($codigoArea)
    {
        $this->codigoArea = $codigoArea;

        return $this;
    }

    /**
     * Get codigoArea
     *
     * @return string 
     */
    public function getCodigoArea()
    {
        return $this->codigoArea;
    }

    /**
     * Set nombreArea
     *
     * @param string $nombreArea
     * @return RxArea
     */
    public function setNombreArea($nombreArea)
    {
        $this->nombreArea = $nombreArea;

        return $this;
    }

    /**
     * Get nombreArea
     *
     * @return string 
     */
    public function getNombreArea()
    {
        return $this->nombreArea;
    }

    /**
     * Set habilitado
     *
     * @param string $habilitado
     * @return RxArea
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return string 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return RxArea
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}
