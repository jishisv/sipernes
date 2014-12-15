<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParPuerperioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('puerFecha')
            ->add('puerHora')
            ->add('puerTemp')
            ->add('puerPaSistole')
            ->add('puerPaDiastole')
            ->add('puerPulso')
            ->add('puerInvolucion')
            ->add('puerLoquios')
            ->add('puerAntirubeo')
            ->add('puerGlobulinaAntid')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('puerFecha')
            ->add('puerHora')
            ->add('puerTemp')
            ->add('puerPaSistole')
            ->add('puerPaDiastole')
            ->add('puerPulso')
            ->add('puerInvolucion')
            ->add('puerLoquios')
            ->add('puerAntirubeo')
            ->add('puerGlobulinaAntid')
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
            ->add('idAdmisionParto', 'entity', array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpParAdmision'
                ))
            ->add('puerFecha', 'date',
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'label' => 'Fecha de ingreso',
                        'attr'   => array('class' => 'fechacal obligatorio'),
                       ))
            ->add('puerHora',null,
                  array('label'     => false,
                        'widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'textos obligatorio hora'),
                       ))  
            ->add('puerTemp','text', array('attr'=>array('class'=>'textos obligatorio')))


            ->add('puerPaSistole', 'text', array('attr'=>array('maxlength'=>3,'class'=>'presion textos obligatorio')))
            ->add('puerPaDiastole', 'text', array('attr'=>array('maxlength'=>3,'class'=>'presion textos obligatorio')))

            ->add('puerPulso','text', array('attr'=>array('class'=>'textos obligatorio')))
            ->add('puerInvolucion', 'text',array('attr'=>array('class'=>'textos obligatorio')))
            ->add('puerLoquios', 'text', array('attr'=>array('maxlength'=>'30','class'=>'textos obligatorio')))
            ->add('puerAntirubeo','choice', array('label' => 'Meconio',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No', '3'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
            ->add('puerGlobulinaAntid','choice', array('label' => 'Meconio',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No', '3'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('puerFecha')
            ->add('puerHora')
            ->add('puerTemp')
            ->add('puerPaSistole')
            ->add('puerPaDiastole')
            ->add('puerPulso')
            ->add('puerInvolucion')
            ->add('puerLoquios')
            ->add('puerAntirubeo')
            ->add('puerGlobulinaAntid')
        ;
    }

    public function getTemplate($name) {
        switch ($name) {
            /*case 'list':
                return 'MinsalshcpBundle:ShcpParTrabajo:index.html.twig';
                break;*/
            case 'edit':
            /*case 'create':*/
                return 'MinsalshcpBundle:ShcpParPuerperio:edit.html.twig';
                break;
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

}
