<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpPrePaciente
 *
 * @ORM\Table(name="shcp_pre_paciente", indexes={@ORM\Index(name="IDX_988D557B93489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpPrePaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_pre_paciente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pre_fecha", type="date", nullable=true)
     */
    private $preFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_peso_pte", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prePesoPte;

    /**
     * @var integer
     *
     * @ORM\Column(name="pre_talla_pte", type="integer", nullable=true)
     */
    private $preTallaPte;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_temp_pte", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $preTempPte;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_pa_sistole", type="string", nullable=true)
     */
    private $prePaSistole;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_pa_diastole", type="string", nullable=true)
     */
    private $prePaDiastole;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_destino_pte", type="string", nullable=true)
     */
    private $preDestinoPte;

    /**
     * @var string
     *
     * @ORM\Column(name="pre_detalle_obser", type="string", length=150, nullable=true)
     */
    private $preDetalleObser;

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
     * Set preFecha
     *
     * @param \DateTime $preFecha
     * @return ShcpPrePaciente
     */
    public function setPreFecha($preFecha)
    {
        $this->preFecha = $preFecha;

        return $this;
    }

    /**
     * Get preFecha
     *
     * @return \DateTime 
     */
    public function getPreFecha()
    {
        return $this->preFecha;
    }

    /**
     * Set prePesoPte
     *
     * @param string $prePesoPte
     * @return ShcpPrePaciente
     */
    public function setPrePesoPte($prePesoPte)
    {
        $this->prePesoPte = $prePesoPte;

        return $this;
    }

    /**
     * Get prePesoPte
     *
     * @return string 
     */
    public function getPrePesoPte()
    {
        return $this->prePesoPte;
    }

    /**
     * Set preTallaPte
     *
     * @param integer $preTallaPte
     * @return ShcpPrePaciente
     */
    public function setPreTallaPte($preTallaPte)
    {
        $this->preTallaPte = $preTallaPte;

        return $this;
    }

    /**
     * Get preTallaPte
     *
     * @return integer 
     */
    public function getPreTallaPte()
    {
        return $this->preTallaPte;
    }

    /**
     * Set preTempPte
     *
     * @param string $preTempPte
     * @return ShcpPrePaciente
     */
    public function setPreTempPte($preTempPte)
    {
        $this->preTempPte = $preTempPte;

        return $this;
    }

    /**
     * Get preTempPte
     *
     * @return string 
     */
    public function getPreTempPte()
    {
        return $this->preTempPte;
    }

    /**
     * Set prePaSistole
     *
     * @param string $prePaSistole
     * @return ShcpPrePaciente
     */
    public function setPrePaSistole($prePaSistole)
    {
        $this->prePaSistole = $prePaSistole;

        return $this;
    }

    /**
     * Get prePaSistole
     *
     * @return string 
     */
    public function getPrePaSistole()
    {
        return $this->prePaSistole;
    }

    /**
     * Set prePaDiastole
     *
     * @param string $prePaDiastole
     * @return ShcpPrePaciente
     */
    public function setPrePaDiastole($prePaDiastole)
    {
        $this->prePaDiastole = $prePaDiastole;

        return $this;
    }

    /**
     * Get prePaDiastole
     *
     * @return string 
     */
    public function getPrePaDiastole()
    {
        return $this->prePaDiastole;
    }

    /**
     * Set preDestinoPte
     *
     * @param string $preDestinoPte
     * @return ShcpPrePaciente
     */
    public function setPreDestinoPte($preDestinoPte)
    {
        $this->preDestinoPte = $preDestinoPte;

        return $this;
    }

    /**
     * Get preDestinoPte
     *
     * @return string 
     */
    public function getPreDestinoPte()
    {
        return $this->preDestinoPte;
    }

    /**
     * Set preDetalleObser
     *
     * @param string $preDetalleObser
     * @return ShcpPrePaciente
     */
    public function setPreDetalleObser($preDetalleObser)
    {
        $this->preDetalleObser = $preDetalleObser;

        return $this;
    }

    /**
     * Get preDetalleObser
     *
     * @return string 
     */
    public function getPreDetalleObser()
    {
        return $this->preDetalleObser;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpPrePaciente
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
