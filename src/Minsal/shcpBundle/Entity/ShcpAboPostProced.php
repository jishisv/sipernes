<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboPostProced
 *
 * @ORM\Table(name="shcp_abo_post_proced", indexes={@ORM\Index(name="IDX_CA15838BCDD53299", columns={"id_admin_proceden"})})
 * @ORM\Entity
 */
class ShcpAboPostProced
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_post_proced_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postp_fecha_fin", type="date", nullable=true)
     */
    private $postpFechaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_procedimiento_", type="time", nullable=true)
     */
    private $postProcedimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_consej_cuid_bas", type="string", nullable=true)
     */
    private $postpConsejCuidBas;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_resp_cuid_bas", type="string", length=30, nullable=true)
     */
    private $postpRespCuidBas;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_consej_sig_alarma", type="string", nullable=true)
     */
    private $postpConsejSigAlarma;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_resp_sig_alarma", type="string", length=30, nullable=true)
     */
    private $postpRespSigAlarma;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_consej_anticon", type="string", nullable=true)
     */
    private $postpConsejAnticon;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_resp_anticon", type="string", length=30, nullable=true)
     */
    private $postpRespAnticon;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_cita_seg", type="string", nullable=true)
     */
    private $postpCitaSeg;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_resp_cita_seg", type="string", length=30, nullable=true)
     */
    private $postpRespCitaSeg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postp_fec_ctrl_seg", type="date", nullable=true)
     */
    private $postpFecCtrlSeg;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_infecc_geni_pelv", type="string", nullable=true)
     */
    private $postpInfeccGeniPelv;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_danio_org_pelv", type="string", nullable=true)
     */
    private $postpDanioOrgPelv;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_hemog_tard_exces", type="string", nullable=true)
     */
    private $postpHemogTardExces;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_shock", type="string", nullable=true)
     */
    private $postpShock;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_otra_comp", type="string", nullable=true)
     */
    private $postpOtraComp;

    /**
     * @var string
     *
     * @ORM\Column(name="postp_otra_comp_detalle", type="string", length=30, nullable=true)
     */
    private $postpOtraCompDetalle;

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
     * Set postpFechaFin
     *
     * @param \DateTime $postpFechaFin
     * @return ShcpAboPostProced
     */
    public function setPostpFechaFin($postpFechaFin)
    {
        $this->postpFechaFin = $postpFechaFin;

        return $this;
    }

    /**
     * Get postpFechaFin
     *
     * @return \DateTime 
     */
    public function getPostpFechaFin()
    {
        return $this->postpFechaFin;
    }

    /**
     * Set postProcedimiento
     *
     * @param \DateTime $postProcedimiento
     * @return ShcpAboPostProced
     */
    public function setPostProcedimiento($postProcedimiento)
    {
        $this->postProcedimiento = $postProcedimiento;

        return $this;
    }

    /**
     * Get postProcedimiento
     *
     * @return \DateTime 
     */
    public function getPostProcedimiento()
    {
        return $this->postProcedimiento;
    }

    /**
     * Set postpConsejCuidBas
     *
     * @param string $postpConsejCuidBas
     * @return ShcpAboPostProced
     */
    public function setPostpConsejCuidBas($postpConsejCuidBas)
    {
        $this->postpConsejCuidBas = $postpConsejCuidBas;

        return $this;
    }

    /**
     * Get postpConsejCuidBas
     *
     * @return string 
     */
    public function getPostpConsejCuidBas()
    {
        return $this->postpConsejCuidBas;
    }

    /**
     * Set postpRespCuidBas
     *
     * @param string $postpRespCuidBas
     * @return ShcpAboPostProced
     */
    public function setPostpRespCuidBas($postpRespCuidBas)
    {
        $this->postpRespCuidBas = $postpRespCuidBas;

        return $this;
    }

    /**
     * Get postpRespCuidBas
     *
     * @return string 
     */
    public function getPostpRespCuidBas()
    {
        return $this->postpRespCuidBas;
    }

    /**
     * Set postpConsejSigAlarma
     *
     * @param string $postpConsejSigAlarma
     * @return ShcpAboPostProced
     */
    public function setPostpConsejSigAlarma($postpConsejSigAlarma)
    {
        $this->postpConsejSigAlarma = $postpConsejSigAlarma;

        return $this;
    }

    /**
     * Get postpConsejSigAlarma
     *
     * @return string 
     */
    public function getPostpConsejSigAlarma()
    {
        return $this->postpConsejSigAlarma;
    }

    /**
     * Set postpRespSigAlarma
     *
     * @param string $postpRespSigAlarma
     * @return ShcpAboPostProced
     */
    public function setPostpRespSigAlarma($postpRespSigAlarma)
    {
        $this->postpRespSigAlarma = $postpRespSigAlarma;

        return $this;
    }

    /**
     * Get postpRespSigAlarma
     *
     * @return string 
     */
    public function getPostpRespSigAlarma()
    {
        return $this->postpRespSigAlarma;
    }

    /**
     * Set postpConsejAnticon
     *
     * @param string $postpConsejAnticon
     * @return ShcpAboPostProced
     */
    public function setPostpConsejAnticon($postpConsejAnticon)
    {
        $this->postpConsejAnticon = $postpConsejAnticon;

        return $this;
    }

    /**
     * Get postpConsejAnticon
     *
     * @return string 
     */
    public function getPostpConsejAnticon()
    {
        return $this->postpConsejAnticon;
    }

    /**
     * Set postpRespAnticon
     *
     * @param string $postpRespAnticon
     * @return ShcpAboPostProced
     */
    public function setPostpRespAnticon($postpRespAnticon)
    {
        $this->postpRespAnticon = $postpRespAnticon;

        return $this;
    }

    /**
     * Get postpRespAnticon
     *
     * @return string 
     */
    public function getPostpRespAnticon()
    {
        return $this->postpRespAnticon;
    }

    /**
     * Set postpCitaSeg
     *
     * @param string $postpCitaSeg
     * @return ShcpAboPostProced
     */
    public function setPostpCitaSeg($postpCitaSeg)
    {
        $this->postpCitaSeg = $postpCitaSeg;

        return $this;
    }

    /**
     * Get postpCitaSeg
     *
     * @return string 
     */
    public function getPostpCitaSeg()
    {
        return $this->postpCitaSeg;
    }

    /**
     * Set postpRespCitaSeg
     *
     * @param string $postpRespCitaSeg
     * @return ShcpAboPostProced
     */
    public function setPostpRespCitaSeg($postpRespCitaSeg)
    {
        $this->postpRespCitaSeg = $postpRespCitaSeg;

        return $this;
    }

    /**
     * Get postpRespCitaSeg
     *
     * @return string 
     */
    public function getPostpRespCitaSeg()
    {
        return $this->postpRespCitaSeg;
    }

    /**
     * Set postpFecCtrlSeg
     *
     * @param \DateTime $postpFecCtrlSeg
     * @return ShcpAboPostProced
     */
    public function setPostpFecCtrlSeg($postpFecCtrlSeg)
    {
        $this->postpFecCtrlSeg = $postpFecCtrlSeg;

        return $this;
    }

    /**
     * Get postpFecCtrlSeg
     *
     * @return \DateTime 
     */
    public function getPostpFecCtrlSeg()
    {
        return $this->postpFecCtrlSeg;
    }

    /**
     * Set postpInfeccGeniPelv
     *
     * @param string $postpInfeccGeniPelv
     * @return ShcpAboPostProced
     */
    public function setPostpInfeccGeniPelv($postpInfeccGeniPelv)
    {
        $this->postpInfeccGeniPelv = $postpInfeccGeniPelv;

        return $this;
    }

    /**
     * Get postpInfeccGeniPelv
     *
     * @return string 
     */
    public function getPostpInfeccGeniPelv()
    {
        return $this->postpInfeccGeniPelv;
    }

    /**
     * Set postpDanioOrgPelv
     *
     * @param string $postpDanioOrgPelv
     * @return ShcpAboPostProced
     */
    public function setPostpDanioOrgPelv($postpDanioOrgPelv)
    {
        $this->postpDanioOrgPelv = $postpDanioOrgPelv;

        return $this;
    }

    /**
     * Get postpDanioOrgPelv
     *
     * @return string 
     */
    public function getPostpDanioOrgPelv()
    {
        return $this->postpDanioOrgPelv;
    }

    /**
     * Set postpHemogTardExces
     *
     * @param string $postpHemogTardExces
     * @return ShcpAboPostProced
     */
    public function setPostpHemogTardExces($postpHemogTardExces)
    {
        $this->postpHemogTardExces = $postpHemogTardExces;

        return $this;
    }

    /**
     * Get postpHemogTardExces
     *
     * @return string 
     */
    public function getPostpHemogTardExces()
    {
        return $this->postpHemogTardExces;
    }

    /**
     * Set postpShock
     *
     * @param string $postpShock
     * @return ShcpAboPostProced
     */
    public function setPostpShock($postpShock)
    {
        $this->postpShock = $postpShock;

        return $this;
    }

    /**
     * Get postpShock
     *
     * @return string 
     */
    public function getPostpShock()
    {
        return $this->postpShock;
    }

    /**
     * Set postpOtraComp
     *
     * @param string $postpOtraComp
     * @return ShcpAboPostProced
     */
    public function setPostpOtraComp($postpOtraComp)
    {
        $this->postpOtraComp = $postpOtraComp;

        return $this;
    }

    /**
     * Get postpOtraComp
     *
     * @return string 
     */
    public function getPostpOtraComp()
    {
        return $this->postpOtraComp;
    }

    /**
     * Set postpOtraCompDetalle
     *
     * @param string $postpOtraCompDetalle
     * @return ShcpAboPostProced
     */
    public function setPostpOtraCompDetalle($postpOtraCompDetalle)
    {
        $this->postpOtraCompDetalle = $postpOtraCompDetalle;

        return $this;
    }

    /**
     * Get postpOtraCompDetalle
     *
     * @return string 
     */
    public function getPostpOtraCompDetalle()
    {
        return $this->postpOtraCompDetalle;
    }

    /**
     * Set idAdminProceden
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden
     * @return ShcpAboPostProced
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
