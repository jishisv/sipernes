<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsSida
 *
 * @ORM\Table(name="shcp_ins_sida", indexes={@ORM\Index(name="IDX_92F01CD593489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsSida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_sida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_sol_mnos20", type="string", nullable=true)
     */
    private $sidaSolMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_pru_mnos20", type="string", nullable=true)
     */
    private $sidaPruMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_mnos20_sd", type="string", nullable=true)
     */
    private $sidaMnos20Sd;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_tarv_mnos20", type="string", nullable=true)
     */
    private $sidaTarvMnos20;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_sol_mas20", type="string", nullable=true)
     */
    private $sidaSolMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_pru_mas20", type="string", nullable=true)
     */
    private $sidaPruMas20;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_mas20_sd", type="string", nullable=true)
     */
    private $sidaMas20Sd;

    /**
     * @var string
     *
     * @ORM\Column(name="sida_tarv_mas20", type="string", nullable=true)
     */
    private $sidaTarvMas20;

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
     * Set sidaSolMnos20
     *
     * @param string $sidaSolMnos20
     * @return ShcpInsSida
     */
    public function setSidaSolMnos20($sidaSolMnos20)
    {
        $this->sidaSolMnos20 = $sidaSolMnos20;

        return $this;
    }

    /**
     * Get sidaSolMnos20
     *
     * @return string 
     */
    public function getSidaSolMnos20()
    {
        return $this->sidaSolMnos20;
    }

    /**
     * Set sidaPruMnos20
     *
     * @param string $sidaPruMnos20
     * @return ShcpInsSida
     */
    public function setSidaPruMnos20($sidaPruMnos20)
    {
        $this->sidaPruMnos20 = $sidaPruMnos20;

        return $this;
    }

    /**
     * Get sidaPruMnos20
     *
     * @return string 
     */
    public function getSidaPruMnos20()
    {
        return $this->sidaPruMnos20;
    }

    /**
     * Set sidaMnos20Sd
     *
     * @param string $sidaMnos20Sd
     * @return ShcpInsSida
     */
    public function setSidaMnos20Sd($sidaMnos20Sd)
    {
        $this->sidaMnos20Sd = $sidaMnos20Sd;

        return $this;
    }

    /**
     * Get sidaMnos20Sd
     *
     * @return string 
     */
    public function getSidaMnos20Sd()
    {
        return $this->sidaMnos20Sd;
    }

    /**
     * Set sidaTarvMnos20
     *
     * @param string $sidaTarvMnos20
     * @return ShcpInsSida
     */
    public function setSidaTarvMnos20($sidaTarvMnos20)
    {
        $this->sidaTarvMnos20 = $sidaTarvMnos20;

        return $this;
    }

    /**
     * Get sidaTarvMnos20
     *
     * @return string 
     */
    public function getSidaTarvMnos20()
    {
        return $this->sidaTarvMnos20;
    }

    /**
     * Set sidaSolMas20
     *
     * @param string $sidaSolMas20
     * @return ShcpInsSida
     */
    public function setSidaSolMas20($sidaSolMas20)
    {
        $this->sidaSolMas20 = $sidaSolMas20;

        return $this;
    }

    /**
     * Get sidaSolMas20
     *
     * @return string 
     */
    public function getSidaSolMas20()
    {
        return $this->sidaSolMas20;
    }

    /**
     * Set sidaPruMas20
     *
     * @param string $sidaPruMas20
     * @return ShcpInsSida
     */
    public function setSidaPruMas20($sidaPruMas20)
    {
        $this->sidaPruMas20 = $sidaPruMas20;

        return $this;
    }

    /**
     * Get sidaPruMas20
     *
     * @return string 
     */
    public function getSidaPruMas20()
    {
        return $this->sidaPruMas20;
    }

    /**
     * Set sidaMas20Sd
     *
     * @param string $sidaMas20Sd
     * @return ShcpInsSida
     */
    public function setSidaMas20Sd($sidaMas20Sd)
    {
        $this->sidaMas20Sd = $sidaMas20Sd;

        return $this;
    }

    /**
     * Get sidaMas20Sd
     *
     * @return string 
     */
    public function getSidaMas20Sd()
    {
        return $this->sidaMas20Sd;
    }

    /**
     * Set sidaTarvMas20
     *
     * @param string $sidaTarvMas20
     * @return ShcpInsSida
     */
    public function setSidaTarvMas20($sidaTarvMas20)
    {
        $this->sidaTarvMas20 = $sidaTarvMas20;

        return $this;
    }

    /**
     * Get sidaTarvMas20
     *
     * @return string 
     */
    public function getSidaTarvMas20()
    {
        return $this->sidaTarvMas20;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsSida
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
