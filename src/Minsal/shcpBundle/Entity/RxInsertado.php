<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxInsertado
 *
 * @ORM\Table(name="rx_insertado", indexes={@ORM\Index(name="IDX_FD849147777B3A01", columns={"id_examen"})})
 * @ORM\Entity
 */
class RxInsertado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_insertado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="indicacion", type="text", nullable=true)
     */
    private $indicacion;

    /**
     * @var \RxExamen
     *
     * @ORM\ManyToOne(targetEntity="RxExamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_examen", referencedColumnName="id")
     * })
     */
    private $idExamen;



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
     * Set indicacion
     *
     * @param string $indicacion
     * @return RxInsertado
     */
    public function setIndicacion($indicacion)
    {
        $this->indicacion = $indicacion;

        return $this;
    }

    /**
     * Get indicacion
     *
     * @return string 
     */
    public function getIndicacion()
    {
        return $this->indicacion;
    }

    /**
     * Set idExamen
     *
     * @param \Minsal\shcpBundle\Entity\RxExamen $idExamen
     * @return RxInsertado
     */
    public function setIdExamen(\Minsal\shcpBundle\Entity\RxExamen $idExamen = null)
    {
        $this->idExamen = $idExamen;

        return $this;
    }

    /**
     * Get idExamen
     *
     * @return \Minsal\shcpBundle\Entity\RxExamen 
     */
    public function getIdExamen()
    {
        return $this->idExamen;
    }
}
