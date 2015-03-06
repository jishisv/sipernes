<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboProced1
 *
 * @ORM\Table(name="shcp_abo_proced1", indexes={@ORM\Index(name="IDX_5EB187B9CDD53299", columns={"id_admin_proceden"})})
 * @ORM\Entity
 */
class ShcpAboProced1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_proced1_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proc1_fecha", type="date", nullable=true)
     */
    private $proc1Fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proc1_hora_min", type="time", nullable=true)
     */
    private $proc1HoraMin;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_postagland", type="string", nullable=true)
     */
    private $proc1Postagland;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_dilatador", type="string", nullable=true)
     */
    private $proc1Dilatador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proc1_hrs_dilatacion", type="time", nullable=true)
     */
    private $proc1HrsDilatacion;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_evac_uterina", type="string", nullable=true)
     */
    private $proc1EvacUterina;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_ambiente", type="string", nullable=true)
     */
    private $proc1Ambiente;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_medicina_reci", type="string", nullable=true)
     */
    private $proc1MedicinaReci;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_otra_med1", type="string", nullable=true)
     */
    private $proc1OtraMed1;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_otra_med2", type="string", nullable=true)
     */
    private $proc1OtraMed2;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_otra_med3", type="string", nullable=true)
     */
    private $proc1OtraMed3;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_otra_med4", type="string", nullable=true)
     */
    private $proc1OtraMed4;

    /**
     * @var string
     *
     * @ORM\Column(name="proc1_score_dolor", type="string", nullable=true)
     */
    private $proc1ScoreDolor;

    /**
     * @var \ShcpAboAdmisionProceden
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboAdmisionProceden")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admin_proceden", referencedColumnName="id")
     * })
     */
    private $idAdminProceden;



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
     * Set proc1Fecha
     *
     * @param \DateTime $proc1Fecha
     * @return ShcpAboProced1
     */
    public function setProc1Fecha($proc1Fecha)
    {
        $this->proc1Fecha = $proc1Fecha;

        return $this;
    }

    /**
     * Get proc1Fecha
     *
     * @return \DateTime 
     */
    public function getProc1Fecha()
    {
        return $this->proc1Fecha;
    }

    /**
     * Set proc1HoraMin
     *
     * @param \DateTime $proc1HoraMin
     * @return ShcpAboProced1
     */
    public function setProc1HoraMin($proc1HoraMin)
    {
        $this->proc1HoraMin = $proc1HoraMin;

        return $this;
    }

    /**
     * Get proc1HoraMin
     *
     * @return \DateTime 
     */
    public function getProc1HoraMin()
    {
        return $this->proc1HoraMin;
    }

    /**
     * Set proc1Postagland
     *
     * @param string $proc1Postagland
     * @return ShcpAboProced1
     */
    public function setProc1Postagland($proc1Postagland)
    {
        $this->proc1Postagland = $proc1Postagland;

        return $this;
    }

    /**
     * Get proc1Postagland
     *
     * @return string 
     */
    public function getProc1Postagland()
    {
        return $this->proc1Postagland;
    }

    /**
     * Set proc1Dilatador
     *
     * @param string $proc1Dilatador
     * @return ShcpAboProced1
     */
    public function setProc1Dilatador($proc1Dilatador)
    {
        $this->proc1Dilatador = $proc1Dilatador;

        return $this;
    }

    /**
     * Get proc1Dilatador
     *
     * @return string 
     */
    public function getProc1Dilatador()
    {
        return $this->proc1Dilatador;
    }

    /**
     * Set proc1HrsDilatacion
     *
     * @param \DateTime $proc1HrsDilatacion
     * @return ShcpAboProced1
     */
    public function setProc1HrsDilatacion($proc1HrsDilatacion)
    {
        $this->proc1HrsDilatacion = $proc1HrsDilatacion;

        return $this;
    }

    /**
     * Get proc1HrsDilatacion
     *
     * @return \DateTime 
     */
    public function getProc1HrsDilatacion()
    {
        return $this->proc1HrsDilatacion;
    }

    /**
     * Set proc1EvacUterina
     *
     * @param string $proc1EvacUterina
     * @return ShcpAboProced1
     */
    public function setProc1EvacUterina($proc1EvacUterina)
    {
        $this->proc1EvacUterina = $proc1EvacUterina;

        return $this;
    }

    /**
     * Get proc1EvacUterina
     *
     * @return string 
     */
    public function getProc1EvacUterina()
    {
        return $this->proc1EvacUterina;
    }

    /**
     * Set proc1Ambiente
     *
     * @param string $proc1Ambiente
     * @return ShcpAboProced1
     */
    public function setProc1Ambiente($proc1Ambiente)
    {
        $this->proc1Ambiente = $proc1Ambiente;

        return $this;
    }

    /**
     * Get proc1Ambiente
     *
     * @return string 
     */
    public function getProc1Ambiente()
    {
        return $this->proc1Ambiente;
    }

    /**
     * Set proc1MedicinaReci
     *
     * @param string $proc1MedicinaReci
     * @return ShcpAboProced1
     */
    public function setProc1MedicinaReci($proc1MedicinaReci)
    {
        $this->proc1MedicinaReci = $proc1MedicinaReci;

        return $this;
    }

    /**
     * Get proc1MedicinaReci
     *
     * @return string 
     */
    public function getProc1MedicinaReci()
    {
        return $this->proc1MedicinaReci;
    }

    /**
     * Set proc1OtraMed1
     *
     * @param string $proc1OtraMed1
     * @return ShcpAboProced1
     */
    public function setProc1OtraMed1($proc1OtraMed1)
    {
        $this->proc1OtraMed1 = $proc1OtraMed1;

        return $this;
    }

    /**
     * Get proc1OtraMed1
     *
     * @return string 
     */
    public function getProc1OtraMed1()
    {
        return $this->proc1OtraMed1;
    }

    /**
     * Set proc1OtraMed2
     *
     * @param string $proc1OtraMed2
     * @return ShcpAboProced1
     */
    public function setProc1OtraMed2($proc1OtraMed2)
    {
        $this->proc1OtraMed2 = $proc1OtraMed2;

        return $this;
    }

    /**
     * Get proc1OtraMed2
     *
     * @return string 
     */
    public function getProc1OtraMed2()
    {
        return $this->proc1OtraMed2;
    }

    /**
     * Set proc1OtraMed3
     *
     * @param string $proc1OtraMed3
     * @return ShcpAboProced1
     */
    public function setProc1OtraMed3($proc1OtraMed3)
    {
        $this->proc1OtraMed3 = $proc1OtraMed3;

        return $this;
    }

    /**
     * Get proc1OtraMed3
     *
     * @return string 
     */
    public function getProc1OtraMed3()
    {
        return $this->proc1OtraMed3;
    }

    /**
     * Set proc1OtraMed4
     *
     * @param string $proc1OtraMed4
     * @return ShcpAboProced1
     */
    public function setProc1OtraMed4($proc1OtraMed4)
    {
        $this->proc1OtraMed4 = $proc1OtraMed4;

        return $this;
    }

    /**
     * Get proc1OtraMed4
     *
     * @return string 
     */
    public function getProc1OtraMed4()
    {
        return $this->proc1OtraMed4;
    }

    /**
     * Set proc1ScoreDolor
     *
     * @param string $proc1ScoreDolor
     * @return ShcpAboProced1
     */
    public function setProc1ScoreDolor($proc1ScoreDolor)
    {
        $this->proc1ScoreDolor = $proc1ScoreDolor;

        return $this;
    }

    /**
     * Get proc1ScoreDolor
     *
     * @return string 
     */
    public function getProc1ScoreDolor()
    {
        return $this->proc1ScoreDolor;
    }

    /**
     * Set idAdminProceden
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden
     * @return ShcpAboProced1
     */
    public function setIdAdminProceden(\Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden = null)
    {
        $this->idAdminProceden = $idAdminProceden;

        return $this;
    }

    /**
     * Get idAdminProceden
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden 
     */
    public function getIdAdminProceden()
    {
        return $this->idAdminProceden;
    }
}
