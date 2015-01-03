<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfEsquemaVacAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           // ->add('id')
            ->add('anioEsquemaVac')
            ->add('nombreEsquemaVac')
            ->add('edadMinima')
            ->add('edadMaxima')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('anioEsquemaVac', null, array('label' => 'Año'))
            ->add('nombreEsquemaVac', null, array('label' => 'Nombre'))
            ->add('edadMinima', null, array('label' => 'Edad Mínima'))
            ->add('edadMaxima', null, array('label' => 'Edad Máxima'))
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
           // ->add('id')
            ->add('anioEsquemaVac', null, array('label' => 'Año','max_length' => 4,'required' => true))
            ->add('nombreEsquemaVac', 'text', array('label' => 'Nombre','max_length' => 150,'required' => true))
            ->add('edadMinima', null, array('label' => 'Edad Mínima','max_length' => 4,'required' => true))
            ->add('edadMaxima',null, array('label' => 'Edad Máxima','max_length' => 4,'required' => true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('anioEsquemaVac')
            ->add('nombreEsquemaVac')
            ->add('edadMinima')
            ->add('edadMaxima')
        ;
    }
}
