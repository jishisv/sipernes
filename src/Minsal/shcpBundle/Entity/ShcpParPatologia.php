<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParPatologia
 *
 * @ORM\Table(name="shcp_par_patologia", indexes={@ORM\Index(name="IDX_A0EA638AD766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParPatologia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_patologia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_existencia", type="string", nullable=true)
     */
    private $patExistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_enfermedad", type="string", nullable=true)
     */
    private $patEnfermedad;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_hemorragia_1trim", type="string", nullable=true)
     */
    private $patHemorragia1trim;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_hemorragia_2trim", type="string", nullable=true)
     */
    private $patHemorragia2trim;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_hemorragia_3trim", type="string", nullable=true)
     */
    private $patHemorragia3trim;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_postparto", type="string", nullable=true)
     */
    private $patPostparto;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_infec_puerperal", type="string", nullable=true)
     */
    private $patInfecPuerperal;

    /**
     * @var string
     *
     * @ORM\Column(name="pat_notas", type="string", length=200, nullable=true)
     */
    private $patNotas;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision", inversedBy="parpatologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;

    
    /**
     *
     * @ORM\OneToMany(targetEntity="Relationship63", mappedBy="idPatologia", cascade={"all"}, orphanRemoval=true)
     *
     */
    private $detallepatologias;


    
    private $htaprevia;
    private $htainducido;
    private $preeclampsia;
    private $eclampsia;
    private $cardiopatia;
    private $nefropatia;
    private $diabetes;
    private $infeccionovular;
    private $infeccionurinaria;
    private $amenazaparto;
    private $rciu;
    private $roturaprem;
    private $anemia;
    private $otracondicion;
    

    
   


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
     * Set patExistencia
     *
     * @param string $patExistencia
     * @return ShcpParPatologia
     */
    public function setPatExistencia($patExistencia)
    {
        $this->patExistencia = $patExistencia;

        return $this;
    }

    /**
     * Get patExistencia
     *
     * @return string 
     */
    public function getPatExistencia()
    {
        return $this->patExistencia;
    }

    /**
     * Set patEnfermedad
     *
     * @param string $patEnfermedad
     * @return ShcpParPatologia
     */
    public function setPatEnfermedad($patEnfermedad)
    {
        $this->patEnfermedad = $patEnfermedad;

        return $this;
    }

    /**
     * Get patEnfermedad
     *
     * @return string 
     */
    public function getPatEnfermedad()
    {
        return $this->patEnfermedad;
    }

    /**
     * Set patHemorragia1trim
     *
     * @param string $patHemorragia1trim
     * @return ShcpParPatologia
     */
    public function setPatHemorragia1trim($patHemorragia1trim)
    {
        $this->patHemorragia1trim = $patHemorragia1trim;

        return $this;
    }

    /**
     * Get patHemorragia1trim
     *
     * @return string 
     */
    public function getPatHemorragia1trim()
    {
        return $this->patHemorragia1trim;
    }

    /**
     * Set patHemorragia2trim
     *
     * @param string $patHemorragia2trim
     * @return ShcpParPatologia
     */
    public function setPatHemorragia2trim($patHemorragia2trim)
    {
        $this->patHemorragia2trim = $patHemorragia2trim;

        return $this;
    }

    /**
     * Get patHemorragia2trim
     *
     * @return string 
     */
    public function getPatHemorragia2trim()
    {
        return $this->patHemorragia2trim;
    }

    /**
     * Set patHemorragia3trim
     *
     * @param string $patHemorragia3trim
     * @return ShcpParPatologia
     */
    public function setPatHemorragia3trim($patHemorragia3trim)
    {
        $this->patHemorragia3trim = $patHemorragia3trim;

        return $this;
    }

    /**
     * Get patHemorragia3trim
     *
     * @return string 
     */
    public function getPatHemorragia3trim()
    {
        return $this->patHemorragia3trim;
    }

    /**
     * Set patPostparto
     *
     * @param string $patPostparto
     * @return ShcpParPatologia
     */
    public function setPatPostparto($patPostparto)
    {
        $this->patPostparto = $patPostparto;

        return $this;
    }

    /**
     * Get patPostparto
     *
     * @return string 
     */
    public function getPatPostparto()
    {
        return $this->patPostparto;
    }

    /**
     * Set patInfecPuerperal
     *
     * @param string $patInfecPuerperal
     * @return ShcpParPatologia
     */
    public function setPatInfecPuerperal($patInfecPuerperal)
    {
        $this->patInfecPuerperal = $patInfecPuerperal;

        return $this;
    }

    /**
     * Get patInfecPuerperal
     *
     * @return string 
     */
    public function getPatInfecPuerperal()
    {
        return $this->patInfecPuerperal;
    }

    /**
     * Set patNotas
     *
     * @param string $patNotas
     * @return ShcpParPatologia
     */
    public function setPatNotas($patNotas)
    {
        $this->patNotas = $patNotas;

        return $this;
    }

    /**
     * Get patNotas
     *
     * @return string 
     */
    public function getPatNotas()
    {
        return $this->patNotas;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParPatologia
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

    
   /* public function __toString() {
          return $this->expNombre;
    }
*/



    /**
     * Get htaprevia
     *
     * @return string 
     */
    public function setHtaprevia($htaprevia)
    {
        $this->htaprevia = $htaprevia;
        return $this;
    }

    /**
     * Get htaprevia
     *
     * @return string 
     */
    public function getHtaprevia()
    {
        return $this->htaprevia;
    }



    /**
     * Get htainducido
     *
     * @return string 
     */
    public function setHtainducido($htainducido)
    {
        $this->htainducido = $htainducido;
        return $this;
    }

    /**
     * Get htainducido
     *
     * @return string 
     */
    public function getHtainducido()
    {
        return $this->htainducido;
    }



    /**
     * Get preeclampsia
     *
     * @return string 
     */
    public function setPreeclampsia($preeclampsia)
    {
        $this->preeclampsia = $preeclampsia;
        return $this;
    }

    /**
     * Get preeclampsia
     *
     * @return string 
     */
    public function getPreeclampsia()
    {
        return $this->preeclampsia;
    }



    /**
     * Get eclampsia
     *
     * @return string 
     */
    public function setEclampsia($eclampsia)
    {
        $this->eclampsia = $eclampsia;
        return $this;
    }

    /**
     * Get eclampsia
     *
     * @return string 
     */
    public function getEclampsia()
    {
        return $this->eclampsia;
    }



    /**
     * Get cardiopatia
     *
     * @return string 
     */
    public function setCardiopatia($cardiopatia)
    {
        $this->cardiopatia = $cardiopatia;
        return $this;
    }

    /**
     * Get cardiopatia
     *
     * @return string 
     */
    public function getCardiopatia()
    {
        return $this->cardiopatia;
    }



    /**
     * Get nefropatia
     *
     * @return string 
     */
    public function setNefropatia($nefropatia)
    {
        $this->nefropatia = $nefropatia;
        return $this;
    }

    /**
     * Get nefropatia
     *
     * @return string 
     */
    public function getNefropatia()
    {
        return $this->nefropatia;
    }



    /**
     * Get diabetes
     *
     * @return string 
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;
        return $this;
    }

    /**
     * Get diabetes
     *
     * @return string 
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }



    /**
     * Get infeccionovular
     *
     * @return string 
     */
    public function setInfeccionovular($infeccionovular)
    {
        $this->infeccionovular = $infeccionovular;
        return $this;
    }

    /**
     * Get infeccionovular
     *
     * @return string 
     */
    public function getInfeccionovular()
    {
        return $this->infeccionovular;
    }



    /**
     * Get infeccionurinaria
     *
     * @return string 
     */
    public function setInfeccionurinaria($infeccionurinaria)
    {
        $this->infeccionurinaria = $infeccionurinaria;
        return $this;
    }

    /**
     * Get infeccionurinaria
     *
     * @return string 
     */
    public function getInfeccionurinaria()
    {
        return $this->infeccionurinaria;
    }



    /**
     * Get amenazaparto
     *
     * @return string 
     */
    public function setAmenazaparto($amenazaparto)
    {
        $this->amenazaparto = $amenazaparto;
        return $this;
    }

    /**
     * Get amenazaparto
     *
     * @return string 
     */
    public function getAmenazaparto()
    {
        return $this->amenazaparto;
    }



    /**
     * Get rciu
     *
     * @return string 
     */
    public function setRciu($rciu)
    {
        $this->rciu = $rciu;
        return $this;
    }

    /**
     * Get rciu
     *
     * @return string 
     */
    public function getRciu()
    {
        return $this->rciu;
    }



    /**
     * Get roturaprem
     *
     * @return string 
     */
    public function setRoturaprem($roturaprem)
    {
        $this->roturaprem = $roturaprem;
        return $this;
    }

    /**
     * Get roturaprem
     *
     * @return string 
     */
    public function getRoturaprem()
    {
        return $this->roturaprem;
    }



    /**
     * Get anemia
     *
     * @return string 
     */
    public function setAnemia($anemia)
    {
        $this->anemia = $anemia;
        return $this;
    }

    /**
     * Get anemia
     *
     * @return string 
     */
    public function getAnemia()
    {
        return $this->anemia;
    }



    /**
     * Get otracondicion
     *
     * @return string 
     */
    public function setOtracondicion($otracondicion)
    {
        $this->otracondicion = $otracondicion;
        return $this;
    }

    /**
     * Get otracondicion
     *
     * @return string 
     */
    public function getOtracondicion()
    {
        return $this->otracondicion;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detallepatologias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add detallepatologias
     *
     * @param \Minsal\shcpBundle\Entity\Relationship63 $detallepatologias
     * @return ShcpParPatologia
     */
    public function addDetallepatologia(\Minsal\shcpBundle\Entity\Relationship63 $detallepatologias)
    {
        $this->detallepatologias[] = $detallepatologias;

        return $this;
    }

    /**
     * Remove detallepatologias
     *
     * @param \Minsal\shcpBundle\Entity\Relationship63 $detallepatologias
     */
    public function removeDetallepatologia(\Minsal\shcpBundle\Entity\Relationship63 $detallepatologias)
    {
        $this->detallepatologias->removeElement($detallepatologias);
    }

    /**
     * Get detallepatologias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetallepatologias()
    {
        return $this->detallepatologias;
    }
}
