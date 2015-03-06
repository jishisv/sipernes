<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfBitacoraDosis
 *
 * @ORM\Table(name="enf_bitacora_dosis", indexes={@ORM\Index(name="IDX_17FCE8CEDC13B9AD", columns={"id_dosis_esq"})})
 * @ORM\Entity
 */
class EnfBitacoraDosis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_bitacora_dosis_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis_hist", type="string", length=10, nullable=true)
     */
    private $dosisHist;

    /**
     * @var string
     *
     * @ORM\Column(name="centro_educativo_hist", type="string", length=200, nullable=true)
     */
    private $centroEducativoHist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_dosis_esq_hist", type="date", nullable=true)
     */
    private $fechaDosisEsqHist;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_dosis_esq_hist", type="boolean", nullable=true)
     */
    private $estadoDosisEsqHist;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_dosis_esq_hist", type="string", length=40, nullable=true)
     */
    private $usuarioDosisEsqHist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_dosis_hist", type="date", nullable=true)
     */
    private $fechaIngresoDosisHist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_dosis_hist", type="date", nullable=true)
     */
    private $fechaModificacionDosisHist;

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
     * Set dosisHist
     *
     * @param string $dosisHist
     * @return EnfBitacoraDosis
     */
    public function setDosisHist($dosisHist)
    {
        $this->dosisHist = $dosisHist;

        return $this;
    }

    /**
     * Get dosisHist
     *
     * @return string 
     */
    public function getDosisHist()
    {
        return $this->dosisHist;
    }

    /**
     * Set centroEducativoHist
     *
     * @param string $centroEducativoHist
     * @return EnfBitacoraDosis
     */
    public function setCentroEducativoHist($centroEducativoHist)
    {
        $this->centroEducativoHist = $centroEducativoHist;

        return $this;
    }

    /**
     * Get centroEducativoHist
     *
     * @return string 
     */
    public function getCentroEducativoHist()
    {
        return $this->centroEducativoHist;
    }

    /**
     * Set fechaDosisEsqHist
     *
     * @param \DateTime $fechaDosisEsqHist
     * @return EnfBitacoraDosis
     */
    public function setFechaDosisEsqHist($fechaDosisEsqHist)
    {
        $this->fechaDosisEsqHist = $fechaDosisEsqHist;

        return $this;
    }

    /**
     * Get fechaDosisEsqHist
     *
     * @return \DateTime 
     */
    public function getFechaDosisEsqHist()
    {
        return $this->fechaDosisEsqHist;
    }

    /**
     * Set estadoDosisEsqHist
     *
     * @param boolean $estadoDosisEsqHist
     * @return EnfBitacoraDosis
     */
    public function setEstadoDosisEsqHist($estadoDosisEsqHist)
    {
        $this->estadoDosisEsqHist = $estadoDosisEsqHist;

        return $this;
    }

    /**
     * Get estadoDosisEsqHist
     *
     * @return boolean 
     */
    public function getEstadoDosisEsqHist()
    {
        return $this->estadoDosisEsqHist;
    }

    /**
     * Set usuarioDosisEsqHist
     *
     * @param string $usuarioDosisEsqHist
     * @return EnfBitacoraDosis
     */
    public function setUsuarioDosisEsqHist($usuarioDosisEsqHist)
    {
        $this->usuarioDosisEsqHist = $usuarioDosisEsqHist;

        return $this;
    }

    /**
     * Get usuarioDosisEsqHist
     *
     * @return string 
     */
    public function getUsuarioDosisEsqHist()
    {
        return $this->usuarioDosisEsqHist;
    }

    /**
     * Set fechaIngresoDosisHist
     *
     * @param \DateTime $fechaIngresoDosisHist
     * @return EnfBitacoraDosis
     */
    public function setFechaIngresoDosisHist($fechaIngresoDosisHist)
    {
        $this->fechaIngresoDosisHist = $fechaIngresoDosisHist;

        return $this;
    }

    /**
     * Get fechaIngresoDosisHist
     *
     * @return \DateTime 
     */
    public function getFechaIngresoDosisHist()
    {
        return $this->fechaIngresoDosisHist;
    }

    /**
     * Set fechaModificacionDosisHist
     *
     * @param \DateTime $fechaModificacionDosisHist
     * @return EnfBitacoraDosis
     */
    public function setFechaModificacionDosisHist($fechaModificacionDosisHist)
    {
        $this->fechaModificacionDosisHist = $fechaModificacionDosisHist;

        return $this;
    }

    /**
     * Get fechaModificacionDosisHist
     *
     * @return \DateTime 
     */
    public function getFechaModificacionDosisHist()
    {
        return $this->fechaModificacionDosisHist;
    }

    /**
     * Set idDosisEsq
     *
     * @param \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq
     * @return EnfBitacoraDosis
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
}
