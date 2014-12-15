<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCatalogo
 *
 * @ORM\Table(name="ctl_catalogo", indexes={@ORM\Index(name="IDX_8E5C879377105966", columns={"id_campo_descripcion"}), @ORM\Index(name="IDX_8E5C8793F1A1D4C9", columns={"id_campo_id"})})
 * @ORM\Entity
 */
class CtlCatalogo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_catalogo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var \CtlCampo
     *
     * @ORM\ManyToOne(targetEntity="CtlCampo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campo_descripcion", referencedColumnName="id")
     * })
     */
    private $idCampoDescripcion;

    /**
     * @var \CtlCampo
     *
     * @ORM\ManyToOne(targetEntity="CtlCampo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campo_id", referencedColumnName="id")
     * })
     */
    private $idCampo;



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
     * Set nombre
     *
     * @param string $nombre
     * @return CtlCatalogo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CtlCatalogo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idCampoDescripcion
     *
     * @param \Minsal\shcpBundle\Entity\CtlCampo $idCampoDescripcion
     * @return CtlCatalogo
     */
    public function setIdCampoDescripcion(\Minsal\shcpBundle\Entity\CtlCampo $idCampoDescripcion = null)
    {
        $this->idCampoDescripcion = $idCampoDescripcion;

        return $this;
    }

    /**
     * Get idCampoDescripcion
     *
     * @return \Minsal\shcpBundle\Entity\CtlCampo 
     */
    public function getIdCampoDescripcion()
    {
        return $this->idCampoDescripcion;
    }

    /**
     * Set idCampo
     *
     * @param \Minsal\shcpBundle\Entity\CtlCampo $idCampo
     * @return CtlCatalogo
     */
    public function setIdCampo(\Minsal\shcpBundle\Entity\CtlCampo $idCampo = null)
    {
        $this->idCampo = $idCampo;

        return $this;
    }

    /**
     * Get idCampo
     *
     * @return \Minsal\shcpBundle\Entity\CtlCampo 
     */
    public function getIdCampo()
    {
        return $this->idCampo;
    }
}
