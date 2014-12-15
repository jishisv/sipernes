<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship116
 *
 * @ORM\Table(name="relationship_116", indexes={@ORM\Index(name="IDX_FB9E04B1E72DF557", columns={"id_con_prenatal"}), @ORM\Index(name="IDX_FB9E04B1FAF6081D", columns={"id_signo_alarma"})})
 * @ORM\Entity
 */
class Relationship116
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relationship_116_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ShcpConPrenatal
     *
     * @ORM\ManyToOne(targetEntity="ShcpConPrenatal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_con_prenatal", referencedColumnName="id")
     * })
     */
    private $idConPrenatal;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idConPrenatal
     *
     * @param \Minsal\shcpBundle\Entity\ShcpConPrenatal $idConPrenatal
     * @return Relationship116
     */
    public function setIdConPrenatal(\Minsal\shcpBundle\Entity\ShcpConPrenatal $idConPrenatal = null)
    {
        $this->idConPrenatal = $idConPrenatal;

        return $this;
    }

    /**
     * Get idConPrenatal
     *
     * @return \Minsal\shcpBundle\Entity\ShcpConPrenatal 
     */
    public function getIdConPrenatal()
    {
        return $this->idConPrenatal;
    }

    /**
     * Set idSignoAlarma
     *
     * @param \Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma $idSignoAlarma
     * @return Relationship116
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
}
