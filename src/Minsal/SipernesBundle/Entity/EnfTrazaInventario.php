<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaInventario
 *
 * @ORM\Table(name="enf_traza_inventario", indexes={@ORM\Index(name="IDX_745E43F4CF93CE22", columns={"id_inventario"})})
 * @ORM\Entity
 */
class EnfTrazaInventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_inventario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tra_inv", type="date", nullable=true)
     */
    private $fechaIngresoTraInv;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_inv", type="string", length=40, nullable=true)
     */
    private $usuarioTraInv;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_inv", type="string", length=200, nullable=true)
     */
    private $cambioInv;

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
     * Set fechaIngresoTraInv
     *
     * @param \DateTime $fechaIngresoTraInv
     * @return EnfTrazaInventario
     */
    public function setFechaIngresoTraInv($fechaIngresoTraInv)
    {
        $this->fechaIngresoTraInv = $fechaIngresoTraInv;

        return $this;
    }

    /**
     * Get fechaIngresoTraInv
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTraInv()
    {
        return $this->fechaIngresoTraInv;
    }

    /**
     * Set usuarioTraInv
     *
     * @param string $usuarioTraInv
     * @return EnfTrazaInventario
     */
    public function setUsuarioTraInv($usuarioTraInv)
    {
        $this->usuarioTraInv = $usuarioTraInv;

        return $this;
    }

    /**
     * Get usuarioTraInv
     *
     * @return string 
     */
    public function getUsuarioTraInv()
    {
        return $this->usuarioTraInv;
    }

    /**
     * Set cambioInv
     *
     * @param string $cambioInv
     * @return EnfTrazaInventario
     */
    public function setCambioInv($cambioInv)
    {
        $this->cambioInv = $cambioInv;

        return $this;
    }

    /**
     * Get cambioInv
     *
     * @return string 
     */
    public function getCambioInv()
    {
        return $this->cambioInv;
    }

    /**
     * Set idInventario
     *
     * @param \Minsal\SipernesBundle\Entity\EnfInventario $idInventario
     * @return EnfTrazaInventario
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
    
    public function __toString() {
        return '';
    }
}
