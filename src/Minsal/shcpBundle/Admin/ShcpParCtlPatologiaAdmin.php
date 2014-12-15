<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParCtlPatologiaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cpatNombrePatologia')
            ->add('cpatTipoPatologia')
            ->add('cpatEstado')
            ->add('cpatCodigo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('cpatNombrePatologia')
            ->add('cpatTipoPatologia')
            ->add('cpatEstado')
            ->add('cpatCodigo')
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
            ->add('cpatNombrePatologia','text',array('label'=>'Nombre', 
                'attr' => array('placeholder' => 'Introduzca la patologia')))
            ->add('cpatTipoPatologia','text',array('label'=>'Tipo', 
                'attr' => array('placeholder' => 'Introduzca el tipo')))
            ->add('cpatEstado','text',array('label'=>'Estado', 
                'attr' => array('placeholder' => 'Introduzca el estado')))
            ->add('cpatCodigo','text',array('label'=>'Codigo', 
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
            ->add('cpatNombrePatologia')
            ->add('cpatTipoPatologia')
            ->add('cpatEstado')
            ->add('cpatCodigo')
        ;
    }
}
