<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxRechazada
 *
 * @ORM\Table(name="rx_rechazada", indexes={@ORM\Index(name="IDX_751C69CB6682EAB5", columns={"id_tamanio_pelicula"})})
 * @ORM\Entity
 */
class RxRechazada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_rechazada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_detalle_solicitud", type="integer", nullable=true)
     */
    private $idDetalleSolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="buenas", type="integer", nullable=true)
     */
    private $buenas;

    /**
     * @var integer
     *
     * @ORM\Column(name="muy_penetrada", type="integer", nullable=true)
     */
    private $muyPenetrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="poco_penetrada", type="integer", nullable=true)
     */
    private $pocoPenetrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="mal_centrada", type="integer", nullable=true)
     */
    private $malCentrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="movida", type="integer", nullable=true)
     */
    private $movida;

    /**
     * @var integer
     *
     * @ORM\Column(name="falla_equipo", type="integer", nullable=true)
     */
    private $fallaEquipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="falla_revelado", type="integer", nullable=true)
     */
    private $fallaRevelado;

    /**
     * @var integer
     *
     * @ORM\Column(name="velada", type="integer", nullable=true)
     */
    private $velada;

    /**
     * @var integer
     *
     * @ORM\Column(name="con_artefacto", type="integer", nullable=true)
     */
    private $conArtefacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_expuesta", type="integer", nullable=true)
     */
    private $noExpuesta;

    /**
     * @var integer
     *
     * @ORM\Column(name="mal_preparado", type="integer", nullable=true)
     */
    private $malPreparado;

    /**
     * @var \RxTamanioPelicula
     *
     * @ORM\ManyToOne(targetEntity="RxTamanioPelicula")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tamanio_pelicula", referencedColumnName="id")
     * })
     */
    private $idTamanioPelicula;



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
     * Set idDetalleSolicitud
     *
     * @param integer $idDetalleSolicitud
     * @return RxRechazada
     */
    public function setIdDetalleSolicitud($idDetalleSolicitud)
    {
        $this->idDetalleSolicitud = $idDetalleSolicitud;

        return $this;
    }

    /**
     * Get idDetalleSolicitud
     *
     * @return integer 
     */
    public function getIdDetalleSolicitud()
    {
        return $this->idDetalleSolicitud;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RxRechazada
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set buenas
     *
     * @param integer $buenas
     * @return RxRechazada
     */
    public function setBuenas($buenas)
    {
        $this->buenas = $buenas;

        return $this;
    }

    /**
     * Get buenas
     *
     * @return integer 
     */
    public function getBuenas()
    {
        return $this->buenas;
    }

    /**
     * Set muyPenetrada
     *
     * @param integer $muyPenetrada
     * @return RxRechazada
     */
    public function setMuyPenetrada($muyPenetrada)
    {
        $this->muyPenetrada = $muyPenetrada;

        return $this;
    }

    /**
     * Get muyPenetrada
     *
     * @return integer 
     */
    public function getMuyPenetrada()
    {
        return $this->muyPenetrada;
    }

    /**
     * Set pocoPenetrada
     *
     * @param integer $pocoPenetrada
     * @return RxRechazada
     */
    public function setPocoPenetrada($pocoPenetrada)
    {
        $this->pocoPenetrada = $pocoPenetrada;

        return $this;
    }

    /**
     * Get pocoPenetrada
     *
     * @return integer 
     */
    public function getPocoPenetrada()
    {
        return $this->pocoPenetrada;
    }

    /**
     * Set malCentrada
     *
     * @param integer $malCentrada
     * @return RxRechazada
     */
    public function setMalCentrada($malCentrada)
    {
        $this->malCentrada = $malCentrada;

        return $this;
    }

    /**
     * Get malCentrada
     *
     * @return integer 
     */
    public function getMalCentrada()
    {
        return $this->malCentrada;
    }

    /**
     * Set movida
     *
     * @param integer $movida
     * @return RxRechazada
     */
    public function setMovida($movida)
    {
        $this->movida = $movida;

        return $this;
    }

    /**
     * Get movida
     *
     * @return integer 
     */
    public function getMovida()
    {
        return $this->movida;
    }

    /**
     * Set fallaEquipo
     *
     * @param integer $fallaEquipo
     * @return RxRechazada
     */
    public function setFallaEquipo($fallaEquipo)
    {
        $this->fallaEquipo = $fallaEquipo;

        return $this;
    }

    /**
     * Get fallaEquipo
     *
     * @return integer 
     */
    public function getFallaEquipo()
    {
        return $this->fallaEquipo;
    }

    /**
     * Set fallaRevelado
     *
     * @param integer $fallaRevelado
     * @return RxRechazada
     */
    public function setFallaRevelado($fallaRevelado)
    {
        $this->fallaRevelado = $fallaRevelado;

        return $this;
    }

    /**
     * Get fallaRevelado
     *
     * @return integer 
     */
    public function getFallaRevelado()
    {
        return $this->fallaRevelado;
    }

    /**
     * Set velada
     *
     * @param integer $velada
     * @return RxRechazada
     */
    public function setVelada($velada)
    {
        $this->velada = $velada;

        return $this;
    }

    /**
     * Get velada
     *
     * @return integer 
     */
    public function getVelada()
    {
        return $this->velada;
    }

    /**
     * Set conArtefacto
     *
     * @param integer $conArtefacto
     * @return RxRechazada
     */
    public function setConArtefacto($conArtefacto)
    {
        $this->conArtefacto = $conArtefacto;

        return $this;
    }

    /**
     * Get conArtefacto
     *
     * @return integer 
     */
    public function getConArtefacto()
    {
        return $this->conArtefacto;
    }

    /**
     * Set noExpuesta
     *
     * @param integer $noExpuesta
     * @return RxRechazada
     */
    public function setNoExpuesta($noExpuesta)
    {
        $this->noExpuesta = $noExpuesta;

        return $this;
    }

    /**
     * Get noExpuesta
     *
     * @return integer 
     */
    public function getNoExpuesta()
    {
        return $this->noExpuesta;
    }

    /**
     * Set malPreparado
     *
     * @param integer $malPreparado
     * @return RxRechazada
     */
    public function setMalPreparado($malPreparado)
    {
        $this->malPreparado = $malPreparado;

        return $this;
    }

    /**
     * Get malPreparado
     *
     * @return integer 
     */
    public function getMalPreparado()
    {
        return $this->malPreparado;
    }

    /**
     * Set idTamanioPelicula
     *
     * @param \Minsal\shcpBundle\Entity\RxTamanioPelicula $idTamanioPelicula
     * @return RxRechazada
     */
    public function setIdTamanioPelicula(\Minsal\shcpBundle\Entity\RxTamanioPelicula $idTamanioPelicula = null)
    {
        $this->idTamanioPelicula = $idTamanioPelicula;

        return $this;
    }

    /**
     * Get idTamanioPelicula
     *
     * @return \Minsal\shcpBundle\Entity\RxTamanioPelicula 
     */
    public function getIdTamanioPelicula()
    {
        return $this->idTamanioPelicula;
    }
}
