<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxTamanioPelicula
 *
 * @ORM\Table(name="rx_tamanio_pelicula")
 * @ORM\Entity
 */
class RxTamanioPelicula
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_tamanio_pelicula_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanio", type="string", length=60, nullable=true)
     */
    private $tamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=2, nullable=true)
     */
    private $habilitado;



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
     * Set tamanio
     *
     * @param string $tamanio
     * @return RxTamanioPelicula
     */
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;

        return $this;
    }

    /**
     * Get tamanio
     *
     * @return string 
     */
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set habilitado
     *
     * @param string $habilitado
     * @return RxTamanioPelicula
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
}
