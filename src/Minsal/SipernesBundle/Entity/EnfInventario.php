<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfInventario
 *
 * @ORM\Table(name="enf_inventario", indexes={@ORM\Index(name="IDX_886A88E4BF16C07B", columns={"id_componente"})})
 * @ORM\Entity
 */
class EnfInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $existencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_inventario", type="date", nullable=true)
     */
    private $fechaIngresoInventario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_inventario", type="string", length=40, nullable=true)
     */
    private $usuarioInventario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_inventario", type="boolean", nullable=true)
     */
    private $estadoInventario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="caducidad_inventario", type="date", nullable=true)
     */
    private $caducidadInventario;

    /**
     * @var \EnfComponente
     *
     * @ORM\ManyToOne(targetEntity="EnfComponente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_componente", referencedColumnName="id")
     * })
     */
    private $idComponente;



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
     * Set existencia
     *
     * @param string $existencia
     * @return EnfInventario
     */
    public function setExistencia($existencia)
    {
        $this->existencia = $existencia;

        return $this;
    }

    /**
     * Get existencia
     *
     * @return string 
     */
    public function getExistencia()
    {
        return $this->existencia;
    }

    /**
     * Set fechaIngresoInventario
     *
     * @param \DateTime $fechaIngresoInventario
     * @return EnfInventario
     */
    public function setFechaIngresoInventario($fechaIngresoInventario)
    {
        $this->fechaIngresoInventario = $fechaIngresoInventario;

        return $this;
    }

    /**
     * Get fechaIngresoInventario
     *
     * @return \DateTime 
     */
    public function getFechaIngresoInventario()
    {
        return $this->fechaIngresoInventario;
    }

    /**
     * Set usuarioInventario
     *
     * @param string $usuarioInventario
     * @return EnfInventario
     */
    public function setUsuarioInventario($usuarioInventario)
    {
        $this->usuarioInventario = $usuarioInventario;

        return $this;
    }

    /**
     * Get usuarioInventario
     *
     * @return string 
     */
    public function getUsuarioInventario()
    {
        return $this->usuarioInventario;
    }

    /**
     * Set estadoInventario
     *
     * @param boolean $estadoInventario
     * @return EnfInventario
     */
    public function setEstadoInventario($estadoInventario)
    {
        $this->estadoInventario = $estadoInventario;

        return $this;
    }

    /**
     * Get estadoInventario
     *
     * @return boolean 
     */
    public function getEstadoInventario()
    {
        return $this->estadoInventario;
    }

    /**
     * Set caducidadInventario
     *
     * @param \DateTime $caducidadInventario
     * @return EnfInventario
     */
    public function setCaducidadInventario($caducidadInventario)
    {
        $this->caducidadInventario = $caducidadInventario;

        return $this;
    }

    /**
     * Get caducidadInventario
     *
     * @return \DateTime 
     */
    public function getCaducidadInventario()
    {
        return $this->caducidadInventario;
    }

    /**
     * Set idComponente
     *
     * @param \Minsal\SipernesBundle\Entity\EnfComponente $idComponente
     * @return EnfInventario
     */
    public function setIdComponente(\Minsal\SipernesBundle\Entity\EnfComponente $idComponente = null)
    {
        $this->idComponente = $idComponente;

        return $this;
    }

    /**
     * Get idComponente
     *
     * @return \Minsal\SipernesBundle\Entity\EnfComponente 
     */
    public function getIdComponente()
    {
        return $this->idComponente;
    }
    
    public function __toString() {
        return '';
    }
}
