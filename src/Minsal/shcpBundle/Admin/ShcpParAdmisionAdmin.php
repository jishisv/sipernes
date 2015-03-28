<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParAdmisionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            /*->add('id')
            ->add('admFechaIngreso')
            ->add('admCarnet')
            ->add('admConsultaPrenatal')
            ->add('admHospEmbarazo')
            ->add('admDiasHosp')
            ->add('admCorticoideAnte')
            ->add('admSemanaInicio')
            ->add('admInicio')
            ->add('admDigitadorResp')*/
            ->add('idExpMaterno', null, array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpExpMaterno'
                ))
            ->add('admFechaIngreso', null,
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'label' => 'Fecha de ingreso',
                        'attr'   => array('class' => 'regular date'),
                       ))
            ->add('admCarnet',null, array('label' => 'Presenta carnet materno',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('admConsultaPrenatal',null, array('label' => 'Consultas prenatales totales'))
            ->add('admHospEmbarazo',null, array('label' => 'Hospitalización en embarazo',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admDiasHosp', null, array('label' => 'Días'))
            
            //

            ->add('admCorticoideAnte',null, array('label' => 'Cortoides antenatales',
                                                'choices'=> array('1'=>'Completo','2'=>'Imcompleto','3'=>'Ninguna','4'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
            ->add('admSemanaInicio', null, array('label'=>'Semana de inicio'))
            ->add('admInicio',null, array('label' => 'Inicio (Trabajo de parto)',
                                                'choices'=> array('1'=>'Espontaneo','2'=>'Casero','3'=>'Inducida'), 'multiple'=>false, 'expanded'=>true))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
/*            ->add('id')
            ->add('admFechaIngreso')
            ->add('admCarnet')
            ->add('admConsultaPrenatal')
            ->add('admHospEmbarazo')
            ->add('admDiasHosp')
            ->add('admCorticoideAnte')
            ->add('admSemanaInicio')
            ->add('admInicio')
            ->add('admDigitadorResp')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))*/
            ->add('idExpMaterno', 'entity', array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpExpMaterno'
                ))
            ->add('admFechaIngreso', null,
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'label' => 'Fecha de ingreso',
                        'attr'   => array('class' => 'regular date'),
                       ))
            ->add('admCarnet','choice', array('label' => 'Presenta carnet materno',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admConsultaPrenatal',null, array('label' => 'Consultas prenatales totales'))
            ->add('admHospEmbarazo','choice', array('label' => 'Hospitalización en embarazo',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admDiasHosp', null, array('label' => 'Días'))
            
            //

            ->add('admCorticoideAnte','choice', array('label' => 'Cortoides antenatales',
                                                'choices'=> array('1'=>'Completo','2'=>'Imcompleto','3'=>'Ninguna','4'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
            ->add('admSemanaInicio', null, array('label'=>'Semana de inicio'))
            ->add('admInicio','choice', array('label' => 'Inicio (Trabajo de parto)',
                                                'choices'=> array('1'=>'Espontaneo','2'=>'Casero','3'=>'Inducida'), 'multiple'=>false, 'expanded'=>true))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                    /*'partrabajo' => array("template" => "MinsalshcpBundle:ShcpParTrabajo:partrabajo.html.twig"),*/
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
            /*->add('id')
            ->add('admFechaIngreso')
            ->add('admCarnet')
            ->add('admConsultaPrenatal')
            ->add('admHospEmbarazo')
            ->add('admDiasHosp')
            ->add('admCorticoideAnte')
            ->add('admSemanaInicio')
            ->add('admInicio')
            ->add('admDigitadorResp')*/
            ->add('idExpMaterno', 'entity', array('required' => true, 'label' => 'Nombre de la paciente',
                    'class' => 'MinsalshcpBundle:ShcpExpMaterno'
                ))
            /*->add('admFechaIngreso', 'date', array(
                    'widget' => 'single_text', 'format' => 'dd-MM-yyyy'))*/
                /* 'empty_value' => array('year' => 'Año', 'month' => 'Mes', 'day' => 'Día') */                
            /*->add('admFechaIngreso','date', array('label' => 'Fecha de ingreso'))*/
            ->add('admFechaIngreso', 'date',
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'label' => 'Fecha de ingreso',
                        'attr'   => array('class' => 'fechacal obligatorio'),
                       ))
            ->add('admCarnet','choice', array('label' => 'Presenta carnet materno',
                                                'attr'=> array('class'=> 'obligatorio'),

                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admConsultaPrenatal','text', array(

                                                    'label' => 'Consultas prenatales totales',
                                                    'attr'=> array('class'=> 'textos numeros'),
                                                        ))
            ->add('admHospEmbarazo','choice', array('label' => 'Hospitalización en embarazo',
                                                    'attr'=> array('class'=> 'obligatorio'),

                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admDiasHosp', 'text', array('label' => 'Días hospitalizado','attr'  => array('class' => 'textos numeros')))

            
            //

            ->add('admCorticoideAnte','choice', array('label' => 'Cortoides antenatales',
                                                        'attr'=> array('class'=> 'obligatorio'),

                                                'choices'=> array('1'=>'Completo','2'=>'Imcompleto','3'=>'Ninguna','4'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
            ->add('admSemanaInicio', 'text', array('label'=>'Semana de inicio','attr'  => array('class' => 'textos numeros')))

            ->add('admInicio','choice', array('label' => 'Inicio (Trabajo de parto)',
                                                'attr'=> array('class'=> 'obligatorio'),
                                                'choices'=> array(1 =>'Espontáneo',2 =>'Inducido',3 =>'Cesaria electiva'), 'multiple'=>false, 'expanded'=>true))
            /*->add('admDigitadorResp')*/
            
                /*->add('ruptura', 'sonata_type_admin',array())*/
                ->add('ruptura','sonata_type_admin',array('label' =>'Elemento','attr'=> array('class'=> 'obligatorio'),),
                                                                 array('edit' => 'inline', 'inline' => 'table'))

                ->add('present','sonata_type_admin',array('label' =>'Elemento'),
                                                                 array('edit' => 'inline', 'inline' => 'table'))

            ->end()
            /*->with('ds')
            ->add('parrotura', 'sonata_type_admin', array('label'=>'Informacion de la dependencia'), array('edit' => 'inline'))*/
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           /* ->add('id')
            ->add('admFechaIngreso')
            ->add('admCarnet')
            ->add('admConsultaPrenatal')
            ->add('admHospEmbarazo')
            ->add('admDiasHosp')
            ->add('admCorticoideAnte')
            ->add('admSemanaInicio')
            ->add('admInicio')
            ->add('admDigitadorResp')*/
            ->add('admFechaIngreso',null, array('label' => 'Fecha de ingreso'))
            /*->add('admCarnet')*/
            ->add('admCarnet','choice', array('label' => 'Presenta carnet materno',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            /*->add('admConsultaPrenatal')
            ->add('admHospEmbarazo')
            ->add('admDiasHosp')
            ->add('admCorticoideAnte')
            ->add('admSemanaInicio')
            ->add('admInicio')
            ->add('admDigitadorResp')*/
            ->add('admConsultaPrenatal',null, array('label' => 'Consultas prenatales totales'))
            ->add('admHospEmbarazo','choice', array('label' => 'Hospitalización en embarazo',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('admDiasHosp', null, array('label' => 'Días'))
            
            //

            ->add('admCorticoideAnte','choice', array('label' => 'Cortoides antenatales',
                                                'choices'=> array('1'=>'Completo','2'=>'Imcompleto','3'=>'Ninguna','4'=>'n/c'), 'multiple'=>false, 'expanded'=>true))
            ->add('admSemanaInicio', null, array('label'=>'Semana de inicio'))
            ->add('admInicio','choice', array('label' => 'Inicio (Trabajo de parto)',
                                                'choices'=> array('1'=>'Espontaneo','2'=>'Casero','3'=>'Inducida'), 'multiple'=>false, 'expanded'=>true))
        ;
    }


    public function getTemplate($name) {
        switch ($name) {
            /*case 'list':
                return 'MinsalshcpBundle:ShcpParAdmision:index.html.twig';
                break;*/
            case 'edit':
                return 'MinsalshcpBundle:ShcpParAdmision:edit.html.twig';
                break;
            case 'create':
                return 'MinsalshcpBundle:ShcpParAdmision:edit.html.twig';
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

    public function prePersist($admisionparto) {
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
    }


}
