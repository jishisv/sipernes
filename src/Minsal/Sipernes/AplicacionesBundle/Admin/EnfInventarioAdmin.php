<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('existencia')
            ->add('fechaIngresoInventario')
            ->add('usuarioInventario')
            ->add('estadoInventario')
            ->add('caducidadInventario')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('existencia')
            ->add('fechaIngresoInventario')
            ->add('usuarioInventario')
            ->add('estadoInventario')
            ->add('caducidadInventario')
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
//            ->add('id')
            ->add('existencia',null, array('label' => 'Existencia','required' => True))
            ->add('caducidadInventario',null, array('label' => 'Caducidad','required' => True))
//            ->add('fechaIngresoInventario')
//            ->add('usuarioInventario')
            ->add('estadoInventario',null, array('label' => 'Activo'))
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           // ->add('id')
            ->add('existencia')
            ->add('fechaIngresoInventario')
            ->add('usuarioInventario')
            ->add('estadoInventario')
            ->add('caducidadInventario')
        ;
    }
}
