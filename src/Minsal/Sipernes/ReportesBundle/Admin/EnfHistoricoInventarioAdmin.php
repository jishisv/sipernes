<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfHistoricoInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('existenciaHist')
            ->add('fechaIngresoHistInv')
            ->add('usuarioInventarioHist')
            ->add('estadoHistInvent')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('existenciaHist')
            ->add('fechaIngresoHistInv')
            ->add('usuarioInventarioHist')
            ->add('estadoHistInvent')
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
            ->add('existenciaHist')
            ->add('fechaIngresoHistInv')
            ->add('usuarioInventarioHist')
            ->add('estadoHistInvent')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('existenciaHist')
            ->add('fechaIngresoHistInv')
            ->add('usuarioInventarioHist')
            ->add('estadoHistInvent')
        ;
    }
}
