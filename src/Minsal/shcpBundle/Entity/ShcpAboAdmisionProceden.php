<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboAdmisionProceden
 *
 * @ORM\Table(name="shcp_abo_admision_proceden", indexes={@ORM\Index(name="IDX_666AECC17DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_666AECC193489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpAboAdmisionProceden
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_admision_proceden_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adpro_fecha_ingreso", type="date", nullable=true)
     */
    private $adproFechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adpro_hora_min", type="time", nullable=true)
     */
    private $adproHoraMin;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_hosp_emb", type="string", nullable=true)
     */
    private $adproHospEmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_dias_hosp", type="integer", nullable=true)
     */
    private $adproDiasHosp;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_edad_gest_sem", type="integer", nullable=true)
     */
    private $adproEdadGestSem;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_edad_gest_dias", type="integer", nullable=true)
     */
    private $adproEdadGestDias;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_eg_fum_eco", type="string", nullable=true)
     */
    private $adproEgFumEco;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_tipo_acomp", type="string", nullable=true)
     */
    private $adproTipoAcomp;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_traslado", type="string", nullable=true)
     */
    private $adproTraslado;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_detalle_traslado", type="string", length=100, nullable=true)
     */
    private $adproDetalleTraslado;

    /**
     * @var string
     *
     * @ORM\Column(name="adpro_tipo_transport", type="string", nullable=true)
     */
    private $adproTipoTransport;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_tiem_trasl_dia", type="integer", nullable=true)
     */
    private $adproTiemTraslDia;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_tiem_trasl_hrs", type="integer", nullable=true)
     */
    private $adproTiemTraslHrs;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_tiem_trasl_min", type="integer", nullable=true)
     */
    private $adproTiemTraslMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="adpro_digitador_resp", type="bigint", nullable=true)
     */
    private $adproDigitadorResp;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

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
     *
     * @ORM\OneToMany(targetEntity="ShcpAboPreproced1", mappedBy="idAdminProceden", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $preproced;
    
    

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
     * Set adproFechaIngreso
     *
     * @param \DateTime $adproFechaIngreso
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproFechaIngreso($adproFechaIngreso)
    {
        $this->adproFechaIngreso = $adproFechaIngreso;

        return $this;
    }

    /**
     * Get adproFechaIngreso
     *
     * @return \DateTime 
     */
    public function getAdproFechaIngreso()
    {
        return $this->adproFechaIngreso;
    }

    /**
     * Set adproHoraMin
     *
     * @param \DateTime $adproHoraMin
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproHoraMin($adproHoraMin)
    {
        $this->adproHoraMin = $adproHoraMin;

        return $this;
    }

    /**
     * Get adproHoraMin
     *
     * @return \DateTime 
     */
    public function getAdproHoraMin()
    {
        return $this->adproHoraMin;
    }

    /**
     * Set adproHospEmb
     *
     * @param string $adproHospEmb
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproHospEmb($adproHospEmb)
    {
        $this->adproHospEmb = $adproHospEmb;

        return $this;
    }

    /**
     * Get adproHospEmb
     *
     * @return string 
     */
    public function getAdproHospEmb()
    {
        return $this->adproHospEmb;
    }

    /**
     * Set adproDiasHosp
     *
     * @param integer $adproDiasHosp
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproDiasHosp($adproDiasHosp)
    {
        $this->adproDiasHosp = $adproDiasHosp;

        return $this;
    }

    /**
     * Get adproDiasHosp
     *
     * @return integer 
     */
    public function getAdproDiasHosp()
    {
        return $this->adproDiasHosp;
    }

    /**
     * Set adproEdadGestSem
     *
     * @param integer $adproEdadGestSem
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproEdadGestSem($adproEdadGestSem)
    {
        $this->adproEdadGestSem = $adproEdadGestSem;

        return $this;
    }

    /**
     * Get adproEdadGestSem
     *
     * @return integer 
     */
    public function getAdproEdadGestSem()
    {
        return $this->adproEdadGestSem;
    }

    /**
     * Set adproEdadGestDias
     *
     * @param integer $adproEdadGestDias
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproEdadGestDias($adproEdadGestDias)
    {
        $this->adproEdadGestDias = $adproEdadGestDias;

        return $this;
    }

    /**
     * Get adproEdadGestDias
     *
     * @return integer 
     */
    public function getAdproEdadGestDias()
    {
        return $this->adproEdadGestDias;
    }

    /**
     * Set adproEgFumEco
     *
     * @param string $adproEgFumEco
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproEgFumEco($adproEgFumEco)
    {
        $this->adproEgFumEco = $adproEgFumEco;

        return $this;
    }

    /**
     * Get adproEgFumEco
     *
     * @return string 
     */
    public function getAdproEgFumEco()
    {
        return $this->adproEgFumEco;
    }

    /**
     * Set adproTipoAcomp
     *
     * @param string $adproTipoAcomp
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTipoAcomp($adproTipoAcomp)
    {
        $this->adproTipoAcomp = $adproTipoAcomp;

        return $this;
    }

    /**
     * Get adproTipoAcomp
     *
     * @return string 
     */
    public function getAdproTipoAcomp()
    {
        return $this->adproTipoAcomp;
    }

    /**
     * Set adproTraslado
     *
     * @param string $adproTraslado
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTraslado($adproTraslado)
    {
        $this->adproTraslado = $adproTraslado;

        return $this;
    }

    /**
     * Get adproTraslado
     *
     * @return string 
     */
    public function getAdproTraslado()
    {
        return $this->adproTraslado;
    }

    /**
     * Set adproDetalleTraslado
     *
     * @param string $adproDetalleTraslado
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproDetalleTraslado($adproDetalleTraslado)
    {
        $this->adproDetalleTraslado = $adproDetalleTraslado;

        return $this;
    }

    /**
     * Get adproDetalleTraslado
     *
     * @return string 
     */
    public function getAdproDetalleTraslado()
    {
        return $this->adproDetalleTraslado;
    }

    /**
     * Set adproTipoTransport
     *
     * @param string $adproTipoTransport
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTipoTransport($adproTipoTransport)
    {
        $this->adproTipoTransport = $adproTipoTransport;

        return $this;
    }

    /**
     * Get adproTipoTransport
     *
     * @return string 
     */
    public function getAdproTipoTransport()
    {
        return $this->adproTipoTransport;
    }

    /**
     * Set adproTiemTraslDia
     *
     * @param integer $adproTiemTraslDia
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTiemTraslDia($adproTiemTraslDia)
    {
        $this->adproTiemTraslDia = $adproTiemTraslDia;

        return $this;
    }

    /**
     * Get adproTiemTraslDia
     *
     * @return integer 
     */
    public function getAdproTiemTraslDia()
    {
        return $this->adproTiemTraslDia;
    }

    /**
     * Set adproTiemTraslHrs
     *
     * @param integer $adproTiemTraslHrs
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTiemTraslHrs($adproTiemTraslHrs)
    {
        $this->adproTiemTraslHrs = $adproTiemTraslHrs;

        return $this;
    }

    /**
     * Get adproTiemTraslHrs
     *
     * @return integer 
     */
    public function getAdproTiemTraslHrs()
    {
        return $this->adproTiemTraslHrs;
    }

    /**
     * Set adproTiemTraslMin
     *
     * @param integer $adproTiemTraslMin
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproTiemTraslMin($adproTiemTraslMin)
    {
        $this->adproTiemTraslMin = $adproTiemTraslMin;

        return $this;
    }

    /**
     * Get adproTiemTraslMin
     *
     * @return integer 
     */
    public function getAdproTiemTraslMin()
    {
        return $this->adproTiemTraslMin;
    }

    /**
     * Set adproDigitadorResp
     *
     * @param integer $adproDigitadorResp
     * @return ShcpAboAdmisionProceden
     */
    public function setAdproDigitadorResp($adproDigitadorResp)
    {
        $this->adproDigitadorResp = $adproDigitadorResp;

        return $this;
    }

    /**
     * Get adproDigitadorResp
     *
     * @return integer 
     */
    public function getAdproDigitadorResp()
    {
        return $this->adproDigitadorResp;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpAboAdmisionProceden
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpAboAdmisionProceden
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
    
    
    //aca va el to string
    public function __toString() {
	      return $this->adproEgFumEco;
	  }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->preproced = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add preproced
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced1 $preproced
     * @return ShcpAboAdmisionProceden
     */
    public function addPreproced(\Minsal\shcpBundle\Entity\ShcpAboPreproced1 $preproced)
    {
        $this->preproced[] = $preproced;

        return $this;
    }

    /**
     * Remove preproced
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced1 $preproced
     */
    public function removePreproced(\Minsal\shcpBundle\Entity\ShcpAboPreproced1 $preproced)
    {
        $this->preproced->removeElement($preproced);
    }

    /**
     * Get preproced
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPreproced()
    {
        return $this->preproced;
    }
}
