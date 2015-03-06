<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaNota
 *
 * @ORM\Table(name="enf_traza_nota", indexes={@ORM\Index(name="IDX_E4282A62BFAE4CCD", columns={"id_registro_nota"})})
 * @ORM\Entity
 */
class EnfTrazaNota
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_nota_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tra_nota", type="date", nullable=true)
     */
    private $fechaIngresoTraNota;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_nota", type="string", length=40, nullable=true)
     */
    private $usuarioTraNota;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_tra_nota", type="string", length=200, nullable=true)
     */
    private $cambioTraNota;

    /**
     * @var \EnfMtlNota
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlNota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_nota", referencedColumnName="id")
     * })
     */
    private $idRegistroNota;



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
     * Set fechaIngresoTraNota
     *
     * @param \DateTime $fechaIngresoTraNota
     * @return EnfTrazaNota
     */
    public function setFechaIngresoTraNota($fechaIngresoTraNota)
    {
        $this->fechaIngresoTraNota = $fechaIngresoTraNota;

        return $this;
    }

    /**
     * Get fechaIngresoTraNota
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTraNota()
    {
        return $this->fechaIngresoTraNota;
    }

    /**
     * Set usuarioTraNota
     *
     * @param string $usuarioTraNota
     * @return EnfTrazaNota
     */
    public function setUsuarioTraNota($usuarioTraNota)
    {
        $this->usuarioTraNota = $usuarioTraNota;

        return $this;
    }

    /**
     * Get usuarioTraNota
     *
     * @return string 
     */
    public function getUsuarioTraNota()
    {
        return $this->usuarioTraNota;
    }

    /**
     * Set cambioTraNota
     *
     * @param string $cambioTraNota
     * @return EnfTrazaNota
     */
    public function setCambioTraNota($cambioTraNota)
    {
        $this->cambioTraNota = $cambioTraNota;

        return $this;
    }

    /**
     * Get cambioTraNota
     *
     * @return string 
     */
    public function getCambioTraNota()
    {
        return $this->cambioTraNota;
    }

    /**
     * Set idRegistroNota
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota
     * @return EnfTrazaNota
     */
    public function setIdRegistroNota(\Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota = null)
    {
        $this->idRegistroNota = $idRegistroNota;

        return $this;
    }

    /**
     * Get idRegistroNota
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlNota 
     */
    public function getIdRegistroNota()
    {
        return $this->idRegistroNota;
    }
}
