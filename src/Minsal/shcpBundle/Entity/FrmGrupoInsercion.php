<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmGrupoInsercion
 *
 * @ORM\Table(name="frm_grupo_insercion", indexes={@ORM\Index(name="IDX_860C173A7C7EF6A", columns={"id_formulario"})})
 * @ORM\Entity
 */
class FrmGrupoInsercion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_grupo_insercion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla_destino", type="string", nullable=false)
     */
    private $tablaDestino;

    /**
     * @var \FrmFormulario
     *
     * @ORM\ManyToOne(targetEntity="FrmFormulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formulario", referencedColumnName="id")
     * })
     */
    private $idFormulario;



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
     * Set tablaDestino
     *
     * @param string $tablaDestino
     * @return FrmGrupoInsercion
     */
    public function setTablaDestino($tablaDestino)
    {
        $this->tablaDestino = $tablaDestino;

        return $this;
    }

    /**
     * Get tablaDestino
     *
     * @return string 
     */
    public function getTablaDestino()
    {
        return $this->tablaDestino;
    }

    /**
     * Set idFormulario
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormulario $idFormulario
     * @return FrmGrupoInsercion
     */
    public function setIdFormulario(\Minsal\shcpBundle\Entity\FrmFormulario $idFormulario = null)
    {
        $this->idFormulario = $idFormulario;

        return $this;
    }

    /**
     * Get idFormulario
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormulario 
     */
    public function getIdFormulario()
    {
        return $this->idFormulario;
    }
}
