<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboCtlCie10
 *
 * @ORM\Table(name="shcp_abo_ctl_cie10")
 * @ORM\Entity
 */
class ShcpAboCtlCie10
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_ctl_cie10_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_nombre", type="string", length=100, nullable=true)
     */
    private $cie10Nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_tipo", type="string", nullable=true)
     */
    private $cie10Tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_estado", type="string", nullable=true)
     */
    private $cie10Estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_codigo", type="string", nullable=true)
     */
    private $cie10Codigo;


    //codigo de relacion del catalogo cie10
    /**
     *
     * @ORM\OneToMany(targetEntity="ShcpAboPreproced3", mappedBy="idCie10", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $catcie10;

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
     * Set cie10Nombre
     *
     * @param string $cie10Nombre
     * @return ShcpAboCtlCie10
     */
    public function setCie10Nombre($cie10Nombre)
    {
        $this->cie10Nombre = $cie10Nombre;

        return $this;
    }

    /**
     * Get cie10Nombre
     *
     * @return string 
     */
    public function getCie10Nombre()
    {
        return $this->cie10Nombre;
    }

    /**
     * Set cie10Tipo
     *
     * @param string $cie10Tipo
     * @return ShcpAboCtlCie10
     */
    public function setCie10Tipo($cie10Tipo)
    {
        $this->cie10Tipo = $cie10Tipo;

        return $this;
    }

    /**
     * Get cie10Tipo
     *
     * @return string 
     */
    public function getCie10Tipo()
    {
        return $this->cie10Tipo;
    }

    /**
     * Set cie10Estado
     *
     * @param string $cie10Estado
     * @return ShcpAboCtlCie10
     */
    public function setCie10Estado($cie10Estado)
    {
        $this->cie10Estado = $cie10Estado;

        return $this;
    }

    /**
     * Get cie10Estado
     *
     * @return string 
     */
    public function getCie10Estado()
    {
        return $this->cie10Estado;
    }

    /**
     * Set cie10Codigo
     *
     * @param string $cie10Codigo
     * @return ShcpAboCtlCie10
     */
    public function setCie10Codigo($cie10Codigo)
    {
        $this->cie10Codigo = $cie10Codigo;

        return $this;
    }

    /**
     * Get cie10Codigo
     *
     * @return string 
     */
    public function getCie10Codigo()
    {
        return $this->cie10Codigo;
    }
    
    //aca va el to string
    public function __toString() {
	      return $this->cie10Nombre;
	  }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catcie10 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add catcie10
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced3 $catcie10
     * @return ShcpAboCtlCie10
     */
    public function addCatcie10(\Minsal\shcpBundle\Entity\ShcpAboPreproced3 $catcie10)
    {
        $this->catcie10[] = $catcie10;

        return $this;
    }

    /**
     * Remove catcie10
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced3 $catcie10
     */
    public function removeCatcie10(\Minsal\shcpBundle\Entity\ShcpAboPreproced3 $catcie10)
    {
        $this->catcie10->removeElement($catcie10);
    }

    /**
     * Get catcie10
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCatcie10()
    {
        return $this->catcie10;
    }
}
