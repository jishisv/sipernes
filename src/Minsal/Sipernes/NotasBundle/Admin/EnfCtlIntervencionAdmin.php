<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlIntervencionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('descripcionInterven')
            ->add('fechaIngresoInterven')
            ->add('usuarioInterven')
            ->add('fechaModificacionInterven')
            ->add('estadoCltInterv')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('descripcionInterven')
            ->add('estadoCltInterv')
            ->add('usuarioInterven')
            ->add('fechaIngresoInterven')
            //->add('fechaModificacionInterven')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
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
            ->add('idSubprotocolo')
            ->add('descripcionInterven')
            //->add('fechaIngresoInterven')
            //->add('usuarioInterven')
            //->add('fechaModificacionInterven')
            ->add('estadoCltInterv')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idSubprotocolo')
            ->add('descripcionInterven')
            ->add('estadoCltInterv')
            ->add('usuarioInterven')
            ->add('fechaIngresoInterven')  
            //->add('fechaModificacionInterven')
            
        ;
    }
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlIntervencion
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlIntervencion->setusuarioInterven($user);
        $EnfCtlIntervencion->setfechaIngresoInterven(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlIntervencion
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlIntervencion->setusuarioInterven($user);
        $EnfCtlIntervencion->setfechaModificacionInterven(new \DateTime());
    }   
    
}
