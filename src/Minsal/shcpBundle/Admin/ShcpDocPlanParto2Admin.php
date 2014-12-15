<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpDocPlanParto2Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('planFecha')
            ->add('planTiempo')
            ->add('planParFamilia')
            ->add('planGanPeso')
            ->add('planHierroAcido')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('planFecha')
            ->add('planTiempo')
            ->add('planParFamilia')
            ->add('planGanPeso')
            ->add('planHierroAcido')
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
            ->add('planFecha')
            ->add('planTiempo')
            ->add('planParFamilia')
            ->add('planGanPeso')
            ->add('planHierroAcido')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('planFecha')
            ->add('planTiempo')
            ->add('planParFamilia')
            ->add('planGanPeso')
            ->add('planHierroAcido')
        ;
    }
     public function getTemplate($name) {
        switch ($name) {
            
            case 'edit':
                return 'MinsalshcpBundle:ShcpDocPlanParto2:edit.html.twig';
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
