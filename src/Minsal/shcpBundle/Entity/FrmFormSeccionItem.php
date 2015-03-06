<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmFormSeccionItem
 *
 * @ORM\Table(name="frm_form_seccion_item", indexes={@ORM\Index(name="IDX_1E465BB12BC7EF77", columns={"id_form_item_pool"}), @ORM\Index(name="IDX_1E465BB1756E0026", columns={"id_formulario_seccion_pool"}), @ORM\Index(name="IDX_1E465BB1F1E1FDD5", columns={"id_grupo_insercion"})})
 * @ORM\Entity
 */
class FrmFormSeccionItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_form_seccion_item_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="campo_destino", type="text", nullable=false)
     */
    private $campoDestino;

    /**
     * @var \FrmFormItemPool
     *
     * @ORM\ManyToOne(targetEntity="FrmFormItemPool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_form_item_pool", referencedColumnName="id")
     * })
     */
    private $idFormItemPool;

    /**
     * @var \FrmFormularioSeccionPool
     *
     * @ORM\ManyToOne(targetEntity="FrmFormularioSeccionPool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formulario_seccion_pool", referencedColumnName="id")
     * })
     */
    private $idFormularioSeccionPool;

    /**
     * @var \FrmGrupoInsercion
     *
     * @ORM\ManyToOne(targetEntity="FrmGrupoInsercion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo_insercion", referencedColumnName="id")
     * })
     */
    private $idGrupoInsercion;



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
     * Set campoDestino
     *
     * @param string $campoDestino
     * @return FrmFormSeccionItem
     */
    public function setCampoDestino($campoDestino)
    {
        $this->campoDestino = $campoDestino;

        return $this;
    }

    /**
     * Get campoDestino
     *
     * @return string 
     */
    public function getCampoDestino()
    {
        return $this->campoDestino;
    }

    /**
     * Set idFormItemPool
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormItemPool $idFormItemPool
     * @return FrmFormSeccionItem
     */
    public function setIdFormItemPool(\Minsal\shcpBundle\Entity\FrmFormItemPool $idFormItemPool = null)
    {
        $this->idFormItemPool = $idFormItemPool;

        return $this;
    }

    /**
     * Get idFormItemPool
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormItemPool 
     */
    public function getIdFormItemPool()
    {
        return $this->idFormItemPool;
    }

    /**
     * Set idFormularioSeccionPool
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormularioSeccionPool $idFormularioSeccionPool
     * @return FrmFormSeccionItem
     */
    public function setIdFormularioSeccionPool(\Minsal\shcpBundle\Entity\FrmFormularioSeccionPool $idFormularioSeccionPool = null)
    {
        $this->idFormularioSeccionPool = $idFormularioSeccionPool;

        return $this;
    }

    /**
     * Get idFormularioSeccionPool
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormularioSeccionPool 
     */
    public function getIdFormularioSeccionPool()
    {
        return $this->idFormularioSeccionPool;
    }

    /**
     * Set idGrupoInsercion
     *
     * @param \Minsal\shcpBundle\Entity\FrmGrupoInsercion $idGrupoInsercion
     * @return FrmFormSeccionItem
     */
    public function setIdGrupoInsercion(\Minsal\shcpBundle\Entity\FrmGrupoInsercion $idGrupoInsercion = null)
    {
        $this->idGrupoInsercion = $idGrupoInsercion;

        return $this;
    }

    /**
     * Get idGrupoInsercion
     *
     * @return \Minsal\shcpBundle\Entity\FrmGrupoInsercion 
     */
    public function getIdGrupoInsercion()
    {
        return $this->idGrupoInsercion;
    }
}
