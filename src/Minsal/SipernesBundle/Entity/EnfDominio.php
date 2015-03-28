<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfDominio
 *
 * @ORM\Table(name="enf_dominio")
 * @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\ClaseDiagRepository")
 */
class EnfDominio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_dominio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cod_dominio", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $codDominio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_dominio", type="string", length=50, nullable=true)
     */
    private $nombreDominio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_dom", type="date", nullable=true)
     */
    private $fechaIngresoDom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_dom", type="date", nullable=true)
     */
    private $fechaModificacionDom;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_dom", type="string", length=40, nullable=true)
     */
    private $usuarioDom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_dominio", type="boolean", nullable=true)
     */
    private $estadoDominio;



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
     * Set codDominio
     *
     * @param string $codDominio
     * @return EnfDominio
     */
    public function setCodDominio($codDominio)
    {
        $this->codDominio = $codDominio;

        return $this;
    }

    /**
     * Get codDominio
     *
     * @return string 
     */
    public function getCodDominio()
    {
        return $this->codDominio;
    }

    /**
     * Set nombreDominio
     *
     * @param string $nombreDominio
     * @return EnfDominio
     */
    public function setNombreDominio($nombreDominio)
    {
        $this->nombreDominio = $nombreDominio;

        return $this;
    }

    /**
     * Get nombreDominio
     *
     * @return string 
     */
    public function getNombreDominio()
    {
        return $this->nombreDominio;
    }

    /**
     * Set fechaIngresoDom
     *
     * @param \DateTime $fechaIngresoDom
     * @return EnfDominio
     */
    public function setFechaIngresoDom($fechaIngresoDom)
    {
        $this->fechaIngresoDom = $fechaIngresoDom;

        return $this;
    }

    /**
     * Get fechaIngresoDom
     *
     * @return \DateTime 
     */
    public function getFechaIngresoDom()
    {
        return $this->fechaIngresoDom;
    }

    /**
     * Set fechaModificacionDom
     *
     * @param \DateTime $fechaModificacionDom
     * @return EnfDominio
     */
    public function setFechaModificacionDom($fechaModificacionDom)
    {
        $this->fechaModificacionDom = $fechaModificacionDom;

        return $this;
    }

    /**
     * Get fechaModificacionDom
     *
     * @return \DateTime 
     */
    public function getFechaModificacionDom()
    {
        return $this->fechaModificacionDom;
    }

    /**
     * Set usuarioDom
     *
     * @param string $usuarioDom
     * @return EnfDominio
     */
    public function setUsuarioDom($usuarioDom)
    {
        $this->usuarioDom = $usuarioDom;

        return $this;
    }

    /**
     * Get usuarioDom
     *
     * @return string 
     */
    public function getUsuarioDom()
    {
        return $this->usuarioDom;
    }

    /**
     * Set estadoDominio
     *
     * @param boolean $estadoDominio
     * @return EnfDominio
     */
    public function setEstadoDominio($estadoDominio)
    {
        $this->estadoDominio = $estadoDominio;

        return $this;
    }

    /**
     * Get estadoDominio
     *
     * @return boolean 
     */
    public function getEstadoDominio()
    {
        return $this->estadoDominio;
    }
    
    public function __toString() {
    return $this->nombreDominio ? $this->nombreDominio : '';
    }
}
