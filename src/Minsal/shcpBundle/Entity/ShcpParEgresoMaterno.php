<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParEgresoMaterno
 *
 * @ORM\Table(name="shcp_par_egreso_materno", indexes={@ORM\Index(name="IDX_549DEFBAD766E548", columns={"id_admision_parto"}), @ORM\Index(name="IDX_549DEFBA7DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ShcpParEgresoMaterno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_egreso_materno_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="egma_condicion", type="string", nullable=true)
     */
    private $egmaCondicion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egma_fecha", type="date", nullable=true)
     */
    private $egmaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="egma_hora", type="time", nullable=true)
     */
    private $egmaHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="egma_medico_responsab", type="bigint", nullable=true)
     */
    private $egmaMedicoResponsab;

    /**
     * @var string
     *
     * @ORM\Column(name="egma_fallece_traslado", type="string", nullable=true)
     */
    private $egmaFalleceTraslado;

    /**
     * @var integer
     *
     * @ORM\Column(name="egma_dias_desde_parto", type="integer", nullable=true)
     */
    private $egmaDiasDesdeParto;

    /**
     * @var string
     *
     * @ORM\Column(name="egma_consejeria_anticoncep", type="string", nullable=true)
     */
    private $egmaConsejeriaAnticoncep;

    /**
     * @var string
     *
     * @ORM\Column(name="egma_metodo_elegido", type="string", nullable=true)
     */
    private $egmaMetodoElegido;

    /**
     * @var \ShcpParAdmision
     *
     * @ORM\ManyToOne(targetEntity="ShcpParAdmision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_admision_parto", referencedColumnName="id")
     * })
     */
    private $idAdmisionParto;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;



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
     * Set egmaCondicion
     *
     * @param string $egmaCondicion
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaCondicion($egmaCondicion)
    {
        $this->egmaCondicion = $egmaCondicion;

        return $this;
    }

    /**
     * Get egmaCondicion
     *
     * @return string 
     */
    public function getEgmaCondicion()
    {
        return $this->egmaCondicion;
    }

    /**
     * Set egmaFecha
     *
     * @param \DateTime $egmaFecha
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaFecha($egmaFecha)
    {
        $this->egmaFecha = $egmaFecha;

        return $this;
    }

    /**
     * Get egmaFecha
     *
     * @return \DateTime 
     */
    public function getEgmaFecha()
    {
        return $this->egmaFecha;
    }

    /**
     * Set egmaHora
     *
     * @param \DateTime $egmaHora
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaHora($egmaHora)
    {
        $this->egmaHora = $egmaHora;

        return $this;
    }

    /**
     * Get egmaHora
     *
     * @return \DateTime 
     */
    public function getEgmaHora()
    {
        return $this->egmaHora;
    }

    /**
     * Set egmaMedicoResponsab
     *
     * @param integer $egmaMedicoResponsab
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaMedicoResponsab($egmaMedicoResponsab)
    {
        $this->egmaMedicoResponsab = $egmaMedicoResponsab;

        return $this;
    }

    /**
     * Get egmaMedicoResponsab
     *
     * @return integer 
     */
    public function getEgmaMedicoResponsab()
    {
        return $this->egmaMedicoResponsab;
    }

    /**
     * Set egmaFalleceTraslado
     *
     * @param string $egmaFalleceTraslado
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaFalleceTraslado($egmaFalleceTraslado)
    {
        $this->egmaFalleceTraslado = $egmaFalleceTraslado;

        return $this;
    }

    /**
     * Get egmaFalleceTraslado
     *
     * @return string 
     */
    public function getEgmaFalleceTraslado()
    {
        return $this->egmaFalleceTraslado;
    }

    /**
     * Set egmaDiasDesdeParto
     *
     * @param integer $egmaDiasDesdeParto
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaDiasDesdeParto($egmaDiasDesdeParto)
    {
        $this->egmaDiasDesdeParto = $egmaDiasDesdeParto;

        return $this;
    }

    /**
     * Get egmaDiasDesdeParto
     *
     * @return integer 
     */
    public function getEgmaDiasDesdeParto()
    {
        return $this->egmaDiasDesdeParto;
    }

    /**
     * Set egmaConsejeriaAnticoncep
     *
     * @param string $egmaConsejeriaAnticoncep
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaConsejeriaAnticoncep($egmaConsejeriaAnticoncep)
    {
        $this->egmaConsejeriaAnticoncep = $egmaConsejeriaAnticoncep;

        return $this;
    }

    /**
     * Get egmaConsejeriaAnticoncep
     *
     * @return string 
     */
    public function getEgmaConsejeriaAnticoncep()
    {
        return $this->egmaConsejeriaAnticoncep;
    }

    /**
     * Set egmaMetodoElegido
     *
     * @param string $egmaMetodoElegido
     * @return ShcpParEgresoMaterno
     */
    public function setEgmaMetodoElegido($egmaMetodoElegido)
    {
        $this->egmaMetodoElegido = $egmaMetodoElegido;

        return $this;
    }

    /**
     * Get egmaMetodoElegido
     *
     * @return string 
     */
    public function getEgmaMetodoElegido()
    {
        return $this->egmaMetodoElegido;
    }

    /**
     * Set idAdmisionParto
     *
     * @param \Minsal\shcpBundle\Entity\ShcpParAdmision $idAdmisionParto
     * @return ShcpParEgresoMaterno
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

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpParEgresoMaterno
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }
}
