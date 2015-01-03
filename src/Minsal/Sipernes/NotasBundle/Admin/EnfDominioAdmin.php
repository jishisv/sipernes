<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfDominioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('codDominio')
            ->add('nombreDominio')
            ->add('fechaIngresoDom')
            ->add('fechaModificacionDom')
            ->add('usuarioDom')
            ->add('estadoDominio')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codDominio')
            ->add('nombreDominio')
            ->add('estadoDominio')
            ->add('usuarioDom')
            ->add('fechaIngresoDom')
            //->add('fechaModificacionDom')
            
            
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
            ->add('codDominio','text', array('label' => 'Codigo de Dominio'))
            ->add('nombreDominio','text', array('label' => 'Nombre de Dominio'))
            ->add('estadoDominio', null, array('label' => 'Activo','required' => False))
            //->add('fechaIngresoDom')
            //->add('fechaModificacionDom')
            //->add('usuarioDom')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('codDominio')
            ->add('nombreDominio')
            ->add('fechaIngresoDom')
            ->add('fechaModificacionDom')
            ->add('usuarioDom')
            ->add('estadoDominio')
        ;
    }
    
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfDominio) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfDominio->setusuarioDom($user);
        $EnfDominio->setfechaIngresoDom(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfDominio) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfDominio->setusuarioDom($user);
        $EnfDominio->setfechaModificacionDom(new \DateTime());
    }   
    
    
}
