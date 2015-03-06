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

class ShcpAboAdmisionProcedenAdmin extends Admin
{
    
     /**
     * @param DatagridMapper $datagridMapper
     */
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
           
        $datagridMapper
            //->add('id')
            ->add('adproFechaIngreso')
            ->add('adproHoraMin')
            //->add('adproHospEmb')
            //->add('adproDiasHosp')
            //->add('adproEdadGestSem')
            //->add('adproEdadGestDias')
            //->add('adproEgFumEco')
            //->add('adproTipoAcomp')
            //->add('adproTraslado')
            //->add('adproDetalleTraslado')
            //->add('adproTipoTransport')
            //->add('adproTiemTraslDia')
            //->add('adproTiemTraslHrs')
            //->add('adproTiemTraslMin')
            //->add('adproDigitadorResp')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('adproFechaIngreso')
            ->add('adproHoraMin')
            ->add('adproHospEmb')
            ->add('adproDiasHosp')
            ->add('adproEdadGestSem')
            ->add('adproEdadGestDias')
            ->add('adproEgFumEco')
            ->add('adproTipoAcomp')
            ->add('adproTraslado')
            //->add('adproDetalleTraslado')
            //->add('adproTipoTransport')
            //->add('adproTiemTraslDia')
            //->add('adproTiemTraslHrs')
            //->add('adproTiemTraslMin')
            //->add('adproDigitadorResp')
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
            //->add('id')
            ->add('adproFechaIngreso', 'date')
            ->add('adproHoraMin')
                ->add('adproHospEmb', 'choice', array('label'=>'Hospitalizacion en embarazo',
                'choices'  => array(1 => 'Si', 2 => 'No'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
                
            ->add('adproDiasHosp')
               
            ->add('adproEdadGestSem')
            ->add('adproEdadGestDias')
                ->add('adproEgFumEco', 'choice', array('label'=>'FUM o ECO',
                'choices'  => array(1 => 'FUM', 2 => 'ECO'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
                ->add('adproTipoAcomp', 'choice', array('label'=>'Acompañante',
                'choices'  => array(1 => 'Pareja', 2 => 'Familiar', 3 => 'Otro', 4 => 'Ninguno'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
                ->add('adproTraslado', 'choice', array('label'=>'Traslado desde otro servicio',
                'choices'  => array(1 => 'Si', 2 => 'No'),
                'expanded' => true,
                //'disabled' => $disabled,
                    ))
            ->add('adproDetalleTraslado')
                ->add('adproTipoTransport', 'choice', array('label'=>'Traslado desde otro servicio',
                'choices'  => array(1 => 'Personal', 2 => 'Publico', 3=> 'Ambulancia', 4=> 'Desconocido'),
                'expanded' => false,
                //'disabled' => $disabled,
                    ))
            ->add('adproTiemTraslDia')
            ->add('adproTiemTraslHrs')
            ->add('adproTiemTraslMin')
            ->add('adproDigitadorResp')
                ->add('idEstablecimiento')
                
                ->add('idExpMaterno', null, array('label' => 'Nombre',
                   'required'=>false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('adproFechaIngreso')
            ->add('adproHoraMin')
            ->add('adproHospEmb')
            ->add('adproDiasHosp')
            ->add('adproEdadGestSem')
            ->add('adproEdadGestDias')
            ->add('adproEgFumEco')
            ->add('adproTipoAcomp')
            ->add('adproTraslado')
            ->add('adproDetalleTraslado')
            ->add('adproTipoTransport')
            ->add('adproTiemTraslDia')
            ->add('adproTiemTraslHrs')
            ->add('adproTiemTraslMin')
            ->add('adproDigitadorResp')
        ;
    }
    
    public function getTemplate($name) {
        switch ($name) {
            
            //case 'edit':
               // return 'MinsalshcpBundle:ShcpAboAdmisionProceden:edit.html.twig';
                //break;
            
            case 'create':
                return 'MinsalshcpBundle:ShcpAboAdmisionProceden:edit.html.twig';
                break;
//            case 'lista':
//                return 'MinsalshcpBundle:ShcpAboAdmisionProceden:list.html.twig';
//                break;
           
            default:
                return parent::getTemplate($name);
                break;
        }
    }
//    public function prePersist($fecha) {
//      $fecha->setadproFechaIngreso(new \DateTime());
//          }
       
   
}
