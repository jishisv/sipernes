<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecDetalleprocedimientos
 *
 * @ORM\Table(name="sec_detalleprocedimientos", indexes={@ORM\Index(name="fki_mnt_ciq_sec_detalleprocedimientos", columns={"idciq"}), @ORM\Index(name="IDX_F942ADE04990AE1E", columns={"iddiagnosticosproc"}), @ORM\Index(name="IDX_F942ADE0A3405215", columns={"id_tipo_procedimiento"})})
 * @ORM\Entity
 */
class SecDetalleprocedimientos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idprocedimientos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_detalleprocedimientos_idprocedimientos_seq", allocationSize=1, initialValue=1)
     */
    private $idprocedimientos;

    /**
     * @var \MntCiq
     *
     * @ORM\ManyToOne(targetEntity="MntCiq")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idciq", referencedColumnName="codigo")
     * })
     */
    private $idciq;

    /**
     * @var \SecDiagnosticosProcedimientos
     *
     * @ORM\ManyToOne(targetEntity="SecDiagnosticosProcedimientos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddiagnosticosproc", referencedColumnName="iddiagnosticosproc")
     * })
     */
    private $iddiagnosticosproc;

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
     * Get idprocedimientos
     *
     * @return integer 
     */
    public function getIdprocedimientos()
    {
        return $this->idprocedimientos;
    }

    /**
     * Set idciq
     *
     * @param \Minsal\shcpBundle\Entity\MntCiq $idciq
     * @return SecDetalleprocedimientos
     */
    public function setIdciq(\Minsal\shcpBundle\Entity\MntCiq $idciq = null)
    {
        $this->idciq = $idciq;

        return $this;
    }

    /**
     * Get idciq
     *
     * @return \Minsal\shcpBundle\Entity\MntCiq 
     */
    public function getIdciq()
    {
        return $this->idciq;
    }

    /**
     * Set iddiagnosticosproc
     *
     * @param \Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos $iddiagnosticosproc
     * @return SecDetalleprocedimientos
     */
    public function setIddiagnosticosproc(\Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos $iddiagnosticosproc = null)
    {
        $this->iddiagnosticosproc = $iddiagnosticosproc;

        return $this;
    }

    /**
     * Get iddiagnosticosproc
     *
     * @return \Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos 
     */
    public function getIddiagnosticosproc()
    {
        return $this->iddiagnosticosproc;
    }

    /**
     * Set idTipoProcedimiento
     *
     * @param \Minsal\shcpBundle\Entity\MntTipoProcedimiento $idTipoProcedimiento
     * @return SecDetalleprocedimientos
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
