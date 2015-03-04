<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfBitacoraInventario
 *
 * @ORM\Table(name="enf_bitacora_inventario", indexes={@ORM\Index(name="IDX_5993EA84CF93CE22", columns={"id_inventario"})})
 * @ORM\Entity
 */
class EnfBitacoraInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_bitacora_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="existencia_hist", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $existenciaHist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_inv", type="date", nullable=true)
     */
    private $fechaIngresoHistInv;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_inventario_hist", type="string", length=40, nullable=true)
     */
    private $usuarioInventarioHist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_hist_invent", type="boolean", nullable=true)
     */
    private $estadoHistInvent;

    /**
     * @var \EnfInventario
     *
     * @ORM\ManyToOne(targetEntity="EnfInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id")
     * })
     */
    private $idInventario;



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
     * Set existenciaHist
     *
     * @param string $existenciaHist
     * @return EnfBitacoraInventario
     */
    public function setExistenciaHist($existenciaHist)
    {
        $this->existenciaHist = $existenciaHist;

        return $this;
    }

    /**
     * Get existenciaHist
     *
     * @return string 
     */
    public function getExistenciaHist()
    {
        return $this->existenciaHist;
    }

    /**
     * Set fechaIngresoHistInv
     *
     * @param \DateTime $fechaIngresoHistInv
     * @return EnfBitacoraInventario
     */
    public function setFechaIngresoHistInv($fechaIngresoHistInv)
    {
        $this->fechaIngresoHistInv = $fechaIngresoHistInv;

        return $this;
    }

    /**
     * Get fechaIngresoHistInv
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistInv()
    {
        return $this->fechaIngresoHistInv;
    }

    /**
     * Set usuarioInventarioHist
     *
     * @param string $usuarioInventarioHist
     * @return EnfBitacoraInventario
     */
    public function setUsuarioInventarioHist($usuarioInventarioHist)
    {
        $this->usuarioInventarioHist = $usuarioInventarioHist;

        return $this;
    }

    /**
     * Get usuarioInventarioHist
     *
     * @return string 
     */
    public function getUsuarioInventarioHist()
    {
        return $this->usuarioInventarioHist;
    }

    /**
     * Set estadoHistInvent
     *
     * @param boolean $estadoHistInvent
     * @return EnfBitacoraInventario
     */
    public function setEstadoHistInvent($estadoHistInvent)
    {
        $this->estadoHistInvent = $estadoHistInvent;

        return $this;
    }

    /**
     * Get estadoHistInvent
     *
     * @return boolean 
     */
    public function getEstadoHistInvent()
    {
        return $this->estadoHistInvent;
    }

    /**
     * Set idInventario
     *
     * @param \Minsal\SipernesBundle\Entity\EnfInventario $idInventario
     * @return EnfBitacoraInventario
     */
    public function setIdInventario(\Minsal\SipernesBundle\Entity\EnfInventario $idInventario = null)
    {
        $this->idInventario = $idInventario;

        return $this;
    }

    /**
     * Get idInventario
     *
     * @return \Minsal\SipernesBundle\Entity\EnfInventario 
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }
}
