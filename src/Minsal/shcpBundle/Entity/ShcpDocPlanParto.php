<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocPlanParto
 *
 * @ORM\Table(name="shcp_doc_plan_parto", indexes={@ORM\Index(name="IDX_11175EE893489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpDocPlanParto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_plan_parto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_lugar_control", type="string", length=125, nullable=true)
     */
    private $planLugarControl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_fecha_inicio", type="date", nullable=true)
     */
    private $planFechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_nom_per_inicia", type="string", length=125, nullable=true)
     */
    private $planNomPerInicia;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_hosp_planea_parto", type="string", length=125, nullable=true)
     */
    private $planHospPlaneaParto;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_acom_parto", type="string", length=100, nullable=true)
     */
    private $planAcomParto;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_salir_ants_fec", type="string", nullable=true)
     */
    private $planSalirAntsFec;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_dond_iria", type="string", nullable=true)
     */
    private $planDondIria;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_direccion", type="string", length=150, nullable=true)
     */
    private $planDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_nom_per_transp", type="string", length=100, nullable=true)
     */
    private $planNomPerTransp;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_tel_per_transp", type="string", nullable=true)
     */
    private $planTelPerTransp;

    /**
     * @var \ShcpExpMaterno
     *
     * @ORM\ManyToOne(targetEntity="ShcpExpMaterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exp_materno", referencedColumnName="id")
     * })
     */
    private $idExpMaterno;



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
     * Set planLugarControl
     *
     * @param string $planLugarControl
     * @return ShcpDocPlanParto
     */
    public function setPlanLugarControl($planLugarControl)
    {
        $this->planLugarControl = $planLugarControl;

        return $this;
    }

    /**
     * Get planLugarControl
     *
     * @return string 
     */
    public function getPlanLugarControl()
    {
        return $this->planLugarControl;
    }

    /**
     * Set planFechaInicio
     *
     * @param \DateTime $planFechaInicio
     * @return ShcpDocPlanParto
     */
    public function setPlanFechaInicio($planFechaInicio)
    {
        $this->planFechaInicio = $planFechaInicio;

        return $this;
    }

    /**
     * Get planFechaInicio
     *
     * @return \DateTime 
     */
    public function getPlanFechaInicio()
    {
        return $this->planFechaInicio;
    }

    /**
     * Set planNomPerInicia
     *
     * @param string $planNomPerInicia
     * @return ShcpDocPlanParto
     */
    public function setPlanNomPerInicia($planNomPerInicia)
    {
        $this->planNomPerInicia = $planNomPerInicia;

        return $this;
    }

    /**
     * Get planNomPerInicia
     *
     * @return string 
     */
    public function getPlanNomPerInicia()
    {
        return $this->planNomPerInicia;
    }

    /**
     * Set planHospPlaneaParto
     *
     * @param string $planHospPlaneaParto
     * @return ShcpDocPlanParto
     */
    public function setPlanHospPlaneaParto($planHospPlaneaParto)
    {
        $this->planHospPlaneaParto = $planHospPlaneaParto;

        return $this;
    }

    /**
     * Get planHospPlaneaParto
     *
     * @return string 
     */
    public function getPlanHospPlaneaParto()
    {
        return $this->planHospPlaneaParto;
    }

    /**
     * Set planAcomParto
     *
     * @param string $planAcomParto
     * @return ShcpDocPlanParto
     */
    public function setPlanAcomParto($planAcomParto)
    {
        $this->planAcomParto = $planAcomParto;

        return $this;
    }

    /**
     * Get planAcomParto
     *
     * @return string 
     */
    public function getPlanAcomParto()
    {
        return $this->planAcomParto;
    }

    /**
     * Set planSalirAntsFec
     *
     * @param string $planSalirAntsFec
     * @return ShcpDocPlanParto
     */
    public function setPlanSalirAntsFec($planSalirAntsFec)
    {
        $this->planSalirAntsFec = $planSalirAntsFec;

        return $this;
    }

    /**
     * Get planSalirAntsFec
     *
     * @return string 
     */
    public function getPlanSalirAntsFec()
    {
        return $this->planSalirAntsFec;
    }

    /**
     * Set planDondIria
     *
     * @param string $planDondIria
     * @return ShcpDocPlanParto
     */
    public function setPlanDondIria($planDondIria)
    {
        $this->planDondIria = $planDondIria;

        return $this;
    }

    /**
     * Get planDondIria
     *
     * @return string 
     */
    public function getPlanDondIria()
    {
        return $this->planDondIria;
    }

    /**
     * Set planDireccion
     *
     * @param string $planDireccion
     * @return ShcpDocPlanParto
     */
    public function setPlanDireccion($planDireccion)
    {
        $this->planDireccion = $planDireccion;

        return $this;
    }

    /**
     * Get planDireccion
     *
     * @return string 
     */
    public function getPlanDireccion()
    {
        return $this->planDireccion;
    }

    /**
     * Set planNomPerTransp
     *
     * @param string $planNomPerTransp
     * @return ShcpDocPlanParto
     */
    public function setPlanNomPerTransp($planNomPerTransp)
    {
        $this->planNomPerTransp = $planNomPerTransp;

        return $this;
    }

    /**
     * Get planNomPerTransp
     *
     * @return string 
     */
    public function getPlanNomPerTransp()
    {
        return $this->planNomPerTransp;
    }

    /**
     * Set planTelPerTransp
     *
     * @param string $planTelPerTransp
     * @return ShcpDocPlanParto
     */
    public function setPlanTelPerTransp($planTelPerTransp)
    {
        $this->planTelPerTransp = $planTelPerTransp;

        return $this;
    }

    /**
     * Get planTelPerTransp
     *
     * @return string 
     */
    public function getPlanTelPerTransp()
    {
        return $this->planTelPerTransp;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpDocPlanParto
     */
    public function setIdExpMaterno(\Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno = null)
    {
        $this->idExpMaterno = $idExpMaterno;

        return $this;
    }

    /**
     * Get idExpMaterno
     *
     * @return \Minsal\shcpBundle\Entity\ShcpExpMaterno 
     */
    public function getIdExpMaterno()
    {
        return $this->idExpMaterno;
    }
}
