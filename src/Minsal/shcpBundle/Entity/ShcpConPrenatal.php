<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpConPrenatal
 *
 * @ORM\Table(name="shcp_con_prenatal", indexes={@ORM\Index(name="IDX_9C7C4E53FAF6081D", columns={"id_signo_alarma"}), @ORM\Index(name="IDX_9C7C4E536B3CA4B", columns={"id_user"}), @ORM\Index(name="IDX_9C7C4E5393489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 * 
 */
class ShcpConPrenatal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_con_prenatal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prena_fecha", type="date", nullable=true)
     */
    private $prenaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prena_hora", type="time", nullable=true)
     */
    private $prenaHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="prena_edad_gest", type="integer", nullable=true)
     */
    private $prenaEdadGest;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_peso", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prenaPeso;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_presion_sist", type="string", nullable=true)
     */
    private $prenaPresionSist;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_presion_diast", type="string", nullable=true)
     */
    private $prenaPresionDiast;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_tempe", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $prenaTempe;

    /**
     * @var integer
     *
     * @ORM\Column(name="prena_alt_uterina", type="integer", nullable=true)
     */
    private $prenaAltUterina;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_present", type="string", nullable=true)
     */
    private $prenaPresent;

    /**
     * @var integer
     *
     * @ORM\Column(name="prena_frec_fetal", type="integer", nullable=true)
     */
    private $prenaFrecFetal;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_mov_fetal", type="string", nullable=true)
     */
    private $prenaMovFetal;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_prote", type="string", nullable=true)
     */
    private $prenaProte;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_consulta_por", type="string", length=100, nullable=true)
     */
    private $prenaConsultaPor;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_observ", type="string", length=500, nullable=true)
     */
    private $prenaObserv;

    /**
     * @var string
     *
     * @ORM\Column(name="prena_presente_enfer", type="string", length=100, nullable=true)
     */
    private $prenaPresenteEnfer;

    /**
     * @var \ShcpConCtlSignoAlarma
     *
     * @ORM\ManyToOne(targetEntity="ShcpConCtlSignoAlarma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_signo_alarma", referencedColumnName="id")
     * })
     */
    private $idSignoAlarma;

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
     * Set prenaFecha
     *
     * @param \DateTime $prenaFecha
     * @return ShcpConPrenatal
     */
    public function setPrenaFecha($prenaFecha)
    {
        $this->prenaFecha = $prenaFecha;

        return $this;
    }

    /**
     * Get prenaFecha
     *
     * @return \DateTime 
     */
    public function getPrenaFecha()
    {
        return $this->prenaFecha;
    }

    /**
     * Set prenaHora
     *
     * @param \DateTime $prenaHora
     * @return ShcpConPrenatal
     */
    public function setPrenaHora($prenaHora)
    {
        $this->prenaHora = $prenaHora;

        return $this;
    }

    /**
     * Get prenaHora
     *
     * @return \DateTime 
     */
    public function getPrenaHora()
    {
        return $this->prenaHora;
    }

    /**
     * Set prenaEdadGest
     *
     * @param integer $prenaEdadGest
     * @return ShcpConPrenatal
     */
    public function setPrenaEdadGest($prenaEdadGest)
    {
        $this->prenaEdadGest = $prenaEdadGest;

        return $this;
    }

    /**
     * Get prenaEdadGest
     *
     * @return integer 
     */
    public function getPrenaEdadGest()
    {
        return $this->prenaEdadGest;
    }

    /**
     * Set prenaPeso
     *
     * @param string $prenaPeso
     * @return ShcpConPrenatal
     */
    public function setPrenaPeso($prenaPeso)
    {
        $this->prenaPeso = $prenaPeso;

        return $this;
    }

    /**
     * Get prenaPeso
     *
     * @return string 
     */
    public function getPrenaPeso()
    {
        return $this->prenaPeso;
    }

    /**
     * Set prenaPresionSist
     *
     * @param string $prenaPresionSist
     * @return ShcpConPrenatal
     */
    public function setPrenaPresionSist($prenaPresionSist)
    {
        $this->prenaPresionSist = $prenaPresionSist;

        return $this;
    }

    /**
     * Get prenaPresionSist
     *
     * @return string 
     */
    public function getPrenaPresionSist()
    {
        return $this->prenaPresionSist;
    }

    /**
     * Set prenaPresionDiast
     *
     * @param string $prenaPresionDiast
     * @return ShcpConPrenatal
     */
    public function setPrenaPresionDiast($prenaPresionDiast)
    {
        $this->prenaPresionDiast = $prenaPresionDiast;

        return $this;
    }

    /**
     * Get prenaPresionDiast
     *
     * @return string 
     */
    public function getPrenaPresionDiast()
    {
        return $this->prenaPresionDiast;
    }

    /**
     * Set prenaTempe
     *
     * @param string $prenaTempe
     * @return ShcpConPrenatal
     */
    public function setPrenaTempe($prenaTempe)
    {
        $this->prenaTempe = $prenaTempe;

        return $this;
    }

    /**
     * Get prenaTempe
     *
     * @return string 
     */
    public function getPrenaTempe()
    {
        return $this->prenaTempe;
    }

    /**
     * Set prenaAltUterina
     *
     * @param integer $prenaAltUterina
     * @return ShcpConPrenatal
     */
    public function setPrenaAltUterina($prenaAltUterina)
    {
        $this->prenaAltUterina = $prenaAltUterina;

        return $this;
    }

    /**
     * Get prenaAltUterina
     *
     * @return integer 
     */
    public function getPrenaAltUterina()
    {
        return $this->prenaAltUterina;
    }

    /**
     * Set prenaPresent
     *
     * @param string $prenaPresent
     * @return ShcpConPrenatal
     */
    public function setPrenaPresent($prenaPresent)
    {
        $this->prenaPresent = $prenaPresent;

        return $this;
    }

    /**
     * Get prenaPresent
     *
     * @return string 
     */
    public function getPrenaPresent()
    {
        return $this->prenaPresent;
    }

    /**
     * Set prenaFrecFetal
     *
     * @param integer $prenaFrecFetal
     * @return ShcpConPrenatal
     */
    public function setPrenaFrecFetal($prenaFrecFetal)
    {
        $this->prenaFrecFetal = $prenaFrecFetal;

        return $this;
    }

    /**
     * Get prenaFrecFetal
     *
     * @return integer 
     */
    public function getPrenaFrecFetal()
    {
        return $this->prenaFrecFetal;
    }

    /**
     * Set prenaMovFetal
     *
     * @param string $prenaMovFetal
     * @return ShcpConPrenatal
     */
    public function setPrenaMovFetal($prenaMovFetal)
    {
        $this->prenaMovFetal = $prenaMovFetal;

        return $this;
    }

    /**
     * Get prenaMovFetal
     *
     * @return string 
     */
    public function getPrenaMovFetal()
    {
        return $this->prenaMovFetal;
    }

    /**
     * Set prenaProte
     *
     * @param string $prenaProte
     * @return ShcpConPrenatal
     */
    public function setPrenaProte($prenaProte)
    {
        $this->prenaProte = $prenaProte;

        return $this;
    }

    /**
     * Get prenaProte
     *
     * @return string 
     */
    public function getPrenaProte()
    {
        return $this->prenaProte;
    }

    /**
     * Set prenaConsultaPor
     *
     * @param string $prenaConsultaPor
     * @return ShcpConPrenatal
     */
    public function setPrenaConsultaPor($prenaConsultaPor)
    {
        $this->prenaConsultaPor = $prenaConsultaPor;

        return $this;
    }

    /**
     * Get prenaConsultaPor
     *
     * @return string 
     */
    public function getPrenaConsultaPor()
    {
        return $this->prenaConsultaPor;
    }

    /**
     * Set prenaObserv
     *
     * @param string $prenaObserv
     * @return ShcpConPrenatal
     */
    public function setPrenaObserv($prenaObserv)
    {
        $this->prenaObserv = $prenaObserv;

        return $this;
    }

    /**
     * Get prenaObserv
     *
     * @return string 
     */
    public function getPrenaObserv()
    {
        return $this->prenaObserv;
    }

    /**
     * Set prenaPresenteEnfer
     *
     * @param string $prenaPresenteEnfer
     * @return ShcpConPrenatal
     */
    public function setPrenaPresenteEnfer($prenaPresenteEnfer)
    {
        $this->prenaPresenteEnfer = $prenaPresenteEnfer;

        return $this;
    }

    /**
     * Get prenaPresenteEnfer
     *
     * @return string 
     */
    public function getPrenaPresenteEnfer()
    {
        return $this->prenaPresenteEnfer;
    }

    /**
     * Set idSignoAlarma
     *
     * @param \Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma $idSignoAlarma
     * @return ShcpConPrenatal
     */
    public function setIdSignoAlarma(\Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma $idSignoAlarma = null)
    {
        $this->idSignoAlarma = $idSignoAlarma;

        return $this;
    }

    /**
     * Get idSignoAlarma
     *
     * @return \Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma 
     */
    public function getIdSignoAlarma()
    {
        return $this->idSignoAlarma;
    }

    /**
     * Set idUser
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUser
     * @return ShcpConPrenatal
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
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpConPrenatal
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
