<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParTamizajeNeonatal
 *
 * @ORM\Table(name="shcp_par_tamizaje_neonatal", indexes={@ORM\Index(name="IDX_82E2CDEF1D6C3F70", columns={"id_recien_nacido"})})
 * @ORM\Entity
 */
class ShcpParTamizajeNeonatal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_tamizaje_neonatal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_vdrl", type="string", nullable=true)
     */
    private $tneoVdrl;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_vdrl_tratamient", type="string", nullable=true)
     */
    private $tneoVdrlTratamient;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_tsh", type="string", nullable=true)
     */
    private $tneoTsh;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_hbpatia", type="string", nullable=true)
     */
    private $tneoHbpatia;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_bilirrub", type="string", nullable=true)
     */
    private $tneoBilirrub;

    /**
     * @var string
     *
     * @ORM\Column(name="tneo_toxoigm", type="string", nullable=true)
     */
    private $tneoToxoigm;

    /**
     * @var \ShcpParRecienNacido
     *
     * @ORM\ManyToOne(targetEntity="ShcpParRecienNacido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recien_nacido", referencedColumnName="id")
     * })
     */
    private $idRecienNacido;



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
     * Set tneoVdrl
     *
     * @param string $tneoVdrl
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoVdrl($tneoVdrl)
    {
        $this->tneoVdrl = $tneoVdrl;

        return $this;
    }

    /**
     * Get tneoVdrl
     *
     * @return string 
     */
    public function getTneoVdrl()
    {
        return $this->tneoVdrl;
    }

    /**
     * Set tneoVdrlTratamient
     *
     * @param string $tneoVdrlTratamient
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoVdrlTratamient($tneoVdrlTratamient)
    {
        $this->tneoVdrlTratamient = $tneoVdrlTratamient;

        return $this;
    }

    /**
     * Get tneoVdrlTratamient
     *
     * @return string 
     */
    public function getTneoVdrlTratamient()
    {
        return $this->tneoVdrlTratamient;
    }

    /**
     * Set tneoTsh
     *
     * @param string $tneoTsh
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoTsh($tneoTsh)
    {
        $this->tneoTsh = $tneoTsh;

        return $this;
    }

    /**
     * Get tneoTsh
     *
     * @return string 
     */
    public function getTneoTsh()
    {
        return $this->tneoTsh;
    }

    /**
     * Set tneoHbpatia
     *
     * @param string $tneoHbpatia
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoHbpatia($tneoHbpatia)
    {
        $this->tneoHbpatia = $tneoHbpatia;

        return $this;
    }

    /**
     * Get tneoHbpatia
     *
     * @return string 
     */
    public function getTneoHbpatia()
    {
        return $this->tneoHbpatia;
    }

    /**
     * Set tneoBilirrub
     *
     * @param string $tneoBilirrub
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoBilirrub($tneoBilirrub)
    {
        $this->tneoBilirrub = $tneoBilirrub;

        return $this;
    }

    /**
     * Get tneoBilirrub
     *
     * @return string 
     */
    public function getTneoBilirrub()
    {
        return $this->tneoBilirrub;
    }

    /**
     * Set tneoToxoigm
     *
     * @param string $tneoToxoigm
     * @return ShcpParTamizajeNeonatal
     */
    public function setTneoToxoigm($tneoToxoigm)
    {
        $this->tneoToxoigm = $tneoToxoigm;

        return $this;
    }

    /**
     * Get tneoToxoigm
     *
     * @return string 
     */
    public function getTneoToxoigm()
    {
        return $this->tneoToxoigm;
    }

    /**
     * Set idRecienNacido
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParRecienNacido $idRecienNacido
     * @return ShcpParTamizajeNeonatal
     */
    public function setIdRecienNacido(\Minsal\shcpBundle\Entity\ShcpParRecienNacido $idRecienNacido = null)
    {
        $this->idRecienNacido = $idRecienNacido;

        return $this;
    }

    /**
     * Get idRecienNacido
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParRecienNacido 
     */
    public function getIdRecienNacido()
    {
        return $this->idRecienNacido;
    }
}
