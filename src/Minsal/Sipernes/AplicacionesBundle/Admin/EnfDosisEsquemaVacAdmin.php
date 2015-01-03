<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfDosisEsquemaVacAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('dosis')
            ->add('centroEducativo')
            ->add('fechaDosisEsq')
            ->add('estadoDosisEsq')
            ->add('usuarioDosisEsq')
            ->add('fechaIngresoDosisEsq')
            ->add('fechaModDosis')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('dosis')
            ->add('centroEducativo')
            ->add('fechaDosisEsq')
            ->add('estadoDosisEsq')
            ->add('usuarioDosisEsq')
            ->add('fechaIngresoDosisEsq')
            ->add('fechaModDosis')
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
            ->add('dosis')
            ->add('centroEducativo')
            ->add('fechaDosisEsq')
            ->add('estadoDosisEsq')
            ->add('usuarioDosisEsq')
            ->add('fechaIngresoDosisEsq')
            ->add('fechaModDosis')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('dosis')
            ->add('centroEducativo')
            ->add('fechaDosisEsq')
            ->add('estadoDosisEsq')
            ->add('usuarioDosisEsq')
            ->add('fechaIngresoDosisEsq')
            ->add('fechaModDosis')
        ;
    }
}
