<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfCtlTipoComponente
 *
 * @ORM\Table(name="enf_ctl_tipo_componente")
 * @ORM\Entity(repositoryClass="Minsal\SipernesBundle\Repository\CatalogoTipoCompRepository")
 */
class EnfCtlTipoComponente
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_ctl_tipo_componente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_componente1", type="string", length=50, nullable=true)
     */
    private $nombreComponente1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_compo", type="date", nullable=true)
     */
    private $fechaIngresoCompo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion_compo", type="date", nullable=true)
     */
    private $fechaModificacionCompo;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ctl_comp", type="string", length=40, nullable=true)
     */
    private $usuarioCtlComp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_tcl_t_comp", type="boolean", nullable=true)
     */
    private $estadoTclTComp;



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreComponente1
     *
     * @param string $nombreComponente1
     * @return EnfCtlTipoComponente
     */
    public function setNombreComponente1($nombreComponente1)
    {
        $this->nombreComponente1 = $nombreComponente1;

        return $this;
    }

    /**
     * Get nombreComponente1
     *
     * @return string 
     */
    public function getNombreComponente1()
    {
        return $this->nombreComponente1;
    }

    /**
     * Set fechaIngresoCompo
     *
     * @param \DateTime $fechaIngresoCompo
     * @return EnfCtlTipoComponente
     */
    public function setFechaIngresoCompo($fechaIngresoCompo)
    {
        $this->fechaIngresoCompo = $fechaIngresoCompo;

        return $this;
    }

    /**
     * Get fechaIngresoCompo
     *
     * @return \DateTime 
     */
    public function getFechaIngresoCompo()
    {
        return $this->fechaIngresoCompo;
    }

    /**
     * Set fechaModificacionCompo
     *
     * @param \DateTime $fechaModificacionCompo
     * @return EnfCtlTipoComponente
     */
    public function setFechaModificacionCompo($fechaModificacionCompo)
    {
        $this->fechaModificacionCompo = $fechaModificacionCompo;

        return $this;
    }

    /**
     * Get fechaModificacionCompo
     *
     * @return \DateTime 
     */
    public function getFechaModificacionCompo()
    {
        return $this->fechaModificacionCompo;
    }

    /**
     * Set usuarioCtlComp
     *
     * @param string $usuarioCtlComp
     * @return EnfCtlTipoComponente
     */
    public function setUsuarioCtlComp($usuarioCtlComp)
    {
        $this->usuarioCtlComp = $usuarioCtlComp;

        return $this;
    }

    /**
     * Get usuarioCtlComp
     *
     * @return string 
     */
    public function getUsuarioCtlComp()
    {
        return $this->usuarioCtlComp;
    }

    /**
     * Set estadoTclTComp
     *
     * @param boolean $estadoTclTComp
     * @return EnfCtlTipoComponente
     */
    public function setEstadoTclTComp($estadoTclTComp)
    {
        $this->estadoTclTComp = $estadoTclTComp;

        return $this;
    }

    /**
     * Get estadoTclTComp
     *
     * @return boolean 
     */
    public function getEstadoTclTComp()
    {
        return $this->estadoTclTComp;
    }
    
    public function __toString() {
    return $this->nombreComponente1 ? $this->nombreComponente1 : '';
    }
}
