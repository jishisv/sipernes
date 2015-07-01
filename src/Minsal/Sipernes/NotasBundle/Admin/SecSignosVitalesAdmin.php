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
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'id' // name of the ordered field (default = the model id field, if any)
    );  

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
            ->add('presionArterial',null, array('label' => 'Presion arterial (sistólica/diastólica)'))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia respiratoria (respiraciones por minuto)'))
            ->add('peso',null, array('label' => 'Peso (lb)'))
            ->add('talla',null, array('label' => 'Talla (cm)'))
            ->add('temperatura',null, array('label' => 'Temperatura (°C)'))
            ->add('observacionSig',null, array('label' => 'Observación'))
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
            ->add('frecuenciaCardiaca',null, array('label' => 'Frecuencia cardiaca (latidos por minuto)', 'required' => true))
            ->add('presionArterial',null, array('label' => 'Presion arterial (sistólica/diastólica)', 'required' => true))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia respiratoria (respiraciones por minuto)', 'required' => true))
            ->add('peso',null, array('label' => 'Peso (lb)', 'required' => true))
            ->add('talla',null, array('label' => 'Talla (cm)', 'required' => true))
            ->add('temperatura',null, array('label' => 'Temperatura (°C)', 'required' => true))
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
            ->add('frecuenciaCardiaca',null, array('label' => 'Frecuencia Cardiaca (latidos por minuto'))
            ->add('presionArterial',null, array('Presion arterial (sistólica/diastólica)'))
            ->add('frecuenciaRespiratoria',null, array('label' => 'Frecuencia respiratoria (respiraciones por minuto)'))
            ->add('peso',null, array('label' => 'Peso (lb)'))
            ->add('talla',null, array('label' => 'Talla (cm) '))
            ->add('temperatura',null, array('label' => 'Temperatura (°C)'))
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
