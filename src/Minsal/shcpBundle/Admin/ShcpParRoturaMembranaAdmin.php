<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParRoturaMembranaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper/*
            ->add('id')
            ->add('rotuExistencia')
            ->add('rotuFecha')
            ->add('rotuHora')
            ->add('rotuMen37sem')
            ->add('rotuMayIgual18hrs')
            ->add('rotuTemp')
            ->add('roturaTempMayIgual38c')
        ;*/
        ->add('rotuExistencia','choice', 
                array(
                    'label' => 'Roturas de membrana de parto',
                    'attr' => array('class' => 'obligatorio'),
                    'choices'=> array('1'=>'Si','2'=>'No'), 
                    'multiple'=>false, 
                    'expanded'=>true))

            /*->add('rotuFecha')*/
            ->add('rotuFecha', 'date',
                    array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'attr'   => array('class' => 'fechacal ruptura'),
                       ))
                
             ->add('rotuHora',null,
                  array('label'     => false,
                        'widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'hora ruptura'),
                       ))    
            ->add('rotuMen37sem','choice', array(
                                                    'label'=>'< 37 sem',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true))
            ->add('rotuMayIgual18hrs','choice', array(
                                                    'label'=>'> 18 horas',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true)) 
            ->add('rotuTemp', null, array(
                                            'attr'=>array('class'=>'textos ruptura')
                    ))
            ->add('roturaTempMayIgual38c','choice',  array('label' => 'Temperatura',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                'choices'=> array('1'=>'Temp. >=38C'), 'multiple'=>false, 'expanded'=>true))
            ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper/*
            ->add('id')
            ->add('rotuExistencia')
            ->add('rotuFecha')
            ->add('rotuHora')
            ->add('rotuMen37sem')
            ->add('rotuMayIgual18hrs')
            ->add('rotuTemp')
            ->add('roturaTempMayIgual38c')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;*/
        ->add('rotuExistencia','choice', 
                array(
                    'label' => 'Roturas de membrana de parto',
                    'attr' => array('class' => 'obligatorio'),
                    'choices'=> array('1'=>'Si','2'=>'No'), 
                    'multiple'=>false, 
                    'expanded'=>true))

            /*->add('rotuFecha')*/
            ->add('rotuFecha', 'date',
                    array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'attr'   => array('class' => 'fechacal ruptura'),
                       ))
             ->add('rotuHora',null,
                  array('label'     => false,
                        'widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'hora ruptura'),
                       ))    
            ->add('rotuMen37sem','choice', array(
                                                    'label'=>'< 37 sem',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true))
            ->add('rotuMayIgual18hrs','choice', array(
                                                    'label'=>'> 18 horas',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true)) 
            ->add('rotuTemp', null, array(
                                            'attr'=>array('class'=>'textos ruptura')
                    ))
            ->add('roturaTempMayIgual38c','choice',  array('label' => 'Temperatura',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                'choices'=> array('1'=>'Temp. >=38C'), 'multiple'=>false, 'expanded'=>true))
            ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            /*->add('id')*/
            /*->add('rotuExistencia')*/
            ->add('rotuExistencia','choice', 
                array(
                    'label' => 'Roturas de membrana de parto',
                    'attr' => array('class' => 'obligatorio'),
                    'choices'=> array('1'=>'Si','2'=>'No'), 
                    'multiple'=>false, 
                    'expanded'=>true))

            /*->add('rotuFecha')*/
            ->add('rotuFecha', 'date',
                    array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'attr'   => array('class' => 'fechacal ruptura'),
                       ))
             ->add('rotuHora',null,
                  array('label'     => false,
                        'widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'hora ruptura'),
                       ))    
            ->add('rotuMen37sem','choice', array(
                                                    'label'=>'< 37 sem',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true))
            ->add('rotuMayIgual18hrs','choice', array(
                                                    'label'=>'> 18 horas',
                                                    'attr'=>array('class'=>'textos ruptura'),
                                                    'choices'=>array('1'=>'Si'),
                                                    'multiple'=>false,
                                                    'expanded'=>true)) 
            ->add('rotuTemp', null, array(
                                            'attr'=>array('class'=>'textos ruptura temp')
                    ))
            ->add('roturaTempMayIgual38c','choice',  array('label' => 'Temperatura',
                                                    'attr'=>array('class'=>'textos ruptura tempmayor'),
                                                'choices'=> array('1'=>'Temp. >=38C'), 'multiple'=>false, 'expanded'=>true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        /*$showMapper
            ->add('id')
            ->add('rotuExistencia')
            ->add('rotuFecha')
            ->add('rotuHora')
            ->add('rotuMen37sem')
            ->add('rotuMayIgual18hrs')
            ->add('rotuTemp')
            ->add('roturaTempMayIgual38c')
        ;*/
    }
}
