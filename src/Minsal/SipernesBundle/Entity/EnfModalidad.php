<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfModalidad
 *
 * @ORM\Table(name="enf_modalidad", indexes={@ORM\Index(name="IDX_5608CF14DC13B9AD", columns={"id_dosis_esq"})})
 * @ORM\Entity
 */
class EnfModalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_modalidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modalidad", type="string", length=50, nullable=true)
     */
    private $nombreModalidad;

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
     * Set nombreModalidad
     *
     * @param string $nombreModalidad
     * @return EnfModalidad
     */
    public function setNombreModalidad($nombreModalidad)
    {
        $this->nombreModalidad = $nombreModalidad;

        return $this;
    }

    /**
     * Get nombreModalidad
     *
     * @return string 
     */
    public function getNombreModalidad()
    {
        return $this->nombreModalidad;
    }

    /**
     * Set idDosisEsq
     *
     * @param \Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac $idDosisEsq
     * @return EnfModalidad
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
