<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabRecepcionmuestra
 *
 * @ORM\Table(name="lab_recepcionmuestra", indexes={@ORM\Index(name="IDX_80BBE09875BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_80BBE09813B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_80BBE098F06DFE3D", columns={"idsolicitudestudio"})})
 * @ORM\Entity
 */
class LabRecepcionmuestra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_recepcionmuestra_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeromuestra", type="integer", nullable=true)
     */
    private $numeromuestra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharecepcion", type="date", nullable=true)
     */
    private $fecharecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacita", type="date", nullable=false)
     */
    private $fechacita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=250, nullable=true)
     */
    private $observacion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestablecimiento", referencedColumnName="id")
     * })
     */
    private $idestablecimiento;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \SecSolicitudestudios
     *
     * @ORM\ManyToOne(targetEntity="SecSolicitudestudios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsolicitudestudio", referencedColumnName="id")
     * })
     */
    private $idsolicitudestudio;



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
     * Set numeromuestra
     *
     * @param integer $numeromuestra
     * @return LabRecepcionmuestra
     */
    public function setNumeromuestra($numeromuestra)
    {
        $this->numeromuestra = $numeromuestra;

        return $this;
    }

    /**
     * Get numeromuestra
     *
     * @return integer 
     */
    public function getNumeromuestra()
    {
        return $this->numeromuestra;
    }

    /**
     * Set fecharecepcion
     *
     * @param \DateTime $fecharecepcion
     * @return LabRecepcionmuestra
     */
    public function setFecharecepcion($fecharecepcion)
    {
        $this->fecharecepcion = $fecharecepcion;

        return $this;
    }

    /**
     * Get fecharecepcion
     *
     * @return \DateTime 
     */
    public function getFecharecepcion()
    {
        return $this->fecharecepcion;
    }

    /**
     * Set fechacita
     *
     * @param \DateTime $fechacita
     * @return LabRecepcionmuestra
     */
    public function setFechacita($fechacita)
    {
        $this->fechacita = $fechacita;

        return $this;
    }

    /**
     * Get fechacita
     *
     * @return \DateTime 
     */
    public function getFechacita()
    {
        return $this->fechacita;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabRecepcionmuestra
     */
    public function setFechahorareg($fechahorareg)
    {
        $this->fechahorareg = $fechahorareg;

        return $this;
    }

    /**
     * Get fechahorareg
     *
     * @return \DateTime 
     */
    public function getFechahorareg()
    {
        return $this->fechahorareg;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return LabRecepcionmuestra
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabRecepcionmuestra
     */
    public function setIdestablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento = null)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return LabRecepcionmuestra
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idsolicitudestudio
     *
     * @param \Minsal\shcpBundle\Entity\SecSolicitudestudios $idsolicitudestudio
     * @return LabRecepcionmuestra
     */
    public function setIdsolicitudestudio(\Minsal\shcpBundle\Entity\SecSolicitudestudios $idsolicitudestudio = null)
    {
        $this->idsolicitudestudio = $idsolicitudestudio;

        return $this;
    }

    /**
     * Get idsolicitudestudio
     *
     * @return \Minsal\shcpBundle\Entity\SecSolicitudestudios 
     */
    public function getIdsolicitudestudio()
    {
        return $this->idsolicitudestudio;
    }
}
