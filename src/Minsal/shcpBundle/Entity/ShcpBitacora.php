<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpBitacora
 *
 * @ORM\Table(name="shcp_bitacora", indexes={@ORM\Index(name="IDX_412596A86B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class ShcpBitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_bitacora_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bit_operacion", type="string", nullable=true)
     */
    private $bitOperacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bit_fecha_hora", type="date", nullable=true)
     */
    private $bitFechaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="bit_tabla_afectada", type="string", length=50, nullable=true)
     */
    private $bitTablaAfectada;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set bitOperacion
     *
     * @param string $bitOperacion
     * @return ShcpBitacora
     */
    public function setBitOperacion($bitOperacion)
    {
        $this->bitOperacion = $bitOperacion;

        return $this;
    }

    /**
     * Get bitOperacion
     *
     * @return string 
     */
    public function getBitOperacion()
    {
        return $this->bitOperacion;
    }

    /**
     * Set bitFechaHora
     *
     * @param \DateTime $bitFechaHora
     * @return ShcpBitacora
     */
    public function setBitFechaHora($bitFechaHora)
    {
        $this->bitFechaHora = $bitFechaHora;

        return $this;
    }

    /**
     * Get bitFechaHora
     *
     * @return \DateTime 
     */
    public function getBitFechaHora()
    {
        return $this->bitFechaHora;
    }

    /**
     * Set bitTablaAfectada
     *
     * @param string $bitTablaAfectada
     * @return ShcpBitacora
     */
    public function setBitTablaAfectada($bitTablaAfectada)
    {
        $this->bitTablaAfectada = $bitTablaAfectada;

        return $this;
    }

    /**
     * Get bitTablaAfectada
     *
     * @return string 
     */
    public function getBitTablaAfectada()
    {
        return $this->bitTablaAfectada;
    }

    /**
     * Set idUser
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUser
     * @return ShcpBitacora
     */
    public function setIdUser(\Minsal\shcpBundle\Entity\FosUserUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
