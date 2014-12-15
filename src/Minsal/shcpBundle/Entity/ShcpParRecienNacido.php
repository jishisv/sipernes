<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParRecienNacido
 *
 * @ORM\Table(name="shcp_par_recien_nacido", indexes={@ORM\Index(name="IDX_26767CEFD766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParRecienNacido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_recien_nacido_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_orden", type="string", nullable=true)
     */
    private $renOrden;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_sexo", type="string", nullable=true)
     */
    private $renSexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ren_peso", type="integer", nullable=true)
     */
    private $renPeso;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_peso_men2500", type="string", nullable=true)
     */
    private $renPesoMen2500;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_peso_may4000", type="string", nullable=true)
     */
    private $renPesoMay4000;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_perimetro_cefal", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $renPerimetroCefal;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_longitud", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $renLongitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="ren_edad_gest_sem", type="integer", nullable=true)
     */
    private $renEdadGestSem;

    /**
     * @var integer
     *
     * @ORM\Column(name="ren_edad_gest_dias", type="integer", nullable=true)
     */
    private $renEdadGestDias;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_calculado_por", type="string", nullable=true)
     */
    private $renCalculadoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_peso_edad_gest", type="string", nullable=true)
     */
    private $renPesoEdadGest;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_apgar_1min", type="string", nullable=true)
     */
    private $renApgar1min;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_apgar_5min", type="string", nullable=true)
     */
    private $renApgar5min;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_reanima", type="string", nullable=true)
     */
    private $renReanima;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_fallece_lugar_parto", type="string", nullable=true)
     */
    private $renFalleceLugarParto;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_referido", type="string", nullable=true)
     */
    private $renReferido;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_defect_conge", type="string", nullable=true)
     */
    private $renDefectConge;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_otro_defect_conge", type="string", nullable=true)
     */
    private $renOtroDefectConge;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_vih_expuesto", type="string", nullable=true)
     */
    private $renVihExpuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_vih_tratamient", type="string", nullable=true)
     */
    private $renVihTratamient;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_meconio_1dia", type="string", nullable=true)
     */
    private $renMeconio1dia;

    /**
     * @var string
     *
     * @ORM\Column(name="ren_neo_atend_por", type="string", nullable=true)
     */
    private $renNeoAtendPor;

    /**
     * @var integer
     *
     * @ORM\Column(name="ren_atend_neo", type="bigint", nullable=true)
     */
    private $renAtendNeo;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;



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
     * Set renOrden
     *
     * @param string $renOrden
     * @return ShcpParRecienNacido
     */
    public function setRenOrden($renOrden)
    {
        $this->renOrden = $renOrden;

        return $this;
    }

    /**
     * Get renOrden
     *
     * @return string 
     */
    public function getRenOrden()
    {
        return $this->renOrden;
    }

    /**
     * Set renSexo
     *
     * @param string $renSexo
     * @return ShcpParRecienNacido
     */
    public function setRenSexo($renSexo)
    {
        $this->renSexo = $renSexo;

        return $this;
    }

    /**
     * Get renSexo
     *
     * @return string 
     */
    public function getRenSexo()
    {
        return $this->renSexo;
    }

    /**
     * Set renPeso
     *
     * @param integer $renPeso
     * @return ShcpParRecienNacido
     */
    public function setRenPeso($renPeso)
    {
        $this->renPeso = $renPeso;

        return $this;
    }

    /**
     * Get renPeso
     *
     * @return integer 
     */
    public function getRenPeso()
    {
        return $this->renPeso;
    }

    /**
     * Set renPesoMen2500
     *
     * @param string $renPesoMen2500
     * @return ShcpParRecienNacido
     */
    public function setRenPesoMen2500($renPesoMen2500)
    {
        $this->renPesoMen2500 = $renPesoMen2500;

        return $this;
    }

    /**
     * Get renPesoMen2500
     *
     * @return string 
     */
    public function getRenPesoMen2500()
    {
        return $this->renPesoMen2500;
    }

    /**
     * Set renPesoMay4000
     *
     * @param string $renPesoMay4000
     * @return ShcpParRecienNacido
     */
    public function setRenPesoMay4000($renPesoMay4000)
    {
        $this->renPesoMay4000 = $renPesoMay4000;

        return $this;
    }

    /**
     * Get renPesoMay4000
     *
     * @return string 
     */
    public function getRenPesoMay4000()
    {
        return $this->renPesoMay4000;
    }

    /**
     * Set renPerimetroCefal
     *
     * @param string $renPerimetroCefal
     * @return ShcpParRecienNacido
     */
    public function setRenPerimetroCefal($renPerimetroCefal)
    {
        $this->renPerimetroCefal = $renPerimetroCefal;

        return $this;
    }

    /**
     * Get renPerimetroCefal
     *
     * @return string 
     */
    public function getRenPerimetroCefal()
    {
        return $this->renPerimetroCefal;
    }

    /**
     * Set renLongitud
     *
     * @param string $renLongitud
     * @return ShcpParRecienNacido
     */
    public function setRenLongitud($renLongitud)
    {
        $this->renLongitud = $renLongitud;

        return $this;
    }

    /**
     * Get renLongitud
     *
     * @return string 
     */
    public function getRenLongitud()
    {
        return $this->renLongitud;
    }

    /**
     * Set renEdadGestSem
     *
     * @param integer $renEdadGestSem
     * @return ShcpParRecienNacido
     */
    public function setRenEdadGestSem($renEdadGestSem)
    {
        $this->renEdadGestSem = $renEdadGestSem;

        return $this;
    }

    /**
     * Get renEdadGestSem
     *
     * @return integer 
     */
    public function getRenEdadGestSem()
    {
        return $this->renEdadGestSem;
    }

    /**
     * Set renEdadGestDias
     *
     * @param integer $renEdadGestDias
     * @return ShcpParRecienNacido
     */
    public function setRenEdadGestDias($renEdadGestDias)
    {
        $this->renEdadGestDias = $renEdadGestDias;

        return $this;
    }

    /**
     * Get renEdadGestDias
     *
     * @return integer 
     */
    public function getRenEdadGestDias()
    {
        return $this->renEdadGestDias;
    }

    /**
     * Set renCalculadoPor
     *
     * @param string $renCalculadoPor
     * @return ShcpParRecienNacido
     */
    public function setRenCalculadoPor($renCalculadoPor)
    {
        $this->renCalculadoPor = $renCalculadoPor;

        return $this;
    }

    /**
     * Get renCalculadoPor
     *
     * @return string 
     */
    public function getRenCalculadoPor()
    {
        return $this->renCalculadoPor;
    }

    /**
     * Set renPesoEdadGest
     *
     * @param string $renPesoEdadGest
     * @return ShcpParRecienNacido
     */
    public function setRenPesoEdadGest($renPesoEdadGest)
    {
        $this->renPesoEdadGest = $renPesoEdadGest;

        return $this;
    }

    /**
     * Get renPesoEdadGest
     *
     * @return string 
     */
    public function getRenPesoEdadGest()
    {
        return $this->renPesoEdadGest;
    }

    /**
     * Set renApgar1min
     *
     * @param string $renApgar1min
     * @return ShcpParRecienNacido
     */
    public function setRenApgar1min($renApgar1min)
    {
        $this->renApgar1min = $renApgar1min;

        return $this;
    }

    /**
     * Get renApgar1min
     *
     * @return string 
     */
    public function getRenApgar1min()
    {
        return $this->renApgar1min;
    }

    /**
     * Set renApgar5min
     *
     * @param string $renApgar5min
     * @return ShcpParRecienNacido
     */
    public function setRenApgar5min($renApgar5min)
    {
        $this->renApgar5min = $renApgar5min;

        return $this;
    }

    /**
     * Get renApgar5min
     *
     * @return string 
     */
    public function getRenApgar5min()
    {
        return $this->renApgar5min;
    }

    /**
     * Set renReanima
     *
     * @param string $renReanima
     * @return ShcpParRecienNacido
     */
    public function setRenReanima($renReanima)
    {
        $this->renReanima = $renReanima;

        return $this;
    }

    /**
     * Get renReanima
     *
     * @return string 
     */
    public function getRenReanima()
    {
        return $this->renReanima;
    }

    /**
     * Set renFalleceLugarParto
     *
     * @param string $renFalleceLugarParto
     * @return ShcpParRecienNacido
     */
    public function setRenFalleceLugarParto($renFalleceLugarParto)
    {
        $this->renFalleceLugarParto = $renFalleceLugarParto;

        return $this;
    }

    /**
     * Get renFalleceLugarParto
     *
     * @return string 
     */
    public function getRenFalleceLugarParto()
    {
        return $this->renFalleceLugarParto;
    }

    /**
     * Set renReferido
     *
     * @param string $renReferido
     * @return ShcpParRecienNacido
     */
    public function setRenReferido($renReferido)
    {
        $this->renReferido = $renReferido;

        return $this;
    }

    /**
     * Get renReferido
     *
     * @return string 
     */
    public function getRenReferido()
    {
        return $this->renReferido;
    }

    /**
     * Set renDefectConge
     *
     * @param string $renDefectConge
     * @return ShcpParRecienNacido
     */
    public function setRenDefectConge($renDefectConge)
    {
        $this->renDefectConge = $renDefectConge;

        return $this;
    }

    /**
     * Get renDefectConge
     *
     * @return string 
     */
    public function getRenDefectConge()
    {
        return $this->renDefectConge;
    }

    /**
     * Set renOtroDefectConge
     *
     * @param string $renOtroDefectConge
     * @return ShcpParRecienNacido
     */
    public function setRenOtroDefectConge($renOtroDefectConge)
    {
        $this->renOtroDefectConge = $renOtroDefectConge;

        return $this;
    }

    /**
     * Get renOtroDefectConge
     *
     * @return string 
     */
    public function getRenOtroDefectConge()
    {
        return $this->renOtroDefectConge;
    }

    /**
     * Set renVihExpuesto
     *
     * @param string $renVihExpuesto
     * @return ShcpParRecienNacido
     */
    public function setRenVihExpuesto($renVihExpuesto)
    {
        $this->renVihExpuesto = $renVihExpuesto;

        return $this;
    }

    /**
     * Get renVihExpuesto
     *
     * @return string 
     */
    public function getRenVihExpuesto()
    {
        return $this->renVihExpuesto;
    }

    /**
     * Set renVihTratamient
     *
     * @param string $renVihTratamient
     * @return ShcpParRecienNacido
     */
    public function setRenVihTratamient($renVihTratamient)
    {
        $this->renVihTratamient = $renVihTratamient;

        return $this;
    }

    /**
     * Get renVihTratamient
     *
     * @return string 
     */
    public function getRenVihTratamient()
    {
        return $this->renVihTratamient;
    }

    /**
     * Set renMeconio1dia
     *
     * @param string $renMeconio1dia
     * @return ShcpParRecienNacido
     */
    public function setRenMeconio1dia($renMeconio1dia)
    {
        $this->renMeconio1dia = $renMeconio1dia;

        return $this;
    }

    /**
     * Get renMeconio1dia
     *
     * @return string 
     */
    public function getRenMeconio1dia()
    {
        return $this->renMeconio1dia;
    }

    /**
     * Set renNeoAtendPor
     *
     * @param string $renNeoAtendPor
     * @return ShcpParRecienNacido
     */
    public function setRenNeoAtendPor($renNeoAtendPor)
    {
        $this->renNeoAtendPor = $renNeoAtendPor;

        return $this;
    }

    /**
     * Get renNeoAtendPor
     *
     * @return string 
     */
    public function getRenNeoAtendPor()
    {
        return $this->renNeoAtendPor;
    }

    /**
     * Set renAtendNeo
     *
     * @param integer $renAtendNeo
     * @return ShcpParRecienNacido
     */
    public function setRenAtendNeo($renAtendNeo)
    {
        $this->renAtendNeo = $renAtendNeo;

        return $this;
    }

    /**
     * Get renAtendNeo
     *
     * @return integer 
     */
    public function getRenAtendNeo()
    {
        return $this->renAtendNeo;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParRecienNacido
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
}
