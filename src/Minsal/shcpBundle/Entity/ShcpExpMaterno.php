<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpExpMaterno
 *
 * @ORM\Table(name="shcp_exp_materno", indexes={@ORM\Index(name="IDX_73D83D42D9F3B251", columns={"id_mnt_expediente"}), @ORM\Index(name="IDX_73D83D427DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ShcpExpMaterno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_exp_materno_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_nombre", type="string", length=100, nullable=true)
     */
    private $expNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_apellido", type="string", length=100, nullable=true)
     */
    private $expApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_direccion", type="string", length=200, nullable=true)
     */
    private $expDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_telefono", type="string", nullable=true)
     */
    private $expTelefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exp_fecha_creacion", type="date", nullable=true)
     */
    private $expFechaCreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_edad", type="integer", nullable=true)
     */
    private $expEdad;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_edad_rgo", type="string", nullable=true)
     */
    private $expEdadRgo;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_etnia", type="string", nullable=true)
     */
    private $expEtnia;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_alfabeta", type="string", nullable=true)
     */
    private $expAlfabeta;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_estudios", type="string", nullable=true)
     */
    private $expEstudios;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_anios_nivel_studio", type="integer", nullable=true)
     */
    private $expAniosNivelStudio;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_vive_sola", type="string", nullable=true)
     */
    private $expViveSola;

      /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exp_muni", referencedColumnName="id")
     * })
     */
    private $expMuni;
    
    
   
   // private $expMuni;

        /**
     * @var \CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exp_depto", referencedColumnName="id")
     * })
     */
   
  
    private $expDepto;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_doc_ident", type="string", length=20, nullable=true)
     */
    private $expDocIdent;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_estado", type="string", nullable=true)
     */
    private $expEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_tipo_control", type="string", nullable=true)
     */
    private $expTipoControl;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_clap", type="string", nullable=true)
     */
    private $expClap;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mnt_expediente", referencedColumnName="id")
     * })
     */
    private $idMntExpediente;

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
     *
     * @ORM\OneToMany(targetEntity="ShcpPrePaciente", mappedBy="idExpMaterno", cascade={"all"}, orphanRemoval=true)
     *
     */
    
    private $prepaciente;
    
    
    /**
     *
     * @ORM\OneToMany(targetEntity="ShcpAboAdmisionProceden", mappedBy="idExpMaterno", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $aboAdmision;

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
     * Set expNombre
     *
     * @param string $expNombre
     * @return ShcpExpMaterno
     */
    public function setExpNombre($expNombre)
    {
        $this->expNombre = $expNombre;

        return $this;
    }

    /**
     * Get expNombre
     *
     * @return string 
     */
    public function getExpNombre()
    {
        return $this->expNombre;
    }

    /**
     * Set expApellido
     *
     * @param string $expApellido
     * @return ShcpExpMaterno
     */
    public function setExpApellido($expApellido)
    {
        $this->expApellido = $expApellido;

        return $this;
    }

    /**
     * Get expApellido
     *
     * @return string 
     */
    public function getExpApellido()
    {
        return $this->expApellido;
    }

    /**
     * Set expDireccion
     *
     * @param string $expDireccion
     * @return ShcpExpMaterno
     */
    public function setExpDireccion($expDireccion)
    {
        $this->expDireccion = $expDireccion;

        return $this;
    }

    /**
     * Get expDireccion
     *
     * @return string 
     */
    public function getExpDireccion()
    {
        return $this->expDireccion;
    }
    /**
     * Set expTelefono
     *
     * @param string $expTelefono
     * @return ShcpExpMaterno
     */
    public function setExpTelefono($expTelefono)
    {
        $this->expTelefono = $expTelefono;

        return $this;
    }

    /**
     * Get expTelefono
     *
     * @return string 
     */
    public function getExpTelefono()
    {
        return $this->expTelefono;
    }

    /**
     * Set expFechaCreacion
     *
     * @param \DateTime $expFechaCreacion
     * @return ShcpExpMaterno
     */
    public function setExpFechaCreacion($expFechaCreacion)
    {
        $this->expFechaCreacion = $expFechaCreacion;

        return $this;
    }

    /**
     * Get expFechaCreacion
     *
     * @return \DateTime 
     */
    public function getExpFechaCreacion()
    {
        return $this->expFechaCreacion;
    }

    /**
     * Set expEdad
     *
     * @param integer $expEdad
     * @return ShcpExpMaterno
     */
    public function setExpEdad($expEdad)
    {
        $this->expEdad = $expEdad;

        return $this;
    }

    /**
     * Get expEdad
     *
     * @return integer 
     */
    public function getExpEdad()
    {
        return $this->expEdad;
    }

    /**
     * Set expEdadRgo
     *
     * @param string $expEdadRgo
     * @return ShcpExpMaterno
     */
    public function setExpEdadRgo($expEdadRgo)
    {
        $this->expEdadRgo = $expEdadRgo;

        return $this;
    }

    /**
     * Get expEdadRgo
     *
     * @return string 
     */
    public function getExpEdadRgo()
    {
        return $this->expEdadRgo;
    }

    /**
     * Set expEtnia
     *
     * @param string $expEtnia
     * @return ShcpExpMaterno
     */
    public function setExpEtnia($expEtnia)
    {
        $this->expEtnia = $expEtnia;

        return $this;
    }

    /**
     * Get expEtnia
     *
     * @return string 
     */
    public function getExpEtnia()
    {
        return $this->expEtnia;
    }

    /**
     * Set expAlfabeta
     *
     * @param string $expAlfabeta
     * @return ShcpExpMaterno
     */
    public function setExpAlfabeta($expAlfabeta)
    {
        $this->expAlfabeta = $expAlfabeta;

        return $this;
    }

    /**
     * Get expAlfabeta
     *
     * @return string 
     */
    public function getExpAlfabeta()
    {
        return $this->expAlfabeta;
    }

    /**
     * Set expEstudios
     *
     * @param string $expEstudios
     * @return ShcpExpMaterno
     */
    public function setExpEstudios($expEstudios)
    {
        $this->expEstudios = $expEstudios;

        return $this;
    }

    /**
     * Get expEstudios
     *
     * @return string 
     */
    public function getExpEstudios()
    {
        return $this->expEstudios;
    }

    /**
     * Set expAniosNivelStudio
     *
     * @param integer $expAniosNivelStudio
     * @return ShcpExpMaterno
     */
    public function setExpAniosNivelStudio($expAniosNivelStudio)
    {
        $this->expAniosNivelStudio = $expAniosNivelStudio;

        return $this;
    }

    /**
     * Get expAniosNivelStudio
     *
     * @return integer 
     */
    public function getExpAniosNivelStudio()
    {
        return $this->expAniosNivelStudio;
    }

    /**
     * Set expViveSola
     *
     * @param string $expViveSola
     * @return ShcpExpMaterno
     */
    public function setExpViveSola($expViveSola)
    {
        $this->expViveSola = $expViveSola;

        return $this;
    }

    /**
     * Get expViveSola
     *
     * @return string 
     */
    public function getExpViveSola()
    {
        return $this->expViveSola;
    }

    /**
     * Set expMuni
     *
     * @param integer $expMuni
     * @return ShcpExpMaterno
     */
    public function setExpMuni($expMuni)
    {
        $this->expMuni = $expMuni;

        return $this;
    }

    /**
     * Get expMuni
     *
     * @return integer 
     */
    public function getExpMuni()
    {
        return $this->expMuni;
    }

    /**
     * Set expDepto
     *
     * @param integer $expDepto
     * @return ShcpExpMaterno
     */
    public function setExpDepto($expDepto)
    {
        $this->expDepto = $expDepto;

        return $this;
    }

    /**
     * Get expDepto
     *
     * @return integer 
     */
    public function getExpDepto()
    {
        return $this->expDepto;
    }

    /**
     * Set expDocIdent
     *
     * @param string $expDocIdent
     * @return ShcpExpMaterno
     */
    public function setExpDocIdent($expDocIdent)
    {
        $this->expDocIdent = $expDocIdent;

        return $this;
    }

    /**
     * Get expDocIdent
     *
     * @return string 
     */
    public function getExpDocIdent()
    {
        return $this->expDocIdent;
    }

    /**
     * Set expEstado
     *
     * @param string $expEstado
     * @return ShcpExpMaterno
     */
    public function setExpEstado($expEstado)
    {
        $this->expEstado = $expEstado;

        return $this;
    }

    /**
     * Get expEstado
     *
     * @return string 
     */
    public function getExpEstado()
    {
        return $this->expEstado;
    }

    /**
     * Set expTipoControl
     *
     * @param string $expTipoControl
     * @return ShcpExpMaterno
     */
    public function setExpTipoControl($expTipoControl)
    {
        $this->expTipoControl = $expTipoControl;

        return $this;
    }

    /**
     * Get expTipoControl
     *
     * @return string 
     */
    public function getExpTipoControl()
    {
        return $this->expTipoControl;
    }

    /**
     * Set expClap
     *
     * @param string $expClap
     * @return ShcpExpMaterno
     */
    public function setExpClap($expClap)
    {
        $this->expClap = $expClap;

        return $this;
    }

    /**
     * Get expClap
     *
     * @return string 
     */
    public function getExpClap()
    {
        return $this->expClap;
    }

    /**
     * Set idMntExpediente
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idMntExpediente
     * @return ShcpExpMaterno
     */
    public function setIdMntExpediente( $idMntExpediente)
    {
        $this->idMntExpediente = $idMntExpediente;

        return $this;
    }

    /**
     * Get idMntExpediente
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdMntExpediente()
    {
        return $this->idMntExpediente;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpExpMaterno
     */
    public function setIdEstablecimiento( $idEstablecimiento)
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
   
 //aca va el to string
    public function __toString() {
	      return $this->expNombre;
	  }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prepaciente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prepaciente
     *
     * @param \Minsal\shcpBundle\Entity\ShcpPrePaciente $prepaciente
     * @return ShcpExpMaterno
     */
    public function addPrepaciente(\Minsal\shcpBundle\Entity\ShcpPrePaciente $prepaciente)
    {
        $this->prepaciente[] = $prepaciente;

        return $this;
    }

    /**
     * Remove prepaciente
     *
     * @param \Minsal\shcpBundle\Entity\ShcpPrePaciente $prepaciente
     */
    public function removePrepaciente(\Minsal\shcpBundle\Entity\ShcpPrePaciente $prepaciente)
    {
        $this->prepaciente->removeElement($prepaciente);
    }

    /**
     * Get prepaciente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrepaciente()
    {
        return $this->prepaciente;
    }

    /**
     * Add aboAdmision
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $aboAdmision
     * @return ShcpExpMaterno
     */
    public function addAboAdmision(\Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $aboAdmision)
    {
        $this->aboAdmision[] = $aboAdmision;

        return $this;
    }

    /**
     * Remove aboAdmision
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $aboAdmision
     */
    public function removeAboAdmision(\Minsal\shcpBundle\Entity\ShcpAboAdmisionProceden $aboAdmision)
    {
        $this->aboAdmision->removeElement($aboAdmision);
    }

    /**
     * Get aboAdmision
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAboAdmision()
    {
        return $this->aboAdmision;
    }
}
