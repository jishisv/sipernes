<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParNacimiento
 *
 * @ORM\Table(name="shcp_par_nacimiento", indexes={@ORM\Index(name="IDX_F2E4B155C82E5C62", columns={"id_indicacion_parto"}), @ORM\Index(name="IDX_F2E4B1557DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_F2E4B155D766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParNacimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_nacimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_tipo_nacimiento", type="string", nullable=true)
     */
    private $nacTipoNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nac_fec_nacimiento", type="date", nullable=true)
     */
    private $nacFecNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nac_hora_nacimiento", type="time", nullable=true)
     */
    private $nacHoraNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_multiple", type="string", nullable=true)
     */
    private $nacMultiple;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_orden", type="string", nullable=true)
     */
    private $nacOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_terminac", type="string", nullable=true)
     */
    private $nacTerminac;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_posicion_parto", type="string", nullable=true)
     */
    private $nacPosicionParto;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_episioto", type="string", nullable=true)
     */
    private $nacEpisioto;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_desgarros", type="string", nullable=true)
     */
    private $nacDesgarros;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_ocitocicos_prealumb", type="string", nullable=true)
     */
    private $nacOcitocicosPrealumb;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_ocitocicos_postlumb", type="string", nullable=true)
     */
    private $nacOcitocicosPostlumb;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_placenta_completa", type="string", nullable=true)
     */
    private $nacPlacentaCompleta;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_placenta_retenida", type="string", nullable=true)
     */
    private $nacPlacentaRetenida;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_ligadura_precoz", type="string", nullable=true)
     */
    private $nacLigaduraPrecoz;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_medicacion_recibida", type="string", nullable=true)
     */
    private $nacMedicacionRecibida;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_otros_medic", type="string", nullable=true)
     */
    private $nacOtrosMedic;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_otro_medic1", type="string", nullable=true)
     */
    private $nacOtroMedic1;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_otro_medic2", type="string", nullable=true)
     */
    private $nacOtroMedic2;

    /**
     * @var string
     *
     * @ORM\Column(name="nac_parto_atendido_por", type="string", nullable=true)
     */
    private $nacPartoAtendidoPor;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nac_atendio_parto", referencedColumnName="id")
     * })
     */
    private $nacAtendioParto;

    /**
     * @var \ShcpParCtlIndicacion
     *
     * @ORM\ManyToOne(targetEntity="ShcpParCtlIndicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_indicacion_parto", referencedColumnName="id")
     * })
     */
    private $idIndicacionParto;

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
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision", inversedBy="parnacimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;



    


    private $ocitocicos;

    private $antibioticos;
    private $analgesia;
    private $anestesialocal;
    private $anestesiaregional;
    private $anestesiageneral;
    private $transfusion;



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
     * Set nacTipoNacimiento
     *
     * @param string $nacTipoNacimiento
     * @return ShcpParNacimiento
     */
    public function setNacTipoNacimiento($nacTipoNacimiento)
    {
        $this->nacTipoNacimiento = $nacTipoNacimiento;

        return $this;
    }

    /**
     * Get nacTipoNacimiento
     *
     * @return string 
     */
    public function getNacTipoNacimiento()
    {
        return $this->nacTipoNacimiento;
    }

    /**
     * Set nacFecNacimiento
     *
     * @param \DateTime $nacFecNacimiento
     * @return ShcpParNacimiento
     */
    public function setNacFecNacimiento($nacFecNacimiento)
    {
        $this->nacFecNacimiento = $nacFecNacimiento;

        return $this;
    }

    /**
     * Get nacFecNacimiento
     *
     * @return \DateTime 
     */
    public function getNacFecNacimiento()
    {
        return $this->nacFecNacimiento;
    }

    /**
     * Set nacHoraNacimiento
     *
     * @param \DateTime $nacHoraNacimiento
     * @return ShcpParNacimiento
     */
    public function setNacHoraNacimiento($nacHoraNacimiento)
    {
        $this->nacHoraNacimiento = $nacHoraNacimiento;

        return $this;
    }

    /**
     * Get nacHoraNacimiento
     *
     * @return \DateTime 
     */
    public function getNacHoraNacimiento()
    {
        return $this->nacHoraNacimiento;
    }

    /**
     * Set nacMultiple
     *
     * @param string $nacMultiple
     * @return ShcpParNacimiento
     */
    public function setNacMultiple($nacMultiple)
    {
        $this->nacMultiple = $nacMultiple;

        return $this;
    }

    /**
     * Get nacMultiple
     *
     * @return string 
     */
    public function getNacMultiple()
    {
        return $this->nacMultiple;
    }

    /**
     * Set nacOrden
     *
     * @param string $nacOrden
     * @return ShcpParNacimiento
     */
    public function setNacOrden($nacOrden)
    {
        $this->nacOrden = $nacOrden;

        return $this;
    }

    /**
     * Get nacOrden
     *
     * @return string 
     */
    public function getNacOrden()
    {
        return $this->nacOrden;
    }

    /**
     * Set nacTerminac
     *
     * @param string $nacTerminac
     * @return ShcpParNacimiento
     */
    public function setNacTerminac($nacTerminac)
    {
        $this->nacTerminac = $nacTerminac;

        return $this;
    }

    /**
     * Get nacTerminac
     *
     * @return string 
     */
    public function getNacTerminac()
    {
        return $this->nacTerminac;
    }

    /**
     * Set nacPosicionParto
     *
     * @param string $nacPosicionParto
     * @return ShcpParNacimiento
     */
    public function setNacPosicionParto($nacPosicionParto)
    {
        $this->nacPosicionParto = $nacPosicionParto;

        return $this;
    }

    /**
     * Get nacPosicionParto
     *
     * @return string 
     */
    public function getNacPosicionParto()
    {
        return $this->nacPosicionParto;
    }

    /**
     * Set nacEpisioto
     *
     * @param string $nacEpisioto
     * @return ShcpParNacimiento
     */
    public function setNacEpisioto($nacEpisioto)
    {
        $this->nacEpisioto = $nacEpisioto;

        return $this;
    }

    /**
     * Get nacEpisioto
     *
     * @return string 
     */
    public function getNacEpisioto()
    {
        return $this->nacEpisioto;
    }

    /**
     * Set nacDesgarros
     *
     * @param string $nacDesgarros
     * @return ShcpParNacimiento
     */
    public function setNacDesgarros($nacDesgarros)
    {
        $this->nacDesgarros = $nacDesgarros;

        return $this;
    }

    /**
     * Get nacDesgarros
     *
     * @return string 
     */
    public function getNacDesgarros()
    {
        return $this->nacDesgarros;
    }

    /**
     * Set nacOcitocicosPrealumb
     *
     * @param string $nacOcitocicosPrealumb
     * @return ShcpParNacimiento
     */
    public function setNacOcitocicosPrealumb($nacOcitocicosPrealumb)
    {
        $this->nacOcitocicosPrealumb = $nacOcitocicosPrealumb;

        return $this;
    }

    /**
     * Get nacOcitocicosPrealumb
     *
     * @return string 
     */
    public function getNacOcitocicosPrealumb()
    {
        return $this->nacOcitocicosPrealumb;
    }

    /**
     * Set nacOcitocicosPostlumb
     *
     * @param string $nacOcitocicosPostlumb
     * @return ShcpParNacimiento
     */
    public function setNacOcitocicosPostlumb($nacOcitocicosPostlumb)
    {
        $this->nacOcitocicosPostlumb = $nacOcitocicosPostlumb;

        return $this;
    }

    /**
     * Get nacOcitocicosPostlumb
     *
     * @return string 
     */
    public function getNacOcitocicosPostlumb()
    {
        return $this->nacOcitocicosPostlumb;
    }

    /**
     * Set nacPlacentaCompleta
     *
     * @param string $nacPlacentaCompleta
     * @return ShcpParNacimiento
     */
    public function setNacPlacentaCompleta($nacPlacentaCompleta)
    {
        $this->nacPlacentaCompleta = $nacPlacentaCompleta;

        return $this;
    }

    /**
     * Get nacPlacentaCompleta
     *
     * @return string 
     */
    public function getNacPlacentaCompleta()
    {
        return $this->nacPlacentaCompleta;
    }

    /**
     * Set nacPlacentaRetenida
     *
     * @param string $nacPlacentaRetenida
     * @return ShcpParNacimiento
     */
    public function setNacPlacentaRetenida($nacPlacentaRetenida)
    {
        $this->nacPlacentaRetenida = $nacPlacentaRetenida;

        return $this;
    }

    /**
     * Get nacPlacentaRetenida
     *
     * @return string 
     */
    public function getNacPlacentaRetenida()
    {
        return $this->nacPlacentaRetenida;
    }

    /**
     * Set nacLigaduraPrecoz
     *
     * @param string $nacLigaduraPrecoz
     * @return ShcpParNacimiento
     */
    public function setNacLigaduraPrecoz($nacLigaduraPrecoz)
    {
        $this->nacLigaduraPrecoz = $nacLigaduraPrecoz;

        return $this;
    }

    /**
     * Get nacLigaduraPrecoz
     *
     * @return string 
     */
    public function getNacLigaduraPrecoz()
    {
        return $this->nacLigaduraPrecoz;
    }

    /**
     * Set nacMedicacionRecibida
     *
     * @param string $nacMedicacionRecibida
     * @return ShcpParNacimiento
     */
    public function setNacMedicacionRecibida($nacMedicacionRecibida)
    {
        $this->nacMedicacionRecibida = $nacMedicacionRecibida;

        return $this;
    }

    /**
     * Get nacMedicacionRecibida
     *
     * @return string 
     */
    public function getNacMedicacionRecibida()
    {
        return $this->nacMedicacionRecibida;
    }

    /**
     * Set nacOtrosMedic
     *
     * @param string $nacOtrosMedic
     * @return ShcpParNacimiento
     */
    public function setNacOtrosMedic($nacOtrosMedic)
    {
        $this->nacOtrosMedic = $nacOtrosMedic;

        return $this;
    }

    /**
     * Get nacOtrosMedic
     *
     * @return string 
     */
    public function getNacOtrosMedic()
    {
        return $this->nacOtrosMedic;
    }

    /**
     * Set nacOtroMedic1
     *
     * @param string $nacOtroMedic1
     * @return ShcpParNacimiento
     */
    public function setNacOtroMedic1($nacOtroMedic1)
    {
        $this->nacOtroMedic1 = $nacOtroMedic1;

        return $this;
    }

    /**
     * Get nacOtroMedic1
     *
     * @return string 
     */
    public function getNacOtroMedic1()
    {
        return $this->nacOtroMedic1;
    }

    /**
     * Set nacOtroMedic2
     *
     * @param string $nacOtroMedic2
     * @return ShcpParNacimiento
     */
    public function setNacOtroMedic2($nacOtroMedic2)
    {
        $this->nacOtroMedic2 = $nacOtroMedic2;

        return $this;
    }

    /**
     * Get nacOtroMedic2
     *
     * @return string 
     */
    public function getNacOtroMedic2()
    {
        return $this->nacOtroMedic2;
    }

    /**
     * Set nacPartoAtendidoPor
     *
     * @param string $nacPartoAtendidoPor
     * @return ShcpParNacimiento
     */
    public function setNacPartoAtendidoPor($nacPartoAtendidoPor)
    {
        $this->nacPartoAtendidoPor = $nacPartoAtendidoPor;

        return $this;
    }

    /**
     * Get nacPartoAtendidoPor
     *
     * @return string 
     */
    public function getNacPartoAtendidoPor()
    {
        return $this->nacPartoAtendidoPor;
    }

    /**
     * Set nacAtendioParto
     *
     * @param integer $nacAtendioParto
     * @return ShcpParNacimiento
     */
    public function setNacAtendioParto($nacAtendioParto)
    {
        $this->nacAtendioParto = $nacAtendioParto;

        return $this;
    }

    /**
     * Get nacAtendioParto
     *
     * @return integer 
     */
    public function getNacAtendioParto()
    {
        return $this->nacAtendioParto;
    }

    /**
     * Set idIndicacionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParCtlIndicacion $idIndicacionParto
     * @return ShcpParNacimiento
     */
    public function setIdIndicacionParto(\Minsal\shcpBundle\Entity\ShcpParCtlIndicacion $idIndicacionParto = null)
    {
        $this->idIndicacionParto = $idIndicacionParto;

        return $this;
    }

    /**
     * Get idIndicacionParto
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParCtlIndicacion 
     */
    public function getIdIndicacionParto()
    {
        return $this->idIndicacionParto;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpParNacimiento
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
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParNacimiento
     */
    public function setIdAdmisionParto(\Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto = null)
    {
        $this->idAdmisionParto = $idAdmisionParto;

        return $this;
    }

    /**
     * Get idAdmisionParto
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParAdmision 
     */
    public function getIdAdmisionParto()
    {
        return $this->idAdmisionParto;
    }


    
    public function setOcitocicos($ocitocicos)
    {
        $this->ocitocicos = $ocitocicos;
        return $this;
    }

    /**
     * Get ocitocicos
     *
     * @return string 
     */
    public function getOcitocicos()
    {
        return $this->ocitocicos;
    }

    public function setAntibioticos($antibioticos)
    {
        $this->antibioticos = $antibioticos;
        return $this;
    }

    /**
     * Get antibioticos
     *
     * @return string 
     */
    public function getAntibioticos()
    {
        return $this->antibioticos;
    }

    public function setAnalgesia($analgesia)
    {
        $this->analgesia = $analgesia;
        return $this;
    }

    /**
     * Get analgesia
     *
     * @return string 
     */
    public function getAnalgesia()
    {
        return $this->analgesia;
    }

    public function setAnestesialocal($anestesialocal)
    {
        $this->anestesialocal = $anestesialocal;
        return $this;
    }

    /**
     * Get anestesialocal
     *
     * @return string 
     */
    public function getAnestesialocal()
    {
        return $this->anestesialocal;
    }

     public function setAnestesiaregional($anestesiaregional)
    {
        $this->anestesiaregional = $anestesiaregional;
        return $this;
    }

    /**
     * Get anestesiaregional
     *
     * @return string 
     */
    public function getAnestesiaregional()
    {
        return $this->anestesiaregional;
    }

    public function setAnestesiageneral($anestesiageneral)
    {
        $this->anestesiageneral = $anestesiageneral;
        return $this;
    }

    /**
     * Get anestesiageneral
     *
     * @return string 
     */
    public function getAnestesiageneral()
    {
        return $this->anestesiageneral;
    }

    public function setTransfusion($transfusion)
    {
        $this->transfusion = $transfusion;
        return $this;
    }

    /**
     * Get transfusion
     *
     * @return string 
     */
    public function getTransfusion()
    {
        return $this->transfusion;
    }

    /**
     * Set idMntEmpleado
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idMntEmpleado
     * @return ShcpParNacimiento
     */
    public function setIdMntEmpleado(\Minsal\shcpBundle\Entity\MntEmpleado $idMntEmpleado = null)
    {
        $this->idMntEmpleado = $idMntEmpleado;

        return $this;
    }

    /**
     * Get idMntEmpleado
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdMntEmpleado()
    {
        return $this->idMntEmpleado;
    }

   

}
