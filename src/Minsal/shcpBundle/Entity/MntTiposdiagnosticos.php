<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntTiposdiagnosticos
 *
 * @ORM\Table(name="mnt_tiposdiagnosticos")
 * @ORM\Entity
 */
class MntTiposdiagnosticos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtipodiagnostico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_tiposdiagnosticos_idtipodiagnostico_seq", allocationSize=1, initialValue=1)
     */
    private $idtipodiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion = '0';



    /**
     * Get idtipodiagnostico
     *
     * @return integer 
     */
    public function getIdtipodiagnostico()
    {
        return $this->idtipodiagnostico;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return MntTiposdiagnosticos
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
