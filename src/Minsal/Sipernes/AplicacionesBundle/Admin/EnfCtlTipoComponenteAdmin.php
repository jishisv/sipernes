<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlTipoComponenteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoCompo' // name of the ordered field (default = the model id field, if any)
    );  
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombreComponente1')
            ->add('fechaIngresoCompo')
            ->add('fechaModificacionCompo')
            ->add('usuarioCtlComp')
            ->add('estadoTclTComp')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           // ->add('id')
            ->add('nombreComponente1',null, array('label' => 'Componente'))
            ->add('estadoTclTComp',null, array('label' => 'Activo'))
            ->add('usuarioCtlComp',null, array('label' => 'Creado por'))
            ->add('fechaIngresoCompo',null, array('label' => 'Fecha de creación'))
            //->add('fechaModificacionCompo')    
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
            ->add('nombreComponente1',null, array('label' => 'Nombre de componente','required' => True))
            ->add('estadoTclTComp', null, array('label' => 'Activo','required' => False))
            //->add('fechaIngresoCompo')
           // ->add('fechaModificacionCompo')
            //->add('usuarioCtlComp')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombreComponente1')
            ->add('fechaIngresoCompo')
            ->add('fechaModificacionCompo')
            ->add('usuarioCtlComp')
            ->add('estadoTclTComp')
        ;
    }
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlTipoComponente
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlTipoComponente) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlTipoComponente->setusuarioCtlComp($user);
        $EnfCtlTipoComponente->setfechaIngresoCompo(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlTipoComponente
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlTipoComponente) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlTipoComponente->setusuarioCtlComp($user);
        $EnfCtlTipoComponente->setfechaModificacionCompo(new \DateTime());
    }   
}
