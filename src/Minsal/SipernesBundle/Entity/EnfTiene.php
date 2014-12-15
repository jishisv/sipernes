<?php

namespace Minsal\SipernesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfTiene
 *
 * @ORM\Table(name="enf_tiene", indexes={@ORM\Index(name="IDX_E2E48582BFAE4CCD", columns={"id_registro_nota"})})
 * @ORM\Entity
 */
class EnfTiene
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_expediente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \EnfMtlNota
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="EnfMtlNota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_registro_nota", referencedColumnName="id")
     * })
     */
    private $idRegistroNota;



    /**
     * Set idExpediente
     *
     * @param integer $idExpediente
     * @return EnfTiene
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return integer 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return EnfTiene
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set idRegistroNota
     *
     * @param \Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota
     * @return EnfTiene
     */
    public function setIdRegistroNota(\Minsal\SipernesBundle\Entity\EnfMtlNota $idRegistroNota)
    {
        $this->idRegistroNota = $idRegistroNota;

        return $this;
    }

    /**
     * Get idRegistroNota
     *
     * @return \Minsal\SipernesBundle\Entity\EnfMtlNota 
     */
    public function getIdRegistroNota()
    {
        return $this->idRegistroNota;
    }
}
