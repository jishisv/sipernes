<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecIngresosHistorial
 *
 * @ORM\Table(name="sec_ingresos_historial", indexes={@ORM\Index(name="IDX_F4AB6C846D73F0C", columns={"idsubservicio"}), @ORM\Index(name="IDX_F4AB6C846724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_F4AB6C8413B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_F4AB6C8443F314A6", columns={"idnumeroexp"})})
 * @ORM\Entity
 */
class SecIngresosHistorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idingreso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_ingresos_historial_idingreso_seq", allocationSize=1, initialValue=1)
     */
    private $idingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingreso", type="date", nullable=false)
     */
    private $fechaingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaingreso", type="time", nullable=false)
     */
    private $horaingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="subespecialidad", type="integer", nullable=false)
     */
    private $subespecialidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="diagnosticodeingreso", type="string", length=100, nullable=false)
     */
    private $diagnosticodeingreso = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tarjetasvisita", type="string", length=255, nullable=true)
     */
    private $tarjetasvisita;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="smallint", nullable=false)
     */
    private $estado = '(1)::smallint';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=false)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=false)
     */
    private $fechahoramod;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsubservicio", referencedColumnName="id")
     * })
     */
    private $idsubservicio;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

    /**
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idnumeroexp", referencedColumnName="numero")
     * })
     */
    private $idnumeroexp;



    /**
     * Get idingreso
     *
     * @return integer 
     */
    public function getIdingreso()
    {
        return $this->idingreso;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return SecIngresosHistorial
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set horaingreso
     *
     * @param \DateTime $horaingreso
     * @return SecIngresosHistorial
     */
    public function setHoraingreso($horaingreso)
    {
        $this->horaingreso = $horaingreso;

        return $this;
    }

    /**
     * Get horaingreso
     *
     * @return \DateTime 
     */
    public function getHoraingreso()
    {
        return $this->horaingreso;
    }

    /**
     * Set subespecialidad
     *
     * @param integer $subespecialidad
     * @return SecIngresosHistorial
     */
    public function setSubespecialidad($subespecialidad)
    {
        $this->subespecialidad = $subespecialidad;

        return $this;
    }

    /**
     * Get subespecialidad
     *
     * @return integer 
     */
    public function getSubespecialidad()
    {
        return $this->subespecialidad;
    }

    /**
     * Set diagnosticodeingreso
     *
     * @param string $diagnosticodeingreso
     * @return SecIngresosHistorial
     */
    public function setDiagnosticodeingreso($diagnosticodeingreso)
    {
        $this->diagnosticodeingreso = $diagnosticodeingreso;

        return $this;
    }

    /**
     * Get diagnosticodeingreso
     *
     * @return string 
     */
    public function getDiagnosticodeingreso()
    {
        return $this->diagnosticodeingreso;
    }

    /**
     * Set tarjetasvisita
     *
     * @param string $tarjetasvisita
     * @return SecIngresosHistorial
     */
    public function setTarjetasvisita($tarjetasvisita)
    {
        $this->tarjetasvisita = $tarjetasvisita;

        return $this;
    }

    /**
     * Get tarjetasvisita
     *
     * @return string 
     */
    public function getTarjetasvisita()
    {
        return $this->tarjetasvisita;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return SecIngresosHistorial
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return SecIngresosHistorial
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
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return SecIngresosHistorial
     */
    public function setFechahoramod($fechahoramod)
    {
        $this->fechahoramod = $fechahoramod;

        return $this;
    }

    /**
     * Get fechahoramod
     *
     * @return \DateTime 
     */
    public function getFechahoramod()
    {
        return $this->fechahoramod;
    }

    /**
     * Set idsubservicio
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idsubservicio
     * @return SecIngresosHistorial
     */
    public function setIdsubservicio(\Minsal\shcpBundle\Entity\CtlAtencion $idsubservicio = null)
    {
        $this->idsubservicio = $idsubservicio;

        return $this;
    }

    /**
     * Get idsubservicio
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdsubservicio()
    {
        return $this->idsubservicio;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idusuariomod
     * @return SecIngresosHistorial
     */
    public function setIdusuariomod(\Minsal\shcpBundle\Entity\MntEmpleado $idusuariomod = null)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\MntEmpleado $idusuarioreg
     * @return SecIngresosHistorial
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\MntEmpleado $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\MntEmpleado 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idnumeroexp
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idnumeroexp
     * @return SecIngresosHistorial
     */
    public function setIdnumeroexp(\Minsal\shcpBundle\Entity\MntExpediente $idnumeroexp = null)
    {
        $this->idnumeroexp = $idnumeroexp;

        return $this;
    }

    /**
     * Get idnumeroexp
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdnumeroexp()
    {
        return $this->idnumeroexp;
    }
}
