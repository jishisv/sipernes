<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCiq
 *
 * @ORM\Table(name="mnt_ciq", uniqueConstraints={@ORM\UniqueConstraint(name="idx_mnt_ciq", columns={"codigo"})}, indexes={@ORM\Index(name="IDX_36321B7A3405215", columns={"id_tipo_procedimiento"})})
 * @ORM\Entity
 */
class MntCiq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_ciq_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=6, nullable=false)
     */
    private $codigo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="procedimiento", type="string", length=250, nullable=false)
     */
    private $procedimiento = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuarioreg", type="smallint", nullable=true)
     */
    private $idusuarioreg = '(0)::smallint';

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuariomod", type="smallint", nullable=true)
     */
    private $idusuariomod = '(0)::smallint';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;

    /**
     * @var \MntTipoProcedimiento
     *
     * @ORM\ManyToOne(targetEntity="MntTipoProcedimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_procedimiento", referencedColumnName="id")
     * })
     */
    private $idTipoProcedimiento;



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
     * Set codigo
     *
     * @param string $codigo
     * @return MntCiq
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set procedimiento
     *
     * @param string $procedimiento
     * @return MntCiq
     */
    public function setProcedimiento($procedimiento)
    {
        $this->procedimiento = $procedimiento;

        return $this;
    }

    /**
     * Get procedimiento
     *
     * @return string 
     */
    public function getProcedimiento()
    {
        return $this->procedimiento;
    }

    /**
     * Set idusuarioreg
     *
     * @param integer $idusuarioreg
     * @return MntCiq
     */
    public function setIdusuarioreg($idusuarioreg)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return integer 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idusuariomod
     *
     * @param integer $idusuariomod
     * @return MntCiq
     */
    public function setIdusuariomod($idusuariomod)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return integer 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return MntCiq
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
     * @return MntCiq
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
     * Set idTipoProcedimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntTipoProcedimiento $idTipoProcedimiento
     * @return MntCiq
     */
    public function setIdTipoProcedimiento(\Minsal\shcpBundle\Entity\MntTipoProcedimiento $idTipoProcedimiento = null)
    {
        $this->idTipoProcedimiento = $idTipoProcedimiento;

        return $this;
    }

    /**
     * Get idTipoProcedimiento
     *
     * @return \Minsal\shcpBundle\Entity\MntTipoProcedimiento 
     */
    public function getIdTipoProcedimiento()
    {
        return $this->idTipoProcedimiento;
    }
}
