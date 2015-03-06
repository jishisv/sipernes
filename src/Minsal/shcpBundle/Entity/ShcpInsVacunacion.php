<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsVacunacion
 *
 * @ORM\Table(name="shcp_ins_vacunacion", indexes={@ORM\Index(name="IDX_5A2357BF93489788", columns={"id_exp_materno"})})
 * @ORM\Entity
 */
class ShcpInsVacunacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_vacunacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_antirubeo", type="string", nullable=true)
     */
    private $vacuAntirubeo;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_antite_vigente", type="string", nullable=true)
     */
    private $vacuAntiteVigente;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_antite_dosis1", type="string", nullable=true)
     */
    private $vacuAntiteDosis1;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_antite_dosis2", type="string", nullable=true)
     */
    private $vacuAntiteDosis2;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_h1n1", type="string", nullable=true)
     */
    private $vacuH1n1;

    /**
     * @var string
     *
     * @ORM\Column(name="vacu_h1n1_mes", type="string", nullable=true)
     */
    private $vacuH1n1Mes;

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
     * Set vacuAntirubeo
     *
     * @param string $vacuAntirubeo
     * @return ShcpInsVacunacion
     */
    public function setVacuAntirubeo($vacuAntirubeo)
    {
        $this->vacuAntirubeo = $vacuAntirubeo;

        return $this;
    }

    /**
     * Get vacuAntirubeo
     *
     * @return string 
     */
    public function getVacuAntirubeo()
    {
        return $this->vacuAntirubeo;
    }

    /**
     * Set vacuAntiteVigente
     *
     * @param string $vacuAntiteVigente
     * @return ShcpInsVacunacion
     */
    public function setVacuAntiteVigente($vacuAntiteVigente)
    {
        $this->vacuAntiteVigente = $vacuAntiteVigente;

        return $this;
    }

    /**
     * Get vacuAntiteVigente
     *
     * @return string 
     */
    public function getVacuAntiteVigente()
    {
        return $this->vacuAntiteVigente;
    }

    /**
     * Set vacuAntiteDosis1
     *
     * @param string $vacuAntiteDosis1
     * @return ShcpInsVacunacion
     */
    public function setVacuAntiteDosis1($vacuAntiteDosis1)
    {
        $this->vacuAntiteDosis1 = $vacuAntiteDosis1;

        return $this;
    }

    /**
     * Get vacuAntiteDosis1
     *
     * @return string 
     */
    public function getVacuAntiteDosis1()
    {
        return $this->vacuAntiteDosis1;
    }

    /**
     * Set vacuAntiteDosis2
     *
     * @param string $vacuAntiteDosis2
     * @return ShcpInsVacunacion
     */
    public function setVacuAntiteDosis2($vacuAntiteDosis2)
    {
        $this->vacuAntiteDosis2 = $vacuAntiteDosis2;

        return $this;
    }

    /**
     * Get vacuAntiteDosis2
     *
     * @return string 
     */
    public function getVacuAntiteDosis2()
    {
        return $this->vacuAntiteDosis2;
    }

    /**
     * Set vacuH1n1
     *
     * @param string $vacuH1n1
     * @return ShcpInsVacunacion
     */
    public function setVacuH1n1($vacuH1n1)
    {
        $this->vacuH1n1 = $vacuH1n1;

        return $this;
    }

    /**
     * Get vacuH1n1
     *
     * @return string 
     */
    public function getVacuH1n1()
    {
        return $this->vacuH1n1;
    }

    /**
     * Set vacuH1n1Mes
     *
     * @param string $vacuH1n1Mes
     * @return ShcpInsVacunacion
     */
    public function setVacuH1n1Mes($vacuH1n1Mes)
    {
        $this->vacuH1n1Mes = $vacuH1n1Mes;

        return $this;
    }

    /**
     * Get vacuH1n1Mes
     *
     * @return string 
     */
    public function getVacuH1n1Mes()
    {
        return $this->vacuH1n1Mes;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpInsVacunacion
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
