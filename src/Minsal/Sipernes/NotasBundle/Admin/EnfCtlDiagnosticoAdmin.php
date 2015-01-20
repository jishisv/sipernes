<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlDiagnosticoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('estadoCtlDiag')
            ->add('usuarioCtlDiag') 
            ->add('fechaIngresoCtlDiag')
            //->add('fechaModificacionCtlDiag')
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
            ->add('idClase', null, array('label' => 'Clase diagnóstica','required' => true))
            ->add('codDiagnostico', null, array('label' => 'Codigo de Diagnóstico','max_length' => 5))
            ->add('nombreDiagnostico', 'text', array('label' => 'Nombre de Diagnóstico'))
            ->add('descripcionDiag', 'text', array('label' => 'Descripción'))
            ->add('estadoCtlDiag',null, array('label' => 'Activo'))
            //->add('fechaIngresoCtlDiag')
            //->add('fechaModificacionCtlDiag')
            //->add('usuarioCtlDiag')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('codDiagnostico')
            ->add('nombreDiagnostico')
            ->add('descripcionDiag')
            ->add('fechaIngresoCtlDiag')
            ->add('fechaModificacionCtlDiag')
            ->add('usuarioCtlDiag')
            ->add('estadoCtlDiag')
        ;
    }
    
   
    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:CtlDiagnosticoRegistro:ctldiagnostico.html.twig';
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
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlDiagnostico
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlDiagnostico) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlDiagnostico->setusuarioCtlDiag($user);
        $EnfCtlDiagnostico->setfechaIngresoCtlDiag(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlDiagnostico
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlDiagnostico) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlDiagnostico->setusuarioCtlDiag($user);
        $EnfCtlDiagnostico->setfechaModificacionCtlDiag(new \DateTime());
    }   
}
