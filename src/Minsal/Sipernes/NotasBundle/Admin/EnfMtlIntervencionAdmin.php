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
            ->add('id')
            ->add('fechaIngresoInterv')
            ->add('fechaModificacionInterv')
            ->add('observacionInterv')
            ->add('efectivoInterv')
            ->add('estadoMtlInterv')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('observacionInterv')
            ->add('efectivoInterv')
            ->add('estadoMtlInterv')
            ->add('fechaIngresoInterv')
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
            ->add('idEmpCorr',null, array('label' => 'Numero de empleado'))
            ->add('idSecIngreso','text', array('label' => 'Numero de expediente'))
            ->add('idIntervencion',null, array('label' => 'Seleccione intervencion'))
            ->add('efectivoInterv', null, array('label' => 'Efectivo','required' => False))
            ->add('estadoMtlInterv', null, array('label' => 'Activo','required' => False))
            ->add('observacionInterv','text', array('label' => 'Observacion','required' => False))         
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('observacionInterv')
            ->add('efectivoInterv')
            ->add('estadoMtlInterv')
            ->add('fechaIngresoInterv')
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
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMtlIntervencion->setidEmpCorr($user);
        $EnfMtlIntervencion->setfechaIngresoInterv(new \DateTime());
    }
 
     
}
