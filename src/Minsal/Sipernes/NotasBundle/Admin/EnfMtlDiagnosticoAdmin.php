<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlDiagnosticoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('observacion1')
            ->add('fechaIngresoDiag')
            ->add('fechaModificacionDiag')
            ->add('estadoMtlDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('observacion1')
            ->add('fechaIngresoDiag')
            ->add('fechaModificacionDiag')
            ->add('estadoMtlDiag')
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
           // ->add('idEmpCorr')
            ->add('idExpediente','text', array('label' => 'Numero de Expediente'))
            ->add('idCtlDiag',null, array('label' => 'Diagnóstico'))
            ->add('observacion1','text', array('label' => 'Observación'))
            //->add('fechaIngresoDiag')
            //->add('fechaModificacionDiag')
            ->add('estadoMtlDiag', null, array('label' => 'Activo','required' => False))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('observacion1')
            ->add('fechaIngresoDiag')
            ->add('fechaModificacionDiag')
            ->add('estadoMtlDiag')
        ;
    }
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfMtlDiagnostico) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMtlDiagnosticoo->setidEmpCorr($user);
        $EnfMtlDiagnostico->setfechaIngresoDiag(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfMtlDiagnostico) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMtlDiagnostico->setidEmpCorr($user);
        $EnfMtlDiagnostico->setfechaModificacionDiag(new \DateTime());
    }   
}
