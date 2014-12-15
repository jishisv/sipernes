<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocPlanParto2
 *
 * @ORM\Table(name="shcp_doc_plan_parto2", indexes={@ORM\Index(name="IDX_B415C3198B6D3E9A", columns={"id_plan_parto"}), @ORM\Index(name="IDX_B415C3196B3CA4B", columns={"id_user"})})
 * @ORM\Entity
 */
class ShcpDocPlanParto2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_plan_parto2_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plan_fecha", type="date", nullable=true)
     */
    private $planFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_tiempo", type="string", nullable=true)
     */
    private $planTiempo;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_par_familia", type="string", nullable=true)
     */
    private $planParFamilia;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_gan_peso", type="string", nullable=true)
     */
    private $planGanPeso;

    /**
     * @var string
     *
     * @ORM\Column(name="plan_hierro_acido", type="string", nullable=true)
     */
    private $planHierroAcido;

    /**
     * @var \ShcpDocPlanParto
     *
     * @ORM\ManyToOne(targetEntity="ShcpDocPlanParto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plan_parto", referencedColumnName="id")
     * })
     */
    private $idPlanParto;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set planFecha
     *
     * @param \DateTime $planFecha
     * @return ShcpDocPlanParto2
     */
    public function setPlanFecha($planFecha)
    {
        $this->planFecha = $planFecha;

        return $this;
    }

    /**
     * Get planFecha
     *
     * @return \DateTime 
     */
    public function getPlanFecha()
    {
        return $this->planFecha;
    }

    /**
     * Set planTiempo
     *
     * @param string $planTiempo
     * @return ShcpDocPlanParto2
     */
    public function setPlanTiempo($planTiempo)
    {
        $this->planTiempo = $planTiempo;

        return $this;
    }

    /**
     * Get planTiempo
     *
     * @return string 
     */
    public function getPlanTiempo()
    {
        return $this->planTiempo;
    }

    /**
     * Set planParFamilia
     *
     * @param string $planParFamilia
     * @return ShcpDocPlanParto2
     */
    public function setPlanParFamilia($planParFamilia)
    {
        $this->planParFamilia = $planParFamilia;

        return $this;
    }

    /**
     * Get planParFamilia
     *
     * @return string 
     */
    public function getPlanParFamilia()
    {
        return $this->planParFamilia;
    }

    /**
     * Set planGanPeso
     *
     * @param string $planGanPeso
     * @return ShcpDocPlanParto2
     */
    public function setPlanGanPeso($planGanPeso)
    {
        $this->planGanPeso = $planGanPeso;

        return $this;
    }

    /**
     * Get planGanPeso
     *
     * @return string 
     */
    public function getPlanGanPeso()
    {
        return $this->planGanPeso;
    }

    /**
     * Set planHierroAcido
     *
     * @param string $planHierroAcido
     * @return ShcpDocPlanParto2
     */
    public function setPlanHierroAcido($planHierroAcido)
    {
        $this->planHierroAcido = $planHierroAcido;

        return $this;
    }

    /**
     * Get planHierroAcido
     *
     * @return string 
     */
    public function getPlanHierroAcido()
    {
        return $this->planHierroAcido;
    }

    /**
     * Set idPlanParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpDocPlanParto $idPlanParto
     * @return ShcpDocPlanParto2
     */
    public function setIdPlanParto(\Minsal\shcpBundle\Entity\ShcpDocPlanParto $idPlanParto = null)
    {
        $this->idPlanParto = $idPlanParto;

        return $this;
    }

    /**
     * Get idPlanParto
     *
     * @return \Minsal\shcpBundle\Entity\ShcpDocPlanParto 
     */
    public function getIdPlanParto()
    {
        return $this->idPlanParto;
    }

    /**
     * Set idUser
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idUser
     * @return ShcpDocPlanParto2
     */
    public function setIdUser(\Minsal\shcpBundle\Entity\FosUserUser $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
