<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ShcpParAdmision
 *
 * @ORM\Table(name="shcp_par_admision", indexes={@ORM\Index(name="IDX_FC111E9693489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpParAdmision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_admision_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adm_fecha_ingreso", type="date", nullable=true)
     */
    private $admFechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_carnet", type="string", nullable=true)
     */
    private $admCarnet;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_consulta_prenatal", type="integer", nullable=true)
     */
    private $admConsultaPrenatal;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_hosp_embarazo", type="string", nullable=true)
     */
    private $admHospEmbarazo;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_dias_hosp", type="integer", nullable=true)
     */
    private $admDiasHosp;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_corticoide_ante", type="string", nullable=true)
     */
    private $admCorticoideAnte;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_semana_inicio", type="integer", nullable=true)
     */
    private $admSemanaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_inicio", type="string", nullable=true)
     */
    private $admInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_digitador_resp", type="bigint", nullable=true)
     */
    private $admDigitadorResp;

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
     * @ORM\OneToOne(targetEntity="ShcpParRoturaMembrana", mappedBy="idAdmisionParto", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $ruptura;

    /**
     *
     * @ORM\OneToOne(targetEntity="ShcpParPresent", mappedBy="idAdmisionParto", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $present;

    /**
     *
     * @ORM\OneToMany(targetEntity="ShcpParTrabajoParto", mappedBy="idAdmisionParto", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $trabajoparto;

    /**
     *
     * @ORM\OneToMany(targetEntity="ShcpParNacimiento", mappedBy="idAdmisionParto", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $parnacimiento;

    /**
     *
     * @ORM\OneToMany(targetEntity="ShcpParPatologia", mappedBy="idAdmisionParto", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $parpatologia;


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
     * Set admFechaIngreso
     *
     * @param \DateTime $admFechaIngreso
     * @return ShcpParAdmision
     */
    public function setAdmFechaIngreso($admFechaIngreso)
    {
        $this->admFechaIngreso = $admFechaIngreso;

        return $this;
    }

    /**
     * Get admFechaIngreso
     *
     * @return \DateTime 
     */
    public function getAdmFechaIngreso()
    {
        return $this->admFechaIngreso;
    }

    /**
     * Set admCarnet
     *
     * @param string $admCarnet
     * @return ShcpParAdmision
     */
    public function setAdmCarnet($admCarnet)
    {
        $this->admCarnet = $admCarnet;

        return $this;
    }

    /**
     * Get admCarnet
     *
     * @return string 
     */
    public function getAdmCarnet()
    {
        return $this->admCarnet;
    }

    /**
     * Set admConsultaPrenatal
     *
     * @param integer $admConsultaPrenatal
     * @return ShcpParAdmision
     */
    public function setAdmConsultaPrenatal($admConsultaPrenatal)
    {
        $this->admConsultaPrenatal = $admConsultaPrenatal;

        return $this;
    }

    /**
     * Get admConsultaPrenatal
     *
     * @return integer 
     */
    public function getAdmConsultaPrenatal()
    {
        return $this->admConsultaPrenatal;
    }

    /**
     * Set admHospEmbarazo
     *
     * @param string $admHospEmbarazo
     * @return ShcpParAdmision
     */
    public function setAdmHospEmbarazo($admHospEmbarazo)
    {
        $this->admHospEmbarazo = $admHospEmbarazo;

        return $this;
    }

    /**
     * Get admHospEmbarazo
     *
     * @return string 
     */
    public function getAdmHospEmbarazo()
    {
        return $this->admHospEmbarazo;
    }

    /**
     * Set admDiasHosp
     *
     * @param integer $admDiasHosp
     * @return ShcpParAdmision
     */
    public function setAdmDiasHosp($admDiasHosp)
    {
        $this->admDiasHosp = $admDiasHosp;

        return $this;
    }

    /**
     * Get admDiasHosp
     *
     * @return integer 
     */
    public function getAdmDiasHosp()
    {
        return $this->admDiasHosp;
    }

    /**
     * Set admCorticoideAnte
     *
     * @param string $admCorticoideAnte
     * @return ShcpParAdmision
     */
    public function setAdmCorticoideAnte($admCorticoideAnte)
    {
        $this->admCorticoideAnte = $admCorticoideAnte;

        return $this;
    }

    /**
     * Get admCorticoideAnte
     *
     * @return string 
     */
    public function getAdmCorticoideAnte()
    {
        return $this->admCorticoideAnte;
    }

    /**
     * Set admSemanaInicio
     *
     * @param integer $admSemanaInicio
     * @return ShcpParAdmision
     */
    public function setAdmSemanaInicio($admSemanaInicio)
    {
        $this->admSemanaInicio = $admSemanaInicio;

        return $this;
    }

    /**
     * Get admSemanaInicio
     *
     * @return integer 
     */
    public function getAdmSemanaInicio()
    {
        return $this->admSemanaInicio;
    }

    /**
     * Set admInicio
     *
     * @param string $admInicio
     * @return ShcpParAdmision
     */
    public function setAdmInicio($admInicio)
    {
        $this->admInicio = $admInicio;

        return $this;
    }

    /**
     * Get admInicio
     *
     * @return string 
     */
    public function getAdmInicio()
    {
        return $this->admInicio;
    }

    /**
     * Set admDigitadorResp
     *
     * @param integer $admDigitadorResp
     * @return ShcpParAdmision
     */
    public function setAdmDigitadorResp($admDigitadorResp)
    {
        $this->admDigitadorResp = $admDigitadorResp;

        return $this;
    }

    /**
     * Get admDigitadorResp
     *
     * @return integer 
     */
    public function getAdmDigitadorResp()
    {
        return $this->admDigitadorResp;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpParAdmision
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
    /**
     * Constructor
     */
   /* public function __construct()
    {*/
        //$this->ruptura = new ArrayCollection();
        //$this->ruptura = new \Minsal\shcpBundle\Entity\ShcpParRoturaMembrana();
        //$this->ruptura = new \Doctrine\Common\Collections\ArrayCollection();
   /* }*/

    /**
     * Add ruptura
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura
     * @return ShcpParAdmision
     */
    /*public function addRuptura(\Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura)
    {
        $this->ruptura[] = $ruptura;

        return $this;
    }*/

    /**
     * Add ruptura
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura
     * @return ShcpParAdmision
     */
    public function setRuptura(\Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura)
    //public function setRuptura(\Doctrine\Common\Collections\Collection $ruptura)
    {
        $this->ruptura= $ruptura;

        return $this;
    }

    /**
     * Remove ruptura
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura
     */
    public function removeRuptura(\Minsal\shcpBundle\Entity\ShcpParRoturaMembrana $ruptura)
    {
        $this->ruptura->removeElement($ruptura);
    }

    /**
     * Get ruptura
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRuptura()
    {
        return $this->ruptura;
    }

    /**
     * Set present
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParPresent $present
     * @return ShcpParAdmision
     */
    public function setPresent(\Minsal\shcpBundle\Entity\ShcpParPresent $present = null)
    {
        $this->present = $present;

        return $this;
    }

    /**
     * Get present
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParPresent 
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Add trabajoparto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParTrabajoParto $trabajoparto
     * @return ShcpParAdmision
     */
    public function addTrabajoparto(\Minsal\shcpBundle\Entity\ShcpParTrabajoParto $trabajoparto)
    {
        $this->trabajoparto[] = $trabajoparto;

        return $this;
    }

    /**
     * Remove trabajoparto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParTrabajoParto $trabajoparto
     */
    public function removeTrabajoparto(\Minsal\shcpBundle\Entity\ShcpParTrabajoParto $trabajoparto)
    {
        $this->trabajoparto->removeElement($trabajoparto);
    }

    /**
     * Get trabajoparto
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTrabajoparto()
    {
        return $this->trabajoparto;
    }

    public function __toString() {
        $expediente = $this->getIdExpMaterno();
        if(isset($expediente)){
            return $expediente->getExpNombre().", ".$expediente->getExpApellido();
        }
        else{
            return $this->admCarnet;   
        }
    }


     public function __construct()
    {
        //$this->patologias = array(new EstudioRadTamPlaca(), new EstudioRadTamPlaca());
        $this->patologias = new ArrayCollection();
    }           

    public function getPatologias()
    {
        return $this->patologias;
    }

    public function setPatologias(\Doctrine\Common\Collections\Collection $patologias)
    {
        $this->patologias = $patologias;
        foreach ($patologias as $patologia) {
            $patologia->setIdUsuario($this);
        }
    }

}
