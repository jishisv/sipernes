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
    
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoAct' // name of the ordered field (default = the model id field, if any)
    );

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                //->add('id')
                ->add('fechaModificacionAct', null, array('label' => 'Fecha de actividad'))
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado'))
                ->add('idExpediente', null, array('label' => 'Expediente'))
                ->add('idSubactividad', null, array('label' => 'Actividad'))
                //->add('estadoMtlAct', null, array('label' => 'Activo'))
                ->add('usuarioIngresoAct', null, array('label' => 'Creado por'))
                ->add('fechaIngresoAct', null, array('label' => 'Fecha de creacion'))           
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
                ->add('fechaModificacionAct', null, array('label' => 'Fecha de actividad'))      
                ->add('idEmpCorr', null, array('label' => 'Numero de Empleado'))
                ->add('idExpediente',  null, array('label' => 'Numero de Expediente'))
                ->add('idSubactividad',  null, array('label' => 'Actividad'))
                //->add('estadoMtlAct', null, array('label' => 'Activo'))
                //->add('cantidadActEnf', null, array('label' => 'Cantidad'))
                //->add('tiempoActEnf', null, array('label' => 'Tiempo'))
                ->add('usuarioIngresoAct', null, array('label' => 'Creado por'))
                ->add('fechaIngresoAct', null, array('label' => 'Creado el'))
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
                //->add('fechaModificacionAct', null, array('label' => 'Fecha de actividad','required' => true))
                ->add('fechaModificacionAct', 'date',
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'label' => 'Fecha de actividad',
                        'attr'   => array('class' => 'fechacal obligatorio'),
                       ))
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado', 'required' => true))
                ->add('idExpediente', null, array('label' => 'Expediente', 'required' => true))
                ->add('idSubactividad', null, array('label' => 'Actividad', 'required' => true))
                //->add('estadoMtlAct', null, array('label' => 'Activo', 'required' => False))
                //->add('cantidadActEnf', null, array('label' => 'Cantidad de sub-actividades realizadas', 'max_length' => 10, 'required' => true))
                ->add('tiempoActEnf', null, array('label' => 'Tiempo en la actividad', 'required' => true))
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
                ->add('fechaModificacionAct', null, array('label' => 'Fecha de actividad'))
                ->add('idEmpCorr', null, array('label' => 'Numero de empleado'))
                ->add('idExpediente', 'text', array('label' => 'Expediente'))
                ->add('idSubactividad', 'text', array('label' => 'Actividad'))
                ->add('estadoMtlAct', null, array('label' => 'Activo'))
                ->add('cantidadActEnf', null, array('label' => 'Cantidad sub-actividades'))
                ->add('tiempoActEnf', 'time', array('label' => 'Tiempo sub-actividades'))
                ->add('usuarioIngresoAct', 'text', array('label' => 'Creado por'))
                ->add('fechaIngresoAct', 'date', array('label' => 'Fecha de creacion'))
                


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
        $EnfMtlActividad->setestadoMtlAct(true);
        $EnfMtlActividad->setcantidadActEnf(1);
        if( $EnfMtlActividad->gettiempoActEnf() == '00:00:00'){
             $EnfMtlActividad->settiempoActEnf('10:20:10');
        }
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
