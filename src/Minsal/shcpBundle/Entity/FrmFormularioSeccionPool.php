<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmFormularioSeccionPool
 *
 * @ORM\Table(name="frm_formulario_seccion_pool", uniqueConstraints={@ORM\UniqueConstraint(name="idx_formulario_seccion_pool", columns={"id_formulario", "id_seccion_pool"})}, indexes={@ORM\Index(name="IDX_E647D45AA7C7EF6A", columns={"id_formulario"}), @ORM\Index(name="IDX_E647D45A3DE02BDB", columns={"id_padre"}), @ORM\Index(name="IDX_E647D45AC14F1F47", columns={"id_seccion_pool"})})
 * @ORM\Entity
 */
class FrmFormularioSeccionPool
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_formulario_seccion_pool_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_collection", type="boolean", nullable=false)
     */
    private $isCollection = false;

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
     * @var \FrmFormularioSeccionPool
     *
     * @ORM\ManyToOne(targetEntity="FrmFormularioSeccionPool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_padre", referencedColumnName="id")
     * })
     */
    private $idPadre;

    /**
     * @var \FrmSeccionPool
     *
     * @ORM\ManyToOne(targetEntity="FrmSeccionPool")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_seccion_pool", referencedColumnName="id")
     * })
     */
    private $idSeccionPool;



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
     * Set orden
     *
     * @param integer $orden
     * @return FrmFormularioSeccionPool
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set isCollection
     *
     * @param boolean $isCollection
     * @return FrmFormularioSeccionPool
     */
    public function setIsCollection($isCollection)
    {
        $this->isCollection = $isCollection;

        return $this;
    }

    /**
     * Get isCollection
     *
     * @return boolean 
     */
    public function getIsCollection()
    {
        return $this->isCollection;
    }

    /**
     * Set idFormulario
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormulario $idFormulario
     * @return FrmFormularioSeccionPool
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

    /**
     * Set idPadre
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormularioSeccionPool $idPadre
     * @return FrmFormularioSeccionPool
     */
    public function setIdPadre(\Minsal\shcpBundle\Entity\FrmFormularioSeccionPool $idPadre = null)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormularioSeccionPool 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set idSeccionPool
     *
     * @param \Minsal\shcpBundle\Entity\FrmSeccionPool $idSeccionPool
     * @return FrmFormularioSeccionPool
     */
    public function setIdSeccionPool(\Minsal\shcpBundle\Entity\FrmSeccionPool $idSeccionPool = null)
    {
        $this->idSeccionPool = $idSeccionPool;

        return $this;
    }

    /**
     * Get idSeccionPool
     *
     * @return \Minsal\shcpBundle\Entity\FrmSeccionPool 
     */
    public function getIdSeccionPool()
    {
        return $this->idSeccionPool;
    }
}
