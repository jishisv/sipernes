<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpPrePacienteAdmin extends Admin
{
    
    protected $baseRouteName = 'shcp_preparacion';
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('preFecha')
            ->add('prePesoPte')
            ->add('preTallaPte')
            ->add('preTempPte')
            ->add('prePaSistole')
            ->add('prePaDiastole')
            ->add('preDestinoPte')
            ->add('preDetalleObser')
            ->add('idExpMaterno', null, array('label' => 'Nombre',
+                   'required'=>true))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('idExpMaterno')    
            ->add('preFecha')
            ->add('prePesoPte')
            ->add('preTallaPte')
            ->add('preTempPte')
            ->add('prePaSistole')
            ->add('prePaDiastole')
            ->add('preDestinoPte')
            ->add('preDetalleObser')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    //'delete' => array(),
                       'aborto' => array("template" => "MinsalshcpBundle:ShcpAboAdmisionProceden:aborto.html.twig"),
                       'parto' => array("template" => "MinsalshcpBundle:ShcpParAdmision:parto.html.twig"),
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
           // ->add('id')
          
            ->add('prePesoPte',null ,array( 'attr'=> array('class'=> 'textos obligatorio')))
            ->add('preTallaPte',null ,array( 'attr'=> array('class'=> 'textos obligatorio')))
            ->add('preTempPte',null ,array( 'attr'=> array('class'=> 'textos obligatorio')))
            ->add('prePaSistole',null ,array( 'attr'=> array('class'=> 'presion textos obligatorio')))
  
            ->add('prePaDiastole',null ,array( 'attr'=> array('class'=> 'presion textos obligatorio')))
            ->add('preDestinoPte',null ,array( 'attr'=> array('class'=> 'textos obligatorio')))
                
         ->add('preDestinoPte','choice', array('label' => 'Destino',
                                                'attr'=>array('class'=>'obligatorio'),
                                                'choices'=> array('1'=>'Inscripción','2'=>'Control de Seguimiento','3'=>'Parto', '4'=>'Aborto','5'=>'Control Puerperal'), 'multiple'=>false, 'expanded'=>false))
            ->add('preDetalleObser', 'textarea', array('attr' => array('class' => 'tinymce')))          
            ->add('idExpMaterno', null, array('label' => 'Nombre',
                   'required'=>true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('preFecha')
            ->add('prePesoPte')
            ->add('preTallaPte')
            ->add('preTempPte')
            ->add('prePaSistole')
            ->add('prePaDiastole')
            ->add('preDestinoPte')
            ->add('preDetalleObser')
        ;
    }
     public function getTemplate($name) {
 switch ($name) {
        case 'lista':
        return 'MinsalshcpBundle:ShcpPrepaciente:preparacionins.html.twig';
        break;
        case 'edit':
        return 'MinsalshcpBundle:ShcpPrePaciente:edit.html.twig';
        break;
        case 'show':
         return 'MinsalshcpBundle:ShcpPrePaciente:show.html.twig';
         break;
        /* case 'buscaremergencia':
        + return 'MinsalSiapsBundle:MntPacienteAdmin:list.html.twig';
        + break;*/
        default:
        return parent::getTemplate($name);
            break;
     }
 }
     public function prePersist($prepaciente) {
      $prepaciente->setPreFecha(new \DateTime());
    }
    
      public function getNewInstance() {
	      $instans= parent::getNewInstance();
	      if ($this->hasRequest()){
		  $prueba=$this->getRequest()->get('id_clap',null);
		  if($prueba!== null){
		      $em = $this->getModelManager()->getEntityManager('Minsal\shcpBundle\Entity\ShcpExpMaterno');
		      $objeto= $em->getReference('Minsal\shcpBundle\Entity\ShcpExpMaterno',$prueba);
		      $instans-> setIdExpMaterno($objeto);
		  }
	      }
	      return $instans;
	  }
}

