<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlProtocoloAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
 protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoProto' // name of the ordered field (default = the model id field, if any)
    ); 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreProtocolo', null, array('label' => 'Tipo de Protocolo'))
            ->add('estadoProt', null, array('label' => 'Activo'))
            ->add('usuarioProto', null, array('label' => 'Creado por'))
            ->add('fechaIngresoProto', null, array('label' => 'Creado el'))
            //->add('fechaModificacionProto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreProtocolo', null, array('label' => 'Tipo de Protocolo'))
            ->add('estadoProt', null, array('label' => 'Activo'))
            ->add('usuarioProto', null, array('label' => 'Creado por'))
            ->add('fechaIngresoProto', null, array('label' => 'Creado el'))
            //->add('fechaModificacionProto')
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
            ->add('nombreProtocolo','text', array('label' => 'Digite el nombre del tipo de protocolo'))
            //->add('fechaIngresoProto')
            //->add('fechaModificacionProto')
            //->add('usuarioProto')
            ->add('estadoProt', null, array('label' => 'Activo','required' => False))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('nombreProtocolo', null, array('label' => 'Tipo de Protocolo'))
            ->add('estadoProt', null, array('label' => 'Activo'))
            ->add('usuarioProto', null, array('label' => 'Creado por'))
            ->add('fechaIngresoProto', null, array('label' => 'Creado el'))
            //->add('fechaModificacionProto')
        ;
    }
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlProtocolo
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlProtocolo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlProtocolo->setusuarioProto($user);
        $EnfCtlProtocolo->setfechaIngresoProto(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlProtocolo
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlProtocolo) {
        
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlProtocolo->setusuarioProto($user);
        $EnfCtlProtocolo->setfechaModificacionProto(new \DateTime());
    }   
}
