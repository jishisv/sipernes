<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpDocCtlPreguntaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('pregDetalle')
            ->add('pregTipo')
            ->add('pregEstado')
            ->add('pregSeccion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('pregDetalle')
            ->add('pregTipo')
            ->add('pregEstado')
            ->add('pregSeccion')
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
           // ->add('id')
            ->add('pregDetalle','text',array('label'=>'Pregunta', 
                'attr' => array('placeholder' => 'Introduzca la pregunta')))
            ->add('pregTipo','text',array('label'=>'Tipo', 
                'attr' => array('placeholder' => 'Introduzca el tipo')))
            ->add('pregEstado','text',array('label'=>'Estado', 
                'attr' => array('placeholder' => 'Introduzca el estado')))
            ->add('pregSeccion','text',array('label'=>'Seccion', 
                'attr' => array('placeholder' => 'Introduzca la seccion')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('pregDetalle')
            ->add('pregTipo')
            ->add('pregEstado')
            ->add('pregSeccion')
        ;
    }
}
