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
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Enfermera'))
            ->add('idExpediente',null, array('label' => 'Expediente'))
            ->add('idCtlDiag',null, array('label' => 'Diagnóstico'))
            ->add('observacion1',null, array('label' => 'Observación'))
            ->add('fechaIngresoDiag',null, array('label' => 'Fecha de Registro'))
            //->add('fechaModificacionDiag')
            //->add('estadoMtlDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Enfermera'))
            ->add('idExpediente',null, array('label' => 'Expediente'))
            ->add('idCtlDiag',null, array('label' => 'Diagnóstico'))
            ->add('observacion1',null, array('label' => 'Observación'))
            ->add('fechaIngresoDiag',null, array('label' => 'Fecha de Registro'))
            //->add('fechaModificacionDiag')
            //->add('estadoMtlDiag')
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
            ->add('idEmpCorr',null, array('label' => 'Numero enfermera', 'required' => true))
            ->add('idExpediente',null, array('label' => 'Expediente','required' => true))
            ->add('idCtlDiag',null, array('label' => 'Diagnóstico','required' => true))
            ->add('observacion1',null, array('label' => 'Observación'))
            //->add('fechaIngresoDiag')
            //->add('fechaModificacionDiag')
            //->add('estadoMtlDiag', null, array('label' => 'Activo','required' => False))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Enfermera'))
            ->add('idExpediente',null, array('label' => 'Expediente'))
            ->add('idCtlDiag',null, array('label' => 'Diagnóstico'))
            ->add('observacion1',null, array('label' => 'Observación'))
            ->add('fechaIngresoDiag',null, array('label' => 'Fecha de Registro'))
            //->add('fechaModificacionDiag')
            //->add('estadoMtlDiag',null, array('label' => 'Activo'))
        ;
    }
    
    
    
    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:DiagnosticoRegistro:mtldiagnostico.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlDiagnostico
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfMtlDiagnostico) {
        $EnfMtlDiagnostico->setfechaIngresoDiag(new \DateTime());
        $EnfMtlDiagnostico->setestadoMtlDiag(true);
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlDiagnostico
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfMtlDiagnostico) {
        $EnfMtlDiagnostico->setfechaModificacionDiag(new \DateTime());
    }   
}
