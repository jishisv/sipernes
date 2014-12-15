<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParRoturaMembrana
 *
 * @ORM\Table(name="shcp_par_rotura_membrana", indexes={@ORM\Index(name="IDX_2C26F723D766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParRoturaMembrana
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_rotura_membrana_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rotu_existencia", type="string", nullable=true)
     */
    private $rotuExistencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rotu_fecha", type="date", nullable=true)
     */
    private $rotuFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rotu_hora", type="time", nullable=true)
     */
    private $rotuHora;

    /**
     * @var string
     *
     * @ORM\Column(name="rotu_men_37sem", type="string", nullable=true)
     */
    private $rotuMen37sem;

    /**
     * @var string
     *
     * @ORM\Column(name="rotu_may_igual_18hrs", type="string", nullable=true)
     */
    private $rotuMayIgual18hrs;

    /**
     * @var string
     *
     * @ORM\Column(name="rotu_temp", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $rotuTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="rotura_temp_may_igual_38c", type="string", nullable=true)
     */
    private $roturaTempMayIgual38c;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\OneToOne(targetEntity="ShcpParAdmision", inversedBy="ruptura")
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
     * Set rotuExistencia
     *
     * @param string $rotuExistencia
     * @return ShcpParRoturaMembrana
     */
    public function setRotuExistencia($rotuExistencia)
    {
        $this->rotuExistencia = $rotuExistencia;

        return $this;
    }

    /**
     * Get rotuExistencia
     *
     * @return string 
     */
    public function getRotuExistencia()
    {
        return $this->rotuExistencia;
    }

    /**
     * Set rotuFecha
     *
     * @param \DateTime $rotuFecha
     * @return ShcpParRoturaMembrana
     */
    public function setRotuFecha($rotuFecha)
    {
        $this->rotuFecha = $rotuFecha;

        return $this;
    }

    /**
     * Get rotuFecha
     *
     * @return \DateTime 
     */
    public function getRotuFecha()
    {
        return $this->rotuFecha;
    }

    /**
     * Set rotuHora
     *
     * @param \DateTime $rotuHora
     * @return ShcpParRoturaMembrana
     */
    public function setRotuHora($rotuHora)
    {
        $this->rotuHora = $rotuHora;

        return $this;
    }

    /**
     * Get rotuHora
     *
     * @return \DateTime 
     */
    public function getRotuHora()
    {
        return $this->rotuHora;
    }

    /**
     * Set rotuMen37sem
     *
     * @param string $rotuMen37sem
     * @return ShcpParRoturaMembrana
     */
    public function setRotuMen37sem($rotuMen37sem)
    {
        $this->rotuMen37sem = $rotuMen37sem;

        return $this;
    }

    /**
     * Get rotuMen37sem
     *
     * @return string 
     */
    public function getRotuMen37sem()
    {
        return $this->rotuMen37sem;
    }

    /**
     * Set rotuMayIgual18hrs
     *
     * @param string $rotuMayIgual18hrs
     * @return ShcpParRoturaMembrana
     */
    public function setRotuMayIgual18hrs($rotuMayIgual18hrs)
    {
        $this->rotuMayIgual18hrs = $rotuMayIgual18hrs;

        return $this;
    }

    /**
     * Get rotuMayIgual18hrs
     *
     * @return string 
     */
    public function getRotuMayIgual18hrs()
    {
        return $this->rotuMayIgual18hrs;
    }

    /**
     * Set rotuTemp
     *
     * @param string $rotuTemp
     * @return ShcpParRoturaMembrana
     */
    public function setRotuTemp($rotuTemp)
    {
        $this->rotuTemp = $rotuTemp;

        return $this;
    }

    /**
     * Get rotuTemp
     *
     * @return string 
     */
    public function getRotuTemp()
    {
        return $this->rotuTemp;
    }

    /**
     * Set roturaTempMayIgual38c
     *
     * @param string $roturaTempMayIgual38c
     * @return ShcpParRoturaMembrana
     */
    public function setRoturaTempMayIgual38c($roturaTempMayIgual38c)
    {
        $this->roturaTempMayIgual38c = $roturaTempMayIgual38c;

        return $this;
    }

    /**
     * Get roturaTempMayIgual38c
     *
     * @return string 
     */
    public function getRoturaTempMayIgual38c()
    {
        return $this->roturaTempMayIgual38c;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParRoturaMembrana
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
