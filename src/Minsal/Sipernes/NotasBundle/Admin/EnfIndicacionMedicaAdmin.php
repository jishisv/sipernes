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
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoInd' // name of the ordered field (default = the model id field, if any)
    );    
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
            ->add('idEmpCorr',null, array('label' => 'Numero de empleado', 'required' => true))  
            ->add('idExpediente',null, array('label' => 'Numero de expediente', 'required' => true))
            ->add('tratamientoInd',null, array('label' => 'Tratamiento', 'required' => true))
            ->add('dosisInd',null, array('label' => 'Dosis (ml)', 'required' => true))
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
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfIndicacionMedica->setusuarioInd($user);
        $EnfIndicacionMedica->setfechaIngresoInd(new \DateTime());
        $EnfIndicacionMedica->setestadoInd(true);
    }
    
}
