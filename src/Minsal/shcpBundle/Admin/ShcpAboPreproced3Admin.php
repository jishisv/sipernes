<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpAboPreproced3Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('prep3CondicionIngr')
            ->add('prep3OtroDanio')
            ->add('prep3EstadoActual')
            ->add('prep3TipoAborto')
            ->add('prep3Respons')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('prep3CondicionIngr')
            ->add('prep3OtroDanio')
            ->add('prep3EstadoActual')
            ->add('prep3TipoAborto')
            ->add('prep3Respons')
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
                ->add('prep3CondicionIngr', 'choice', array('label'=>'',
                'choices'  => array(0 => 'Infeccion genital', 1 => 'Infeccion pelviana', 2=>'Sepsis', 3=>'Hemorragia Excesiva',
                    4=>'Shock hipovolemico', 5=>'Perforacion, desgarro o daño vaginal', 6=>'Perforacion, desgarro o daño uterino', 7=>'Perforacion, desgarro o daño pelvico', 8=>'Otro'),
                'expanded' => true,
                 ))
            ->add('prep3OtroDanio')
                ->add('prep3EstadoActual', 'choice', array('label'=>'',
                'choices'  => array(1 => 'Completo', 2 => 'Incompleto', 3=>'Se desconoce', 4=>'No aplica'),
                'expanded' => true,
                 ))
                
                ->add('prep3TipoAborto', 'choice', array('label'=>'',
                'choices'  => array(1 => 'Aborto espontaneo', 2=> 'Aborto frustro', 3=>'Mola', 4=>'Embarazo no viable',
                    5=>'Aborto terapeutico', 6=>'Aborto terapeutico fallido', 7=>'No especificado', 8=>'Otro'),
                'expanded' => true,
                 ))
            ->add('prep3Respons')
                
                //llave foranea cie10
                ->add('idCie10')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('prep3CondicionIngr')
            ->add('prep3OtroDanio')
            ->add('prep3EstadoActual')
            ->add('prep3TipoAborto')
            ->add('prep3Respons')
        ;
    }
    
    public function getTemplate($name) {
        switch ($name) {
            
            case 'edit':
                return 'MinsalshcpBundle:ShcpPreproced3:edit.html.twig';
                break;
            
//            case 'create':
//                return 'MinsalshcpBundle:ShcpPreproced1:edit.html.twig';
//                break;
           
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
