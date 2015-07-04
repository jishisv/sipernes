<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTrazaDiagnostico
 *
 * @ORM\Table(name="enf_traza_diagnostico", indexes={@ORM\Index(name="IDX_EC88A3D3A48933A", columns={"id_registro_diag"})})
 * @ORM\Entity
 */
class EnfTrazaDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enf_traza_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_tra_dia", type="string", length=40, nullable=true)
     */
    private $usuarioTraDia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_tra_dia", type="datetime", nullable=true)
     */
    private $fechaIngresoTraDia;

    /**
     * @var string
     *
     * @ORM\Column(name="cambio_tra_diag", type="string", length=200, nullable=true)
     */
    private $cambioTraDiag;

    /**
     * @var \EnfMtlDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="EnfMtlDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_diag", referencedColumnName="id")
     * })
     */
    private $idRegistroDiag;



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
     * Set usuarioTraDia
     *
     * @param string $usuarioTraDia
     * @return EnfTrazaDiagnostico
     */
    public function setUsuarioTraDia($usuarioTraDia)
    {
        $this->usuarioTraDia = $usuarioTraDia;

        return $this;
    }

    /**
     * Get usuarioTraDia
     *
     * @return string 
     */
    public function getUsuarioTraDia()
    {
        return $this->usuarioTraDia;
    }

    /**
     * Set fechaIngresoTraDia
     *
     * @param \DateTime $fechaIngresoTraDia
     * @return EnfTrazaDiagnostico
     */
    public function setFechaIngresoTraDia($fechaIngresoTraDia)
    {
        $this->fechaIngresoTraDia = $fechaIngresoTraDia;

        return $this;
    }

    /**
     * Get fechaIngresoTraDia
     *
     * @return \DateTime 
     */
    public function getFechaIngresoTraDia()
    {
        return $this->fechaIngresoTraDia;
    }

    /**
     * Set cambioTraDiag
     *
     * @param string $cambioTraDiag
     * @return EnfTrazaDiagnostico
     */
    public function setCambioTraDiag($cambioTraDiag)
    {
        $this->cambioTraDiag = $cambioTraDiag;

        return $this;
    }

    /**
     * Get cambioTraDiag
     *
     * @return string 
     */
    public function getCambioTraDiag()
    {
        return $this->cambioTraDiag;
    }

    /**
     * Set idRegistroDiag
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlDiagnostico $idRegistroDiag
     * @return EnfTrazaDiagnostico
     */
    public function setIdRegistroDiag(\Minsal\SipernesBundle\Entity\EnfMtlDiagnostico $idRegistroDiag = null)
    {
        $this->idRegistroDiag = $idRegistroDiag;

        return $this;
    }

    /**
     * Get idRegistroDiag
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlDiagnostico 
     */
    public function getIdRegistroDiag()
    {
        return $this->idRegistroDiag;
    }
    
    public function __toString() {
        return '';
    }
}
