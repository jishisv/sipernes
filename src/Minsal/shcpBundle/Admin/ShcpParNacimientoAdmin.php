<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParNacimientoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nacTipoNacimiento')
            ->add('nacFecNacimiento')
            ->add('nacHoraNacimiento')
            ->add('nacMultiple')
            ->add('nacOrden')
            ->add('nacTerminac')
            ->add('nacPosicionParto')
            ->add('nacEpisioto')
            ->add('nacDesgarros')
            ->add('nacOcitocicosPrealumb')
            ->add('nacOcitocicosPostlumb')
            ->add('nacPlacentaCompleta')
            ->add('nacPlacentaRetenida')
            ->add('nacLigaduraPrecoz')
            ->add('nacMedicacionRecibida')
            ->add('nacOtrosMedic')
            ->add('nacOtroMedic1')
            ->add('nacOtroMedic2')
            ->add('nacPartoAtendidoPor')
            ->add('nacAtendioParto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nacTipoNacimiento')
            ->add('nacFecNacimiento')
            ->add('nacHoraNacimiento')
            ->add('nacMultiple')
            ->add('nacOrden')
            ->add('nacTerminac')
          /*  ->add('nacPosicionParto')
            ->add('nacEpisioto')
            ->add('nacDesgarros')
            ->add('nacOcitocicosPrealumb')
            ->add('nacOcitocicosPostlumb')
            ->add('nacPlacentaCompleta')
            ->add('nacPlacentaRetenida')*/
            ->add('nacLigaduraPrecoz')
            ->add('nacMedicacionRecibida')
            ->add('nacOtrosMedic')
            ->add('nacOtroMedic1')
            ->add('nacOtroMedic2')
            ->add('nacPartoAtendidoPor')
            ->add('nacAtendioParto')
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
            ->add('idEstablecimiento')
            ->add('nacTipoNacimiento','choice', array('label' => 'Tipo de nacimiento',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Vivo','2'=>'Muerto'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacFecNacimiento', 'date',
                  array('label'  => 'Fecha',
                        'widget' => 'single_text',
                        'attr'   => array('class' => 'fechacal obligatorio'),
                       ))
            ->add('nacHoraNacimiento',null,
                  array('widget'    => 'single_text',
                        //'read_only' => true,
                        'attr'      => array('class' => 'hora textos obligatorio'),
                       )) 
            ->add('nacMultiple','choice', array('label' => 'Tipo de nacimiento',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacOrden',null, array('label' => 'Tipo de nacimiento',
                                                'attr'=>array('class'=>'textos numeros')))
            ->add('nacTerminac','choice', array('label' => 'Terminación',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Espontanea','2'=>'Cesarea','3'=>'Forceps','4'=>'Vacuum','5'=>'Otra'), 'multiple'=>false, 'expanded'=>true))

            ->add('idIndicacionParto', null, array('label' => 'Indicación',
                                                'attr'=>array('class'=>'desplegable ')))

            ->add('nacPosicionParto','choice', array('label' => 'Posición parto',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Sentada','2'=>'Acostada','3'=>'Cuclillas'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacEpisioto','choice', array('label' => 'Episiotomia',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacDesgarros','choice', array('label' => 'Desgarros',
                                                'choices'=> array('1'=>'No', '2'=>'Grado 1','3'=>'Grado 2','4'=>'Grado 3','5'=>'Grado 4'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacOcitocicosPrealumb','choice', array('label' => 'Prealumbramiento',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacOcitocicosPostlumb','choice', array('label' => 'Postalumbramiento',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacPlacentaCompleta','choice', array('label' => 'Completa',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacPlacentaRetenida','choice', array('label' => 'Retenida',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacLigaduraPrecoz','choice', array('label' => 'Ligadura',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            /*->add('nacMedicacionRecibida')*/


            ->add('ocitocicos','choice', array('label' => 'ocitocicos',
                                                'choices'=> array('0'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('antibioticos','choice', array('label' => 'antibioticos',
                                                'choices'=> array('1'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('analgesia','choice', array('label' => 'analgesia',
                                                'choices'=> array('2'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('anestesialocal','choice', array('label' => 'anestesialocal',
                                                'choices'=> array('3'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('anestesiaregional','choice', array('label' => 'anestesiaregional',
                                                'choices'=> array('4'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('anestesiageneral','choice', array('label' => 'anestesiaregional',
                                                'choices'=> array('5'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('transfusion','choice', array('label' => 'transfusion',
                                                'choices'=> array('6'=>'Si','-'=>'No'), 'multiple'=>false, 'expanded'=>true))
            


            ->add('nacOtrosMedic','choice', array('label' => 'Otros',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('nacOtroMedic1','choice', array('label' => 'Terminación',

                                                'attr'=>array('class'=>'desplegable '),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>false))
            ->add('nacOtroMedic2','choice', array('label' => 'Terminación',
                                                'attr'=>array('class'=>'desplegable '),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>false))
            ->add('nacPartoAtendidoPor','choice', array('label' => 'Terminación',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Médico','2'=>'Obstetrica','3'=>'Enfermera','4'=>'Auxiliar','5'=>'Estudiante','6'=>'Empirica','7'=>'Otro'), 'multiple'=>false, 'expanded'=>true))
           /* ->add('nacAtendioParto','text', array(
                                                'attr'=>array('class'=>'textos obligatorio'),

                ))*/

            ->add('nacAtendioParto'/*, 'entity', array('required' => true, 'label' => 'Nombre',
                    'class' => 'MinsalshcpBundle:MntEmpleado'
                )*/)
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nacTipoNacimiento')
            ->add('nacFecNacimiento')
            ->add('nacHoraNacimiento')
            ->add('nacMultiple')
            ->add('nacOrden')
            ->add('nacTerminac')
            ->add('nacPosicionParto')
            ->add('nacEpisioto')
            ->add('nacDesgarros')
            ->add('nacOcitocicosPrealumb')
            ->add('nacOcitocicosPostlumb')
            ->add('nacPlacentaCompleta')
            ->add('nacPlacentaRetenida')
            ->add('nacLigaduraPrecoz')
            ->add('nacMedicacionRecibida')
            ->add('nacOtrosMedic')
            ->add('nacOtroMedic1')
            ->add('nacOtroMedic2')
            ->add('nacPartoAtendidoPor')
            ->add('nacAtendioParto')
        ;
    }


    public function getTemplate($name) {
        switch ($name) {
            /*case 'list':
                return 'MinsalshcpBundle:ShcpParTrabajo:index.html.twig';
                break;*/
            case 'edit':
            /*case 'create':*/
                return 'MinsalshcpBundle:ShcpParNacimiento:edit.html.twig';
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


    public function prePersist($nacimientoparto) {
        $medicina = "";
        $medicina .= $nacimientoparto->getOcitocicos();
        $medicina .= $nacimientoparto->getAntibioticos();
        $medicina .= $nacimientoparto->getAnalgesia();
        $medicina .= $nacimientoparto->getAnestesialocal();
        $medicina .= $nacimientoparto->getAnestesiaregional();
        $medicina .= $nacimientoparto->getAnestesiageneral();
        $medicina .= $nacimientoparto->getTransfusion();
        $nacimientoparto->setNacMedicacionRecibida($medicina);

        
    }

    public function preUpdate($nacimientoparto) {
        $medicina = "";
        $medicina .= $nacimientoparto->getOcitocicos();
        $medicina .= $nacimientoparto->getAntibioticos();
        $medicina .= $nacimientoparto->getAnalgesia();
        $medicina .= $nacimientoparto->getAnestesialocal();
        $medicina .= $nacimientoparto->getAnestesiaregional();
        $medicina .= $nacimientoparto->getAnestesiageneral();
        $medicina .= $nacimientoparto->getTransfusion();
        $nacimientoparto->setNacMedicacionRecibida($medicina);

    }


}
