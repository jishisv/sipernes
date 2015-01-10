<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlCapacitacionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fechaIngresoCap')
            ->add('fechaCapacitacion')
            ->add('temaCapacitacion')
            ->add('asistenciaCapacitacion')
            ->add('montoFinanciamientoCap')
            ->add('horasDuracionCap')
            ->add('establecimientoCap')
            ->add('estadoCapacitacion')
            ->add('usuarioCapacitacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idFinanciamiento')
            ->add('fechaIngresoCap')
            ->add('fechaCapacitacion')
            ->add('temaCapacitacion')
            ->add('asistenciaCapacitacion')
            ->add('montoFinanciamientoCap')
            ->add('horasDuracionCap')
            ->add('establecimientoCap')
            ->add('estadoCapacitacion')
            ->add('usuarioCapacitacion')
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
            ->add('idFinanciamiento')
            ->add('fechaIngresoCap')
            ->add('fechaCapacitacion')
            ->add('temaCapacitacion')
            ->add('asistenciaCapacitacion')
            ->add('montoFinanciamientoCap')
            ->add('horasDuracionCap')
            ->add('establecimientoCap')
            ->add('estadoCapacitacion')
            ->add('usuarioCapacitacion')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('fechaIngresoCap')
            ->add('fechaCapacitacion')
            ->add('temaCapacitacion')
            ->add('asistenciaCapacitacion')
            ->add('montoFinanciamientoCap')
            ->add('horasDuracionCap')
            ->add('establecimientoCap')
            ->add('estadoCapacitacion')
            ->add('usuarioCapacitacion')
        ;
    }
    
    
    
}
