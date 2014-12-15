<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpConCtlSignoAlarma
 *
 * @ORM\Table(name="shcp_con_ctl_signo_alarma")
 * @ORM\Entity
 */
class ShcpConCtlSignoAlarma
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_con_ctl_signo_alarma_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_nombre", type="string", length=200, nullable=true)
     */
    private $sigNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_tipo", type="string", nullable=true)
     */
    private $sigTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_estado", type="string", nullable=true)
     */
    private $sigEstado;



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
     * Set sigNombre
     *
     * @param string $sigNombre
     * @return ShcpConCtlSignoAlarma
     */
    public function setSigNombre($sigNombre)
    {
        $this->sigNombre = $sigNombre;

        return $this;
    }

    /**
     * Get sigNombre
     *
     * @return string 
     */
    public function getSigNombre()
    {
        return $this->sigNombre;
    }

    /**
     * Set sigTipo
     *
     * @param string $sigTipo
     * @return ShcpConCtlSignoAlarma
     */
    public function setSigTipo($sigTipo)
    {
        $this->sigTipo = $sigTipo;

        return $this;
    }

    /**
     * Get sigTipo
     *
     * @return string 
     */
    public function getSigTipo()
    {
        return $this->sigTipo;
    }

    /**
     * Set sigEstado
     *
     * @param string $sigEstado
     * @return ShcpConCtlSignoAlarma
     */
    public function setSigEstado($sigEstado)
    {
        $this->sigEstado = $sigEstado;

        return $this;
    }

    /**
     * Get sigEstado
     *
     * @return string 
     */
    public function getSigEstado()
    {
        return $this->sigEstado;
    }
}
