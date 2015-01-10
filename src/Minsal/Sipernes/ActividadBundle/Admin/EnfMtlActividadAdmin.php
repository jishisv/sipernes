<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlActividadAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado'))
                //->add('idExpediente', null, array('label' => 'Numero de paciente'))
                ->add('idSubactividad', null, array('label' => 'Sub-actividad'))
                ->add('estadoMtlAct', null, array('label' => 'Activo'))
                ->add('usuarioIngresoAct', null, array('label' => 'Creado por'))
                ->add('fechaIngresoAct', null, array('label' => 'Fecha de creacion'))
                ->add('fechaModificacionAct', null, array('label' => 'Fecha de modificacion'))
        //->add('cantidadActEnf')
        //->add('tiempoActEnf')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado'))
                //->add('idExpediente', 'text', array('label' => 'Numero de paciente'))
                ->add('idSubactividad', 'text', array('label' => 'Sub-actividad'))
                ->add('estadoMtlAct', null, array('label' => 'Activo'))
                ->add('cantidadActEnf', null, array('label' => 'Cantidad sub-actividades'))
                ->add('tiempoActEnf', 'time', array('label' => 'Tiempo sub-actividades'))
                ->add('usuarioIngresoAct', 'text', array('label' => 'Creado por'))
                ->add('fechaIngresoAct', 'date', array('label' => 'Fecha de creacion'))
                //->add('fechaModificacionAct')      
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
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                //->add('id')
                ->add('fechaModificacionAct', null, array('required' => false))
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado', 'required' => true))
                ->add('idExpediente', 'text', array('label' => 'Numero de paciente'))
                ->add('idSubactividad', null, array('label' => 'Seleccione sub-actividad', 'required' => true))
                ->add('estadoMtlAct', null, array('label' => 'Activo', 'required' => False))
                ->add('cantidadActEnf', null, array('label' => 'Cantidad de sub-actividades realizadas', 'max_length' => 10, 'required' => true))
                ->add('tiempoActEnf', 'time', array('label' => 'Tiempo en realizar las sub-actividad', 'required' => true))
        //->add('usuarioIngresoAct')
        //->add('fechaIngresoAct')
        //
       
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado'))
                //->add('idExpediente', 'text', array('label' => 'Numero de paciente'))
                ->add('idSubactividad', 'text', array('label' => 'Sub-actividad'))
                ->add('estadoMtlAct', null, array('label' => 'Activo'))
                ->add('cantidadActEnf', null, array('label' => 'Cantidad sub-actividades'))
                ->add('tiempoActEnf', 'time', array('label' => 'Tiempo sub-actividades'))
                ->add('usuarioIngresoAct', 'text', array('label' => 'Creado por'))
                ->add('fechaIngresoAct', 'date', array('label' => 'Fecha de creacion'))
                ->add('fechaModificacionAct', null, array('label' => 'Fecha de modificacion'))


        ;
    }

    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesActividadBundle:ActividadRegistro:mtlactividad.html.twig';
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
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlActividad
     * con los valores del formulario.
     * 
     */

    public function prePersist($EnfMtlActividad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMtlActividad->setusuarioIngresoAct($user);
        $EnfMtlActividad->setfechaIngresoAct(new \DateTime());
    }

    /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlActividad
     * con los valores del formulario.
     * 
     */
    /* public function preUpdate($EnfMtlActividad) {
      $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
      $EnfMtlActividad->setusuarioIngresoAct($user);
      $EnfMtlActividad->setfechaModificacionAct(new \DateTime());
      } */
}
