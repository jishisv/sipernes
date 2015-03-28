<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCompTipoEsquema
 *
 * @ORM\Table(name="enf_comp_tipo_esquema", indexes={@ORM\Index(name="IDX_7D53F8B9BF16C07B", columns={"id_componente"}), @ORM\Index(name="IDX_7D53F8B9C5C543BF", columns={"id_tipo_esquema"})})
 * @ORM\Entity
 */
class EnfCompTipoEsquema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_comp_tipo_esquema_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \EnfTipoEsquemaVac
     *
     * @ORM\ManyToOne(targetEntity="EnfTipoEsquemaVac")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_esquema", referencedColumnName="id")
     * })
     */
    private $idTipoEsquema;



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
     * Set idComponente
     *
     * @param \Minsal\SipernesBundle\Entity\EnfComponente $idComponente
     * @return EnfCompTipoEsquema
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

    /**
     * Set idTipoEsquema
     *
     * @param \Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac $idTipoEsquema
     * @return EnfCompTipoEsquema
     */
    public function setIdTipoEsquema(\Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac $idTipoEsquema = null)
    {
        $this->idTipoEsquema = $idTipoEsquema;

        return $this;
    }

    /**
     * Get idTipoEsquema
     *
     * @return \Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac 
     */
    public function getIdTipoEsquema()
    {
        return $this->idTipoEsquema;
    }
}
