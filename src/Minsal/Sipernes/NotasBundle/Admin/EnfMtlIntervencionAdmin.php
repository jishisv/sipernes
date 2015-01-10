<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlIntervencionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero de Enfermera'))
            ->add('idSecIngreso',null, array('label' => 'Expediente'))
            ->add('idIntervencion',null, array('label' => 'Intervención'))
            ->add('fechaIngresoInterv',null, array('label' => 'Fecha de registro'))
            //->add('fechaModificacionInterv')
            //->add('observacionInterv')
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero de enfermera'))
            ->add('idSecIngreso',null, array('label' => 'Expediente'))
            ->add('idIntervencion',null, array('label' => 'Intervencion'))
            ->add('observacionInterv',null, array('label' => 'Observación'))
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
            ->add('fechaIngresoInterv',null, array('label' => 'Registrado'))
            //->add('fechaModificacionInterv') 
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
            //->add('fechaIngresoInterv')
            //->add('fechaModificacionInterv')
            ->add('idEmpCorr',null, array('label' => 'Numero de empleado', 'required' => true))
            ->add('idSecIngreso',null, array('label' => 'Numero de expediente', 'required' => false))
            ->add('idIntervencion',null, array('label' => 'Seleccione intervencion', 'required' => true))
            ->add('efectivoInterv', null, array('label' => 'Efectivo','required' => False))
            //->add('estadoMtlInterv', null, array('label' => 'Activo','required' => False))
            ->add('observacionInterv',null, array('label' => 'Observacion','required' => False))         
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero de empleado'))
            ->add('idSecIngreso',null, array('label' => 'Numero de expediente'))
            ->add('idIntervencion',null, array('label' => 'Seleccione intervencion'))
            ->add('observacionInterv',null, array('label' => 'Observación'))
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
            ->add('fechaIngresoInterv',null, array('label' => 'Registrado'))
            //->add('fechaModificacionInterv')
            
        ;
    }
    
       /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlIntervencion
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfMtlIntervencion) {
        $EnfMtlIntervencion->setfechaIngresoInterv(new \DateTime());
        $EnfMtlIntervencion->setestadoMtlInterv(true);
    }
 
     
}
