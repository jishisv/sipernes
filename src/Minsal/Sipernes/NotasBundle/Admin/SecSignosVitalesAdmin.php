<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SecSignosVitalesAdmin extends Admin
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
//            ->add('frecuenciaCardiaca')
//            ->add('presionArterial')
//            ->add('frecuenciaRespiratoria')
//            ->add('peso')
//            ->add('talla')
//            ->add('temperatura')
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
            ->add('frecuenciaCardiaca',null, array('label' => 'Frecuencia Cardiaca'))
            ->add('presionArterial',null, array('label' => 'Presion Arterial'))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia Respiratoria'))
            ->add('peso',null, array('label' => 'Peso'))
            ->add('talla',null, array('label' => 'Talla'))
            ->add('temperatura',null, array('label' => 'Temperatura'))
            ->add('observacionSig',null, array('label' => 'Observación'))
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
            ->add('idEmpCorr',null, array('label' => 'Numero de empleado', 'required' => true))  
            ->add('idExpediente',null, array('label' => 'Numero de expediente', 'required' => true))
            ->add('frecuenciaCardiaca',null, array('label' => 'Frecuencia cardiaca', 'required' => true))
            ->add('presionArterial',null, array('label' => 'Presion arterial', 'required' => true))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia respiratoria', 'required' => true))
            ->add('peso',null, array('label' => 'Peso', 'required' => true))
            ->add('talla',null, array('label' => 'Talla', 'required' => true))
            ->add('temperatura',null, array('label' => 'Temperatura', 'required' => true))
            ->add('observacionSig',null, array('label' => 'Observación'))
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
            ->add('frecuenciaCardiaca',null, array('label' => 'Frecuencia Cardiaca'))
            ->add('presionArterial',null, array('label' => 'Presion Arterial'))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia Respiratoria'))
            ->add('peso',null, array('label' => 'Peso'))
            ->add('talla',null, array('label' => 'Talla'))
            ->add('temperatura',null, array('label' => 'Temperatura'))
            ->add('observacionSig',null, array('label' => 'Observación'))
        ;
    }
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:SignosVitalesRegistro:mtlsignosvitales.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
  
}
