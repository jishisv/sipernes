<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfTipoEsquemaVacAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreTipoEsq')
            ->add('dosisMaxima')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEsquemaVac', null, array('label' => 'Esquema')) 
            ->add('nombreTipoEsq', null, array('label' => 'Tipo de esquema'))
            ->add('dosisMaxima', null, array('label' => 'Dosis Máxima'))
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
            ->add('idEsquemaVac', null, array('label' => 'Esquema','required' => true))    
            ->add('nombreTipoEsq', 'text', array('label' => 'Nombre','max_length' => 150,'required' => true))
            ->add('dosisMaxima', null, array('label' => 'Dosis Máxima','max_length' => 150,'required' => true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('nombreTipoEsq')
            ->add('dosisMaxima')
        ;
    }
}
