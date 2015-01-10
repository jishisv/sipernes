<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfComponenteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('presentacion')
            ->add('usuarioComponente')
            ->add('fechaIngresoComponente')
            ->add('fechaModificacionComponente')
            ->add('estadoComponente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('presentacion')
            ->add('usuarioComponente')
            ->add('fechaIngresoComponente')
            ->add('fechaModificacionComponente')
            ->add('estadoComponente')
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
            ->add('idInventario', null, array('label' => 'Codigo de Inventario'))
//            ->add('idTipoEsq', null, array('label' => 'Tipo de Esquema'))
//            ->add('idTipoComponente', null, array('label' => 'Tipo de Componente'))
            ->add('presentacion', 'text', array('label' => 'Presentacion'))
//            ->add('usuarioComponente')
//            ->add('fechaIngresoComponente')
//            ->add('fechaModificacionComponente')
            ->add('estadoComponente')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('presentacion')
            ->add('usuarioComponente')
            ->add('fechaIngresoComponente')
            ->add('fechaModificacionComponente')
            ->add('estadoComponente')
        ;
    }
}
