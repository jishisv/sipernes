<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpInsCtlEnfermedadAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('enfNombre')
            ->add('enfTipo')
            ->add('enfEstado')
            ->add('enfCodigo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('enfNombre')
            ->add('enfTipo')
            ->add('enfEstado')
            ->add('enfCodigo')
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
            ->add('enfNombre','text',array('label'=>'Nombre', 
                'attr' => array('placeholder' => 'Introduzca el nombre')))
            ->add('enfTipo','text',array('label'=>'Tipo', 
                'attr' => array('placeholder' => 'Introduzca el tipo')))
            ->add('enfEstado','text',array('label'=>'Estado', 
                'attr' => array('placeholder' => 'Introduzca el estado')))
            ->add('enfCodigo','text',array('label'=>'Codigo', 
                'attr' => array('placeholder' => 'Introduzca el codigo')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('enfNombre')
            ->add('enfTipo')
            ->add('enfEstado')
            ->add('enfCodigo')
        ;
    }
}
