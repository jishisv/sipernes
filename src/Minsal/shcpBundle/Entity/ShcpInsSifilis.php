<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsSifilis
 *
 * @ORM\Table(name="shcp_ins_sifilis", indexes={@ORM\Index(name="IDX_AC4338B993489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsSifilis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_sifilis_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_pru_not_res_mnos20", type="string", nullable=true)
     */
    private $sifiPruNotResMnos20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_pru_not_sem_mnos20", type="integer", nullable=true)
     */
    private $sifiPruNotSemMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_pru_tre_res_mnos20", type="string", nullable=true)
     */
    private $sifiPruTreResMnos20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_pru_tre_sem_mnos20", type="integer", nullable=true)
     */
    private $sifiPruTreSemMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_pru_not_res_mas20", type="string", nullable=true)
     */
    private $sifiPruNotResMas20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_pru_not_sem_mas20", type="integer", nullable=true)
     */
    private $sifiPruNotSemMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_pru_tre_res_mas20", type="string", nullable=true)
     */
    private $sifiPruTreResMas20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_pru_tre_sem_mas20", type="integer", nullable=true)
     */
    private $sifiPruTreSemMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_trata_mnos20", type="string", nullable=true)
     */
    private $sifiTrataMnos20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_trata_sem_mnos20", type="integer", nullable=true)
     */
    private $sifiTrataSemMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_trata_par_mnos20", type="string", nullable=true)
     */
    private $sifiTrataParMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_trata_mas20", type="string", nullable=true)
     */
    private $sifiTrataMas20;

    /**
     * @var integer
     *
     * @ORM\Column(name="sifi_trata_sem_mas20", type="integer", nullable=true)
     */
    private $sifiTrataSemMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="sifi_trata_par_mas20", type="string", nullable=true)
     */
    private $sifiTrataParMas20;

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
     * Set sifiPruNotResMnos20
     *
     * @param string $sifiPruNotResMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiPruNotResMnos20($sifiPruNotResMnos20)
    {
        $this->sifiPruNotResMnos20 = $sifiPruNotResMnos20;

        return $this;
    }

    /**
     * Get sifiPruNotResMnos20
     *
     * @return string 
     */
    public function getSifiPruNotResMnos20()
    {
        return $this->sifiPruNotResMnos20;
    }

    /**
     * Set sifiPruNotSemMnos20
     *
     * @param integer $sifiPruNotSemMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiPruNotSemMnos20($sifiPruNotSemMnos20)
    {
        $this->sifiPruNotSemMnos20 = $sifiPruNotSemMnos20;

        return $this;
    }

    /**
     * Get sifiPruNotSemMnos20
     *
     * @return integer 
     */
    public function getSifiPruNotSemMnos20()
    {
        return $this->sifiPruNotSemMnos20;
    }

    /**
     * Set sifiPruTreResMnos20
     *
     * @param string $sifiPruTreResMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiPruTreResMnos20($sifiPruTreResMnos20)
    {
        $this->sifiPruTreResMnos20 = $sifiPruTreResMnos20;

        return $this;
    }

    /**
     * Get sifiPruTreResMnos20
     *
     * @return string 
     */
    public function getSifiPruTreResMnos20()
    {
        return $this->sifiPruTreResMnos20;
    }

    /**
     * Set sifiPruTreSemMnos20
     *
     * @param integer $sifiPruTreSemMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiPruTreSemMnos20($sifiPruTreSemMnos20)
    {
        $this->sifiPruTreSemMnos20 = $sifiPruTreSemMnos20;

        return $this;
    }

    /**
     * Get sifiPruTreSemMnos20
     *
     * @return integer 
     */
    public function getSifiPruTreSemMnos20()
    {
        return $this->sifiPruTreSemMnos20;
    }

    /**
     * Set sifiPruNotResMas20
     *
     * @param string $sifiPruNotResMas20
     * @return ShcpInsSifilis
     */
    public function setSifiPruNotResMas20($sifiPruNotResMas20)
    {
        $this->sifiPruNotResMas20 = $sifiPruNotResMas20;

        return $this;
    }

    /**
     * Get sifiPruNotResMas20
     *
     * @return string 
     */
    public function getSifiPruNotResMas20()
    {
        return $this->sifiPruNotResMas20;
    }

    /**
     * Set sifiPruNotSemMas20
     *
     * @param integer $sifiPruNotSemMas20
     * @return ShcpInsSifilis
     */
    public function setSifiPruNotSemMas20($sifiPruNotSemMas20)
    {
        $this->sifiPruNotSemMas20 = $sifiPruNotSemMas20;

        return $this;
    }

    /**
     * Get sifiPruNotSemMas20
     *
     * @return integer 
     */
    public function getSifiPruNotSemMas20()
    {
        return $this->sifiPruNotSemMas20;
    }

    /**
     * Set sifiPruTreResMas20
     *
     * @param string $sifiPruTreResMas20
     * @return ShcpInsSifilis
     */
    public function setSifiPruTreResMas20($sifiPruTreResMas20)
    {
        $this->sifiPruTreResMas20 = $sifiPruTreResMas20;

        return $this;
    }

    /**
     * Get sifiPruTreResMas20
     *
     * @return string 
     */
    public function getSifiPruTreResMas20()
    {
        return $this->sifiPruTreResMas20;
    }

    /**
     * Set sifiPruTreSemMas20
     *
     * @param integer $sifiPruTreSemMas20
     * @return ShcpInsSifilis
     */
    public function setSifiPruTreSemMas20($sifiPruTreSemMas20)
    {
        $this->sifiPruTreSemMas20 = $sifiPruTreSemMas20;

        return $this;
    }

    /**
     * Get sifiPruTreSemMas20
     *
     * @return integer 
     */
    public function getSifiPruTreSemMas20()
    {
        return $this->sifiPruTreSemMas20;
    }

    /**
     * Set sifiTrataMnos20
     *
     * @param string $sifiTrataMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataMnos20($sifiTrataMnos20)
    {
        $this->sifiTrataMnos20 = $sifiTrataMnos20;

        return $this;
    }

    /**
     * Get sifiTrataMnos20
     *
     * @return string 
     */
    public function getSifiTrataMnos20()
    {
        return $this->sifiTrataMnos20;
    }

    /**
     * Set sifiTrataSemMnos20
     *
     * @param integer $sifiTrataSemMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataSemMnos20($sifiTrataSemMnos20)
    {
        $this->sifiTrataSemMnos20 = $sifiTrataSemMnos20;

        return $this;
    }

    /**
     * Get sifiTrataSemMnos20
     *
     * @return integer 
     */
    public function getSifiTrataSemMnos20()
    {
        return $this->sifiTrataSemMnos20;
    }

    /**
     * Set sifiTrataParMnos20
     *
     * @param string $sifiTrataParMnos20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataParMnos20($sifiTrataParMnos20)
    {
        $this->sifiTrataParMnos20 = $sifiTrataParMnos20;

        return $this;
    }

    /**
     * Get sifiTrataParMnos20
     *
     * @return string 
     */
    public function getSifiTrataParMnos20()
    {
        return $this->sifiTrataParMnos20;
    }

    /**
     * Set sifiTrataMas20
     *
     * @param string $sifiTrataMas20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataMas20($sifiTrataMas20)
    {
        $this->sifiTrataMas20 = $sifiTrataMas20;

        return $this;
    }

    /**
     * Get sifiTrataMas20
     *
     * @return string 
     */
    public function getSifiTrataMas20()
    {
        return $this->sifiTrataMas20;
    }

    /**
     * Set sifiTrataSemMas20
     *
     * @param integer $sifiTrataSemMas20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataSemMas20($sifiTrataSemMas20)
    {
        $this->sifiTrataSemMas20 = $sifiTrataSemMas20;

        return $this;
    }

    /**
     * Get sifiTrataSemMas20
     *
     * @return integer 
     */
    public function getSifiTrataSemMas20()
    {
        return $this->sifiTrataSemMas20;
    }

    /**
     * Set sifiTrataParMas20
     *
     * @param string $sifiTrataParMas20
     * @return ShcpInsSifilis
     */
    public function setSifiTrataParMas20($sifiTrataParMas20)
    {
        $this->sifiTrataParMas20 = $sifiTrataParMas20;

        return $this;
    }

    /**
     * Get sifiTrataParMas20
     *
     * @return string 
     */
    public function getSifiTrataParMas20()
    {
        return $this->sifiTrataParMas20;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsSifilis
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
