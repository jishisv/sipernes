<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmFormItemPool
 *
 * @ORM\Table(name="frm_form_item_pool", uniqueConstraints={@ORM\UniqueConstraint(name="idx_seccion_pool_form_item", columns={"id_seccion_pool", "id_form_item"})}, indexes={@ORM\Index(name="IDX_132426EBB0F9D2E", columns={"id_form_item"}), @ORM\Index(name="IDX_132426EB3DE02BDB", columns={"id_padre"}), @ORM\Index(name="IDX_132426EBC14F1F47", columns={"id_seccion_pool"}), @ORM\Index(name="IDX_132426EBFE04F569", columns={"validacion_padre"})})
 * @ORM\Entity
 */
class FrmFormItemPool
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_form_item_pool_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_padre", type="text", nullable=true)
     */
    private $valorPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=false)
     */
    private $orden;

    /**
     * @var \FrmFormItem
     *
     * @ORM\ManyToOne(targetEntity="FrmFormItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_form_item", referencedColumnName="id")
     * })
     */
    private $idFormItem;

    /**
     * @var \FrmFormItemPool
     *
     * @ORM\ManyToOne(targetEntity="FrmFormItemPool")
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
     * @var \CtlValidacionCampo
     *
     * @ORM\ManyToOne(targetEntity="CtlValidacionCampo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="validacion_padre", referencedColumnName="id")
     * })
     */
    private $validacionPadre;



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
     * Set valorPadre
     *
     * @param string $valorPadre
     * @return FrmFormItemPool
     */
    public function setValorPadre($valorPadre)
    {
        $this->valorPadre = $valorPadre;

        return $this;
    }

    /**
     * Get valorPadre
     *
     * @return string 
     */
    public function getValorPadre()
    {
        return $this->valorPadre;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return FrmFormItemPool
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
     * Set idFormItem
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormItem $idFormItem
     * @return FrmFormItemPool
     */
    public function setIdFormItem(\Minsal\shcpBundle\Entity\FrmFormItem $idFormItem = null)
    {
        $this->idFormItem = $idFormItem;

        return $this;
    }

    /**
     * Get idFormItem
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormItem 
     */
    public function getIdFormItem()
    {
        return $this->idFormItem;
    }

    /**
     * Set idPadre
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormItemPool $idPadre
     * @return FrmFormItemPool
     */
    public function setIdPadre(\Minsal\shcpBundle\Entity\FrmFormItemPool $idPadre = null)
    {
        $this->idPadre = $idPadre;

        return $this;
    }

    /**
     * Get idPadre
     *
     * @return \Minsal\shcpBundle\Entity\FrmFormItemPool 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set idSeccionPool
     *
     * @param \Minsal\shcpBundle\Entity\FrmSeccionPool $idSeccionPool
     * @return FrmFormItemPool
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

    /**
     * Set validacionPadre
     *
     * @param \Minsal\shcpBundle\Entity\CtlValidacionCampo $validacionPadre
     * @return FrmFormItemPool
     */
    public function setValidacionPadre(\Minsal\shcpBundle\Entity\CtlValidacionCampo $validacionPadre = null)
    {
        $this->validacionPadre = $validacionPadre;

        return $this;
    }

    /**
     * Get validacionPadre
     *
     * @return \Minsal\shcpBundle\Entity\CtlValidacionCampo 
     */
    public function getValidacionPadre()
    {
        return $this->validacionPadre;
    }
}
