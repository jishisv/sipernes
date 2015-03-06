<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabEstadosdetallesolicitud
 *
 * @ORM\Table(name="lab_estadosdetallesolicitud")
 * @ORM\Entity
 */
class LabEstadosdetallesolicitud
{
    /**
     * @var string
     *
     * @ORM\Column(name="idestadodetalle", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_estadosdetallesolicitud_idestadodetalle_seq", allocationSize=1, initialValue=1)
     */
    private $idestadodetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=40, nullable=true)
     */
    private $descripcion;



    /**
     * Get idestadodetalle
     *
     * @return string 
     */
    public function getIdestadodetalle()
    {
        return $this->idestadodetalle;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return LabEstadosdetallesolicitud
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
}
