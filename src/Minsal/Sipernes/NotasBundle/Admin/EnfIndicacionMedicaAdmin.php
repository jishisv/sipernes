<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfIndicacionMedicaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Empleado'))  
            ->add('idExpediente',null, array('label' => 'Numero Expediente'))
            //->add('tratamientoInd',null, array('label' => 'Tratamiento'))
            //->add('dosisInd',null, array('label' => 'Dosis'))
            //->add('indicacionInd',null, array('label' => 'Indicación'))
            //->add('observacionInd',null, array('label' => 'Observación'))
            //->add('estadoInd')
            ->add('usuarioInd',null, array('label' => 'Creado por'))
            ->add('fechaIngresoInd',null, array('label' => 'Creado el'))
            //->add('fechaModInd')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Empleado'))  
            ->add('idExpediente',null, array('label' => 'Numero Expediente'))
            ->add('tratamientoInd',null, array('label' => 'Tratamiento'))
            ->add('dosisInd',null, array('label' => 'Dosis'))
            ->add('indicacionInd',null, array('label' => 'Indicación'))
            ->add('observacionInd',null, array('label' => 'Observación'))
            //->add('estadoInd')
            ->add('usuarioInd',null, array('label' => 'Creado por'))
            ->add('fechaIngresoInd',null, array('label' => 'Creado el'))
            //->add('fechaModInd')
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
            ->add('idEmpCorr',null, array('label' => 'Numero de Empleado', 'required' => true))  
            ->add('idExpediente',null, array('label' => 'Numero de Expediente', 'required' => true))
            ->add('tratamientoInd',null, array('label' => 'Tratamiento', 'required' => true))
            ->add('dosisInd',null, array('label' => 'Dosis', 'required' => true))
            ->add('indicacionInd',null, array('label' => 'Indicación', 'required' => true))
            ->add('observacionInd',null, array('label' => 'Observación'))
            //->add('estadoInd')
            //->add('usuarioInd')
            //->add('fechaIngresoInd')
            //->add('fechaModInd')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Empleado'))  
            ->add('idExpediente',null, array('label' => 'Numero Expediente'))
            ->add('tratamientoInd',null, array('label' => 'Tratamiento'))
            ->add('dosisInd',null, array('label' => 'Dosis'))
            ->add('indicacionInd',null, array('label' => 'Indicación'))
            ->add('observacionInd',null, array('label' => 'Observación'))
            //->add('estadoInd')
            ->add('usuarioInd',null, array('label' => 'Creado por'))
            ->add('fechaIngresoInd',null, array('label' => 'Creado el'))
            //->add('fechaModInd')
        ;
    }
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:IndicacionMedicaRegistro:mtlindicacionmedica.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
     public function prePersist($EnfIndicacionMedica) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfIndicacionMedica->setusuarioInd($user);
        $EnfIndicacionMedica->setfechaIngresoInd(new \DateTime());
        $EnfIndicacionMedica->setestadoInd(true);
    }
    
}
