<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxExamen
 *
 * @ORM\Table(name="rx_examen", indexes={@ORM\Index(name="IDX_72FAC2C95CB4216A", columns={"id_area"})})
 * @ORM\Entity
 */
class RxExamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_examen_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_examen", type="string", length=6, nullable=false)
     */
    private $codigoExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_examen", type="string", length=250, nullable=true)
     */
    private $nombreExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitado", type="string", length=1, nullable=true)
     */
    private $habilitado;

    /**
     * @var \RxArea
     *
     * @ORM\ManyToOne(targetEntity="RxArea")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area", referencedColumnName="id")
     * })
     */
    private $idArea;



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
     * Set codigoExamen
     *
     * @param string $codigoExamen
     * @return RxExamen
     */
    public function setCodigoExamen($codigoExamen)
    {
        $this->codigoExamen = $codigoExamen;

        return $this;
    }

    /**
     * Get codigoExamen
     *
     * @return string 
     */
    public function getCodigoExamen()
    {
        return $this->codigoExamen;
    }

    /**
     * Set nombreExamen
     *
     * @param string $nombreExamen
     * @return RxExamen
     */
    public function setNombreExamen($nombreExamen)
    {
        $this->nombreExamen = $nombreExamen;

        return $this;
    }

    /**
     * Get nombreExamen
     *
     * @return string 
     */
    public function getNombreExamen()
    {
        return $this->nombreExamen;
    }

    /**
     * Set habilitado
     *
     * @param string $habilitado
     * @return RxExamen
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return string 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set idArea
     *
     * @param \Minsal\shcpBundle\Entity\RxArea $idArea
     * @return RxExamen
     */
    public function setIdArea(\Minsal\shcpBundle\Entity\RxArea $idArea = null)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return \Minsal\shcpBundle\Entity\RxArea 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }
}
