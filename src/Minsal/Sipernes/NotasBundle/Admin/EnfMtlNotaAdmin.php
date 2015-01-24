<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlNotaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEmpCorr')
            ->add('idExpediente')
            //->add('idCtlNota')
            ->add('fechaModificacionNota')
            ->add('usuarioNota')
            ->add('observacionNota')
            ->add('estadoMtlNota')
            ->add('fechaIngresoNota')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEmpCorr')
            ->add('idExpediente')
            //->add('idCtlNota')
            ->add('fechaModificacionNota')
            ->add('usuarioNota')
            ->add('observacionNota')
            ->add('estadoMtlNota')
            ->add('fechaIngresoNota')
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
            ->add('idCtlNota',null, array('label' => 'Tipo de Nota', 'required' => true))
            ->add('idEmpCorr',null, array('label' => 'Numero de Empleado', 'required' => true))
            ->add('idExpediente',null, array('label' => 'Numero de Expediente', 'required' => true))    
           // ->add('fechaModificacionNota')
            //->add('usuarioNota')
            ->add('observacionNota')
            //->add('estadoMtlNota')
            //->add('fechaIngresoNota')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr')
            ->add('idExpediente')
            //->add('idCtlNota')
            ->add('fechaModificacionNota')
            ->add('usuarioNota')
            ->add('observacionNota')
            ->add('estadoMtlNota')
            ->add('fechaIngresoNota')
        ;
    }
}
