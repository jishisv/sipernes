<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfDominio;
use Doctrine\ORM\EntityRepository;

class EnfClaseAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoClase' // name of the ordered field (default = the model id field, if any)
    );  
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('codClase', null, array('label' => 'Código','max_length' => 5))
            ->add('nombreClase', null, array('label' => 'Clase'))
            ->add('estadoClase', null, array('label' => 'Activo'))
            ->add('usuarioClase', null, array('label' => 'Creado por'))
            ->add('fechaIngresoClase', null, array('label' => 'Creado el'))
            //->add('fechaModificacionClase')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codClase', null, array('label' => 'Código'))
            ->add('nombreClase', null, array('label' => 'Clase'))
            ->add('estadoClase', null, array('label' => 'Activo'))
            ->add('usuarioClase', null, array('label' => 'Creado por'))
            ->add('fechaIngresoClase', null, array('label' => 'Creado el'))
            //->add('fechaModificacionClase')
            
            
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
            ->add('idDominio', null, array('label' => 'Seleccione Dominio','required' => true,
            'class' => 'MinsalSipernesBundle:EnfDominio',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerDomActivo();
            }))
            ->add('codClase', null, array('label' => 'Digite el código de la clase','required' => true,'max_length' => 5))
            ->add('nombreClase', null, array('label' => 'Digite el nombre de la clase','required' => true))
            ->add('estadoClase', null, array('label' => 'Activo','required' => false))
            //->add('fechaIngresoClase')
            //->add('fechaModificacionClase')
           // ->add('usuarioClase')
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('codClase', null, array('label' => 'Código'))
            ->add('nombreClase', null, array('label' => 'Clase'))
            ->add('estadoClase', null, array('label' => 'Activo'))
            ->add('usuarioClase', null, array('label' => 'Creado por'))
            ->add('fechaIngresoClase', null, array('label' => 'Creado el'))
            //->add('fechaModificacionClase')
        ;
    }
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfClase
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfClase) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfClase->setusuarioClase($user);
        $EnfClase->setfechaIngresoClase(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfClase
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfClase) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfClase->setusuarioClase($user);
        $EnfClase->setfechaModificacionClase(new \DateTime());
    }  
    
}
