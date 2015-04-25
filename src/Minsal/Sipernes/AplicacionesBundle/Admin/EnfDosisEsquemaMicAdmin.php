<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfDosisEsquemaMicAdmin extends Admin
{
    public function createQuery($context = 'list') 
    {         
        $query = parent::createQuery($context); 
        
        $query
                ->select('a')
                ->from('Minsal\SipernesBundle\Entity\EnfDosisEsquemaMic', 'a')
                ->innerJoin('a.idComponente', 'c','WITH','a.idComponente=c.id')
                ->andWhere($query->expr()->eq('c.idTipoComponente', '2'))
                ;
            
        return $query; 
    } 
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsqMic',null, array('label' => 'Micronutriente'))
            //->add('dosisMic')
            //->add('centroEducativoMic')
            //->add('fechaDosisEsqMic')
            //->add('estadoDosisEsqMic',null, array('label' => 'Activo'))
            ->add('usuarioDosisEsqMic',null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsqMic',null, array('label' => 'Creado el'))
            //->add('fechaModDosisMic')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsqMic',null, array('label' => 'Micronutriente'))
            ->add('dosisMic',null, array('label' => 'Dosis'))
            //->add('centroEducativoMic')
            //->add('fechaDosisEsqMic')
            //->add('estadoDosisEsqMic',null, array('label' => 'Activo'))
            ->add('usuarioDosisEsqMic',null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsqMic',null, array('label' => 'Creado el'))
            //->add('fechaModDosisMic')
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
           // ->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código de empleado','required' => true))
            ->add('idExpediente',null, array('label' => 'Código de expediente','required' => true))
            ->add('idTipoEsqMic',null, array('label' => 'Micronutriente','required' => true))
            //->add('dosisMic')
            //->add('centroEducativoMic')
            //->add('fechaDosisEsqMic')
            //->add('estadoDosisEsqMic')
            //->add('usuarioDosisEsqMic')
            //->add('fechaIngresoDosisEsqMic')
            //->add('fechaModDosisMic')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsqMic',null, array('label' => 'Micronutriente'))
            ->add('dosisMic',null, array('label' => 'Dosis'))
            //->add('centroEducativoMic')
            //->add('fechaDosisEsqMic')
            //->add('estadoDosisEsqMic',null, array('label' => 'Activo'))
            ->add('usuarioDosisEsqMic',null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsqMic',null, array('label' => 'Creado el'))
            //->add('fechaModDosisMic')
        ;
    }
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesAplicacionesBundle:MicronutrienteRegistro:mtlmicronutriente.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    
    
    
    public function prePersist($EnfDosisEsquemaMic) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfDosisEsquemaMic->setusuarioDosisEsqMic($user);
        $EnfDosisEsquemaMic->setfechaIngresoDosisEsqMic(new \DateTime());
        $EnfDosisEsquemaMic->setdosisMic(1);
        $EnfDosisEsquemaMic->setestadoDosisEsqMic(true);
       
    }
    
}
