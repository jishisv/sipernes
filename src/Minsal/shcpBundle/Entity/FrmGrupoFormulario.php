<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrmGrupoFormulario
 *
 * @ORM\Table(name="frm_grupo_formulario", uniqueConstraints={@ORM\UniqueConstraint(name="idx_clasificacion_form_unica", columns={"id_formulario", "id_atencion", "id_sexo", "id_rango_edad", "id_condicion_persona"})}, indexes={@ORM\Index(name="IDX_DE60FB56695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_DE60FB569CC1698E", columns={"id_condicion_persona"}), @ORM\Index(name="IDX_DE60FB56A7C7EF6A", columns={"id_formulario"}), @ORM\Index(name="IDX_DE60FB56422A96FE", columns={"id_rango_edad"}), @ORM\Index(name="IDX_DE60FB56A7194A90", columns={"id_sexo"})})
 * @ORM\Entity
 */
class FrmGrupoFormulario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frm_grupo_formulario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

    /**
     * @var \CtlCondicionPersona
     *
     * @ORM\ManyToOne(targetEntity="CtlCondicionPersona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_condicion_persona", referencedColumnName="id")
     * })
     */
    private $idCondicionPersona;

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
     * @var \CtlRangoEdad
     *
     * @ORM\ManyToOne(targetEntity="CtlRangoEdad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rango_edad", referencedColumnName="id")
     * })
     */
    private $idRangoEdad;

    /**
     * @var \CtlSexo
     *
     * @ORM\ManyToOne(targetEntity="CtlSexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;



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
     * Set idAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idAtencion
     * @return FrmGrupoFormulario
     */
    public function setIdAtencion(\Minsal\shcpBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idCondicionPersona
     *
     * @param \Minsal\shcpBundle\Entity\CtlCondicionPersona $idCondicionPersona
     * @return FrmGrupoFormulario
     */
    public function setIdCondicionPersona(\Minsal\shcpBundle\Entity\CtlCondicionPersona $idCondicionPersona = null)
    {
        $this->idCondicionPersona = $idCondicionPersona;

        return $this;
    }

    /**
     * Get idCondicionPersona
     *
     * @return \Minsal\shcpBundle\Entity\CtlCondicionPersona 
     */
    public function getIdCondicionPersona()
    {
        return $this->idCondicionPersona;
    }

    /**
     * Set idFormulario
     *
     * @param \Minsal\shcpBundle\Entity\FrmFormulario $idFormulario
     * @return FrmGrupoFormulario
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
     * Set idRangoEdad
     *
     * @param \Minsal\shcpBundle\Entity\CtlRangoEdad $idRangoEdad
     * @return FrmGrupoFormulario
     */
    public function setIdRangoEdad(\Minsal\shcpBundle\Entity\CtlRangoEdad $idRangoEdad = null)
    {
        $this->idRangoEdad = $idRangoEdad;

        return $this;
    }

    /**
     * Get idRangoEdad
     *
     * @return \Minsal\shcpBundle\Entity\CtlRangoEdad 
     */
    public function getIdRangoEdad()
    {
        return $this->idRangoEdad;
    }

    /**
     * Set idSexo
     *
     * @param \Minsal\shcpBundle\Entity\CtlSexo $idSexo
     * @return FrmGrupoFormulario
     */
    public function setIdSexo(\Minsal\shcpBundle\Entity\CtlSexo $idSexo = null)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return \Minsal\shcpBundle\Entity\CtlSexo 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }
}
