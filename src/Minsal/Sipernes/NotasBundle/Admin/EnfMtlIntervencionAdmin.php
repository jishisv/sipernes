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
            ->add('idEmpCorr',null, array('label' => 'Numero de Empleado'))
            ->add('idExpediente',null, array('label' => 'Numero de Expediente'))
            ->add('idIntervencion',null, array('label' => 'Intervención'))
            ->add('fechaIngresoInterv',null, array('label' => 'Fecha de registro'))
            //->add('fechaModificacionInterv')
            //->add('observacionInterv')
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
            //->add('usuarioIngresoInterv')
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
            ->add('idExpediente',null, array('label' => 'Numero Expediente'))
            ->add('idIntervencion',null, array('label' => 'Intervencion'))
            ->add('observacionInterv',null, array('label' => 'Observación'))
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
            ->add('fechaIngresoInterv',null, array('label' => 'Registrado'))
            //->add('fechaModificacionInterv') 
            //->add('usuarioIngresoInterv')    
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
            ->add('idExpediente',null, array('label' => 'Numero de expediente', 'required' => true))
            ->add('idIntervencion',null, array('label' => 'Intervención', 'required' => true))
            ->add('efectivoInterv', null, array('label' => 'Efectivo','required' => False))
            //->add('estadoMtlInterv', null, array('label' => 'Activo','required' => False))
            ->add('observacionInterv',null, array('label' => 'Observación','required' => False)) 
            //->add('usuarioIngresoInterv')   
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
            ->add('idExpediente',null, array('label' => 'Numero de expediente'))
            ->add('idIntervencion',null, array('label' => 'Seleccione intervencion'))
            ->add('observacionInterv',null, array('label' => 'Observación'))
            ->add('efectivoInterv',null, array('label' => 'Efectivo'))
            //->add('estadoMtlInterv')
            ->add('fechaIngresoInterv',null, array('label' => 'Registrado'))
            //->add('fechaModificacionInterv')
            ->add('usuarioIngresoInterv')
            
        ;
    }
    
      
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:IntervencionRegistro:mtlintervencion.html.twig';
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
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlIntervencion
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfMtlIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMtlIntervencion->setusuarioIngresoInterv($user);
        $EnfMtlIntervencion->setfechaIngresoInterv(new \DateTime());
        $EnfMtlIntervencion->setestadoMtlInterv(true);
    }
 
     
}
