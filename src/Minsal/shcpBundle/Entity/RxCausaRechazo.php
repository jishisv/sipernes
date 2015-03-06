<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RxCausaRechazo
 *
 * @ORM\Table(name="rx_causa_rechazo")
 * @ORM\Entity
 */
class RxCausaRechazo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rx_causa_rechazo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="causa", type="string", length=150, nullable=true)
     */
    private $causa;



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
     * Set causa
     *
     * @param string $causa
     * @return RxCausaRechazo
     */
    public function setCausa($causa)
    {
        $this->causa = $causa;

        return $this;
    }

    /**
     * Get causa
     *
     * @return string 
     */
    public function getCausa()
    {
        return $this->causa;
    }
}
