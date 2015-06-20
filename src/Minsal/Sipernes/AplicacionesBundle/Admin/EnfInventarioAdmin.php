<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idComponente', null, array('label' => 'Componente'))
            //->add('existencia')
            ->add('estadoInventario', null, array('label' => 'Activo'))
            ->add('fechaIngresoInventario', null, array('label' => 'Creado el'))
            //->add('usuarioInventario')
            ->add('caducidadInventario', null, array('label' => 'Caducidad'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoInventario' // name of the ordered field (default = the model id field, if any)
    );    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idComponente', null, array('label' => 'Componente'))
            ->add('existencia', null, array('label' => 'Existencia (unidades)'))
            ->add('estadoInventario', null, array('label' => 'Activo'))
            ->add('caducidadInventario', null, array('label' => 'Caducidad'))
            ->add('fechaIngresoInventario', null, array('label' => 'Creado el'))
            ->add('usuarioInventario', null, array('label' => 'Creado por'))           
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
//            ->add('id')
            ->add('idComponente', null, array('label' => 'Seleccione componente','required' => true))   
            ->add('existencia', null, array('label' => 'Existencia (unidades)','required' => true))
            ->add('caducidadInventario', null, array('label' => 'Caducidad','required' => true))
           //->add('fechaIngresoInventario')
           //->add('usuarioInventario')
            ->add('estadoInventario', null, array('label' => 'Activo'))
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idComponente', null, array('label' => 'Componente'))
            ->add('existencia', null, array('label' => 'Existencia (unidades)'))
            ->add('fechaIngresoInventario', null, array('label' => 'Creado el'))
            ->add('usuarioInventario', null, array('label' => 'Creado por'))
            ->add('estadoInventario', null, array('label' => 'Activo'))
            ->add('caducidadInventario', null, array('label' => 'Caducidad'))
        ;
    }
    
    
      public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesAplicacionesBundle:Componente:ctlcomponente.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    public function prePersist($EnfInventario) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfInventario->setusuarioInventario($user);
        $EnfInventario->setfechaIngresoInventario(new \DateTime());
       
    }
}
