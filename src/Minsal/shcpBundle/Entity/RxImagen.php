<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxImagen
 *
 * @ORM\Table(name="rx_imagen")
 * @ORM\Entity
 */
class RxImagen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_imagen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_radiografia", type="integer", nullable=true)
     */
    private $idRadiografia;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="blob", nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=50, nullable=true)
     */
    private $tipo;



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
     * Set idRadiografia
     *
     * @param integer $idRadiografia
     * @return RxImagen
     */
    public function setIdRadiografia($idRadiografia)
    {
        $this->idRadiografia = $idRadiografia;

        return $this;
    }

    /**
     * Get idRadiografia
     *
     * @return integer 
     */
    public function getIdRadiografia()
    {
        return $this->idRadiografia;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return RxImagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RxImagen
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return RxImagen
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
