<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlFinanciamiento;
use Doctrine\ORM\EntityRepository;

class EnfMtlCapacitacionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoCap' // name of the ordered field (default = the model id field, if any)
    );   
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            //->add('fechaIngresoCap')
            ->add('fechaCapacitacion', null, array('label' => 'Fecha capacitación'))
            ->add('idEmpCorr', null, array('label' => 'Numero de Empleado'))
            //->add('usuarioCapacitacion', null, array('label' => 'Ingresado por'))
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
            ->add('fechaCapacitacion', null, array('label' => 'Fecha de capacitación'))
            ->add('idEmpCorr', null, array('label' => 'Numero Empleado'))
            ->add('temaCapacitacion', null, array('label' => 'Tema'))
            ->add('idFinanciamiento', null, array('label' => 'Financiado por'))
            ->add('montoFinanciamientoCap', null, array('label' => 'Monto ($)'))
            //->add('fechaIngresoCap', null, array('label' => 'creado'))
            ->add('asistenciaCapacitacion', null, array('label' => 'Numero de asistencia'))
            //->add('horasDuracionCap', null, array('label' => 'Duración'))
            ->add('establecimientoCap', null, array('label' => 'Establecimiento'))
            //->add('estadoCapacitacion', null, array('label' => 'Activo'))
            ->add('usuarioCapacitacion', null, array('label' => 'Creado por'))
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
            //->add('fechaCapacitacion', null, array('label' => 'Fecha de capacitación','required' => true))
            ->add('fechaCapacitacion', 'date',
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'label' => 'Fecha de capacitación',
                        'attr'   => array('class' => 'fechacal obligatorio'),
                       ))
            ->add('idEmpCorr', null, array('label' => 'Numero empleado','required' => true))
           // ->add('usuarioCapacitacion')
            ->add('temaCapacitacion', null, array('label' => 'Tema a impartir','required' => true))
            ->add('idFinanciamiento', null, array('label' => 'Financiado por','required' => true,
                'class' => 'MinsalSipernesBundle:EnfCtlFinanciamiento',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerFinActivo();
            }))
            ->add('montoFinanciamientoCap', null, array('label' => 'Monto ($)','required' => true))
            ->add('asistenciaCapacitacion', null, array('label' => 'Numero de asistencia','required' => true))
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
            ->add('fechaCapacitacion', null, array('label' => 'Fecha de capacitación'))
            ->add('idEmpCorr', null, array('label' => 'Numero de Empleado'))
            ->add('usuarioCapacitacion', null, array('label' => 'Creado por'))
            ->add('temaCapacitacion', null, array('label' => 'Tema'))
            ->add('idFinanciamiento', null, array('label' => 'Financiado por'))    
            ->add('asistenciaCapacitacion', null, array('label' => 'Numero de sistencia'))
            ->add('montoFinanciamientoCap', null, array('label' => 'Monto ($)'))
            ->add('horasDuracionCap', null, array('label' => 'Horas'))
            ->add('establecimientoCap', null, array('label' => 'Establecimiento'))
            //->add('estadoCapacitacion')
            ->add('fechaIngresoCap', null, array('label' => 'creado el'))
        ;
    }
    
   
    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesActividadBundle:CapacitacionRegistro:mtlcapacitacion.html.twig';
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
     * Recibe como parámetro una entidad; en este caso de tipo EnfMtlCapacitacion
     * con los valores del formulario.
     * 
     */

    public function prePersist($EnfMtlCapacitacion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfMtlCapacitacion->setusuarioCapacitacion($user);
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
