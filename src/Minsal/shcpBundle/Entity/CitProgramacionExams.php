<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CitProgramacionExams
 *
 * @ORM\Table(name="cit_programacion_exams", indexes={@ORM\Index(name="fki_mnt_aten_area_mod_estab_cit_programacion_exams", columns={"id_aten_area_mod_estab"}), @ORM\Index(name="fki_lab_examenes_cit_programacion_exams", columns={"id_examen_establecimiento"}), @ORM\Index(name="fki_fos_user_user_cit_programacion_exams", columns={"idusuarioreg"}), @ORM\Index(name="IDX_3455D7497DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class CitProgramacionExams
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cit_programacion_exams_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangotiempoprev", type="integer", nullable=true)
     */
    private $rangotiempoprev;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \LabExamenesxestablecimiento
     *
     * @ORM\ManyToOne(targetEntity="LabExamenesxestablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_examen_establecimiento", referencedColumnName="id")
     * })
     */
    private $idExamenEstablecimiento;

    /**
     * @var \MntAtenAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAtenAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_aten_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAtenAreaModEstab;



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
     * Set rangotiempoprev
     *
     * @param integer $rangotiempoprev
     * @return CitProgramacionExams
     */
    public function setRangotiempoprev($rangotiempoprev)
    {
        $this->rangotiempoprev = $rangotiempoprev;

        return $this;
    }

    /**
     * Get rangotiempoprev
     *
     * @return integer 
     */
    public function getRangotiempoprev()
    {
        return $this->rangotiempoprev;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return CitProgramacionExams
     */
    public function setFechahorareg($fechahorareg)
    {
        $this->fechahorareg = $fechahorareg;

        return $this;
    }

    /**
     * Get fechahorareg
     *
     * @return \DateTime 
     */
    public function getFechahorareg()
    {
        return $this->fechahorareg;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CitProgramacionExams
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return CitProgramacionExams
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idExamenEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\LabExamenesxestablecimiento $idExamenEstablecimiento
     * @return CitProgramacionExams
     */
    public function setIdExamenEstablecimiento(\Minsal\shcpBundle\Entity\LabExamenesxestablecimiento $idExamenEstablecimiento = null)
    {
        $this->idExamenEstablecimiento = $idExamenEstablecimiento;

        return $this;
    }

    /**
     * Get idExamenEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\LabExamenesxestablecimiento 
     */
    public function getIdExamenEstablecimiento()
    {
        return $this->idExamenEstablecimiento;
    }

    /**
     * Set idAtenAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab
     * @return CitProgramacionExams
     */
    public function setIdAtenAreaModEstab(\Minsal\shcpBundle\Entity\MntAtenAreaModEstab $idAtenAreaModEstab = null)
    {
        $this->idAtenAreaModEstab = $idAtenAreaModEstab;

        return $this;
    }

    /**
     * Get idAtenAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAtenAreaModEstab 
     */
    public function getIdAtenAreaModEstab()
    {
        return $this->idAtenAreaModEstab;
    }
}
