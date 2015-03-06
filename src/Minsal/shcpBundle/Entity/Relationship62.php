<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relationship62
 *
 * @ORM\Table(name="relationship_62", indexes={@ORM\Index(name="IDX_936A6332C2CA78C", columns={"id_patologia_paciente"}), @ORM\Index(name="IDX_936A63321D6C3F70", columns={"id_recien_nacido"})})
 * @ORM\Entity
 */
class Relationship62
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relationship_62_id_seq", allocationSize=1, initialValue=1)
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
     * @var \ShcpParRecienNacido
     *
     * @ORM\ManyToOne(targetEntity="ShcpParRecienNacido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recien_nacido", referencedColumnName="id")
     * })
     */
    private $idRecienNacido;



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
     * @return Relationship62
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
     * Set idRecienNacido
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParRecienNacido $idRecienNacido
     * @return Relationship62
     */
    public function setIdRecienNacido(\Minsal\shcpBundle\Entity\ShcpParRecienNacido $idRecienNacido = null)
    {
        $this->idRecienNacido = $idRecienNacido;

        return $this;
    }

    /**
     * Get idRecienNacido
     *
     * @return \Minsal\shcpBundle\Entity\ShcpParRecienNacido 
     */
    public function getIdRecienNacido()
    {
        return $this->idRecienNacido;
    }
}
