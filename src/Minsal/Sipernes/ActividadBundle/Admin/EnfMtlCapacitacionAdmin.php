<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlCapacitacionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            //->add('fechaIngresoCap')
            ->add('fechaCapacitacion', null, array('label' => 'Fecha capacitación'))
            ->add('usuarioCapacitacion', null, array('label' => 'Numero Enfermera'))
            ->add('temaCapacitacion', null, array('label' => 'Tema','required' => false))
            //->add('asistenciaCapacitacion')
            //->add('montoFinanciamientoCap')
            //->add('horasDuracionCap')
            ->add('establecimientoCap', null, array('label' => 'Establecimiento'))
            //->add('estadoCapacitacion')
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('fechaCapacitacion', null, array('label' => 'Fecha capacitación'))
            ->add('usuarioCapacitacion', null, array('label' => 'Numero Enfermera'))
            ->add('temaCapacitacion', null, array('label' => 'Tema'))
            ->add('idFinanciamiento', null, array('label' => 'Financiado'))
            //->add('montoFinanciamientoCap', null, array('label' => 'Monto'))
            //->add('fechaIngresoCap', null, array('label' => 'creado'))
            //->add('asistenciaCapacitacion', null, array('label' => 'Asistencia'))
            //->add('horasDuracionCap', null, array('label' => 'Duración'))
            ->add('establecimientoCap', null, array('label' => 'Establecimiento'))
            //->add('estadoCapacitacion', null, array('label' => 'Activo'))        
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
            //->add('fechaIngresoCap')
            ->add('fechaCapacitacion', null, array('label' => 'Fecha capacitación','required' => true))
            ->add('usuarioCapacitacion', null, array('label' => 'Numero de enfermera','required' => true))
            ->add('temaCapacitacion', null, array('label' => 'Tema','required' => true))
            ->add('idFinanciamiento', null, array('label' => 'Financiado','required' => true))
            ->add('montoFinanciamientoCap', null, array('label' => 'Monto','required' => true))
            ->add('asistenciaCapacitacion', null, array('label' => 'Asistencia','required' => true))
            ->add('horasDuracionCap', null, array('label' => 'Horas en capacitación','required' => true))
            //->add('establecimientoCap')
            //->add('estadoCapacitacion')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('fechaCapacitacion', null, array('label' => 'Fecha capacitación'))
            ->add('usuarioCapacitacion', null, array('label' => 'Numero Enfermera'))
            ->add('temaCapacitacion', null, array('label' => 'Tema'))
            ->add('idFinanciamiento', null, array('label' => 'Financiado'))    
            ->add('asistenciaCapacitacion', null, array('label' => 'Asistencia'))
            ->add('montoFinanciamientoCap', null, array('label' => 'Monto'))
            ->add('horasDuracionCap', null, array('label' => 'Horas'))
            ->add('establecimientoCap', null, array('label' => 'Establecimiento'))
            //->add('estadoCapacitacion')
            ->add('fechaIngresoCap', null, array('label' => 'creado el'))
        ;
    }
    
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlCapacitacion
     * con los valores del formulario.
     * 
     */

    public function prePersist($EnfMtlCapacitacion) {
        $EnfMtlCapacitacion->setfechaIngresoCap(new \DateTime());
        $EnfMtlCapacitacion->setestadoCapacitacion(true);
        $EnfMtlCapacitacion->setestablecimientoCap('Hospital Nacional Antiguo Cuscatlán');
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
