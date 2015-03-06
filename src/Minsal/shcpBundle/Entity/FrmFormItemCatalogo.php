<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmFormItemCatalogo
 *
 * @ORM\Table(name="frm_form_item_catalogo", indexes={@ORM\Index(name="IDX_9FECBD7CB77787D0", columns={"id_catalogo"}), @ORM\Index(name="IDX_9FECBD7CB0F9D2E", columns={"id_form_item"})})
 * @ORM\Entity
 */
class FrmFormItemCatalogo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_form_item_catalogo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="condicion_habilitacion", type="integer", nullable=false)
     */
    private $condicionHabilitacion = '1';

    /**
     * @var \CtlCatalogo
     *
     * @ORM\ManyToOne(targetEntity="CtlCatalogo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_catalogo", referencedColumnName="id")
     * })
     */
    private $idCatalogo;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set condicionHabilitacion
     *
     * @param integer $condicionHabilitacion
     * @return FrmFormItemCatalogo
     */
    public function setCondicionHabilitacion($condicionHabilitacion)
    {
        $this->condicionHabilitacion = $condicionHabilitacion;

        return $this;
    }

    /**
     * Get condicionHabilitacion
     *
     * @return integer 
     */
    public function getCondicionHabilitacion()
    {
        return $this->condicionHabilitacion;
    }

    /**
     * Set idCatalogo
     *
     * @param \Minsal\shcpBundle\Entity\CtlCatalogo $idCatalogo
     * @return FrmFormItemCatalogo
     */
    public function setIdCatalogo(\Minsal\shcpBundle\Entity\CtlCatalogo $idCatalogo = null)
    {
        $this->idCatalogo = $idCatalogo;

        return $this;
    }

    /**
     * Get idCatalogo
     *
     * @return \Minsal\shcpBundle\Entity\CtlCatalogo 
     */
    public function getIdCatalogo()
    {
        return $this->idCatalogo;
    }

    /**
     * Set idFormItem
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormItem $idFormItem
     * @return FrmFormItemCatalogo
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
}
