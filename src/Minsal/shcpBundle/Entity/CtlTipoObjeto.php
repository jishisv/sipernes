<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoObjeto
 *
 * @ORM\Table(name="ctl_tipo_objeto")
 * @ORM\Entity
 */
class CtlTipoObjeto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_objeto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="text", nullable=true)
     */
    private $codigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="aplica_para", type="integer", nullable=false)
     */
    private $aplicaPara;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;



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
     * Set nombre
     *
     * @param string $nombre
     * @return CtlTipoObjeto
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
     * Set codigo
     *
     * @param string $codigo
     * @return CtlTipoObjeto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set aplicaPara
     *
     * @param integer $aplicaPara
     * @return CtlTipoObjeto
     */
    public function setAplicaPara($aplicaPara)
    {
        $this->aplicaPara = $aplicaPara;

        return $this;
    }

    /**
     * Get aplicaPara
     *
     * @return integer 
     */
    public function getAplicaPara()
    {
        return $this->aplicaPara;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CtlTipoObjeto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
