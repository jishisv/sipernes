<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTipoEsquemaVac
 *
 * @ORM\Table(name="enf_tipo_esquema_vac", indexes={@ORM\Index(name="IDX_BEFC5447EEF970B1", columns={"id_esquema_vac"})})
 * @ORM\Entity
 */
class EnfTipoEsquemaVac
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_tipo_esquema_vac_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_esq", type="string", length=100, nullable=true)
     */
    private $nombreTipoEsq;

    /**
     * @var string
     *
     * @ORM\Column(name="dosis_maxima", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $dosisMaxima;

    /**
     * @var \EnfEsquemaVac
     *
     * @ORM\ManyToOne(targetEntity="EnfEsquemaVac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_esquema_vac", referencedColumnName="id")
     * })
     */
    private $idEsquemaVac;



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
     * Set nombreTipoEsq
     *
     * @param string $nombreTipoEsq
     * @return EnfTipoEsquemaVac
     */
    public function setNombreTipoEsq($nombreTipoEsq)
    {
        $this->nombreTipoEsq = $nombreTipoEsq;

        return $this;
    }

    /**
     * Get nombreTipoEsq
     *
     * @return string 
     */
    public function getNombreTipoEsq()
    {
        return $this->nombreTipoEsq;
    }

    /**
     * Set dosisMaxima
     *
     * @param string $dosisMaxima
     * @return EnfTipoEsquemaVac
     */
    public function setDosisMaxima($dosisMaxima)
    {
        $this->dosisMaxima = $dosisMaxima;

        return $this;
    }

    /**
     * Get dosisMaxima
     *
     * @return string 
     */
    public function getDosisMaxima()
    {
        return $this->dosisMaxima;
    }

    /**
     * Set idEsquemaVac
     *
     * @param \Minsal\SipernesBundle\Entity\EnfEsquemaVac $idEsquemaVac
     * @return EnfTipoEsquemaVac
     */
    public function setIdEsquemaVac(\Minsal\SipernesBundle\Entity\EnfEsquemaVac $idEsquemaVac = null)
    {
        $this->idEsquemaVac = $idEsquemaVac;

        return $this;
    }

    /**
     * Get idEsquemaVac
     *
     * @return \Minsal\SipernesBundle\Entity\EnfEsquemaVac 
     */
    public function getIdEsquemaVac()
    {
        return $this->idEsquemaVac;
    }
}
