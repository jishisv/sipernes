<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboPreproced2
 *
 * @ORM\Table(name="shcp_abo_preproced2", indexes={@ORM\Index(name="IDX_B5C1392D70374B77", columns={"id_preproced1"})})
 * @ORM\Entity
 */
class ShcpAboPreproced2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_preproced2_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_sintomat_dias", type="string", nullable=true)
     */
    private $prep2SintomatDias;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_sintomat_hrs", type="string", nullable=true)
     */
    private $prep2SintomatHrs;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_sangrado", type="string", nullable=true)
     */
    private $prep2Sangrado;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_dolor", type="string", nullable=true)
     */
    private $prep2Dolor;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_dolor_escala", type="string", nullable=true)
     */
    private $prep2DolorEscala;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_conciencia", type="string", nullable=true)
     */
    private $prep2Conciencia;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_piel_mucosa", type="string", nullable=true)
     */
    private $prep2PielMucosa;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_abdomen", type="string", nullable=true)
     */
    private $prep2Abdomen;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_tam_uterino", type="string", nullable=true)
     */
    private $prep2TamUterino;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_posicion", type="string", nullable=true)
     */
    private $prep2Posicion;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_cuello_cerrado", type="string", nullable=true)
     */
    private $prep2CuelloCerrado;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_restos", type="string", nullable=true)
     */
    private $prep2Restos;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_vagina_normal", type="string", nullable=true)
     */
    private $prep2VaginaNormal;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_diametro_eco", type="string", nullable=true)
     */
    private $prep2DiametroEco;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_tamanio", type="string", nullable=true)
     */
    private $prep2Tamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_analge_solicitada", type="string", nullable=true)
     */
    private $prep2AnalgeSolicitada;

    /**
     * @var string
     *
     * @ORM\Column(name="prep2_analge_realizada", type="string", nullable=true)
     */
    private $prep2AnalgeRealizada;

    /**
     * @var \ShcpAboPreproced1
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboPreproced1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_preproced1", referencedColumnName="id")
     * })
     */
    private $idPreproced1;

    
    /*campos agregados ára convertir array de mucosas a cadena de char*/
    
    
    /**
     * @var string
     */
    
    private $normal;
    
    /**
     * @var string
     */
    private $palida;
    
    /**
     * @var string
     */
    private $equimosis;
    
    /**
     * @var string
     */
    private $petequias;
    
    /**
     * @var string
     */
    private $ictericia;
    
    public function getNormal()
    {
        return $this->normal;
    }
    
     public function setNormal($normal)
    {
        $this->normal= $normal;

        return $this;
    }
    
    public function getPalida()
    {
        return $this->palida;
    }
    
     public function setPalida($palida)
    {
        $this->normal= $palida;

        return $this;
    }
    
    public function getEquimosis()
    {
        return $this->equimosis;
    }
    
     public function setEquimosis($equimosis)
    {
        $this->equimosis= $equimosis;

        return $this;
    }
    
    
    public function getPetequias()
    {
        return $this->petequias;
    }
    
     public function setPetequias($petequias)
    {
        $this->petequias = $petequias;

        return $this;
    }
    
    public function getIctericia()
    {
        return $this->ictericia;
    }
    
     public function setIctericia($ictericia)
    {
        $this->ictericia= $ictericia;

        return $this;
    }
    
    
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
     * Set prep2SintomatDias
     *
     * @param string $prep2SintomatDias
     * @return ShcpAboPreproced2
     */
    public function setPrep2SintomatDias($prep2SintomatDias)
    {
        $this->prep2SintomatDias = $prep2SintomatDias;

        return $this;
    }

    /**
     * Get prep2SintomatDias
     *
     * @return string 
     */
    public function getPrep2SintomatDias()
    {
        return $this->prep2SintomatDias;
    }

    /**
     * Set prep2SintomatHrs
     *
     * @param string $prep2SintomatHrs
     * @return ShcpAboPreproced2
     */
    public function setPrep2SintomatHrs($prep2SintomatHrs)
    {
        $this->prep2SintomatHrs = $prep2SintomatHrs;

        return $this;
    }

    /**
     * Get prep2SintomatHrs
     *
     * @return string 
     */
    public function getPrep2SintomatHrs()
    {
        return $this->prep2SintomatHrs;
    }

    /**
     * Set prep2Sangrado
     *
     * @param string $prep2Sangrado
     * @return ShcpAboPreproced2
     */
    public function setPrep2Sangrado($prep2Sangrado)
    {
        $this->prep2Sangrado = $prep2Sangrado;

        return $this;
    }

    /**
     * Get prep2Sangrado
     *
     * @return string 
     */
    public function getPrep2Sangrado()
    {
        return $this->prep2Sangrado;
    }

    /**
     * Set prep2Dolor
     *
     * @param string $prep2Dolor
     * @return ShcpAboPreproced2
     */
    public function setPrep2Dolor($prep2Dolor)
    {
        $this->prep2Dolor = $prep2Dolor;

        return $this;
    }

    /**
     * Get prep2Dolor
     *
     * @return string 
     */
    public function getPrep2Dolor()
    {
        return $this->prep2Dolor;
    }

    /**
     * Set prep2DolorEscala
     *
     * @param string $prep2DolorEscala
     * @return ShcpAboPreproced2
     */
    public function setPrep2DolorEscala($prep2DolorEscala)
    {
        $this->prep2DolorEscala = $prep2DolorEscala;

        return $this;
    }

    /**
     * Get prep2DolorEscala
     *
     * @return string 
     */
    public function getPrep2DolorEscala()
    {
        return $this->prep2DolorEscala;
    }

    /**
     * Set prep2Conciencia
     *
     * @param string $prep2Conciencia
     * @return ShcpAboPreproced2
     */
    public function setPrep2Conciencia($prep2Conciencia)
    {
        $this->prep2Conciencia = $prep2Conciencia;

        return $this;
    }

    /**
     * Get prep2Conciencia
     *
     * @return string 
     */
    public function getPrep2Conciencia()
    {
        return $this->prep2Conciencia;
    }

    /**
     * Set prep2PielMucosa
     *
     * @param string $prep2PielMucosa
     * @return ShcpAboPreproced2
     */
    public function setPrep2PielMucosa($prep2PielMucosa)
    {
        $this->prep2PielMucosa = $prep2PielMucosa;

        return $this;
    }

    /**
     * Get prep2PielMucosa
     *
     * @return string 
     */
    public function getPrep2PielMucosa()
    {
        return $this->prep2PielMucosa;
    }

    /**
     * Set prep2Abdomen
     *
     * @param string $prep2Abdomen
     * @return ShcpAboPreproced2
     */
    public function setPrep2Abdomen($prep2Abdomen)
    {
        $this->prep2Abdomen = $prep2Abdomen;

        return $this;
    }

    /**
     * Get prep2Abdomen
     *
     * @return string 
     */
    public function getPrep2Abdomen()
    {
        return $this->prep2Abdomen;
    }

    /**
     * Set prep2TamUterino
     *
     * @param string $prep2TamUterino
     * @return ShcpAboPreproced2
     */
    public function setPrep2TamUterino($prep2TamUterino)
    {
        $this->prep2TamUterino = $prep2TamUterino;

        return $this;
    }

    /**
     * Get prep2TamUterino
     *
     * @return string 
     */
    public function getPrep2TamUterino()
    {
        return $this->prep2TamUterino;
    }

    /**
     * Set prep2Posicion
     *
     * @param string $prep2Posicion
     * @return ShcpAboPreproced2
     */
    public function setPrep2Posicion($prep2Posicion)
    {
        $this->prep2Posicion = $prep2Posicion;

        return $this;
    }

    /**
     * Get prep2Posicion
     *
     * @return string 
     */
    public function getPrep2Posicion()
    {
        return $this->prep2Posicion;
    }

    /**
     * Set prep2CuelloCerrado
     *
     * @param string $prep2CuelloCerrado
     * @return ShcpAboPreproced2
     */
    public function setPrep2CuelloCerrado($prep2CuelloCerrado)
    {
        $this->prep2CuelloCerrado = $prep2CuelloCerrado;

        return $this;
    }

    /**
     * Get prep2CuelloCerrado
     *
     * @return string 
     */
    public function getPrep2CuelloCerrado()
    {
        return $this->prep2CuelloCerrado;
    }

    /**
     * Set prep2Restos
     *
     * @param string $prep2Restos
     * @return ShcpAboPreproced2
     */
    public function setPrep2Restos($prep2Restos)
    {
        $this->prep2Restos = $prep2Restos;

        return $this;
    }

    /**
     * Get prep2Restos
     *
     * @return string 
     */
    public function getPrep2Restos()
    {
        return $this->prep2Restos;
    }

    /**
     * Set prep2VaginaNormal
     *
     * @param string $prep2VaginaNormal
     * @return ShcpAboPreproced2
     */
    public function setPrep2VaginaNormal($prep2VaginaNormal)
    {
        $this->prep2VaginaNormal = $prep2VaginaNormal;

        return $this;
    }

    /**
     * Get prep2VaginaNormal
     *
     * @return string 
     */
    public function getPrep2VaginaNormal()
    {
        return $this->prep2VaginaNormal;
    }

    /**
     * Set prep2DiametroEco
     *
     * @param string $prep2DiametroEco
     * @return ShcpAboPreproced2
     */
    public function setPrep2DiametroEco($prep2DiametroEco)
    {
        $this->prep2DiametroEco = $prep2DiametroEco;

        return $this;
    }

    /**
     * Get prep2DiametroEco
     *
     * @return string 
     */
    public function getPrep2DiametroEco()
    {
        return $this->prep2DiametroEco;
    }

    /**
     * Set prep2Tamanio
     *
     * @param string $prep2Tamanio
     * @return ShcpAboPreproced2
     */
    public function setPrep2Tamanio($prep2Tamanio)
    {
        $this->prep2Tamanio = $prep2Tamanio;

        return $this;
    }

    /**
     * Get prep2Tamanio
     *
     * @return string 
     */
    public function getPrep2Tamanio()
    {
        return $this->prep2Tamanio;
    }

    /**
     * Set prep2AnalgeSolicitada
     *
     * @param string $prep2AnalgeSolicitada
     * @return ShcpAboPreproced2
     */
    public function setPrep2AnalgeSolicitada($prep2AnalgeSolicitada)
    {
        $this->prep2AnalgeSolicitada = $prep2AnalgeSolicitada;

        return $this;
    }

    /**
     * Get prep2AnalgeSolicitada
     *
     * @return string 
     */
    public function getPrep2AnalgeSolicitada()
    {
        return $this->prep2AnalgeSolicitada;
    }

    /**
     * Set prep2AnalgeRealizada
     *
     * @param string $prep2AnalgeRealizada
     * @return ShcpAboPreproced2
     */
    public function setPrep2AnalgeRealizada($prep2AnalgeRealizada)
    {
        $this->prep2AnalgeRealizada = $prep2AnalgeRealizada;

        return $this;
    }

    /**
     * Get prep2AnalgeRealizada
     *
     * @return string 
     */
    public function getPrep2AnalgeRealizada()
    {
        return $this->prep2AnalgeRealizada;
    }

    /**
     * Set idPreproced1
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPreproced1 $idPreproced1
     * @return ShcpAboPreproced2
     */
    public function setIdPreproced1(\Minsal\shcpBundle\Entity\ShcpAboPreproced1 $idPreproced1 = null)
    {
        $this->idPreproced1 = $idPreproced1;

        return $this;
    }

    /**
     * Get idPreproced1
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboPreproced1 
     */
    public function getIdPreproced1()
    {
        return $this->idPreproced1;
    }
    
    
    
}
