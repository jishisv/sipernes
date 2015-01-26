<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfHistoricoDosisAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('dosisHist')
            ->add('centroEducativoHist')
            ->add('fechaDosisEsqHist')
            ->add('estadoDosisEsqHist')
            ->add('usuarioDosisEsqHist')
            ->add('fechaIngresoDosisHist')
            ->add('fechaModificacionDosisHist')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('dosisHist')
            ->add('centroEducativoHist')
            ->add('fechaDosisEsqHist')
            ->add('estadoDosisEsqHist')
            ->add('usuarioDosisEsqHist')
            ->add('fechaIngresoDosisHist')
            ->add('fechaModificacionDosisHist')
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
            ->add('dosisHist')
            ->add('centroEducativoHist')
            ->add('fechaDosisEsqHist')
            ->add('estadoDosisEsqHist')
            ->add('usuarioDosisEsqHist')
            ->add('fechaIngresoDosisHist')
            ->add('fechaModificacionDosisHist')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('dosisHist')
            ->add('centroEducativoHist')
            ->add('fechaDosisEsqHist')
            ->add('estadoDosisEsqHist')
            ->add('usuarioDosisEsqHist')
            ->add('fechaIngresoDosisHist')
            ->add('fechaModificacionDosisHist')
        ;
    }
}
