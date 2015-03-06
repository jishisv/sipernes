<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpConCtlSignoAlarmaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('sigNombre')
            ->add('sigTipo')
            ->add('sigEstado')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('sigNombre')
            ->add('sigTipo')
            ->add('sigEstado')
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
            ->add('sigNombre','text', array('label'=>'Nombre Signo Alarma', 
                'attr' => array('placeholder' => 'Introduzca Nombre')))
            ->add('sigTipo','text', array('label'=>'Tipo Signo Alarma', 
                'attr' => array('placeholder' => 'Introduzca Tipo')))
            ->add('sigEstado','text', array('label'=>'Estado Signo Alarma', 
                'attr' => array('placeholder' => 'Introduzca Estado')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('sigNombre')
            ->add('sigTipo')
            ->add('sigEstado')
        ;
    }
}
