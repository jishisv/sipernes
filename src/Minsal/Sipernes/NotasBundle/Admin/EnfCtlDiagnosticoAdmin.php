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
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoCtlDiag' // name of the ordered field (default = the model id field, if any)
    );  
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('codDiagnostico',null, array('label' => 'Código'))
            //->add('nombreDiagnostico',null, array('label' => 'Diagnóstico'))
            //->add('descripcionDiag',null, array('label' => 'Descripción'))
            ->add('estadoCtlDiag',null, array('label' => 'Activo'))
            ->add('usuarioCtlDiag',null, array('label' => 'Creado por')) 
            ->add('fechaIngresoCtlDiag',null, array('label' => 'Creado el'))
            //->add('fechaModificacionCtlDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codDiagnostico',null, array('label' => 'Código'))
            ->add('nombreDiagnostico',null, array('label' => 'Diagnóstico'))
            ->add('descripcionDiag',null, array('label' => 'Descripción'))
            ->add('estadoCtlDiag',null, array('label' => 'Activo'))
            ->add('usuarioCtlDiag',null, array('label' => 'Creado por')) 
            ->add('fechaIngresoCtlDiag',null, array('label' => 'Creado el'))
            //->add('fechaModificacionCtlDiag')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
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
            ->add('idClase', null, array('label' => 'Clase ','required' => true))
            ->add('codDiagnostico', null, array('label' => 'Digite el código ','max_length' => 5))
            ->add('nombreDiagnostico', 'text', array('label' => 'Digite el nombre '))
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
            //->add('id')
            ->add('codDiagnostico',null, array('label' => 'Código'))
            ->add('nombreDiagnostico',null, array('label' => 'Diagnóstico'))
            ->add('descripcionDiag',null, array('label' => 'Descripción'))
            ->add('estadoCtlDiag',null, array('label' => 'Activo'))
            ->add('usuarioCtlDiag',null, array('label' => 'Creado por')) 
            ->add('fechaIngresoCtlDiag',null, array('label' => 'Creado el'))
            //->add('fechaModificacionCtlDiag')
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
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlDiagnostico->setusuarioCtlDiag($user);
        $EnfCtlDiagnostico->setfechaModificacionCtlDiag(new \DateTime());
    }   
}
