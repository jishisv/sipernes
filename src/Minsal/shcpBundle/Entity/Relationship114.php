<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship114
 *
 * @ORM\Table(name="relationship_114", indexes={@ORM\Index(name="IDX_1590659DFAF6081D", columns={"id_signo_alarma"}), @ORM\Index(name="IDX_1590659DB0869F64", columns={"id_plan_parto_signos"})})
 * @ORM\Entity
 */
class Relationship114
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relationship_114_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ShcpConCtlSignoAlarma
     *
     * @ORM\ManyToOne(targetEntity="ShcpConCtlSignoAlarma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_signo_alarma", referencedColumnName="id")
     * })
     */
    private $idSignoAlarma;

    /**
     * @var \ShcpDocPlanParto2
     *
     * @ORM\ManyToOne(targetEntity="ShcpDocPlanParto2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plan_parto_signos", referencedColumnName="id")
     * })
     */
    private $idPlanPartoSignos;



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
     * Set idSignoAlarma
     *
     * @param \Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma $idSignoAlarma
     * @return Relationship114
     */
    public function setIdSignoAlarma(\Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma $idSignoAlarma = null)
    {
        $this->idSignoAlarma = $idSignoAlarma;

        return $this;
    }

    /**
     * Get idSignoAlarma
     *
     * @return \Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma 
     */
    public function getIdSignoAlarma()
    {
        return $this->idSignoAlarma;
    }

    /**
     * Set idPlanPartoSignos
     *
     * @param \Minsal\shcpBundle\Entity\ShcpDocPlanParto2 $idPlanPartoSignos
     * @return Relationship114
     */
    public function setIdPlanPartoSignos(\Minsal\shcpBundle\Entity\ShcpDocPlanParto2 $idPlanPartoSignos = null)
    {
        $this->idPlanPartoSignos = $idPlanPartoSignos;

        return $this;
    }

    /**
     * Get idPlanPartoSignos
     *
     * @return \Minsal\shcpBundle\Entity\ShcpDocPlanParto2 
     */
    public function getIdPlanPartoSignos()
    {
        return $this->idPlanPartoSignos;
    }
}
