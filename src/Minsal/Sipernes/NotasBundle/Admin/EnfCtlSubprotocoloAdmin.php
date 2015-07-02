<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlProtocolo;
use Doctrine\ORM\EntityRepository;

class EnfCtlSubprotocoloAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoSubpro' // name of the ordered field (default = the model id field, if any)
    ); 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('estadoSubpro', null, array('label' => 'Activo','required' => False))
            //->add('concepto')
            //->add('etiologia')
            ->add('usuarioSubpro', null, array('label' => 'Creado por'))
            ->add('fechaIngresoSubpro', null, array('label' => 'Creado el'))
            //->add('fechaModificacionSubpro')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('estadoSubpro', null, array('label' => 'Activo','required' => False))
            //->add('concepto')
            //->add('etiologia')
            ->add('usuarioSubpro', null, array('label' => 'Creado por'))
            ->add('fechaIngresoSubpro', null, array('label' => 'Creado el'))
            //->add('fechaModificacionSubpro')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            //->add('id')
            ->add('idProtocolo',null, array('label' => 'Seleccione Tipo de protocolo','required' => true,
            'class' => 'MinsalSipernesBundle:EnfCtlProtocolo',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerProtActivo();
            }))
            ->add('nombreSubprotocolo','text', array('label' => 'Digite el nombre del protocolo'))
            ->add('concepto','text', array('label' => 'Digite el Concepto'))
            ->add('etiologia','text', array('label' => 'Digite la Etiología '))
            
            //->add('fechaIngresoSubpro')
            //->add('fechaModificacionSubpro')
            //->add('usuarioSubpro')
            ->add('estadoSubpro', null, array('label' => 'Activo','required' => False))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('nombreSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('estadoSubpro', null, array('label' => 'Activo','required' => False))
            //->add('concepto')
            //->add('etiologia')
            ->add('usuarioSubpro', null, array('label' => 'Creado por'))
            ->add('fechaIngresoSubpro', null, array('label' => 'Creado el'))
            //->add('fechaModificacionSubpro')
                 
        ;
    }
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubprotocolo
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlSubprotocolo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlSubprotocolo->setusuarioSubpro($user);
        $EnfCtlSubprotocolo->setfechaIngresoSubpro(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubprotocolo
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlSubprotocolo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlSubprotocolo->setusuarioSubpro($user);
        $EnfCtlSubprotocolo->setfechaModificacionSubpro(new \DateTime());
    }   
}
