<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlActividad;
use Doctrine\ORM\EntityRepository;

class EnfCtlSubactividadAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           //->add('id')
            ->add('idActividad', null, array('label' => 'Nombre de actividad'))
            ->add('nombreSubactividad',null, array('label' => 'Nombre de sub-actividad'))
            ->add('fechaIngresoSubact',null, array('label' => 'Fecha de creacion'))
            ->add('fechaModificacionSubact',null, array('label' => 'Fecha de modificacion'))
            ->add('usuarioIngresoSubact',null, array('label' => 'Creado por'))
            ->add('estadoSubact',null, array('label' => 'Activo'))
            //->add('cantidadSubact',null, array('label' => 'Cantidad sub-actividades'))
            //->add('tiempoSubact',null, array('label' => 'Tiempo sub-actividades'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idActividad', 'text', array('label' => 'Nombre actividad'))
            ->add('nombreSubactividad', 'text', array('label' => 'Nombre sub-actividad'))
            ->add('cantidadSubact',null, array('label' => 'Cantidad sub-actividades'))
            ->add('tiempoSubact','time', array('label' => 'Tiempo sub-actividades'))
            ->add('estadoSubact',null, array('label' => 'Activo'))
            ->add('usuarioIngresoSubact','text', array('label' => 'Creado por'))
            ->add('fechaIngresoSubact','date', array('label' => 'Fecha de creacion'))
            //->add('fechaModificacionSubact','date', array('label' => 'Fecha de modificacion'))
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
            ->add('idActividad', null, array('label' => 'Seleccione Actividad','required' => true,
            'class' => 'MinsalSipernesBundle:EnfCtlActividad',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerActivActivo();
            }))
            ->add('nombreSubactividad', 'text', array('label' => 'Escriba el nombre de la sub-actividad','max_length' => 150,'required' => true))
            //->add('fechaIngresoSubact')
            //->add('fechaModificacionSubact')
            //->add('usuarioIngresoSubact')
            ->add('estadoSubact', null, array('label' => 'Activo','required' => False))
            ->add('cantidadSubact', null, array('label' => 'Cantidad de sub-actividades realizadas','max_length' => 10,'required' => true))
            ->add('tiempoSubact', 'time', array('label' => 'Tiempo en realizar las sub-actividad','required' => true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
             //->add('id')
            ->add('idActividad', 'text', array('label' => 'Nombre Actividad'))
            ->add('nombreSubactividad', 'text', array('label' => 'Nombre Subactividad'))
            ->add('cantidadSubact',null, array('label' => 'Cantidad sub-actividades'))
            ->add('tiempoSubact','time', array('label' => 'Tiempo sub-actividades'))
            ->add('estadoSubact',null, array('label' => 'Activo'))
            ->add('usuarioIngresoSubact','text', array('label' => 'Creado por'))
            ->add('fechaIngresoSubact','date', array('label' => 'Fecha de creacion'))
            ->add('fechaModificacionSubact','date', array('label' => 'Fecha de modificacion'))
        ;
    }
    
    
/*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubactividad
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlSubactividad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlSubactividad->setusuarioIngresoSubact($user);
        $EnfCtlSubactividad->setfechaIngresoSubact(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubactividad
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlSubactividad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlSubactividad->setusuarioIngresoSubact($user);
        $EnfCtlSubactividad->setfechaModificacionSubact(new \DateTime());
    }       
    
}
