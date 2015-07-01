<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMtlDiagnosticoAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
 protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoDiag' // name of the ordered field (default = the model id field, if any)
    );  
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero Empleado'))
                ->add('idExpediente', null, array('label' => 'Numero Expediente'))
                ->add('idCtlDiag', null, array('label' => 'Diagnóstico'))
                //->add('observacion1',null, array('label' => 'Observación'))
                ->add('fechaIngresoDiag', null, array('label' => 'Creado el'))
        //->add('fechaModificacionDiag')
        //->add('estadoMtlDiag')
        //->add('usuarioIngresoDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero Enfermera'))
                ->add('idExpediente', null, array('label' => 'Numero Expediente'))
                ->add('idCtlDiag', null, array('label' => 'Diagnóstico'))
                ->add('observacion1', null, array('label' => 'Observación'))
                ->add('usuarioIngresoDiag', null, array('label' => 'Creado por'))
                ->add('fechaIngresoDiag', null, array('label' => 'Creado el'))
                //->add('fechaModificacionDiag')
                //->add('estadoMtlDiag')           
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
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero enfermera', 'required' => true))
                ->add('idExpediente', null, array('label' => 'Expediente', 'required' => true))
                ->add('idCtlDiag', null, array('label' => 'Diagnóstico', 'required' => true))
                ->add('observacion1', null, array('label' => 'Observación'))
        //->add('fechaIngresoDiag')
        //->add('fechaModificacionDiag')
        //->add('estadoMtlDiag', null, array('label' => 'Activo','required' => False))
        //->add('usuarioIngresoDiag')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                //->add('id')
                ->add('idEmpCorr', null, array('label' => 'Numero Enfermera'))
                ->add('idExpediente', null, array('label' => 'Numero Expediente'))
                ->add('idCtlDiag', null, array('label' => 'Diagnóstico'))
                ->add('observacion1', null, array('label' => 'Observación'))
                ->add('fechaIngresoDiag', null, array('label' => 'Creado el'))
                //->add('fechaModificacionDiag')
                //->add('estadoMtlDiag',null, array('label' => 'Activo'))
                ->add('usuarioIngresoDiag', null, array('label' => 'Creado por'))
        ;
    }

    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:DiagnosticoRegistro:mtldiagnostico.html.twig';
                break;
            case 'create':
                return 'MinsalSipernesNotasBundle:DiagnosticoRegistro:mtldiagnostico.html.twig';
                break;
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
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfMtlDiagnostico->setusuarioIngresoDiag($user);
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
