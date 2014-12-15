<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlActividadAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreActividad', null, array('label' => 'Nombre de actividad'))
            ->add('estadoAct', null, array('label' => 'Activo'))
            ->add('usuarioIngresoCatAct', null, array('label' => 'Creado por'))
            ->add('fechaIngresoCatAct', null, array('label' => 'Fecha de creacion'))
            ->add('fechaModificacionCatAct', null, array('label' => 'Fecha de modificacion'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
             //->add('id')
            ->add('nombreActividad', 'text', array('label' => 'Nombre de actividad'))
            ->add('estadoAct', null, array('label' => 'Activo'))
            ->add('usuarioIngresoCatAct', 'text', array('label' => 'Creado por'))
            ->add('fechaIngresoCatAct', 'date', array('label' => 'Fecha de creacion'))
            //->add('fechaModificacionCatAct', 'date', array('label' => 'Fecha de modificacion'))
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
            
            //->add('nombreActividad')
            ->add('nombreActividad', 'text', array('label' => 'Escriba el nombre de la actividad','max_length' => 150,'required' => true))
                    
            
            //->add('estadoAct')
            ->add('estadoAct', null, array('label' => 'Activo','required' => false))
            
            //->add('usuarioIngresoCatAct')          
            //->add('fechaIngresoCatAct')
            //->add('fechaModificacionCatAct')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           //->add('id')
            ->add('nombreActividad', 'text', array('label' => 'Nombre de actividad'))
            ->add('estadoAct', null, array('label' => 'Activo'))
            ->add('usuarioIngresoCatAct', 'text', array('label' => 'Creado por'))
            ->add('fechaIngresoCatAct', 'date', array('label' => 'Fecha de creacion'))
            ->add('fechaModificacionCatAct', 'date', array('label' => 'Fecha de modificacion'))
        ;
    }

    
/*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlActividad
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlActividad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlActividad->setusuarioIngresoCatAct($user);
        $EnfCtlActividad->setfechaIngresoCatAct(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlActividad
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlActividad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlActividad->setusuarioIngresoCatAct($user);
        $EnfCtlActividad->setfechaModificacionCatAct(new \DateTime());
    }    
    
}
