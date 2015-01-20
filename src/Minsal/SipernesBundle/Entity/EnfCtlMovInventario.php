<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlMovInventario
 *
 * @ORM\Table(name="enf_ctl_mov_inventario")
 * @ORM\Entity
 */
class EnfCtlMovInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_mov_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_inventatrio", type="string", length=50, nullable=true)
     */
    private $nombreTipoInventatrio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_ctl_mov", type="boolean", nullable=true)
     */
    private $estadoCtlMov;



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
     * Set nombreTipoInventatrio
     *
     * @param string $nombreTipoInventatrio
     * @return EnfCtlMovInventario
     */
    public function setNombreTipoInventatrio($nombreTipoInventatrio)
    {
        $this->nombreTipoInventatrio = $nombreTipoInventatrio;

        return $this;
    }

    /**
     * Get nombreTipoInventatrio
     *
     * @return string 
     */
    public function getNombreTipoInventatrio()
    {
        return $this->nombreTipoInventatrio;
    }

    /**
     * Set estadoCtlMov
     *
     * @param boolean $estadoCtlMov
     * @return EnfCtlMovInventario
     */
    public function setEstadoCtlMov($estadoCtlMov)
    {
        $this->estadoCtlMov = $estadoCtlMov;

        return $this;
    }

    /**
     * Get estadoCtlMov
     *
     * @return boolean 
     */
    public function getEstadoCtlMov()
    {
        return $this->estadoCtlMov;
    }
    
     public function __toString() {
    return $this->nombreTipoInventatrio ? $this->nombreTipoInventatrio : '';
    }
}
