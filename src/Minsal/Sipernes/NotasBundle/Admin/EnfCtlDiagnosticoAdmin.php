<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlDiagnosticoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('idClase')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('idClase')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
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
            ->add('id')
            ->add('idClase')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('idClase')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
        ;
    }
}
