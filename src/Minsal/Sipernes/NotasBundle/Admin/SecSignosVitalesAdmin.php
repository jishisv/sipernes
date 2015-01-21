<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SecSignosVitalesAdmin extends Admin
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
            ->add('frecuenciaCardiaca')
            ->add('presionArterial')
            ->add('frecuenciaRespiratoria')
            ->add('peso')
            ->add('talla')
            ->add('temperatura')
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
            ->add('frecuenciaCardiaca')
            ->add('presionArterial')
            ->add('frecuenciaRespiratoria')
            ->add('peso')
            ->add('talla')
            ->add('temperatura')
            ->add('observacionSig')
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
            ->add('idEmpCorr')  
            ->add('idExpediente')
            ->add('frecuenciaCardiaca')
            ->add('presionArterial')
            ->add('frecuenciaRespiratoria')
            ->add('peso')
            ->add('talla')
            ->add('temperatura')
            ->add('observacionSig')
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
            ->add('frecuenciaCardiaca')
            ->add('presionArterial')
            ->add('frecuenciaRespiratoria')
            ->add('peso')
            ->add('talla')
            ->add('temperatura')
            ->add('observacionSig')
        ;
    }
  
}
