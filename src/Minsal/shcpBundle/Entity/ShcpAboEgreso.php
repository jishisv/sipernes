<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboEgreso
 *
 * @ORM\Table(name="shcp_abo_egreso", indexes={@ORM\Index(name="IDX_B6BBD31ACDD53299", columns={"id_admin_proceden"})})
 * @ORM\Entity
 */
class ShcpAboEgreso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_egreso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_antcp_metodo", type="string", nullable=true)
     */
    private $egrAntcpMetodo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egr_fecha", type="date", nullable=true)
     */
    private $egrFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egr_hora", type="time", nullable=true)
     */
    private $egrHora;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_tratamient", type="string", nullable=true)
     */
    private $egrTratamient;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_tipo", type="string", nullable=true)
     */
    private $egrTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_condicion", type="string", nullable=true)
     */
    private $egrCondicion;

    /**
     * @var integer
     *
     * @ORM\Column(name="egr_lugar_traslado", type="integer", nullable=true)
     */
    private $egrLugarTraslado;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_fallece_traslado", type="string", nullable=true)
     */
    private $egrFalleceTraslado;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_autopsia", type="string", nullable=true)
     */
    private $egrAutopsia;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_cod_diag_cie10", type="string", nullable=true)
     */
    private $egrCodDiagCie10;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_antirube", type="string", nullable=true)
     */
    private $egrAntirube;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_globulina", type="string", nullable=true)
     */
    private $egrGlobulina;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_referida", type="string", nullable=true)
     */
    private $egrReferida;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_otro_especific", type="string", length=100, nullable=true)
     */
    private $egrOtroEspecific;

    /**
     * @var integer
     *
     * @ORM\Column(name="egr_otro_establec", type="integer", nullable=true)
     */
    private $egrOtroEstablec;

    /**
     * @var string
     *
     * @ORM\Column(name="egr_respons", type="string", length=100, nullable=true)
     */
    private $egrRespons;

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
     * Set egrAntcpMetodo
     *
     * @param string $egrAntcpMetodo
     * @return ShcpAboEgreso
     */
    public function setEgrAntcpMetodo($egrAntcpMetodo)
    {
        $this->egrAntcpMetodo = $egrAntcpMetodo;

        return $this;
    }

    /**
     * Get egrAntcpMetodo
     *
     * @return string 
     */
    public function getEgrAntcpMetodo()
    {
        return $this->egrAntcpMetodo;
    }

    /**
     * Set egrFecha
     *
     * @param \DateTime $egrFecha
     * @return ShcpAboEgreso
     */
    public function setEgrFecha($egrFecha)
    {
        $this->egrFecha = $egrFecha;

        return $this;
    }

    /**
     * Get egrFecha
     *
     * @return \DateTime 
     */
    public function getEgrFecha()
    {
        return $this->egrFecha;
    }

    /**
     * Set egrHora
     *
     * @param \DateTime $egrHora
     * @return ShcpAboEgreso
     */
    public function setEgrHora($egrHora)
    {
        $this->egrHora = $egrHora;

        return $this;
    }

    /**
     * Get egrHora
     *
     * @return \DateTime 
     */
    public function getEgrHora()
    {
        return $this->egrHora;
    }

    /**
     * Set egrTratamient
     *
     * @param string $egrTratamient
     * @return ShcpAboEgreso
     */
    public function setEgrTratamient($egrTratamient)
    {
        $this->egrTratamient = $egrTratamient;

        return $this;
    }

    /**
     * Get egrTratamient
     *
     * @return string 
     */
    public function getEgrTratamient()
    {
        return $this->egrTratamient;
    }

    /**
     * Set egrTipo
     *
     * @param string $egrTipo
     * @return ShcpAboEgreso
     */
    public function setEgrTipo($egrTipo)
    {
        $this->egrTipo = $egrTipo;

        return $this;
    }

    /**
     * Get egrTipo
     *
     * @return string 
     */
    public function getEgrTipo()
    {
        return $this->egrTipo;
    }

    /**
     * Set egrCondicion
     *
     * @param string $egrCondicion
     * @return ShcpAboEgreso
     */
    public function setEgrCondicion($egrCondicion)
    {
        $this->egrCondicion = $egrCondicion;

        return $this;
    }

    /**
     * Get egrCondicion
     *
     * @return string 
     */
    public function getEgrCondicion()
    {
        return $this->egrCondicion;
    }

    /**
     * Set egrLugarTraslado
     *
     * @param integer $egrLugarTraslado
     * @return ShcpAboEgreso
     */
    public function setEgrLugarTraslado($egrLugarTraslado)
    {
        $this->egrLugarTraslado = $egrLugarTraslado;

        return $this;
    }

    /**
     * Get egrLugarTraslado
     *
     * @return integer 
     */
    public function getEgrLugarTraslado()
    {
        return $this->egrLugarTraslado;
    }

    /**
     * Set egrFalleceTraslado
     *
     * @param string $egrFalleceTraslado
     * @return ShcpAboEgreso
     */
    public function setEgrFalleceTraslado($egrFalleceTraslado)
    {
        $this->egrFalleceTraslado = $egrFalleceTraslado;

        return $this;
    }

    /**
     * Get egrFalleceTraslado
     *
     * @return string 
     */
    public function getEgrFalleceTraslado()
    {
        return $this->egrFalleceTraslado;
    }

    /**
     * Set egrAutopsia
     *
     * @param string $egrAutopsia
     * @return ShcpAboEgreso
     */
    public function setEgrAutopsia($egrAutopsia)
    {
        $this->egrAutopsia = $egrAutopsia;

        return $this;
    }

    /**
     * Get egrAutopsia
     *
     * @return string 
     */
    public function getEgrAutopsia()
    {
        return $this->egrAutopsia;
    }

    /**
     * Set egrCodDiagCie10
     *
     * @param string $egrCodDiagCie10
     * @return ShcpAboEgreso
     */
    public function setEgrCodDiagCie10($egrCodDiagCie10)
    {
        $this->egrCodDiagCie10 = $egrCodDiagCie10;

        return $this;
    }

    /**
     * Get egrCodDiagCie10
     *
     * @return string 
     */
    public function getEgrCodDiagCie10()
    {
        return $this->egrCodDiagCie10;
    }

    /**
     * Set egrAntirube
     *
     * @param string $egrAntirube
     * @return ShcpAboEgreso
     */
    public function setEgrAntirube($egrAntirube)
    {
        $this->egrAntirube = $egrAntirube;

        return $this;
    }

    /**
     * Get egrAntirube
     *
     * @return string 
     */
    public function getEgrAntirube()
    {
        return $this->egrAntirube;
    }

    /**
     * Set egrGlobulina
     *
     * @param string $egrGlobulina
     * @return ShcpAboEgreso
     */
    public function setEgrGlobulina($egrGlobulina)
    {
        $this->egrGlobulina = $egrGlobulina;

        return $this;
    }

    /**
     * Get egrGlobulina
     *
     * @return string 
     */
    public function getEgrGlobulina()
    {
        return $this->egrGlobulina;
    }

    /**
     * Set egrReferida
     *
     * @param string $egrReferida
     * @return ShcpAboEgreso
     */
    public function setEgrReferida($egrReferida)
    {
        $this->egrReferida = $egrReferida;

        return $this;
    }

    /**
     * Get egrReferida
     *
     * @return string 
     */
    public function getEgrReferida()
    {
        return $this->egrReferida;
    }

    /**
     * Set egrOtroEspecific
     *
     * @param string $egrOtroEspecific
     * @return ShcpAboEgreso
     */
    public function setEgrOtroEspecific($egrOtroEspecific)
    {
        $this->egrOtroEspecific = $egrOtroEspecific;

        return $this;
    }

    /**
     * Get egrOtroEspecific
     *
     * @return string 
     */
    public function getEgrOtroEspecific()
    {
        return $this->egrOtroEspecific;
    }

    /**
     * Set egrOtroEstablec
     *
     * @param integer $egrOtroEstablec
     * @return ShcpAboEgreso
     */
    public function setEgrOtroEstablec($egrOtroEstablec)
    {
        $this->egrOtroEstablec = $egrOtroEstablec;

        return $this;
    }

    /**
     * Get egrOtroEstablec
     *
     * @return integer 
     */
    public function getEgrOtroEstablec()
    {
        return $this->egrOtroEstablec;
    }

    /**
     * Set egrRespons
     *
     * @param string $egrRespons
     * @return ShcpAboEgreso
     */
    public function setEgrRespons($egrRespons)
    {
        $this->egrRespons = $egrRespons;

        return $this;
    }

    /**
     * Get egrRespons
     *
     * @return string 
     */
    public function getEgrRespons()
    {
        return $this->egrRespons;
    }

    /**
     * Set idAdminProceden
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $idAdminProceden
     * @return ShcpAboEgreso
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
