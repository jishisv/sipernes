<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsGestacionActual
 *
 * @ORM\Table(name="shcp_ins_gestacion_actual", indexes={@ORM\Index(name="IDX_6517CDE793489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsGestacionActual
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_gestacion_actual_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_peso_paciente", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $gestaPesoPaciente;

    /**
     * @var integer
     *
     * @ORM\Column(name="gesta_altura_cms", type="integer", nullable=true)
     */
    private $gestaAlturaCms;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gesta_fec_ult_regla", type="date", nullable=true)
     */
    private $gestaFecUltRegla;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gesta_fec_pro_parto", type="date", nullable=true)
     */
    private $gestaFecProParto;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_eg_conf_fum", type="string", nullable=true)
     */
    private $gestaEgConfFum;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_eg_conf_eco", type="string", nullable=true)
     */
    private $gestaEgConfEco;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_violencia_trimes1", type="string", nullable=true)
     */
    private $gestaViolenciaTrimes1;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_violencia_trimes2", type="string", nullable=true)
     */
    private $gestaViolenciaTrimes2;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_violencia_trimes3", type="string", nullable=true)
     */
    private $gestaViolenciaTrimes3;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_prepar_parto", type="string", nullable=true)
     */
    private $gestaPreparParto;

    /**
     * @var string
     *
     * @ORM\Column(name="gesta_conse_lact_materna", type="string", nullable=true)
     */
    private $gestaConseLactMaterna;

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
     * Set gestaPesoPaciente
     *
     * @param string $gestaPesoPaciente
     * @return ShcpInsGestacionActual
     */
    public function setGestaPesoPaciente($gestaPesoPaciente)
    {
        $this->gestaPesoPaciente = $gestaPesoPaciente;

        return $this;
    }

    /**
     * Get gestaPesoPaciente
     *
     * @return string 
     */
    public function getGestaPesoPaciente()
    {
        return $this->gestaPesoPaciente;
    }

    /**
     * Set gestaAlturaCms
     *
     * @param integer $gestaAlturaCms
     * @return ShcpInsGestacionActual
     */
    public function setGestaAlturaCms($gestaAlturaCms)
    {
        $this->gestaAlturaCms = $gestaAlturaCms;

        return $this;
    }

    /**
     * Get gestaAlturaCms
     *
     * @return integer 
     */
    public function getGestaAlturaCms()
    {
        return $this->gestaAlturaCms;
    }

    /**
     * Set gestaFecUltRegla
     *
     * @param \DateTime $gestaFecUltRegla
     * @return ShcpInsGestacionActual
     */
    public function setGestaFecUltRegla($gestaFecUltRegla)
    {
        $this->gestaFecUltRegla = $gestaFecUltRegla;

        return $this;
    }

    /**
     * Get gestaFecUltRegla
     *
     * @return \DateTime 
     */
    public function getGestaFecUltRegla()
    {
        return $this->gestaFecUltRegla;
    }

    /**
     * Set gestaFecProParto
     *
     * @param \DateTime $gestaFecProParto
     * @return ShcpInsGestacionActual
     */
    public function setGestaFecProParto($gestaFecProParto)
    {
        $this->gestaFecProParto = $gestaFecProParto;

        return $this;
    }

    /**
     * Get gestaFecProParto
     *
     * @return \DateTime 
     */
    public function getGestaFecProParto()
    {
        return $this->gestaFecProParto;
    }

    /**
     * Set gestaEgConfFum
     *
     * @param string $gestaEgConfFum
     * @return ShcpInsGestacionActual
     */
    public function setGestaEgConfFum($gestaEgConfFum)
    {
        $this->gestaEgConfFum = $gestaEgConfFum;

        return $this;
    }

    /**
     * Get gestaEgConfFum
     *
     * @return string 
     */
    public function getGestaEgConfFum()
    {
        return $this->gestaEgConfFum;
    }

    /**
     * Set gestaEgConfEco
     *
     * @param string $gestaEgConfEco
     * @return ShcpInsGestacionActual
     */
    public function setGestaEgConfEco($gestaEgConfEco)
    {
        $this->gestaEgConfEco = $gestaEgConfEco;

        return $this;
    }

    /**
     * Get gestaEgConfEco
     *
     * @return string 
     */
    public function getGestaEgConfEco()
    {
        return $this->gestaEgConfEco;
    }

    /**
     * Set gestaViolenciaTrimes1
     *
     * @param string $gestaViolenciaTrimes1
     * @return ShcpInsGestacionActual
     */
    public function setGestaViolenciaTrimes1($gestaViolenciaTrimes1)
    {
        $this->gestaViolenciaTrimes1 = $gestaViolenciaTrimes1;

        return $this;
    }

    /**
     * Get gestaViolenciaTrimes1
     *
     * @return string 
     */
    public function getGestaViolenciaTrimes1()
    {
        return $this->gestaViolenciaTrimes1;
    }

    /**
     * Set gestaViolenciaTrimes2
     *
     * @param string $gestaViolenciaTrimes2
     * @return ShcpInsGestacionActual
     */
    public function setGestaViolenciaTrimes2($gestaViolenciaTrimes2)
    {
        $this->gestaViolenciaTrimes2 = $gestaViolenciaTrimes2;

        return $this;
    }

    /**
     * Get gestaViolenciaTrimes2
     *
     * @return string 
     */
    public function getGestaViolenciaTrimes2()
    {
        return $this->gestaViolenciaTrimes2;
    }

    /**
     * Set gestaViolenciaTrimes3
     *
     * @param string $gestaViolenciaTrimes3
     * @return ShcpInsGestacionActual
     */
    public function setGestaViolenciaTrimes3($gestaViolenciaTrimes3)
    {
        $this->gestaViolenciaTrimes3 = $gestaViolenciaTrimes3;

        return $this;
    }

    /**
     * Get gestaViolenciaTrimes3
     *
     * @return string 
     */
    public function getGestaViolenciaTrimes3()
    {
        return $this->gestaViolenciaTrimes3;
    }

    /**
     * Set gestaPreparParto
     *
     * @param string $gestaPreparParto
     * @return ShcpInsGestacionActual
     */
    public function setGestaPreparParto($gestaPreparParto)
    {
        $this->gestaPreparParto = $gestaPreparParto;

        return $this;
    }

    /**
     * Get gestaPreparParto
     *
     * @return string 
     */
    public function getGestaPreparParto()
    {
        return $this->gestaPreparParto;
    }

    /**
     * Set gestaConseLactMaterna
     *
     * @param string $gestaConseLactMaterna
     * @return ShcpInsGestacionActual
     */
    public function setGestaConseLactMaterna($gestaConseLactMaterna)
    {
        $this->gestaConseLactMaterna = $gestaConseLactMaterna;

        return $this;
    }

    /**
     * Get gestaConseLactMaterna
     *
     * @return string 
     */
    public function getGestaConseLactMaterna()
    {
        return $this->gestaConseLactMaterna;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsGestacionActual
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
