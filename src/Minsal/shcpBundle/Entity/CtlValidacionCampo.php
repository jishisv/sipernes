<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlValidacionCampo
 *
 * @ORM\Table(name="ctl_validacion_campo")
 * @ORM\Entity
 */
class CtlValidacionCampo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_validacion_campo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_validacion", type="text", nullable=true)
     */
    private $codigoValidacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="aplica_para", type="integer", nullable=false)
     */
    private $aplicaPara;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requiere_comparacion", type="boolean", nullable=false)
     */
    private $requiereComparacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valor_numerico", type="boolean", nullable=true)
     */
    private $valorNumerico = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aplica_item_pool", type="boolean", nullable=false)
     */
    private $aplicaItemPool;



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
     * @return CtlValidacionCampo
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
     * Set codigoValidacion
     *
     * @param string $codigoValidacion
     * @return CtlValidacionCampo
     */
    public function setCodigoValidacion($codigoValidacion)
    {
        $this->codigoValidacion = $codigoValidacion;

        return $this;
    }

    /**
     * Get codigoValidacion
     *
     * @return string 
     */
    public function getCodigoValidacion()
    {
        return $this->codigoValidacion;
    }

    /**
     * Set aplicaPara
     *
     * @param integer $aplicaPara
     * @return CtlValidacionCampo
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
     * Set requiereComparacion
     *
     * @param boolean $requiereComparacion
     * @return CtlValidacionCampo
     */
    public function setRequiereComparacion($requiereComparacion)
    {
        $this->requiereComparacion = $requiereComparacion;

        return $this;
    }

    /**
     * Get requiereComparacion
     *
     * @return boolean 
     */
    public function getRequiereComparacion()
    {
        return $this->requiereComparacion;
    }

    /**
     * Set valorNumerico
     *
     * @param boolean $valorNumerico
     * @return CtlValidacionCampo
     */
    public function setValorNumerico($valorNumerico)
    {
        $this->valorNumerico = $valorNumerico;

        return $this;
    }

    /**
     * Get valorNumerico
     *
     * @return boolean 
     */
    public function getValorNumerico()
    {
        return $this->valorNumerico;
    }

    /**
     * Set aplicaItemPool
     *
     * @param boolean $aplicaItemPool
     * @return CtlValidacionCampo
     */
    public function setAplicaItemPool($aplicaItemPool)
    {
        $this->aplicaItemPool = $aplicaItemPool;

        return $this;
    }

    /**
     * Get aplicaItemPool
     *
     * @return boolean 
     */
    public function getAplicaItemPool()
    {
        return $this->aplicaItemPool;
    }
}
