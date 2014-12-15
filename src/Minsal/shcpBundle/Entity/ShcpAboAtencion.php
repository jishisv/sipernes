<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboAtencion
 *
 * @ORM\Table(name="shcp_abo_atencion", indexes={@ORM\Index(name="IDX_49AA46706A439ED0", columns={"id_post_proced"})})
 * @ORM\Entity
 */
class ShcpAboAtencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_abo_atencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="aten_pa_sist", type="string", nullable=true)
     */
    private $atenPaSist;

    /**
     * @var string
     *
     * @ORM\Column(name="aten_pa_diast", type="string", nullable=true)
     */
    private $atenPaDiast;

    /**
     * @var integer
     *
     * @ORM\Column(name="aten_pulso", type="integer", nullable=true)
     */
    private $atenPulso;

    /**
     * @var string
     *
     * @ORM\Column(name="aten_temp", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $atenTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="aten_sangrado", type="string", nullable=true)
     */
    private $atenSangrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="aten_score", type="integer", nullable=true)
     */
    private $atenScore;

    /**
     * @var \ShcpAboPostProced
     *
     * @ORM\ManyToOne(targetEntity="ShcpAboPostProced")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post_proced", referencedColumnName="id")
     * })
     */
    private $idPostProced;



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
     * Set atenPaSist
     *
     * @param string $atenPaSist
     * @return ShcpAboAtencion
     */
    public function setAtenPaSist($atenPaSist)
    {
        $this->atenPaSist = $atenPaSist;

        return $this;
    }

    /**
     * Get atenPaSist
     *
     * @return string 
     */
    public function getAtenPaSist()
    {
        return $this->atenPaSist;
    }

    /**
     * Set atenPaDiast
     *
     * @param string $atenPaDiast
     * @return ShcpAboAtencion
     */
    public function setAtenPaDiast($atenPaDiast)
    {
        $this->atenPaDiast = $atenPaDiast;

        return $this;
    }

    /**
     * Get atenPaDiast
     *
     * @return string 
     */
    public function getAtenPaDiast()
    {
        return $this->atenPaDiast;
    }

    /**
     * Set atenPulso
     *
     * @param integer $atenPulso
     * @return ShcpAboAtencion
     */
    public function setAtenPulso($atenPulso)
    {
        $this->atenPulso = $atenPulso;

        return $this;
    }

    /**
     * Get atenPulso
     *
     * @return integer 
     */
    public function getAtenPulso()
    {
        return $this->atenPulso;
    }

    /**
     * Set atenTemp
     *
     * @param string $atenTemp
     * @return ShcpAboAtencion
     */
    public function setAtenTemp($atenTemp)
    {
        $this->atenTemp = $atenTemp;

        return $this;
    }

    /**
     * Get atenTemp
     *
     * @return string 
     */
    public function getAtenTemp()
    {
        return $this->atenTemp;
    }

    /**
     * Set atenSangrado
     *
     * @param string $atenSangrado
     * @return ShcpAboAtencion
     */
    public function setAtenSangrado($atenSangrado)
    {
        $this->atenSangrado = $atenSangrado;

        return $this;
    }

    /**
     * Get atenSangrado
     *
     * @return string 
     */
    public function getAtenSangrado()
    {
        return $this->atenSangrado;
    }

    /**
     * Set atenScore
     *
     * @param integer $atenScore
     * @return ShcpAboAtencion
     */
    public function setAtenScore($atenScore)
    {
        $this->atenScore = $atenScore;

        return $this;
    }

    /**
     * Get atenScore
     *
     * @return integer 
     */
    public function getAtenScore()
    {
        return $this->atenScore;
    }

    /**
     * Set idPostProced
     *
     * @param \Minsal\shcpBundle\Entity\ShcpAboPostProced $idPostProced
     * @return ShcpAboAtencion
     */
    public function setIdPostProced(\Minsal\shcpBundle\Entity\ShcpAboPostProced $idPostProced = null)
    {
        $this->idPostProced = $idPostProced;

        return $this;
    }

    /**
     * Get idPostProced
     *
     * @return \Minsal\shcpBundle\Entity\ShcpAboPostProced 
     */
    public function getIdPostProced()
    {
        return $this->idPostProced;
    }
}
