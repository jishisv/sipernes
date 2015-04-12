<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaDosis
 *
 * @ORM\Table(name="enf_traza_dosis", indexes={@ORM\Index(name="IDX_3F706379DC13B9AD", columns={"id_dosis_esq"})})
 * @ORM\Entity
 */
class EnfTrazaDosis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_dosis_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_traza_dosis", type="string", length=40, nullable=true)
     */
    private $usuarioTrazaDosis;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_traza_dosis", type="string", length=200, nullable=true)
     */
    private $cambioTrazaDosis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_traza_dosis", type="date", nullable=true)
     */
    private $fechaIngresoTrazaDosis;

    /**
     * @var \EnfDosisEsquemaVac
     *
     * @ORM\ManyToOne(targetEntity="EnfDosisEsquemaVac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dosis_esq", referencedColumnName="id")
     * })
     */
    private $idDosisEsq;



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
     * Set usuarioTrazaDosis
     *
     * @param string $usuarioTrazaDosis
     * @return EnfTrazaDosis
     */
    public function setUsuarioTrazaDosis($usuarioTrazaDosis)
    {
        $this->usuarioTrazaDosis = $usuarioTrazaDosis;

        return $this;
    }

    /**
     * Get usuarioTrazaDosis
     *
     * @return string 
     */
    public function getUsuarioTrazaDosis()
    {
        return $this->usuarioTrazaDosis;
    }

    /**
     * Set cambioTrazaDosis
     *
     * @param string $cambioTrazaDosis
     * @return EnfTrazaDosis
     */
    public function setCambioTrazaDosis($cambioTrazaDosis)
    {
        $this->cambioTrazaDosis = $cambioTrazaDosis;

        return $this;
    }

    /**
     * Get cambioTrazaDosis
     *
     * @return string 
     */
    public function getCambioTrazaDosis()
    {
        return $this->cambioTrazaDosis;
    }

    /**
     * Set fechaIngresoTrazaDosis
     *
     * @param \DateTime $fechaIngresoTrazaDosis
     * @return EnfTrazaDosis
     */
    public function setFechaIngresoTrazaDosis($fechaIngresoTrazaDosis)
    {
        $this->fechaIngresoTrazaDosis = $fechaIngresoTrazaDosis;

        return $this;
    }

    /**
     * Get fechaIngresoTrazaDosis
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTrazaDosis()
    {
        return $this->fechaIngresoTrazaDosis;
    }

    /**
     * Set idDosisEsq
     *
     * @param \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq
     * @return EnfTrazaDosis
     */
    public function setIdDosisEsq(\Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq = null)
    {
        $this->idDosisEsq = $idDosisEsq;

        return $this;
    }

    /**
     * Get idDosisEsq
     *
     * @return \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac 
     */
    public function getIdDosisEsq()
    {
        return $this->idDosisEsq;
    }
    
    public function __toString() {
        return '';
    }
}
