<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpAboPreproced2Admin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('prep2SintomatDias')
                ->add('prep2SintomatHrs')
                ->add('prep2Sangrado')
                ->add('prep2Dolor')
                ->add('prep2DolorEscala')
                ->add('prep2Conciencia')
                ->add('prep2PielMucosa')
                ->add('prep2Abdomen')
                ->add('prep2TamUterino')
                ->add('prep2Posicion')
                ->add('prep2CuelloCerrado')
                ->add('prep2Restos')
                ->add('prep2VaginaNormal')
                ->add('prep2DiametroEco')
                ->add('prep2Tamanio')
                ->add('prep2AnalgeSolicitada')
                ->add('prep2AnalgeRealizada')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('id')
                ->add('prep2SintomatDias')
                ->add('prep2SintomatHrs')
                ->add('prep2Sangrado')
                ->add('prep2Dolor')
                ->add('prep2DolorEscala')
                ->add('prep2Conciencia')
                ->add('prep2PielMucosa')
                ->add('prep2Abdomen')
                ->add('prep2TamUterino')
                ->add('prep2Posicion')
                ->add('prep2CuelloCerrado')
                ->add('prep2Restos')
                ->add('prep2VaginaNormal')
                ->add('prep2DiametroEco')
                ->add('prep2Tamanio')
                ->add('prep2AnalgeSolicitada')
                ->add('prep2AnalgeRealizada')
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
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                // ->add('id')
                ->add('prep2SintomatDias',null, array('label'=>'Dias',
                    'attr' => array('class' => '','maxlength'=>'5','size'=>5)))
                ->add('prep2SintomatHrs',null, array('label'=>'Horas',
                    'attr' => array('class' => '')))
                ->add('prep2Sangrado','choice', array('label' => 'Sangrado',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'Si','0'=>'No','preferred_choices' => array('2'=>'leve','3'=>'moderado','4'=>'severo')),'multiple'=>false, 'expanded'=>true))
                ->add('prep2Dolor','choice', array('label' => 'Dolor',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2DolorEscala',null, array('label'=>'Escala',
                    'attr' => array('class' => '','maxlength'=>'5','size'=>'5')))
                ->add('prep2Conciencia','choice', array('label' => 'Conciencia',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'Lúcida  ','2'=>'Soporosa','3'=>'Excitada','4'=>'Comatosa'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2PielMucosa','choice', array('label' => 'Conciencia', 
                                                    'attr'=>array('class'=>''),'choices'=> array('1'=>'Normal','2'=>'Pálida','3'=>'Equimosis','4'=>'Pelequias','5'=>'Ictericia'), 'multiple'=>false, 'expanded'=>true)
                                             )
                ->add('prep2Abdomen','choice', array('label' => 'Abdomen',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'Normal','2'=>'Visceromrgalias','3'=>'Rebote','4'=>'Distendido','5'=>'Signos peritoniales','6'=>'Silencio abdominal'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2TamUterino',null, array('label'=>'Tamaño',
                    'attr' => array('class' => '')))
                ->add('prep2Posicion','choice', array('label' => 'Conciencia',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'AVF  ','2'=>'Medio','3'=>'RVF'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2CuelloCerrado','choice', array('label' => 'Conciencia',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'SI  ','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2Restos','choice', array('label' => 'Restos',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('0'=>'s/d','1'=>'SI','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2VaginaNormal','choice', array('label' => 'Vagina Normal',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'SI  ','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2DiametroEco','choice', array('label' => 'Ecografia',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'SI  ','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2Tamanio',null, array('label'=>'Tamaño uterino',
                    'attr' => array('class' => '',)))
                ->add('prep2AnalgeSolicitada','choice', array('label' => 'Analgesia Solicitada',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'SI  ','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                ->add('prep2AnalgeRealizada','choice', array('label' => 'Analgesia Realizada',
                                                    'attr'=>array('class'=>''),
                                                'choices'=> array('1'=>'SI  ','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
                //->add('idPreproced1',null, array('label'=>'Tamaño'))
                
//                ->add('normal')
//                
//                ->add('palida')
//                
//                ->add('equimosis')
//                
//                ->add('petequias')
//                
//                ->add('ictericia')
        ;
    }


    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('prep2SintomatDias', null, array('label' => 'Dias'))
                ->add('prep2SintomatHrs')
                ->add('prep2Sangrado')
                ->add('prep2Dolor')
                ->add('prep2DolorEscala')
                ->add('prep2Conciencia')
                ->add('prep2PielMucosa')
                ->add('prep2Abdomen')
                ->add('prep2TamUterino')
                ->add('prep2Posicion')
                ->add('prep2CuelloCerrado')
                ->add('prep2Restos')
                ->add('prep2VaginaNormal')
                ->add('prep2DiametroEco')
                ->add('prep2Tamanio')
                ->add('prep2AnalgeSolicitada')
                ->add('prep2AnalgeRealizada')
        ;
    }

    public function getTemplate($name) {
        switch ($name) {

            case 'edit':
                return 'MinsalshcpBundle:ShcpPreproced2:edit.html.twig';
                break;

            case 'create':
                return 'MinsalshcpBundle:ShcpPreproced2:edit.html.twig';
                break;

            default:
                return parent::getTemplate($name);
                break;
        }
    }
     public function prePersist($objeto) {
    $pielymucosas = "";

$pielymucosas.= $objeto->getNormal();
$pielymucosas.= $objeto->getPalida();
$pielymucosas.= $objeto->getEquimosis();
$pielymucosas.= $objeto->getPetequias();
$pielymucosas.= $objeto>getIctericia();

$objeto->setprep2PielMucosa($pielymucosas);
     }
}
