<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntPaciente
 *
 * @ORM\Table(name="mnt_paciente", indexes={@ORM\Index(name="IDX_3E2ACBC5220BCD31", columns={"id_area_cotizacion"}), @ORM\Index(name="IDX_3E2ACBC57F1FADD6", columns={"area_geografica_domicilio"}), @ORM\Index(name="IDX_3E2ACBC5B490DCBC", columns={"id_canton_domicilio"}), @ORM\Index(name="IDX_3E2ACBC5F4BEBFC8", columns={"id_departamento_domicilio"}), @ORM\Index(name="IDX_3E2ACBC5BB55CDF5", columns={"id_departamento_nacimiento"}), @ORM\Index(name="IDX_3E2ACBC5468B95CB", columns={"id_doc_ide_paciente"}), @ORM\Index(name="IDX_3E2ACBC5558DDFB5", columns={"id_doc_ide_proporciono_datos"}), @ORM\Index(name="IDX_3E2ACBC5ACA54FF3", columns={"id_doc_ide_responsable"}), @ORM\Index(name="IDX_3E2ACBC5D7E358F6", columns={"id_estado_civil"}), @ORM\Index(name="IDX_3E2ACBC5B3457663", columns={"id_municipio_domicilio"}), @ORM\Index(name="IDX_3E2ACBC5FA164C5C", columns={"id_municipio_nacimiento"}), @ORM\Index(name="IDX_3E2ACBC5B0DC2AB1", columns={"id_nacionalidad"}), @ORM\Index(name="IDX_3E2ACBC58C587E61", columns={"id_ocupacion"}), @ORM\Index(name="IDX_3E2ACBC5242CF91E", columns={"id_pais_nacimiento"}), @ORM\Index(name="IDX_3E2ACBC526DA8252", columns={"id_parentesco_propor_datos"}), @ORM\Index(name="IDX_3E2ACBC5FC412399", columns={"id_parentesco_responsable"}), @ORM\Index(name="IDX_3E2ACBC5A7194A90", columns={"id_sexo"}), @ORM\Index(name="IDX_3E2ACBC56B3CA4B", columns={"id_user"}), @ORM\Index(name="IDX_3E2ACBC5AC39DE56", columns={"id_user_mod"})})
 * @ORM\Entity
 */
class MntPaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_paciente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_nombre", type="string", length=25, nullable=false)
     */
    private $primerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_nombre", type="string", length=25, nullable=true)
     */
    private $segundoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tercer_nombre", type="string", length=25, nullable=true)
     */
    private $tercerNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=25, nullable=false)
     */
    private $primerApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=25, nullable=true)
     */
    private $segundoApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_casada", type="string", length=25, nullable=true)
     */
    private $apellidoCasada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_nacimiento", type="time", nullable=true)
     */
    private $horaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_doc_ide_paciente", type="string", length=20, nullable=true)
     */
    private $numeroDocIdePaciente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_casa", type="string", length=10, nullable=true)
     */
    private $telefonoCasa;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_trabajo", type="string", length=50, nullable=true)
     */
    private $lugarTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_trabajo", type="string", length=10, nullable=true)
     */
    private $telefonoTrabajo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asegurado", type="boolean", nullable=true)
     */
    private $asegurado;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_afiliacion", type="string", length=12, nullable=true)
     */
    private $numeroAfiliacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cotizante", type="boolean", nullable=true)
     */
    private $cotizante;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_padre", type="string", length=80, nullable=true)
     */
    private $nombrePadre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_madre", type="string", length=80, nullable=true)
     */
    private $nombreMadre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_conyuge", type="string", length=80, nullable=true)
     */
    private $nombreConyuge;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_responsable", type="string", length=80, nullable=true)
     */
    private $nombreResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_responsable", type="string", length=200, nullable=true)
     */
    private $direccionResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_responsable", type="string", length=10, nullable=true)
     */
    private $telefonoResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_doc_ide_responsable", type="string", length=20, nullable=true)
     */
    private $numeroDocIdeResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_proporciono_datos", type="string", length=80, nullable=true)
     */
    private $nombreProporcionoDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_doc_ide_propor_datos", type="string", length=20, nullable=true)
     */
    private $numeroDocIdeProporDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="conocido_por", type="string", length=70, nullable=true)
     */
    private $conocidoPor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_siff", type="integer", nullable=true)
     */
    private $idSiff;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="dispensarizacion_individual", type="integer", nullable=true)
     */
    private $dispensarizacionIndividual;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_paciente_inicial", type="bigint", nullable=true)
     */
    private $idPacienteInicial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_mod", type="datetime", nullable=true)
     */
    private $fechaMod;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_obstetrico", type="string", nullable=true)
     */
    private $estadoObstetrico;

    /**
     * @var \CtlAreaCotizante
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaCotizante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_cotizacion", referencedColumnName="id")
     * })
     */
    private $idAreaCotizacion;

    /**
     * @var \CtlAreaGeografica
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaGeografica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_geografica_domicilio", referencedColumnName="id")
     * })
     */
    private $areaGeograficaDomicilio;

    /**
     * @var \CtlCanton
     *
     * @ORM\ManyToOne(targetEntity="CtlCanton")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_canton_domicilio", referencedColumnName="id")
     * })
     */
    private $idCantonDomicilio;

    /**
     * @var \CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento_domicilio", referencedColumnName="id")
     * })
     */
    private $idDepartamentoDomicilio;

    /**
     * @var \CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento_nacimiento", referencedColumnName="id")
     * })
     */
    private $idDepartamentoNacimiento;

    /**
     * @var \CtlDocumentoIdentidad
     *
     * @ORM\ManyToOne(targetEntity="CtlDocumentoIdentidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_doc_ide_paciente", referencedColumnName="id")
     * })
     */
    private $idDocePaciente;

    /**
     * @var \CtlDocumentoIdentidad
     *
     * @ORM\ManyToOne(targetEntity="CtlDocumentoIdentidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_doc_ide_proporciono_datos", referencedColumnName="id")
     * })
     */
    private $idDoceProporcionoDatos;

    /**
     * @var \CtlDocumentoIdentidad
     *
     * @ORM\ManyToOne(targetEntity="CtlDocumentoIdentidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_doc_ide_responsable", referencedColumnName="id")
     * })
     */
    private $idDoceResponsable;

    /**
     * @var \CtlEstadoCivil
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoCivil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_civil", referencedColumnName="id")
     * })
     */
    private $idEstadoCivil;

    /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio_domicilio", referencedColumnName="id")
     * })
     */
    private $idMunicipioDomicilio;

    /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio_nacimiento", referencedColumnName="id")
     * })
     */
    private $idMunicipioNacimiento;

    /**
     * @var \CtlNacionalidad
     *
     * @ORM\ManyToOne(targetEntity="CtlNacionalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nacionalidad", referencedColumnName="id")
     * })
     */
    private $idNacionalidad;

    /**
     * @var \CtlOcupacion
     *
     * @ORM\ManyToOne(targetEntity="CtlOcupacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ocupacion", referencedColumnName="id")
     * })
     */
    private $idOcupacion;

    /**
     * @var \CtlPais
     *
     * @ORM\ManyToOne(targetEntity="CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais_nacimiento", referencedColumnName="id")
     * })
     */
    private $idPaisNacimiento;

    /**
     * @var \CtlParentesco
     *
     * @ORM\ManyToOne(targetEntity="CtlParentesco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_parentesco_propor_datos", referencedColumnName="id")
     * })
     */
    private $idParentescoProporDatos;

    /**
     * @var \CtlParentesco
     *
     * @ORM\ManyToOne(targetEntity="CtlParentesco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_parentesco_responsable", referencedColumnName="id")
     * })
     */
    private $idParentescoResponsable;

    /**
     * @var \CtlSexo
     *
     * @ORM\ManyToOne(targetEntity="CtlSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user_mod", referencedColumnName="id")
     * })
     */
    private $idUserMod;



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
     * Set primerNombre
     *
     * @param string $primerNombre
     * @return MntPaciente
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string 
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     * @return MntPaciente
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string 
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set tercerNombre
     *
     * @param string $tercerNombre
     * @return MntPaciente
     */
    public function setTercerNombre($tercerNombre)
    {
        $this->tercerNombre = $tercerNombre;

        return $this;
    }

    /**
     * Get tercerNombre
     *
     * @return string 
     */
    public function getTercerNombre()
    {
        return $this->tercerNombre;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     * @return MntPaciente
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string 
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     * @return MntPaciente
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string 
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set apellidoCasada
     *
     * @param string $apellidoCasada
     * @return MntPaciente
     */
    public function setApellidoCasada($apellidoCasada)
    {
        $this->apellidoCasada = $apellidoCasada;

        return $this;
    }

    /**
     * Get apellidoCasada
     *
     * @return string 
     */
    public function getApellidoCasada()
    {
        return $this->apellidoCasada;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return MntPaciente
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set horaNacimiento
     *
     * @param \DateTime $horaNacimiento
     * @return MntPaciente
     */
    public function setHoraNacimiento($horaNacimiento)
    {
        $this->horaNacimiento = $horaNacimiento;

        return $this;
    }

    /**
     * Get horaNacimiento
     *
     * @return \DateTime 
     */
    public function getHoraNacimiento()
    {
        return $this->horaNacimiento;
    }

    /**
     * Set numeroDocIdePaciente
     *
     * @param string $numeroDocIdePaciente
     * @return MntPaciente
     */
    public function setNumeroDocIdePaciente($numeroDocIdePaciente)
    {
        $this->numeroDocIdePaciente = $numeroDocIdePaciente;

        return $this;
    }

    /**
     * Get numeroDocIdePaciente
     *
     * @return string 
     */
    public function getNumeroDocIdePaciente()
    {
        return $this->numeroDocIdePaciente;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return MntPaciente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefonoCasa
     *
     * @param string $telefonoCasa
     * @return MntPaciente
     */
    public function setTelefonoCasa($telefonoCasa)
    {
        $this->telefonoCasa = $telefonoCasa;

        return $this;
    }

    /**
     * Get telefonoCasa
     *
     * @return string 
     */
    public function getTelefonoCasa()
    {
        return $this->telefonoCasa;
    }

    /**
     * Set lugarTrabajo
     *
     * @param string $lugarTrabajo
     * @return MntPaciente
     */
    public function setLugarTrabajo($lugarTrabajo)
    {
        $this->lugarTrabajo = $lugarTrabajo;

        return $this;
    }

    /**
     * Get lugarTrabajo
     *
     * @return string 
     */
    public function getLugarTrabajo()
    {
        return $this->lugarTrabajo;
    }

    /**
     * Set telefonoTrabajo
     *
     * @param string $telefonoTrabajo
     * @return MntPaciente
     */
    public function setTelefonoTrabajo($telefonoTrabajo)
    {
        $this->telefonoTrabajo = $telefonoTrabajo;

        return $this;
    }

    /**
     * Get telefonoTrabajo
     *
     * @return string 
     */
    public function getTelefonoTrabajo()
    {
        return $this->telefonoTrabajo;
    }

    /**
     * Set asegurado
     *
     * @param boolean $asegurado
     * @return MntPaciente
     */
    public function setAsegurado($asegurado)
    {
        $this->asegurado = $asegurado;

        return $this;
    }

    /**
     * Get asegurado
     *
     * @return boolean 
     */
    public function getAsegurado()
    {
        return $this->asegurado;
    }

    /**
     * Set numeroAfiliacion
     *
     * @param string $numeroAfiliacion
     * @return MntPaciente
     */
    public function setNumeroAfiliacion($numeroAfiliacion)
    {
        $this->numeroAfiliacion = $numeroAfiliacion;

        return $this;
    }

    /**
     * Get numeroAfiliacion
     *
     * @return string 
     */
    public function getNumeroAfiliacion()
    {
        return $this->numeroAfiliacion;
    }

    /**
     * Set cotizante
     *
     * @param boolean $cotizante
     * @return MntPaciente
     */
    public function setCotizante($cotizante)
    {
        $this->cotizante = $cotizante;

        return $this;
    }

    /**
     * Get cotizante
     *
     * @return boolean 
     */
    public function getCotizante()
    {
        return $this->cotizante;
    }

    /**
     * Set nombrePadre
     *
     * @param string $nombrePadre
     * @return MntPaciente
     */
    public function setNombrePadre($nombrePadre)
    {
        $this->nombrePadre = $nombrePadre;

        return $this;
    }

    /**
     * Get nombrePadre
     *
     * @return string 
     */
    public function getNombrePadre()
    {
        return $this->nombrePadre;
    }

    /**
     * Set nombreMadre
     *
     * @param string $nombreMadre
     * @return MntPaciente
     */
    public function setNombreMadre($nombreMadre)
    {
        $this->nombreMadre = $nombreMadre;

        return $this;
    }

    /**
     * Get nombreMadre
     *
     * @return string 
     */
    public function getNombreMadre()
    {
        return $this->nombreMadre;
    }

    /**
     * Set nombreConyuge
     *
     * @param string $nombreConyuge
     * @return MntPaciente
     */
    public function setNombreConyuge($nombreConyuge)
    {
        $this->nombreConyuge = $nombreConyuge;

        return $this;
    }

    /**
     * Get nombreConyuge
     *
     * @return string 
     */
    public function getNombreConyuge()
    {
        return $this->nombreConyuge;
    }

    /**
     * Set nombreResponsable
     *
     * @param string $nombreResponsable
     * @return MntPaciente
     */
    public function setNombreResponsable($nombreResponsable)
    {
        $this->nombreResponsable = $nombreResponsable;

        return $this;
    }

    /**
     * Get nombreResponsable
     *
     * @return string 
     */
    public function getNombreResponsable()
    {
        return $this->nombreResponsable;
    }

    /**
     * Set direccionResponsable
     *
     * @param string $direccionResponsable
     * @return MntPaciente
     */
    public function setDireccionResponsable($direccionResponsable)
    {
        $this->direccionResponsable = $direccionResponsable;

        return $this;
    }

    /**
     * Get direccionResponsable
     *
     * @return string 
     */
    public function getDireccionResponsable()
    {
        return $this->direccionResponsable;
    }

    /**
     * Set telefonoResponsable
     *
     * @param string $telefonoResponsable
     * @return MntPaciente
     */
    public function setTelefonoResponsable($telefonoResponsable)
    {
        $this->telefonoResponsable = $telefonoResponsable;

        return $this;
    }

    /**
     * Get telefonoResponsable
     *
     * @return string 
     */
    public function getTelefonoResponsable()
    {
        return $this->telefonoResponsable;
    }

    /**
     * Set numeroDocIdeResponsable
     *
     * @param string $numeroDocIdeResponsable
     * @return MntPaciente
     */
    public function setNumeroDocIdeResponsable($numeroDocIdeResponsable)
    {
        $this->numeroDocIdeResponsable = $numeroDocIdeResponsable;

        return $this;
    }

    /**
     * Get numeroDocIdeResponsable
     *
     * @return string 
     */
    public function getNumeroDocIdeResponsable()
    {
        return $this->numeroDocIdeResponsable;
    }

    /**
     * Set nombreProporcionoDatos
     *
     * @param string $nombreProporcionoDatos
     * @return MntPaciente
     */
    public function setNombreProporcionoDatos($nombreProporcionoDatos)
    {
        $this->nombreProporcionoDatos = $nombreProporcionoDatos;

        return $this;
    }

    /**
     * Get nombreProporcionoDatos
     *
     * @return string 
     */
    public function getNombreProporcionoDatos()
    {
        return $this->nombreProporcionoDatos;
    }

    /**
     * Set numeroDocIdeProporDatos
     *
     * @param string $numeroDocIdeProporDatos
     * @return MntPaciente
     */
    public function setNumeroDocIdeProporDatos($numeroDocIdeProporDatos)
    {
        $this->numeroDocIdeProporDatos = $numeroDocIdeProporDatos;

        return $this;
    }

    /**
     * Get numeroDocIdeProporDatos
     *
     * @return string 
     */
    public function getNumeroDocIdeProporDatos()
    {
        return $this->numeroDocIdeProporDatos;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return MntPaciente
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
     * Set conocidoPor
     *
     * @param string $conocidoPor
     * @return MntPaciente
     */
    public function setConocidoPor($conocidoPor)
    {
        $this->conocidoPor = $conocidoPor;

        return $this;
    }

    /**
     * Get conocidoPor
     *
     * @return string 
     */
    public function getConocidoPor()
    {
        return $this->conocidoPor;
    }

    /**
     * Set idSiff
     *
     * @param integer $idSiff
     * @return MntPaciente
     */
    public function setIdSiff($idSiff)
    {
        $this->idSiff = $idSiff;

        return $this;
    }

    /**
     * Get idSiff
     *
     * @return integer 
     */
    public function getIdSiff()
    {
        return $this->idSiff;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return MntPaciente
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set dispensarizacionIndividual
     *
     * @param integer $dispensarizacionIndividual
     * @return MntPaciente
     */
    public function setDispensarizacionIndividual($dispensarizacionIndividual)
    {
        $this->dispensarizacionIndividual = $dispensarizacionIndividual;

        return $this;
    }

    /**
     * Get dispensarizacionIndividual
     *
     * @return integer 
     */
    public function getDispensarizacionIndividual()
    {
        return $this->dispensarizacionIndividual;
    }

    /**
     * Set idPacienteInicial
     *
     * @param integer $idPacienteInicial
     * @return MntPaciente
     */
    public function setIdPacienteInicial($idPacienteInicial)
    {
        $this->idPacienteInicial = $idPacienteInicial;

        return $this;
    }

    /**
     * Get idPacienteInicial
     *
     * @return integer 
     */
    public function getIdPacienteInicial()
    {
        return $this->idPacienteInicial;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return MntPaciente
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaMod
     *
     * @param \DateTime $fechaMod
     * @return MntPaciente
     */
    public function setFechaMod($fechaMod)
    {
        $this->fechaMod = $fechaMod;

        return $this;
    }

    /**
     * Get fechaMod
     *
     * @return \DateTime 
     */
    public function getFechaMod()
    {
        return $this->fechaMod;
    }

    /**
     * Set estadoObstetrico
     *
     * @param string $estadoObstetrico
     * @return MntPaciente
     */
    public function setEstadoObstetrico($estadoObstetrico)
    {
        $this->estadoObstetrico = $estadoObstetrico;

        return $this;
    }

    /**
     * Get estadoObstetrico
     *
     * @return string 
     */
    public function getEstadoObstetrico()
    {
        return $this->estadoObstetrico;
    }

    /**
     * Set idAreaCotizacion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaCotizante $idAreaCotizacion
     * @return MntPaciente
     */
    public function setIdAreaCotizacion(\Minsal\shcpBundle\Entity\CtlAreaCotizante $idAreaCotizacion = null)
    {
        $this->idAreaCotizacion = $idAreaCotizacion;

        return $this;
    }

    /**
     * Get idAreaCotizacion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaCotizante 
     */
    public function getIdAreaCotizacion()
    {
        return $this->idAreaCotizacion;
    }

    /**
     * Set areaGeograficaDomicilio
     *
     * @param \Minsal\shcpBundle\Entity\CtlAreaGeografica $areaGeograficaDomicilio
     * @return MntPaciente
     */
    public function setAreaGeograficaDomicilio(\Minsal\shcpBundle\Entity\CtlAreaGeografica $areaGeograficaDomicilio = null)
    {
        $this->areaGeograficaDomicilio = $areaGeograficaDomicilio;

        return $this;
    }

    /**
     * Get areaGeograficaDomicilio
     *
     * @return \Minsal\shcpBundle\Entity\CtlAreaGeografica 
     */
    public function getAreaGeograficaDomicilio()
    {
        return $this->areaGeograficaDomicilio;
    }

    /**
     * Set idCantonDomicilio
     *
     * @param \Minsal\shcpBundle\Entity\CtlCanton $idCantonDomicilio
     * @return MntPaciente
     */
    public function setIdCantonDomicilio(\Minsal\shcpBundle\Entity\CtlCanton $idCantonDomicilio = null)
    {
        $this->idCantonDomicilio = $idCantonDomicilio;

        return $this;
    }

    /**
     * Get idCantonDomicilio
     *
     * @return \Minsal\shcpBundle\Entity\CtlCanton 
     */
    public function getIdCantonDomicilio()
    {
        return $this->idCantonDomicilio;
    }

    /**
     * Set idDepartamentoDomicilio
     *
     * @param \Minsal\shcpBundle\Entity\CtlDepartamento $idDepartamentoDomicilio
     * @return MntPaciente
     */
    public function setIdDepartamentoDomicilio(\Minsal\shcpBundle\Entity\CtlDepartamento $idDepartamentoDomicilio = null)
    {
        $this->idDepartamentoDomicilio = $idDepartamentoDomicilio;

        return $this;
    }

    /**
     * Get idDepartamentoDomicilio
     *
     * @return \Minsal\shcpBundle\Entity\CtlDepartamento 
     */
    public function getIdDepartamentoDomicilio()
    {
        return $this->idDepartamentoDomicilio;
    }

    /**
     * Set idDepartamentoNacimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlDepartamento $idDepartamentoNacimiento
     * @return MntPaciente
     */
    public function setIdDepartamentoNacimiento(\Minsal\shcpBundle\Entity\CtlDepartamento $idDepartamentoNacimiento = null)
    {
        $this->idDepartamentoNacimiento = $idDepartamentoNacimiento;

        return $this;
    }

    /**
     * Get idDepartamentoNacimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlDepartamento 
     */
    public function getIdDepartamentoNacimiento()
    {
        return $this->idDepartamentoNacimiento;
    }

    /**
     * Set idDocePaciente
     *
     * @param \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDocePaciente
     * @return MntPaciente
     */
    public function setIdDocePaciente(\Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDocePaciente = null)
    {
        $this->idDocePaciente = $idDocePaciente;

        return $this;
    }

    /**
     * Get idDocePaciente
     *
     * @return \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad 
     */
    public function getIdDocePaciente()
    {
        return $this->idDocePaciente;
    }

    /**
     * Set idDoceProporcionoDatos
     *
     * @param \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDoceProporcionoDatos
     * @return MntPaciente
     */
    public function setIdDoceProporcionoDatos(\Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDoceProporcionoDatos = null)
    {
        $this->idDoceProporcionoDatos = $idDoceProporcionoDatos;

        return $this;
    }

    /**
     * Get idDoceProporcionoDatos
     *
     * @return \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad 
     */
    public function getIdDoceProporcionoDatos()
    {
        return $this->idDoceProporcionoDatos;
    }

    /**
     * Set idDoceResponsable
     *
     * @param \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDoceResponsable
     * @return MntPaciente
     */
    public function setIdDoceResponsable(\Minsal\shcpBundle\Entity\CtlDocumentoIdentidad $idDoceResponsable = null)
    {
        $this->idDoceResponsable = $idDoceResponsable;

        return $this;
    }

    /**
     * Get idDoceResponsable
     *
     * @return \Minsal\shcpBundle\Entity\CtlDocumentoIdentidad 
     */
    public function getIdDoceResponsable()
    {
        return $this->idDoceResponsable;
    }

    /**
     * Set idEstadoCivil
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstadoCivil $idEstadoCivil
     * @return MntPaciente
     */
    public function setIdEstadoCivil(\Minsal\shcpBundle\Entity\CtlEstadoCivil $idEstadoCivil = null)
    {
        $this->idEstadoCivil = $idEstadoCivil;

        return $this;
    }

    /**
     * Get idEstadoCivil
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstadoCivil 
     */
    public function getIdEstadoCivil()
    {
        return $this->idEstadoCivil;
    }

    /**
     * Set idMunicipioDomicilio
     *
     * @param \Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipioDomicilio
     * @return MntPaciente
     */
    public function setIdMunicipioDomicilio(\Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipioDomicilio = null)
    {
        $this->idMunicipioDomicilio = $idMunicipioDomicilio;

        return $this;
    }

    /**
     * Get idMunicipioDomicilio
     *
     * @return \Minsal\shcpBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipioDomicilio()
    {
        return $this->idMunicipioDomicilio;
    }

    /**
     * Set idMunicipioNacimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipioNacimiento
     * @return MntPaciente
     */
    public function setIdMunicipioNacimiento(\Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipioNacimiento = null)
    {
        $this->idMunicipioNacimiento = $idMunicipioNacimiento;

        return $this;
    }

    /**
     * Get idMunicipioNacimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipioNacimiento()
    {
        return $this->idMunicipioNacimiento;
    }

    /**
     * Set idNacionalidad
     *
     * @param \Minsal\shcpBundle\Entity\CtlNacionalidad $idNacionalidad
     * @return MntPaciente
     */
    public function setIdNacionalidad(\Minsal\shcpBundle\Entity\CtlNacionalidad $idNacionalidad = null)
    {
        $this->idNacionalidad = $idNacionalidad;

        return $this;
    }

    /**
     * Get idNacionalidad
     *
     * @return \Minsal\shcpBundle\Entity\CtlNacionalidad 
     */
    public function getIdNacionalidad()
    {
        return $this->idNacionalidad;
    }

    /**
     * Set idOcupacion
     *
     * @param \Minsal\shcpBundle\Entity\CtlOcupacion $idOcupacion
     * @return MntPaciente
     */
    public function setIdOcupacion(\Minsal\shcpBundle\Entity\CtlOcupacion $idOcupacion = null)
    {
        $this->idOcupacion = $idOcupacion;

        return $this;
    }

    /**
     * Get idOcupacion
     *
     * @return \Minsal\shcpBundle\Entity\CtlOcupacion 
     */
    public function getIdOcupacion()
    {
        return $this->idOcupacion;
    }

    /**
     * Set idPaisNacimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlPais $idPaisNacimiento
     * @return MntPaciente
     */
    public function setIdPaisNacimiento(\Minsal\shcpBundle\Entity\CtlPais $idPaisNacimiento = null)
    {
        $this->idPaisNacimiento = $idPaisNacimiento;

        return $this;
    }

    /**
     * Get idPaisNacimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlPais 
     */
    public function getIdPaisNacimiento()
    {
        return $this->idPaisNacimiento;
    }

    /**
     * Set idParentescoProporDatos
     *
     * @param \Minsal\shcpBundle\Entity\CtlParentesco $idParentescoProporDatos
     * @return MntPaciente
     */
    public function setIdParentescoProporDatos(\Minsal\shcpBundle\Entity\CtlParentesco $idParentescoProporDatos = null)
    {
        $this->idParentescoProporDatos = $idParentescoProporDatos;

        return $this;
    }

    /**
     * Get idParentescoProporDatos
     *
     * @return \Minsal\shcpBundle\Entity\CtlParentesco 
     */
    public function getIdParentescoProporDatos()
    {
        return $this->idParentescoProporDatos;
    }

    /**
     * Set idParentescoResponsable
     *
     * @param \Minsal\shcpBundle\Entity\CtlParentesco $idParentescoResponsable
     * @return MntPaciente
     */
    public function setIdParentescoResponsable(\Minsal\shcpBundle\Entity\CtlParentesco $idParentescoResponsable = null)
    {
        $this->idParentescoResponsable = $idParentescoResponsable;

        return $this;
    }

    /**
     * Get idParentescoResponsable
     *
     * @return \Minsal\shcpBundle\Entity\CtlParentesco 
     */
    public function getIdParentescoResponsable()
    {
        return $this->idParentescoResponsable;
    }

    /**
     * Set idSexo
     *
     * @param \Minsal\shcpBundle\Entity\CtlSexo $idSexo
     * @return MntPaciente
     */
    public function setIdSexo(\Minsal\shcpBundle\Entity\CtlSexo $idSexo = null)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return \Minsal\shcpBundle\Entity\CtlSexo 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * Set idUser
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUser
     * @return MntPaciente
     */
    public function setIdUser(\Minsal\shcpBundle\Entity\FosUserUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idUserMod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUserMod
     * @return MntPaciente
     */
    public function setIdUserMod(\Minsal\shcpBundle\Entity\FosUserUser $idUserMod = null)
    {
        $this->idUserMod = $idUserMod;

        return $this;
    }

    /**
     * Get idUserMod
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUserMod()
    {
        return $this->idUserMod;
    }
}
