<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfAnotacionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           // ->add('id')
            ->add('idEmpCorr',null, array('label' => 'Numero Empleado'))  
            ->add('idExpediente',null, array('label' => 'Numero Expediente'))
            ->add('edadAnotacion',null, array('label' => 'Edad'))
            //->add('observacionAnot')
            //->add('estadoAnotacion')
            ->add('usuarioAnotacion',null, array('label' => 'Creado por'))
            ->add('fechaIngresoAnota',null, array('label' => 'Creado el'))
            //->add('fechaModAnota')
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
            ->add('edadAnotacion',null, array('label' => 'Edad'))
            ->add('observacionAnot',null, array('label' => 'Observación'))
            //->add('estadoAnotacion')
            ->add('usuarioAnotacion',null, array('label' => 'Creado por'))
            ->add('fechaIngresoAnota',null, array('label' => 'Creado el'))
            //->add('fechaModAnota')
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
            ->add('edadAnotacion',null, array('label' => 'Edad', 'required' => true))
            ->add('observacionAnot',null, array('label' => 'Observación'))
            //->add('estadoAnotacion')
            //->add('usuarioAnotacion')
            //->add('fechaIngresoAnota')
            //->add('fechaModAnota')
            
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
            ->add('edadAnotacion',null, array('label' => 'Edad'))
            ->add('observacionAnot',null, array('label' => 'Observación'))
            //->add('estadoAnotacion')
            ->add('usuarioAnotacion',null, array('label' => 'Creado por'))
            ->add('fechaIngresoAnota',null, array('label' => 'Creado el'))
            //->add('fechaModAnota')
        ;
    }
    
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:AnotacionRegistro:mtlanotacion.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    
    public function prePersist($EnfAnotacion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfAnotacion->setusuarioAnotacion($user);
        $EnfAnotacion->setfechaIngresoAnota(new \DateTime());
        $EnfAnotacion->setestadoAnotacion(true);
    }
    
    
}



