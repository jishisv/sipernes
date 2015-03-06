<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsAnteEnfermedad
 *
 * @ORM\Table(name="shcp_ins_ante_enfermedad", indexes={@ORM\Index(name="IDX_38120F1C78323381", columns={"id_enfermedad"}), @ORM\Index(name="IDX_38120F1CED1232DF", columns={"id_antecedent_obste"})})
 * @ORM\Entity
 */
class ShcpInsAnteEnfermedad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_ins_ante_enfermedad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="anenf_familiar", type="string", nullable=true)
     */
    private $anenfFamiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="anenf_personal", type="string", nullable=true)
     */
    private $anenfPersonal;

    /**
     * @var string
     *
     * @ORM\Column(name="anenf_otra", type="string", length=20, nullable=true)
     */
    private $anenfOtra;

    /**
     * @var \ShcpInsCtlEnfermedad
     *
     * @ORM\ManyToOne(targetEntity="ShcpInsCtlEnfermedad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enfermedad", referencedColumnName="id")
     * })
     */
    private $idEnfermedad;

    /**
     * @var \ShcpInsAntecedentObste
     *
     * @ORM\ManyToOne(targetEntity="ShcpInsAntecedentObste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_antecedent_obste", referencedColumnName="id")
     * })
     */
    private $idAntecedentObste;



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
     * Set anenfFamiliar
     *
     * @param string $anenfFamiliar
     * @return ShcpInsAnteEnfermedad
     */
    public function setAnenfFamiliar($anenfFamiliar)
    {
        $this->anenfFamiliar = $anenfFamiliar;

        return $this;
    }

    /**
     * Get anenfFamiliar
     *
     * @return string 
     */
    public function getAnenfFamiliar()
    {
        return $this->anenfFamiliar;
    }

    /**
     * Set anenfPersonal
     *
     * @param string $anenfPersonal
     * @return ShcpInsAnteEnfermedad
     */
    public function setAnenfPersonal($anenfPersonal)
    {
        $this->anenfPersonal = $anenfPersonal;

        return $this;
    }

    /**
     * Get anenfPersonal
     *
     * @return string 
     */
    public function getAnenfPersonal()
    {
        return $this->anenfPersonal;
    }

    /**
     * Set anenfOtra
     *
     * @param string $anenfOtra
     * @return ShcpInsAnteEnfermedad
     */
    public function setAnenfOtra($anenfOtra)
    {
        $this->anenfOtra = $anenfOtra;

        return $this;
    }

    /**
     * Get anenfOtra
     *
     * @return string 
     */
    public function getAnenfOtra()
    {
        return $this->anenfOtra;
    }

    /**
     * Set idEnfermedad
     *
     * @param \Minsal\shcpBundle\Entity\ShcpInsCtlEnfermedad $idEnfermedad
     * @return ShcpInsAnteEnfermedad
     */
    public function setIdEnfermedad(\Minsal\shcpBundle\Entity\ShcpInsCtlEnfermedad $idEnfermedad = null)
    {
        $this->idEnfermedad = $idEnfermedad;

        return $this;
    }

    /**
     * Get idEnfermedad
     *
     * @return \Minsal\shcpBundle\Entity\ShcpInsCtlEnfermedad 
     */
    public function getIdEnfermedad()
    {
        return $this->idEnfermedad;
    }

    /**
     * Set idAntecedentObste
     *
     * @param \Minsal\shcpBundle\Entity\ShcpInsAntecedentObste $idAntecedentObste
     * @return ShcpInsAnteEnfermedad
     */
    public function setIdAntecedentObste(\Minsal\shcpBundle\Entity\ShcpInsAntecedentObste $idAntecedentObste = null)
    {
        $this->idAntecedentObste = $idAntecedentObste;

        return $this;
    }

    /**
     * Get idAntecedentObste
     *
     * @return \Minsal\shcpBundle\Entity\ShcpInsAntecedentObste 
     */
    public function getIdAntecedentObste()
    {
        return $this->idAntecedentObste;
    }
}
