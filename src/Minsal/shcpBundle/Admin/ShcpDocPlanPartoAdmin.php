<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ShcpDocPlanPartoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('planLugarControl')
            ->add('planFechaInicio')
            ->add('planNomPerInicia')
            ->add('planHospPlaneaParto')
            ->add('planAcomParto')
            ->add('planSalirAntsFec')
            ->add('planDondIria')
            ->add('planDireccion')
            ->add('planNomPerTransp')
            ->add('planTelPerTransp')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('planLugarControl')
            ->add('planFechaInicio')
            ->add('planNomPerInicia')
            ->add('planHospPlaneaParto')
            ->add('planAcomParto')
            ->add('planSalirAntsFec')
            ->add('planDondIria')
            ->add('planDireccion')
            ->add('planNomPerTransp')
            ->add('planTelPerTransp')
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
            ->add('planLugarControl')
            ->add('planFechaInicio')
            ->add('planNomPerInicia')
            ->add('planHospPlaneaParto')
            ->add('planAcomParto')
            ->add('planSalirAntsFec')
            ->add('planDondIria')
            ->add('planDireccion')
            ->add('planNomPerTransp')
            ->add('planTelPerTransp')
           // ->add('idExpMaterno', null, array('label' => 'Nombre',
               //   'required'=>true))   
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('planLugarControl')
            ->add('planFechaInicio')
            ->add('planNomPerInicia')
            ->add('planHospPlaneaParto')
            ->add('planAcomParto')
            ->add('planSalirAntsFec')
            ->add('planDondIria')
            ->add('planDireccion')
            ->add('planNomPerTransp')
            ->add('planTelPerTransp')
        ;
    }
    
      public function getTemplate($name) {
        switch ($name) {
            
            case 'create':
                return 'MinsalshcpBundle:ShcpDocPlanParto:edit.html.twig';
                break;
            
            case 'show':
                return 'MinsalshcpBundle:ShcpDocResultado:show.html.twig';
                break;
            
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
}
