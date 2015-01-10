<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMovInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('usuarioMov')
            ->add('fechaIngresoMov')
            ->add('fechaModificacionMov')
            ->add('cantidadMov')
            ->add('estadoMov')
            ->add('empleadoEnvio')
            ->add('empleadoRecivio')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('usuarioMov')
            ->add('fechaIngresoMov')
            ->add('fechaModificacionMov')
            ->add('cantidadMov')
            ->add('estadoMov')
            ->add('empleadoEnvio')
            ->add('empleadoRecivio')
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
            ->add('idDosisEsq', null, array('label' => 'Tipo de Dosis Esquema'))
//            ->add('idTipoInventario', null, array('label' => 'Tipo de Inventario'))
            ->add('idEmpCorr', 'text', array('label' => 'Codigo Empleado'))
//            ->add('usuarioMov')
//            ->add('fechaIngresoMov')
//            ->add('fechaModificacionMov')
            ->add('cantidadMov')
            ->add('estadoMov')
            ->add('empleadoEnvio')
            ->add('empleadoRecivio')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('usuarioMov')
            ->add('fechaIngresoMov')
            ->add('fechaModificacionMov')
            ->add('cantidadMov')
            ->add('estadoMov')
            ->add('empleadoEnvio')
            ->add('empleadoRecivio')
        ;
    }
}
