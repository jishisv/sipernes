<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntFuentefinanciamiento
 *
 * @ORM\Table(name="mnt_fuentefinanciamiento")
 * @ORM\Entity
 */
class MntFuentefinanciamiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfuentefinanciamiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_fuentefinanciamiento_idfuentefinanciamiento_seq", allocationSize=1, initialValue=1)
     */
    private $idfuentefinanciamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;



    /**
     * Get idfuentefinanciamiento
     *
     * @return integer 
     */
    public function getIdfuentefinanciamiento()
    {
        return $this->idfuentefinanciamiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return MntFuentefinanciamiento
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
}
