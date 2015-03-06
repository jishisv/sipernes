<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class ShcpDocResultadoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            //->add('resulHojaFiltro')
            //->add('resulTamizaje')
            //->add('resulObservHojaFiltro')
            ->add('resulNumControl')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          //  ->add('id').
            ->add('idexpmaterno')      
            ->add('resulHojaFiltro')
            ->add('resulTamizaje')
            ->add('resulObservHojaFiltro')
             ->add('resulNumControl')
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
        $request = $this->getRequest();
        $tipo=$request->get('tipo_cuestionario');
        if($tipo==1){
        $formMapper
          //  ->add('id')
            //->add('resulHojaFiltro')
            //->add('resulTamizaje')
            ->add('resulObservHojaFiltro')
                ->add('resulNumControl')
        ;
        }
        else{
            $formMapper
                ->add('resulNumControl');
        }
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('resulHojaFiltro')
            ->add('resulTamizaje')
            ->add('resulObservHojaFiltro')
                ->add('resulNumControl')
        ;
    }
    
    public function getTemplate($name) {
        switch ($name) {
            
            case 'create':
                return 'MinsalshcpBundle:ShcpDocResultado:edit.html.twig';
                break;
            
            case 'show':
                return 'MinsalshcpBundle:ShcpDocResultado:show.html.twig';
                break;
            
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
