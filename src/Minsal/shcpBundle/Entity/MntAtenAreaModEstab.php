<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntAtenAreaModEstab
 *
 * @ORM\Table(name="mnt_aten_area_mod_estab", indexes={@ORM\Index(name="IDX_EE2A0C9ACC2F8715", columns={"id_area_mod_estab"}), @ORM\Index(name="IDX_EE2A0C9A695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_EE2A0C9A7DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class MntAtenAreaModEstab
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_aten_area_mod_estab_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_ambiente", type="string", length=80, nullable=true)
     */
    private $nombreAmbiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ambiente_independiente", type="integer", nullable=true)
     */
    private $idAmbienteIndependiente;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_farmacia", type="smallint", nullable=true)
     */
    private $codigoFarmacia;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion", type="string", nullable=true)
     */
    private $condicion;

    /**
     * @var \MntAreaModEstab
     *
     * @ORM\ManyToOne(targetEntity="MntAreaModEstab")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_mod_estab", referencedColumnName="id")
     * })
     */
    private $idAreaModEstab;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreAmbiente
     *
     * @param string $nombreAmbiente
     * @return MntAtenAreaModEstab
     */
    public function setNombreAmbiente($nombreAmbiente)
    {
        $this->nombreAmbiente = $nombreAmbiente;

        return $this;
    }

    /**
     * Get nombreAmbiente
     *
     * @return string 
     */
    public function getNombreAmbiente()
    {
        return $this->nombreAmbiente;
    }

    /**
     * Set idAmbienteIndependiente
     *
     * @param integer $idAmbienteIndependiente
     * @return MntAtenAreaModEstab
     */
    public function setIdAmbienteIndependiente($idAmbienteIndependiente)
    {
        $this->idAmbienteIndependiente = $idAmbienteIndependiente;

        return $this;
    }

    /**
     * Get idAmbienteIndependiente
     *
     * @return integer 
     */
    public function getIdAmbienteIndependiente()
    {
        return $this->idAmbienteIndependiente;
    }

    /**
     * Set codigoFarmacia
     *
     * @param integer $codigoFarmacia
     * @return MntAtenAreaModEstab
     */
    public function setCodigoFarmacia($codigoFarmacia)
    {
        $this->codigoFarmacia = $codigoFarmacia;

        return $this;
    }

    /**
     * Get codigoFarmacia
     *
     * @return integer 
     */
    public function getCodigoFarmacia()
    {
        return $this->codigoFarmacia;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     * @return MntAtenAreaModEstab
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;

        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set idAreaModEstab
     *
     * @param \Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab
     * @return MntAtenAreaModEstab
     */
    public function setIdAreaModEstab(\Minsal\shcpBundle\Entity\MntAreaModEstab $idAreaModEstab = null)
    {
        $this->idAreaModEstab = $idAreaModEstab;

        return $this;
    }

    /**
     * Get idAreaModEstab
     *
     * @return \Minsal\shcpBundle\Entity\MntAreaModEstab 
     */
    public function getIdAreaModEstab()
    {
        return $this->idAreaModEstab;
    }

    /**
     * Set idAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idAtencion
     * @return MntAtenAreaModEstab
     */
    public function setIdAtencion(\Minsal\shcpBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return MntAtenAreaModEstab
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
}
