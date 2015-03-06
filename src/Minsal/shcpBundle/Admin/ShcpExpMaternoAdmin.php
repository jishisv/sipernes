<?php
namespace Minsal\shcpBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Validator\ErrorElement;

class ShcpExpMaternoAdmin extends Admin
{

    protected function configureRoutes(RouteCollection $collection) {
	  $collection->add("preparar"); 
	}
        
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          
            ->add('expNombre')
            ->add('expApellido')
            ->add('expClap')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
           
                 ->add('expNombre')
            ->add('expApellido')
            ->add('expDireccion')
            ->add('expTelefono')
            ->add('expFechaCreacion')
            ->add('expEdad')        
            ->add('expClap')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'preparar' => array("template" => "MinsalshcpBundle:ShcpExpMaterno:preparar.html.twig")
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        
        /*$request = $this->getRequest();
        $primerNombre = chop(ltrim($request->get('nombre'))); */

        $formMapper
                ->add('expNombre','text',array('label'=>'Nombre', 
                'attr' => array('placeholder' => 'Introduzca Nombres', 'readonly' => true   )))
                
            ->add('expApellido','text',array('label'=>'Apellidos', 
                'attr' => array('placeholder' => 'Introduzca Apellidos', 'readonly' => true   )))
            ->add('expDireccion','text',array('label'=>'Direccion', 
                'attr' => array('placeholder' => 'Introduzca Direccion'    )))
                ->end()
            //->add('id')
            
       
            ->add('expTelefono')
           //->add('expFechaCreacion')
            ->add('expEdad','text')// SI DA ERROR DESPUES ES AQUI
                ->add('expEdadRgo', 'choice', array('label'=>'Edad < 15 o mayor de 35',
                'choices'  => array(0 => 'NO', 1 => 'SI'),
                'expanded' => true,
                'disabled' => true,
                
                //'disabled' => $disabled,
                    ))
                ->add('expEtnia', 'choice', array('label'=>'Etnia',
                'choices'   => array(0 => 'Blanca', 1 => 'Mestiza', 3 => 'Indigena', 4 => 'Negra', 5 => 'Otra'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
                ->add('expAlfabeta', 'choice', array('label'=>'Alfabeta',
                'choices'   => array(0 => 'NO', 1 => 'SI'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
            ->add('expEstudios')
                ->add('expEstudios', 'choice', array('label'=>'Estudio',
                'choices'   => array(0 => 'Ninguno', 1 => 'Primaria', 3 => 'Secundaria', 4 => 'Universidad'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
            ->add('expAniosNivelStudio')

                ->add('expViveSola', 'choice', array('label'=>'Vive sola',
                'choices'   => array(0 => 'NO', 1 => 'SI'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
           // ->add('expMuni')
                 ->add('expMuni', null, array('label' => 'Municipio',
                   'required'=>true))
            ->add('expDepto')
            ->add('expDocIdent')
                ->add('expEstado', 'choice', array('label'=>'Estado civil',
                'choices'   => array(0 => 'casada', 1 => 'Soltera', 3 => 'Union estable', 4 => 'Otro'),
                'expanded' => true,
     
                //'disabled' => $disabled,
                    ))
            
                ->add('expTipoControl', 'choice', array('label'=>'Tipo de control',
                'choices'   => array(0 => 'Basico', 1 => 'Especializado'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
            ->add('expClap')
            //->add('idMntExpediente')

            //->add('idMntExpediente', 'sonata_type_collection', array('label' => 'Expediente',
              //      'required'=>true))
            //->add('idEstablecimiento','integer', array('label' => 'Establecimiento',
             //       'required'=>true))
        ;
        
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('expNombre','text',array('label'=>'Nombre'))
            ->add('expApellido','text',array('label'=>'Apellido'))
            ->add('expDireccion')
            ->add('expTelefono')
            ->add('expFechaCreacion',null,array('label'=>'Fecha Creacion'))
            ->add('expEdad','text',array('label'=>'Edad'))
            ->add('expEdadRgo')
            ->add('expEtnia')
            ->add('expAlfabeta')
            ->add('expEstudios')
            ->add('expAniosNivelStudio')
            ->add('expViveSola')
            ->add('expMuni')
            ->add('expDepto')
            ->add('expDocIdent')
            ->add('expEstado')
            ->add('expTipoControl')
            ->add('expClap','text',array('label'=>'Expediente Materno'))
        ;
    }
        public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalshcpBundle:ShcpExpMaterno:edit.html.twig';
                break;
            case 'create':
                return 'MinsalshcpBundle:ShcpExpMaterno:edit.html.twig';
                break;
           case 'show':
                return 'MinsalshcpBundle:ShcpExpMaterno:show.html.twig';
                break;
            /*
            case 'buscaremergencia':
                return 'MinsalSiapsBundle:MntPacienteAdmin:list.html.twig';
                break;*/
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
        /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo shcpexpmaterno
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($expmaterno) {
      $expmaterno->setexpFechaCreacion(new \DateTime());

    }
     public function validate(ErrorElement $errorElement, $expmaterno) {
  if (is_null($expmaterno->getExpClap())) {
            $errorElement->with('ExpClap')
                    ->addViolation('El numero clap es obligatorio')
                    ->end();
        }
        $errorElement->with('ExpClap')
                ->assertLength(array('min' => 2, 'minMessage' => 'El numero CLAP debe de contener más de 2 carácteres',
                    'max' => 150, 'maxMessage' => 'El nombre debe de contener menos de 150 caractéres'
                ))
                ->end();
        
 }

}

