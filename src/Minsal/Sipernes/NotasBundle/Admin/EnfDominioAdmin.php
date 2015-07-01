<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfDominioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
 protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoDom' // name of the ordered field (default = the model id field, if any)
    );   
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('codDominio',null, array('label' => 'Código'))
            ->add('nombreDominio',null, array('label' => 'Dominio'))
            ->add('estadoDominio', null, array('label' => 'Activo'))
            ->add('usuarioDom', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDom', null, array('label' => 'Creado el'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codDominio',null, array('label' => 'Código'))
            ->add('nombreDominio',null, array('label' => 'Dominio'))
            ->add('estadoDominio', null, array('label' => 'Activo'))
            ->add('usuarioDom', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDom', null, array('label' => 'Creado el'))
            //->add('fechaModificacionDom')
            
            
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
            ->add('codDominio',null, array('label' => 'Digite el código de Dominio','max_length' => 5))
            ->add('nombreDominio',null, array('label' => 'Digite el nombre de Dominio','required' => True))
            ->add('estadoDominio', null, array('label' => 'Activo','required' => False))
            //->add('fechaIngresoDom')
            //->add('fechaModificacionDom')
            //->add('usuarioDom')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('codDominio',null, array('label' => 'Código'))
            ->add('nombreDominio',null, array('label' => 'Dominio'))
            ->add('estadoDominio', null, array('label' => 'Activo'))
            ->add('usuarioDom', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDom', null, array('label' => 'Creado el'))
        ;
    }
    
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfDominio) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfDominio->setusuarioDom($user);
        $EnfDominio->setfechaIngresoDom(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfDominio
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfDominio) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfDominio->setusuarioDom($user);
        $EnfDominio->setfechaModificacionDom(new \DateTime());
    }   
    
    
}
