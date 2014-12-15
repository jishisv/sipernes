<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpAboCtlCie10Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('cie10Nombre')
            ->add('cie10Tipo')
            ->add('cie10Estado')
            ->add('cie10Codigo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper            
            ->add('id')
            ->add('cie10Nombre')
            ->add('cie10Tipo')
            ->add('cie10Estado')
            ->add('cie10Codigo')
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
            ->add('cie10Nombre','text', array('label'=>'Nombre CIE 10', 
                'attr' => array('placeholder' => 'Introduzca Nombre'    )))
            ->add('cie10Tipo','text', array('label'=>'Tipo CIE 10', 
                'attr' => array('placeholder' => 'Introduzca Tipo' )))
            ->add('cie10Estado','text', array('label'=>'Estado CIE 10', 
                'attr' => array('placeholder' => 'Introduzca Estado' )))
            ->add('cie10Codigo','text', array('label'=>'Codigo CIE 10',
                'attr' => array('placeholder' => 'Introduzca Estado' )))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('cie10Nombre')
            ->add('cie10Tipo')
            ->add('cie10Estado')
            ->add('cie10Codigo')
        ;
    }


    
    public function getTemplate($name) {
        switch ($name) {
            case 'lista':
                return 'MinsalshcpBundle:ShcpAboCtlCie10:index.html.twig';
                break;
            case 'edita':
                return 'MinsalshcpBundle:ShcpAboCtlCie10:edit.html.twig';
                break;
           /* case 'view':
                return 'MinsalSiapsBundle:MntPacienteAdmin:view.html.twig';
                break;
            case 'buscaremergencia':
                return 'MinsalSiapsBundle:MntPacienteAdmin:list.html.twig';
                break;*/
            default:
                return parent::getTemplate($name);
                break;
        }
    } 
}
