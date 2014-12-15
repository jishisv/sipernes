<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpParPatologiaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('patExistencia')
            ->add('patEnfermedad')
            ->add('patHemorragia1trim')
            ->add('patHemorragia2trim')
            ->add('patHemorragia3trim')
            ->add('patPostparto')
            ->add('patInfecPuerperal')
            ->add('patNotas')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('patExistencia')
            ->add('patEnfermedad')
            ->add('patHemorragia1trim')
            ->add('patHemorragia2trim')
            ->add('patHemorragia3trim')
            ->add('patPostparto')
            ->add('patInfecPuerperal')
            ->add('patNotas')
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
            
            /*->add('patExistencia','choice', array('label' => 'Enfermedades (Patologias maternas)',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))*/

            ->add('patExistencia','choice', array('label' => 'Enfermedades',
                                                    'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))

            /*->add('patEnfermedad')*/
            ->add('patHemorragia1trim','choice', array('label' => 'Primer trimestre',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('patHemorragia2trim','choice', array('label' => 'Segundo trimestre',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('patHemorragia3trim','choice', array('label' => 'Tercer trimestre',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('patPostparto','choice', array('label' => 'Post parto',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('patInfecPuerperal','choice', array('label' => 'Infección puerperial',
                                                'choices'=> array('1'=>'Si','2'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('patNotas', 'textarea',array(
                                            'attr'=>array('maxlength'=>200,'class'=>'areadetextos')

            ))


            /*->add('detallepatologias','sonata_type_collection',array('label' =>'Elemento'),
                                                                 array('edit' => 'inline', 'inline' => 'table'))*/
            

            ->add('htaprevia','choice', array('label' => 'HTA previa',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('htainducido','choice', array('label' => 'HTA Inducido embarazo',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('preeclampsia','choice', array('label' => 'Preeclampsia',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('eclampsia','choice', array('label' => 'Eclampsia',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('cardiopatia','choice', array('label' => 'Cardiopatia',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('nefropatia','choice', array('label' => 'Nefropatia',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('diabetes','choice', array('label' => 'Diabetes',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('infeccionovular','choice', array('label' => 'Infeccionovular',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('infeccionurinaria','choice', array('label' => 'Infeccionurinaria',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('amenazaparto','choice', array('label' => 'Amenazaparto',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            ->add('rciu','choice', array('label' => 'RCIU',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('roturaprem','choice', array('label' => 'Roturaprem',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('anemia','choice', array('label' => 'Anemia',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))
            ->add('otracondicion','choice', array('label' => 'Otra condicion',
                                                'choices'=> array('1'=>'Si','0'=>'No'), 'multiple'=>false, 'expanded'=>true))

            /*->end()

            ->with('Elementos del Catalogo')*/
                ->add('detallepatologias','sonata_type_collection',array('label' =>'Detalle'),
                                                                 array('edit' => 'inline', 'inline' => 'table'))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('patExistencia')
            ->add('patEnfermedad')
            ->add('patHemorragia1trim')
            ->add('patHemorragia2trim')
            ->add('patHemorragia3trim')
            ->add('patPostparto')
            ->add('patInfecPuerperal')
            ->add('patNotas')
        ;
    }

    public function getTemplate($name) {
        switch ($name) {
            /*case 'list':
                return 'MinsalshcpBundle:ShcpParTrabajo:index.html.twig';
                break;*/
            case 'edit':
            /*case 'create':*/
                return 'MinsalshcpBundle:ShcpParPatologia:edit.html.twig';
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


    public function prePersist($patologias) {
        
        $enfermedad = "";
        $enfermedad .= $patologias->getHtaprevia();
        $enfermedad .= $patologias->getHtainducido();
        $enfermedad .= $patologias->getPreeclampsia();
        $enfermedad .= $patologias->getEclampsia();
        $enfermedad .= $patologias->getCardiopatia();
        $enfermedad .= $patologias->getNefropatia();
        $enfermedad .= $patologias->getDiabetes();
        $enfermedad .= $patologias->getInfeccionovular();
        $enfermedad .= $patologias->getInfeccionurinaria();
        $enfermedad .= $patologias->getAmenazaparto();
        $enfermedad .= $patologias->getRciu();
        $enfermedad .= $patologias->getRoturaprem();
        $enfermedad .= $patologias->getAnemia();
        $enfermedad .= $patologias->getOtracondicion();
        $patologias->setPatEnfermedad($enfermedad);
        foreach ($patologias->getDetallepatologias() as $patologiasDetalle) {
            $patologiasDetalle->setIdPatologia($patologias);
        }        
    }
 
    public function preUpdate($patologias) {
        
        $enfermedad = "";
        $enfermedad .= $patologias->getHtaprevia();
        $enfermedad .= $patologias->getHtainducido();
        $enfermedad .= $patologias->getPreeclampsia();
        $enfermedad .= $patologias->getEclampsia();
        $enfermedad .= $patologias->getCardiopatia();
        $enfermedad .= $patologias->getNefropatia();
        $enfermedad .= $patologias->getDiabetes();
        $enfermedad .= $patologias->getInfeccionovular();
        $enfermedad .= $patologias->getInfeccionurinaria();
        $enfermedad .= $patologias->getAmenazaparto();
        $enfermedad .= $patologias->getRciu();
        $enfermedad .= $patologias->getRoturaprem();
        $enfermedad .= $patologias->getAnemia();
        $enfermedad .= $patologias->getOtracondicion();
        $patologias->setPatEnfermedad($enfermedad);
        foreach ($patologias->getDetallepatologias() as $patologiasDetalle) {
            $patologiasDetalle->setIdPatologia($patologias);                    
        }
    }


}
