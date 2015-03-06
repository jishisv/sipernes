<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParPresent
 *
 * @ORM\Table(name="shcp_par_present", indexes={@ORM\Index(name="IDX_6181903CD766E548", columns={"id_admision_parto"})})
 * @ORM\Entity
 */
class ShcpParPresent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_present_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_edad_gesta_sem", type="integer", nullable=true)
     */
    private $presEdadGestaSem;

    /**
     * @var integer
     *
     * @ORM\Column(name="pres_edad_gesta_dias", type="integer", nullable=true)
     */
    private $presEdadGestaDias;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_basado_en", type="string", nullable=true)
     */
    private $presBasadoEn;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_present_situacion", type="string", nullable=true)
     */
    private $presPresentSituacion;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_tam_fetal_acorde", type="string", nullable=true)
     */
    private $presTamFetalAcorde;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_acomp_trabajo_parto", type="string", nullable=true)
     */
    private $presAcompTrabajoParto;

    /**
     * @var string
     *
     * @ORM\Column(name="pres_acomp_parto", type="string", nullable=true)
     */
    private $presAcompParto;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\OneToOne(targetEntity="ShcpParAdmision", inversedBy="present")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;






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
     * Set presEdadGestaSem
     *
     * @param integer $presEdadGestaSem
     * @return ShcpParPresent
     */
    public function setPresEdadGestaSem($presEdadGestaSem)
    {
        $this->presEdadGestaSem = $presEdadGestaSem;

        return $this;
    }

    /**
     * Get presEdadGestaSem
     *
     * @return integer 
     */
    public function getPresEdadGestaSem()
    {
        return $this->presEdadGestaSem;
    }

    /**
     * Set presEdadGestaDias
     *
     * @param integer $presEdadGestaDias
     * @return ShcpParPresent
     */
    public function setPresEdadGestaDias($presEdadGestaDias)
    {
        $this->presEdadGestaDias = $presEdadGestaDias;

        return $this;
    }

    /**
     * Get presEdadGestaDias
     *
     * @return integer 
     */
    public function getPresEdadGestaDias()
    {
        return $this->presEdadGestaDias;
    }

    /**
     * Set presBasadoEn
     *
     * @param string $presBasadoEn
     * @return ShcpParPresent
     */
    public function setPresBasadoEn($presBasadoEn)
    {
        $this->presBasadoEn = $presBasadoEn;

        return $this;
    }

    /**
     * Get presBasadoEn
     *
     * @return string 
     */
    public function getPresBasadoEn()
    {
        return $this->presBasadoEn;
    }

    /**
     * Set presPresentSituacion
     *
     * @param string $presPresentSituacion
     * @return ShcpParPresent
     */
    public function setPresPresentSituacion($presPresentSituacion)
    {
        $this->presPresentSituacion = $presPresentSituacion;

        return $this;
    }

    /**
     * Get presPresentSituacion
     *
     * @return string 
     */
    public function getPresPresentSituacion()
    {
        return $this->presPresentSituacion;
    }

    /**
     * Set presTamFetalAcorde
     *
     * @param string $presTamFetalAcorde
     * @return ShcpParPresent
     */
    public function setPresTamFetalAcorde($presTamFetalAcorde)
    {
        $this->presTamFetalAcorde = $presTamFetalAcorde;

        return $this;
    }

    /**
     * Get presTamFetalAcorde
     *
     * @return string 
     */
    public function getPresTamFetalAcorde()
    {
        return $this->presTamFetalAcorde;
    }

    /**
     * Set presAcompTrabajoParto
     *
     * @param string $presAcompTrabajoParto
     * @return ShcpParPresent
     */
    public function setPresAcompTrabajoParto($presAcompTrabajoParto)
    {
        $this->presAcompTrabajoParto = $presAcompTrabajoParto;

        return $this;
    }

    /**
     * Get presAcompTrabajoParto
     *
     * @return string 
     */
    public function getPresAcompTrabajoParto()
    {
        return $this->presAcompTrabajoParto;
    }

    /**
     * Set presAcompParto
     *
     * @param string $presAcompParto
     * @return ShcpParPresent
     */
    public function setPresAcompParto($presAcompParto)
    {
        $this->presAcompParto = $presAcompParto;

        return $this;
    }

    /**
     * Get presAcompParto
     *
     * @return string 
     */
    public function getPresAcompParto()
    {
        return $this->presAcompParto;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParPresent
     */
    public function setIdAdmisionParto(\Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto = null)
    {
        $this->idAdmisionParto = $idAdmisionParto;

        return $this;
    }

    /**
     * Get idAdmisionParto
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParAdmision 
     */
    public function getIdAdmisionParto()
    {
        return $this->idAdmisionParto;
    }
}
