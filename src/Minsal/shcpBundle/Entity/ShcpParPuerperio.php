<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParPuerperio
 *
 * @ORM\Table(name="shcp_par_puerperio", indexes={@ORM\Index(name="IDX_11020C1FD766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParPuerperio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_puerperio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="puer_fecha", type="date", nullable=true)
     */
    private $puerFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="puer_hora", type="time", nullable=true)
     */
    private $puerHora;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_temp", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $puerTemp;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_pa_sistole", type="string", nullable=true)
     */
    private $puerPaSistole;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_pa_diastole", type="string", nullable=true)
     */
    private $puerPaDiastole;

    /**
     * @var integer
     *
     * @ORM\Column(name="puer_pulso", type="integer", nullable=true)
     */
    private $puerPulso;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_involucion", type="string", length=25, nullable=true)
     */
    private $puerInvolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_loquios", type="string", length=25, nullable=true)
     */
    private $puerLoquios;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_antirubeo", type="string", nullable=true)
     */
    private $puerAntirubeo;

    /**
     * @var string
     *
     * @ORM\Column(name="puer_globulina_antid", type="string", nullable=true)
     */
    private $puerGlobulinaAntid;

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
     * Set puerFecha
     *
     * @param \DateTime $puerFecha
     * @return ShcpParPuerperio
     */
    public function setPuerFecha($puerFecha)
    {
        $this->puerFecha = $puerFecha;

        return $this;
    }

    /**
     * Get puerFecha
     *
     * @return \DateTime 
     */
    public function getPuerFecha()
    {
        return $this->puerFecha;
    }

    /**
     * Set puerHora
     *
     * @param \DateTime $puerHora
     * @return ShcpParPuerperio
     */
    public function setPuerHora($puerHora)
    {
        $this->puerHora = $puerHora;

        return $this;
    }

    /**
     * Get puerHora
     *
     * @return \DateTime 
     */
    public function getPuerHora()
    {
        return $this->puerHora;
    }

    /**
     * Set puerTemp
     *
     * @param string $puerTemp
     * @return ShcpParPuerperio
     */
    public function setPuerTemp($puerTemp)
    {
        $this->puerTemp = $puerTemp;

        return $this;
    }

    /**
     * Get puerTemp
     *
     * @return string 
     */
    public function getPuerTemp()
    {
        return $this->puerTemp;
    }

    /**
     * Set puerPaSistole
     *
     * @param string $puerPaSistole
     * @return ShcpParPuerperio
     */
    public function setPuerPaSistole($puerPaSistole)
    {
        $this->puerPaSistole = $puerPaSistole;

        return $this;
    }

    /**
     * Get puerPaSistole
     *
     * @return string 
     */
    public function getPuerPaSistole()
    {
        return $this->puerPaSistole;
    }

    /**
     * Set puerPaDiastole
     *
     * @param string $puerPaDiastole
     * @return ShcpParPuerperio
     */
    public function setPuerPaDiastole($puerPaDiastole)
    {
        $this->puerPaDiastole = $puerPaDiastole;

        return $this;
    }

    /**
     * Get puerPaDiastole
     *
     * @return string 
     */
    public function getPuerPaDiastole()
    {
        return $this->puerPaDiastole;
    }

    /**
     * Set puerPulso
     *
     * @param integer $puerPulso
     * @return ShcpParPuerperio
     */
    public function setPuerPulso($puerPulso)
    {
        $this->puerPulso = $puerPulso;

        return $this;
    }

    /**
     * Get puerPulso
     *
     * @return integer 
     */
    public function getPuerPulso()
    {
        return $this->puerPulso;
    }

    /**
     * Set puerInvolucion
     *
     * @param string $puerInvolucion
     * @return ShcpParPuerperio
     */
    public function setPuerInvolucion($puerInvolucion)
    {
        $this->puerInvolucion = $puerInvolucion;

        return $this;
    }

    /**
     * Get puerInvolucion
     *
     * @return string 
     */
    public function getPuerInvolucion()
    {
        return $this->puerInvolucion;
    }

    /**
     * Set puerLoquios
     *
     * @param string $puerLoquios
     * @return ShcpParPuerperio
     */
    public function setPuerLoquios($puerLoquios)
    {
        $this->puerLoquios = $puerLoquios;

        return $this;
    }

    /**
     * Get puerLoquios
     *
     * @return string 
     */
    public function getPuerLoquios()
    {
        return $this->puerLoquios;
    }

    /**
     * Set puerAntirubeo
     *
     * @param string $puerAntirubeo
     * @return ShcpParPuerperio
     */
    public function setPuerAntirubeo($puerAntirubeo)
    {
        $this->puerAntirubeo = $puerAntirubeo;

        return $this;
    }

    /**
     * Get puerAntirubeo
     *
     * @return string 
     */
    public function getPuerAntirubeo()
    {
        return $this->puerAntirubeo;
    }

    /**
     * Set puerGlobulinaAntid
     *
     * @param string $puerGlobulinaAntid
     * @return ShcpParPuerperio
     */
    public function setPuerGlobulinaAntid($puerGlobulinaAntid)
    {
        $this->puerGlobulinaAntid = $puerGlobulinaAntid;

        return $this;
    }

    /**
     * Get puerGlobulinaAntid
     *
     * @return string 
     */
    public function getPuerGlobulinaAntid()
    {
        return $this->puerGlobulinaAntid;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParPuerperio
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
