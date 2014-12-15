<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParTrabajoPartoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            /*->add('id')*/
            ->add('idAdmisionParto', null, array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpExpMaterno'
                ))
            ->add('trabPartograma', null, array('label' => 'Detalle de partograma'))
            ->add('trabHora', null, array('label' => 'Hora'))
            ->add('trabPosicion', null, array('label' => 'Posición'))
            ->add('trabPaSistole', null, array('label' => 'Sístole'))
            ->add('trabPaDiastole', null, array('label' => 'Diástole'))
            ->add('trabPulso', null, array('label' => 'Latidos por minuto'))
            ->add('trabContrac', null, array('label' => 'Contracciones uterinas'))
            ->add('trabDilatacion', null, array('label' => 'Dilatación cervical'))
            ->add('trabAlturaPresent', null, array('label' => 'Altura presentación'))
            ->add('trabVariedadPosic', null, array('label' => 'Variedad de posición'))
            ->add('trabMeconio', null, array('label' => 'Meconio'))
            ->add('trabFcfDips', null, array('label' => 'Frecuencia cardiaca fetal'))



        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            /*->add('id')*/
            ->add('idAdmisionParto', 'entity', array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpParAdmision'
                ))
            ->add('trabPartograma','choice', array('label' => 'Detalle de partograma',
                                                    'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            /*->add('trabHora'*//*,'text',array('attr'=>array('class'=>'textos'))*//*)*/
            
            ->add('trabHora', null, array('label' => 'Hora'))
            ->add('trabPosicion', null, array('label' => 'Posición'))
            ->add('trabPaSistole', null, array('label' => 'Sístole'))
            ->add('trabPaDiastole', null, array('label' => 'Diástole'))
            ->add('trabPulso', null, array('label' => 'Latidos por minuto'))
            ->add('trabContrac', null, array('label' => 'Contracciones uterinas'))
            ->add('trabDilatacion', null, array('label' => 'Dilatación cervical'))
            ->add('trabAlturaPresent', null, array('label' => 'Altura presentación'))
            ->add('trabVariedadPosic', null, array('label' => 'Variedad de posición'))
            ->add('trabMeconio', null, array('label' => 'Meconio'))
            ->add('trabFcfDips', null, array('label' => 'Frecuencia cardiaca fetal'))
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
            ->add('idAdmisionParto', 'entity', array('read_only'=>true, 'required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpParAdmision'
                ))
            ->add('trabPartograma','choice', array('label' => 'Detalle de partograma',
                                                    'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            /*->add('trabHora'*//*,'text',array('attr'=>array('class'=>'textos'))*//*)*/
            ->add('trabHora',null,
                  array('label'     => false,
                        'widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'textos obligatorio hora'),
                       )) 
            ->add('trabPosicion',null, array('attr'=>array('maxlength'=>3,'class'=>'textos obligatorio')))
            ->add('trabPaSistole', 'text', array('attr'=>array('maxlength'=>3,'class'=>'presion textos numeros  obligatorio')))
            ->add('trabPaDiastole', 'text', array('attr'=>array('maxlength'=>3,'class'=>'presion textos  numeros obligatorio')))
            ->add('trabPulso','text', array('attr'=>array('class'=>'textos  numeros obligatorio')))
            ->add('trabContrac','text', array('attr'=>array('class'=>'textos  numeros obligatorio')))
            ->add('trabDilatacion','text', array('attr'=>array('class'=>'textos  numeros obligatorio')))
            ->add('trabAlturaPresent','text', array('attr'=>array('maxlength'=>1,'class'=>'textos numeros obligatorio')))
            ->add('trabVariedadPosic','text', array('attr'=>array('maxlength'=>4,'class'=>'textos obligatorio')))
            ->add('trabMeconio','choice', array('label' => 'Meconio',
                                                'attr'=>array('class'=>' numeros obligatorio'),
                                                'choices'=> array('1'=>'Positivo','2'=>'Negativo'), 'multiple'=>false, 'expanded'=>true))
            ->add('trabFcfDips','text', array('attr'=>array('class'=>'textos numeros obligatorio alertas')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            /*->add('id')*/
            ->add('trabPartograma', null, array('label' => 'Detalle de partograma'))
            ->add('trabHora', null, array('label' => 'Hora'))
            ->add('trabPosicion', null, array('label' => 'Posición'))
            ->add('trabPaSistole', null, array('label' => 'Sístole'))
            ->add('trabPaDiastole', null, array('label' => 'Diástole'))
            ->add('trabPulso', null, array('label' => 'Latidos por minuto'))
            ->add('trabContrac', null, array('label' => 'Contracciones uterinas'))
            ->add('trabDilatacion', null, array('label' => 'Dilatación cervical'))
            ->add('trabAlturaPresent', null, array('label' => 'Altura presentación'))
            ->add('trabVariedadPosic', null, array('label' => 'Variedad de posición'))
            ->add('trabMeconio', null, array('label' => 'Meconio'))
            ->add('trabFcfDips', null, array('label' => 'Frecuencia cardiaca fetal'))
        ;
    }


    public function getTemplate($name) {
        switch ($name) {
            /*case 'list':
                return 'MinsalshcpBundle:ShcpParTrabajo:index.html.twig';
                break;*/
            case 'edit':
            /*case 'create':*/
                return 'MinsalshcpBundle:ShcpParTrabajo:edit.html.twig';
                break;
            /*case 'create':
                return 'MinsalshcpBundle:ShcpParTrabajo:edit.html.twig';
                break;*/
           /*case 'show':*/
                //return 'MinsalshcpBundle:ShcpExpMaterno:show.html.twig';
                //break;
            /*
            case 'buscaremergencia':
                return 'MinsalSiapsBundle:MntPacienteAdmin:list.html.twig';
                break;*/
            default:
                return parent::getTemplate($name);
                break;
        }
    }

   /* public function prePersist($admisionparto) {
        $ruptura = $admisionparto->getRuptura();
        $ruptura->setIdAdmisionParto($admisionparto);

        $present = $admisionparto->getPresent();
        $present->setIdAdmisionParto($admisionparto);
 

        //code...
    }

    public function preUpdate($admisionparto) {
        $ruptura = $admisionparto->getRuptura();
        $ruptura->setIdAdmisionParto($admisionparto);

        $present = $admisionparto->getPresent();
        $present->setIdAdmisionParto($admisionparto);
 
        //code...
    }*/
}
