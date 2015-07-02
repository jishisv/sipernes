<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlNotaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoCtlNota' // name of the ordered field (default = the model id field, if any)
    );     
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('tipoNota')
            ->add('nombreNota')
            ->add('estadoCtlNota')
            ->add('usuarioCtlNota')
            ->add('fechaIngresoCtlNota')
            ->add('fechaModCtlNota')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            //->add('tipoNota')
            ->add('nombreNota', null, array('label' => 'Tipo Nota'))
            ->add('estadoCtlNota', null, array('label' => 'Activo'))
            ->add('usuarioCtlNota', null, array('label' => 'Creado por'))
            ->add('fechaIngresoCtlNota', null, array('label' => 'Fecha de creación'))
            //->add('fechaModCtlNota')
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
            //->add('tipoNota')
            ->add('nombreNota', 'text', array('label' => 'Nombre de Nota','required' => True))
            ->add('estadoCtlNota', null, array('label' => 'Activo','required' => False))
            //->add('usuarioCtlNota')
            //->add('fechaIngresoCtlNota')
            //->add('fechaModCtlNota')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('tipoNota')
            ->add('nombreNota')
            ->add('estadoCtlNota')
            ->add('usuarioCtlNota')
            ->add('fechaIngresoCtlNota')
            ->add('fechaModCtlNota')
        ;
    }
    
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlNota
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlNota) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlNota->setusuarioCtlNota($user);
        $EnfCtlNota->setfechaIngresoCtlNota(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlNota
     * con los valores del formulario.
     * 
     */
    public function preUpdate( $EnfCtlNota) {
        
        
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlNota->setusuarioCtlNota($user);
        $EnfCtlNota->setfechaModCtlNota(new \DateTime());
    }   
    
}
