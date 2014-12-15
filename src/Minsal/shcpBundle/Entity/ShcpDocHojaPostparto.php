<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocHojaPostparto
 *
 * @ORM\Table(name="shcp_doc_hoja_postparto", indexes={@ORM\Index(name="IDX_2229FAFF93489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpDocHojaPostparto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_hoja_postparto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hpost_fecha", type="date", nullable=true)
     */
    private $hpostFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hpost_hora", type="time", nullable=true)
     */
    private $hpostHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpost_dias_post_parto", type="integer", nullable=true)
     */
    private $hpostDiasPostParto;

    /**
     * @var string
     *
     * @ORM\Column(name="hpost_complic", type="string", length=150, nullable=true)
     */
    private $hpostComplic;

    /**
     * @var string
     *
     * @ORM\Column(name="hpost_ctrl_pre", type="string", nullable=true)
     */
    private $hpostCtrlPre;

    /**
     * @var string
     *
     * @ORM\Column(name="hpost_apego_precoz", type="string", nullable=true)
     */
    private $hpostApegoPrecoz;

    /**
     * @var string
     *
     * @ORM\Column(name="hpost_toxoide_res", type="string", nullable=true)
     */
    private $hpostToxoideRes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hpost_numero_dosis", type="integer", nullable=true)
     */
    private $hpostNumeroDosis;

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
     * Set hpostFecha
     *
     * @param \DateTime $hpostFecha
     * @return ShcpDocHojaPostparto
     */
    public function setHpostFecha($hpostFecha)
    {
        $this->hpostFecha = $hpostFecha;

        return $this;
    }

    /**
     * Get hpostFecha
     *
     * @return \DateTime 
     */
    public function getHpostFecha()
    {
        return $this->hpostFecha;
    }

    /**
     * Set hpostHora
     *
     * @param \DateTime $hpostHora
     * @return ShcpDocHojaPostparto
     */
    public function setHpostHora($hpostHora)
    {
        $this->hpostHora = $hpostHora;

        return $this;
    }

    /**
     * Get hpostHora
     *
     * @return \DateTime 
     */
    public function getHpostHora()
    {
        return $this->hpostHora;
    }

    /**
     * Set hpostDiasPostParto
     *
     * @param integer $hpostDiasPostParto
     * @return ShcpDocHojaPostparto
     */
    public function setHpostDiasPostParto($hpostDiasPostParto)
    {
        $this->hpostDiasPostParto = $hpostDiasPostParto;

        return $this;
    }

    /**
     * Get hpostDiasPostParto
     *
     * @return integer 
     */
    public function getHpostDiasPostParto()
    {
        return $this->hpostDiasPostParto;
    }

    /**
     * Set hpostComplic
     *
     * @param string $hpostComplic
     * @return ShcpDocHojaPostparto
     */
    public function setHpostComplic($hpostComplic)
    {
        $this->hpostComplic = $hpostComplic;

        return $this;
    }

    /**
     * Get hpostComplic
     *
     * @return string 
     */
    public function getHpostComplic()
    {
        return $this->hpostComplic;
    }

    /**
     * Set hpostCtrlPre
     *
     * @param string $hpostCtrlPre
     * @return ShcpDocHojaPostparto
     */
    public function setHpostCtrlPre($hpostCtrlPre)
    {
        $this->hpostCtrlPre = $hpostCtrlPre;

        return $this;
    }

    /**
     * Get hpostCtrlPre
     *
     * @return string 
     */
    public function getHpostCtrlPre()
    {
        return $this->hpostCtrlPre;
    }

    /**
     * Set hpostApegoPrecoz
     *
     * @param string $hpostApegoPrecoz
     * @return ShcpDocHojaPostparto
     */
    public function setHpostApegoPrecoz($hpostApegoPrecoz)
    {
        $this->hpostApegoPrecoz = $hpostApegoPrecoz;

        return $this;
    }

    /**
     * Get hpostApegoPrecoz
     *
     * @return string 
     */
    public function getHpostApegoPrecoz()
    {
        return $this->hpostApegoPrecoz;
    }

    /**
     * Set hpostToxoideRes
     *
     * @param string $hpostToxoideRes
     * @return ShcpDocHojaPostparto
     */
    public function setHpostToxoideRes($hpostToxoideRes)
    {
        $this->hpostToxoideRes = $hpostToxoideRes;

        return $this;
    }

    /**
     * Get hpostToxoideRes
     *
     * @return string 
     */
    public function getHpostToxoideRes()
    {
        return $this->hpostToxoideRes;
    }

    /**
     * Set hpostNumeroDosis
     *
     * @param integer $hpostNumeroDosis
     * @return ShcpDocHojaPostparto
     */
    public function setHpostNumeroDosis($hpostNumeroDosis)
    {
        $this->hpostNumeroDosis = $hpostNumeroDosis;

        return $this;
    }

    /**
     * Get hpostNumeroDosis
     *
     * @return integer 
     */
    public function getHpostNumeroDosis()
    {
        return $this->hpostNumeroDosis;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpDocHojaPostparto
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
