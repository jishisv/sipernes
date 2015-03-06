<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecDetallediagnosticos
 *
 * @ORM\Table(name="sec_detallediagnosticos", indexes={@ORM\Index(name="IDX_11EE581E8843C691", columns={"idtipodiagnostico"}), @ORM\Index(name="IDX_11EE581E4990AE1E", columns={"iddiagnosticosproc"})})
 * @ORM\Entity
 */
class SecDetallediagnosticos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_detallediagnosticos_iddetalle_seq", allocationSize=1, initialValue=1)
     */
    private $iddetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="idcie10", type="string", length=5, nullable=true)
     */
    private $idcie10;

    /**
     * @var \MntTiposdiagnosticos
     *
     * @ORM\ManyToOne(targetEntity="MntTiposdiagnosticos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipodiagnostico", referencedColumnName="idtipodiagnostico")
     * })
     */
    private $idtipodiagnostico;

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
     * Get iddetalle
     *
     * @return integer 
     */
    public function getIddetalle()
    {
        return $this->iddetalle;
    }

    /**
     * Set idcie10
     *
     * @param string $idcie10
     * @return SecDetallediagnosticos
     */
    public function setIdcie10($idcie10)
    {
        $this->idcie10 = $idcie10;

        return $this;
    }

    /**
     * Get idcie10
     *
     * @return string 
     */
    public function getIdcie10()
    {
        return $this->idcie10;
    }

    /**
     * Set idtipodiagnostico
     *
     * @param \Minsal\shcpBundle\Entity\MntTiposdiagnosticos $idtipodiagnostico
     * @return SecDetallediagnosticos
     */
    public function setIdtipodiagnostico(\Minsal\shcpBundle\Entity\MntTiposdiagnosticos $idtipodiagnostico = null)
    {
        $this->idtipodiagnostico = $idtipodiagnostico;

        return $this;
    }

    /**
     * Get idtipodiagnostico
     *
     * @return \Minsal\shcpBundle\Entity\MntTiposdiagnosticos 
     */
    public function getIdtipodiagnostico()
    {
        return $this->idtipodiagnostico;
    }

    /**
     * Set iddiagnosticosproc
     *
     * @param \Minsal\shcpBundle\Entity\SecDiagnosticosProcedimientos $iddiagnosticosproc
     * @return SecDetallediagnosticos
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
}
