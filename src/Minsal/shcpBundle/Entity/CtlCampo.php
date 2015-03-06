<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCampo
 *
 * @ORM\Table(name="ctl_campo", indexes={@ORM\Index(name="IDX_F5066AA11FC10A6F", columns={"id_tabla"}), @ORM\Index(name="IDX_F5066AA18A212DB5", columns={"id_tipo_campo"})})
 * @ORM\Entity
 */
class CtlCampo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_campo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tamano", type="integer", nullable=true)
     */
    private $tamano;

    /**
     * @var boolean
     *
     * @ORM\Column(name="es_nulo", type="boolean", nullable=false)
     */
    private $esNulo;

    /**
     * @var \CtlTabla
     *
     * @ORM\ManyToOne(targetEntity="CtlTabla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabla", referencedColumnName="id")
     * })
     */
    private $idTabla;

    /**
     * @var \CtlTipoCampo
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoCampo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_campo", referencedColumnName="id")
     * })
     */
    private $idTipoCampo;



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
     * @return CtlCampo
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
     * Set tamano
     *
     * @param integer $tamano
     * @return CtlCampo
     */
    public function setTamano($tamano)
    {
        $this->tamano = $tamano;

        return $this;
    }

    /**
     * Get tamano
     *
     * @return integer 
     */
    public function getTamano()
    {
        return $this->tamano;
    }

    /**
     * Set esNulo
     *
     * @param boolean $esNulo
     * @return CtlCampo
     */
    public function setEsNulo($esNulo)
    {
        $this->esNulo = $esNulo;

        return $this;
    }

    /**
     * Get esNulo
     *
     * @return boolean 
     */
    public function getEsNulo()
    {
        return $this->esNulo;
    }

    /**
     * Set idTabla
     *
     * @param \Minsal\shcpBundle\Entity\CtlTabla $idTabla
     * @return CtlCampo
     */
    public function setIdTabla(\Minsal\shcpBundle\Entity\CtlTabla $idTabla = null)
    {
        $this->idTabla = $idTabla;

        return $this;
    }

    /**
     * Get idTabla
     *
     * @return \Minsal\shcpBundle\Entity\CtlTabla 
     */
    public function getIdTabla()
    {
        return $this->idTabla;
    }

    /**
     * Set idTipoCampo
     *
     * @param \Minsal\shcpBundle\Entity\CtlTipoCampo $idTipoCampo
     * @return CtlCampo
     */
    public function setIdTipoCampo(\Minsal\shcpBundle\Entity\CtlTipoCampo $idTipoCampo = null)
    {
        $this->idTipoCampo = $idTipoCampo;

        return $this;
    }

    /**
     * Get idTipoCampo
     *
     * @return \Minsal\shcpBundle\Entity\CtlTipoCampo 
     */
    public function getIdTipoCampo()
    {
        return $this->idTipoCampo;
    }
}
