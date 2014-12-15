<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfHistoricoNota
 *
 * @ORM\Table(name="enf_historico_nota", indexes={@ORM\Index(name="IDX_ECD164B0BFAE4CCD", columns={"id_registro_nota"})})
 * @ORM\Entity
 */
class EnfHistoricoNota
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_historico_nota_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_hist_nota", type="string", length=500, nullable=true)
     */
    private $observacionHistNota;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_hist_nota", type="string", length=40, nullable=true)
     */
    private $usuarioHistNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod_hist_nota", type="date", nullable=true)
     */
    private $fechaModHistNota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_hist_nota", type="boolean", nullable=true)
     */
    private $estadoHistNota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_hist_notas", type="date", nullable=true)
     */
    private $fechaIngresoHistNotas;

    /**
     * @var \EnfMtlNota
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlNota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_nota", referencedColumnName="id")
     * })
     */
    private $idRegistroNota;



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
     * Set observacionHistNota
     *
     * @param string $observacionHistNota
     * @return EnfHistoricoNota
     */
    public function setObservacionHistNota($observacionHistNota)
    {
        $this->observacionHistNota = $observacionHistNota;

        return $this;
    }

    /**
     * Get observacionHistNota
     *
     * @return string 
     */
    public function getObservacionHistNota()
    {
        return $this->observacionHistNota;
    }

    /**
     * Set usuarioHistNota
     *
     * @param string $usuarioHistNota
     * @return EnfHistoricoNota
     */
    public function setUsuarioHistNota($usuarioHistNota)
    {
        $this->usuarioHistNota = $usuarioHistNota;

        return $this;
    }

    /**
     * Get usuarioHistNota
     *
     * @return string 
     */
    public function getUsuarioHistNota()
    {
        return $this->usuarioHistNota;
    }

    /**
     * Set fechaModHistNota
     *
     * @param \DateTime $fechaModHistNota
     * @return EnfHistoricoNota
     */
    public function setFechaModHistNota($fechaModHistNota)
    {
        $this->fechaModHistNota = $fechaModHistNota;

        return $this;
    }

    /**
     * Get fechaModHistNota
     *
     * @return \DateTime 
     */
    public function getFechaModHistNota()
    {
        return $this->fechaModHistNota;
    }

    /**
     * Set estadoHistNota
     *
     * @param boolean $estadoHistNota
     * @return EnfHistoricoNota
     */
    public function setEstadoHistNota($estadoHistNota)
    {
        $this->estadoHistNota = $estadoHistNota;

        return $this;
    }

    /**
     * Get estadoHistNota
     *
     * @return boolean 
     */
    public function getEstadoHistNota()
    {
        return $this->estadoHistNota;
    }

    /**
     * Set fechaIngresoHistNotas
     *
     * @param \DateTime $fechaIngresoHistNotas
     * @return EnfHistoricoNota
     */
    public function setFechaIngresoHistNotas($fechaIngresoHistNotas)
    {
        $this->fechaIngresoHistNotas = $fechaIngresoHistNotas;

        return $this;
    }

    /**
     * Get fechaIngresoHistNotas
     *
     * @return \DateTime 
     */
    public function getFechaIngresoHistNotas()
    {
        return $this->fechaIngresoHistNotas;
    }

    /**
     * Set idRegistroNota
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota
     * @return EnfHistoricoNota
     */
    public function setIdRegistroNota(\Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota = null)
    {
        $this->idRegistroNota = $idRegistroNota;

        return $this;
    }

    /**
     * Get idRegistroNota
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlNota 
     */
    public function getIdRegistroNota()
    {
        return $this->idRegistroNota;
    }
}
