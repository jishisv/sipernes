<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlMovInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoMov' // name of the ordered field (default = the model id field, if any)
    );  
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreTipoInventatrio')
            ->add('estadoCtlMov')
            //->add('usuarioIngresoMov')
            ->add('fechaIngresoMov')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreTipoInventatrio',null, array('label' => 'Tipo Inventario'))
            ->add('estadoCtlMov',null, array('label' => 'Activo'))
            //->add('usuarioIngresoMov')
            ->add('fechaIngresoMov')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
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
            ->add('nombreTipoInventatrio',null, array('label' => 'Tipo de Inventario','required' => True))
            ->add('estadoCtlMov', null, array('label' => 'Activo','required' => False))
            //->add('usuarioIngresoMov')
            //->add('fechaIngresoMov')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('nombreTipoInventatrio')
            ->add('estadoCtlMov')
            ->add('usuarioIngresoMov')
            ->add('fechaIngresoMov')
        ;
    }
    
    
     public function prePersist($EnfCtlMovInventario) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlMovInventario->setusuarioIngresoMov($user);
        $EnfCtlMovInventario->setfechaIngresoMov(new \DateTime());
    }
    
}
