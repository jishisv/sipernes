<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCie10
 *
 * @ORM\Table(name="mnt_cie10", uniqueConstraints={@ORM\UniqueConstraint(name="idx_idcie10", columns={"codigo"})})
 * @ORM\Entity
 */
class MntCie10
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_cie10_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=5, nullable=false)
     */
    private $codigo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="grupom", type="integer", nullable=false)
     */
    private $grupom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codgrupo", type="integer", nullable=false)
     */
    private $codgrupo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="string", length=130, nullable=true)
     */
    private $diagnostico;

    /**
     * @var integer
     *
     * @ORM\Column(name="alarma", type="smallint", nullable=true)
     */
    private $alarma = '(0)::smallint';

    /**
     * @var integer
     *
     * @ORM\Column(name="sexo_cie10", type="smallint", nullable=false)
     */
    private $sexoCie10 = '(0)::smallint';

    /**
     * @var integer
     *
     * @ORM\Column(name="c_salida", type="integer", nullable=true)
     */
    private $cSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="mayor", type="integer", nullable=true)
     */
    private $mayor;

    /**
     * @var integer
     *
     * @ORM\Column(name="menor", type="integer", nullable=true)
     */
    private $menor;

    /**
     * @var integer
     *
     * @ORM\Column(name="critico", type="smallint", nullable=true)
     */
    private $critico = '(0)::smallint';



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
     * @return MntCie10
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
     * Set grupom
     *
     * @param integer $grupom
     * @return MntCie10
     */
    public function setGrupom($grupom)
    {
        $this->grupom = $grupom;

        return $this;
    }

    /**
     * Get grupom
     *
     * @return integer 
     */
    public function getGrupom()
    {
        return $this->grupom;
    }

    /**
     * Set codgrupo
     *
     * @param integer $codgrupo
     * @return MntCie10
     */
    public function setCodgrupo($codgrupo)
    {
        $this->codgrupo = $codgrupo;

        return $this;
    }

    /**
     * Get codgrupo
     *
     * @return integer 
     */
    public function getCodgrupo()
    {
        return $this->codgrupo;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     * @return MntCie10
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string 
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set alarma
     *
     * @param integer $alarma
     * @return MntCie10
     */
    public function setAlarma($alarma)
    {
        $this->alarma = $alarma;

        return $this;
    }

    /**
     * Get alarma
     *
     * @return integer 
     */
    public function getAlarma()
    {
        return $this->alarma;
    }

    /**
     * Set sexoCie10
     *
     * @param integer $sexoCie10
     * @return MntCie10
     */
    public function setSexoCie10($sexoCie10)
    {
        $this->sexoCie10 = $sexoCie10;

        return $this;
    }

    /**
     * Get sexoCie10
     *
     * @return integer 
     */
    public function getSexoCie10()
    {
        return $this->sexoCie10;
    }

    /**
     * Set cSalida
     *
     * @param integer $cSalida
     * @return MntCie10
     */
    public function setCSalida($cSalida)
    {
        $this->cSalida = $cSalida;

        return $this;
    }

    /**
     * Get cSalida
     *
     * @return integer 
     */
    public function getCSalida()
    {
        return $this->cSalida;
    }

    /**
     * Set mayor
     *
     * @param integer $mayor
     * @return MntCie10
     */
    public function setMayor($mayor)
    {
        $this->mayor = $mayor;

        return $this;
    }

    /**
     * Get mayor
     *
     * @return integer 
     */
    public function getMayor()
    {
        return $this->mayor;
    }

    /**
     * Set menor
     *
     * @param integer $menor
     * @return MntCie10
     */
    public function setMenor($menor)
    {
        $this->menor = $menor;

        return $this;
    }

    /**
     * Get menor
     *
     * @return integer 
     */
    public function getMenor()
    {
        return $this->menor;
    }

    /**
     * Set critico
     *
     * @param integer $critico
     * @return MntCie10
     */
    public function setCritico($critico)
    {
        $this->critico = $critico;

        return $this;
    }

    /**
     * Get critico
     *
     * @return integer 
     */
    public function getCritico()
    {
        return $this->critico;
    }
}
