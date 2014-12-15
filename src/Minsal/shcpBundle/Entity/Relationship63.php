<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship63
 *
 * @ORM\Table(name="relationship_63", indexes={@ORM\Index(name="IDX_E46D53A4C2CA78C", columns={"id_patologia_paciente"}), @ORM\Index(name="IDX_E46D53A497CEA352", columns={"id_patologia"})})
 * @ORM\Entity
 */
class Relationship63
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relationship_63_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ShcpParCtlPatologia
     *
     * @ORM\ManyToOne(targetEntity="ShcpParCtlPatologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_patologia_paciente", referencedColumnName="id")
     * })
     */
    private $idPatologiaPaciente;

    /**
     * @var \ShcpParPatologia
     *
     * @ORM\ManyToOne(targetEntity="ShcpParPatologia", inversedBy="detallepatologias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_patologia", referencedColumnName="id")
     * })
     */
    private $idPatologia;



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
     * Set idPatologiaPaciente
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParCtlPatologia $idPatologiaPaciente
     * @return Relationship63
     */
    public function setIdPatologiaPaciente(\Minsal\shcpBundle\Entity\ShcpParCtlPatologia $idPatologiaPaciente = null)
    {
        $this->idPatologiaPaciente = $idPatologiaPaciente;

        return $this;
    }

    /**
     * Get idPatologiaPaciente
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParCtlPatologia 
     */
    public function getIdPatologiaPaciente()
    {
        return $this->idPatologiaPaciente;
    }

    /**
     * Set idPatologia
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParPatologia $idPatologia
     * @return Relationship63
     */
    public function setIdPatologia(\Minsal\shcpBundle\Entity\ShcpParPatologia $idPatologia = null)
    {
        $this->idPatologia = $idPatologia;

        return $this;
    }

    /**
     * Get idPatologia
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParPatologia 
     */
    public function getIdPatologia()
    {
        return $this->idPatologia;
    }
}
