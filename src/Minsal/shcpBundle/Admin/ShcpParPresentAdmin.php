<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParPresentAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('presEdadGestaSem')
            ->add('presEdadGestaDias')
            ->add('presBasadoEn')
            ->add('presPresentSituacion')
            ->add('presTamFetalAcorde')
            ->add('presAcompTrabajoParto')
            ->add('presAcompParto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('presEdadGestaSem')
            ->add('presEdadGestaDias')
            ->add('presBasadoEn')
            ->add('presPresentSituacion')
            ->add('presTamFetalAcorde')
            ->add('presAcompTrabajoParto')
            ->add('presAcompParto')
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
            /*->add('id')*/
            /*->add('presEdadGestaSem')
            ->add('presEdadGestaDias')
            ->add('presBasadoEn')
            ->add('presPresentSituacion')
            ->add('presTamFetalAcorde')
            ->add('presAcompTrabajoParto')
            ->add('presAcompParto')*/

            ->add('presEdadGestaSem','text',array('attr'=>array('class'=>'textos numeros anchopersonalizado obligatorio')))
            ->add('presEdadGestaDias','text',array('attr'=>array('class'=>'textos numeros anchopersonalizado obligatorio')))
            ->add('presBasadoEn','choice', array('label' => '',
                                                'attr'=>array('class'=>'anchopersonalizado obligatorio'),
                                                'choices'=> array('1'=>'Por FUM','2'=>'Por ECO'), 'multiple'=>false, 'expanded'=>true))
            ->add('presPresentSituacion','choice', array('label' => '',
                                                'attr'=>array('class'=>'anchopersonalizado obligatorio'),
                                                'choices'=> array('1'=>'Cefalica','2'=>'Pelviana','3'=>'Transversal'), 'multiple'=>false, 'expanded'=>true))
            ->add('presTamFetalAcorde','choice', array('label' => '',
                                                'attr'=>array('class'=>'anchopersonalizado obligatorio'),
                                                'choices'=> array('1'=>'SI','2'=>'NO'), 'multiple'=>false, 'expanded'=>true))
            ->add('presAcompTrabajoParto','choice', array('label' => '',
                                                'choices'=> array('1'=>'Pareja','2'=>'Familiar','3'=>'Otro','4'=>'Ninguno'), 'multiple'=>false, 'expanded'=>true))
            ->add('presAcompParto','choice', array('label' => '',
                                                'choices'=> array('1'=>'Pareja','2'=>'Familiar','3'=>'Otro','4'=>'Ninguno'), 'multiple'=>false, 'expanded'=>true))
            
        ;

    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('presEdadGestaSem')
            ->add('presEdadGestaDias')
            ->add('presBasadoEn')
            ->add('presPresentSituacion')
            ->add('presTamFetalAcorde')
            ->add('presAcompTrabajoParto')
            ->add('presAcompParto')
        ;
    }
}
