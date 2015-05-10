<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaIntervencion
 *
 * @ORM\Table(name="enf_traza_intervencion", indexes={@ORM\Index(name="IDX_7B7C2836675DADD6", columns={"id_registro_intervencion"})})
 * @ORM\Entity
 */
class EnfTrazaIntervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_interven", type="string", length=40, nullable=true)
     */
    private $usuarioTraInterven;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_tra_interven", type="string", length=200, nullable=true)
     */
    private $cambioTraInterven;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tra_interven", type="date", nullable=true)
     */
    private $fechaIngresoTraInterven;

    /**
     * @var \EnfMtlIntervencion
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlIntervencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_intervencion", referencedColumnName="id")
     * })
     */
    private $idRegistroIntervencion;



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
     * Set usuarioTraInterven
     *
     * @param string $usuarioTraInterven
     * @return EnfTrazaIntervencion
     */
    public function setUsuarioTraInterven($usuarioTraInterven)
    {
        $this->usuarioTraInterven = $usuarioTraInterven;

        return $this;
    }

    /**
     * Get usuarioTraInterven
     *
     * @return string 
     */
    public function getUsuarioTraInterven()
    {
        return $this->usuarioTraInterven;
    }

    /**
     * Set cambioTraInterven
     *
     * @param boolean $cambioTraInterven
     * @return EnfTrazaIntervencion
     */
    public function setCambioTraInterven($cambioTraInterven)
    {
        $this->cambioTraInterven = $cambioTraInterven;

        return $this;
    }

    /**
     * Get cambioTraInterven
     *
     * @return boolean 
     */
    public function getCambioTraInterven()
    {
        return $this->cambioTraInterven;
    }

    /**
     * Set fechaIngresoTraInterven
     *
     * @param \DateTime $fechaIngresoTraInterven
     * @return EnfTrazaIntervencion
     */
    public function setFechaIngresoTraInterven($fechaIngresoTraInterven)
    {
        $this->fechaIngresoTraInterven = $fechaIngresoTraInterven;

        return $this;
    }

    /**
     * Get fechaIngresoTraInterven
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTraInterven()
    {
        return $this->fechaIngresoTraInterven;
    }

    /**
     * Set idRegistroIntervencion
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlIntervencion $idRegistroIntervencion
     * @return EnfTrazaIntervencion
     */
    public function setIdRegistroIntervencion(\Minsal\SipernesBundle\Entity\EnfMtlIntervencion $idRegistroIntervencion = null)
    {
        $this->idRegistroIntervencion = $idRegistroIntervencion;

        return $this;
    }

    /**
     * Get idRegistroIntervencion
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlIntervencion 
     */
    public function getIdRegistroIntervencion()
    {
        return $this->idRegistroIntervencion;
    }
    
    public function __toString() {
        return '';
    }
}
