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
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('codClase')
            ->add('nombreClase')
            ->add('fechaIngresoClase')
            ->add('fechaModificacionClase')
            ->add('usuarioClase')
            ->add('estadoClase')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('codClase')
            ->add('nombreClase')
            ->add('estadoClase')
            ->add('usuarioClase')
            ->add('fechaIngresoClase')
            //->add('fechaModificacionClase')
            
            
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
            ->add('idDominio', null, array('label' => 'Seleccione Dominio','required' => true,
            'class' => 'MinsalSipernesBundle:EnfDominio',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerDomActivo();
            }))
            ->add('codClase', null, array('label' => 'Código de Clase','required' => true))
            ->add('nombreClase', null, array('label' => 'Nombre de Clase','required' => true))
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
            ->add('id')
            ->add('codClase')
            ->add('nombreClase')
            ->add('fechaIngresoClase')
            ->add('fechaModificacionClase')
            ->add('usuarioClase')
            ->add('estadoClase')
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
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfClase->setusuarioClase($user);
        $EnfClase->setfechaModificacionClase(new \DateTime());
    }  
    
}
