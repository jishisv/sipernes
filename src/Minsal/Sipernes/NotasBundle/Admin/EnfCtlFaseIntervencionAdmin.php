<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlFaseIntervencionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombreFase')
            ->add('fechaIngresoFase')
            ->add('fechaModificacionFase')
            ->add('usuarioFase')
            ->add('estadoFase')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreFase')
            ->add('idIntervencion')
            ->add('estadoFase')
            ->add('usuarioFase')
            ->add('fechaIngresoFase')
            //->add('fechaModificacionFase')
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
            ->add('idIntervencion')
            ->add('nombreFase')
            //->add('fechaIngresoFase')
            //->add('fechaModificacionFase')
            //->add('usuarioFase')
            ->add('estadoFase')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('nombreFase')
            ->add('idIntervencion')
            ->add('estadoFase')
            ->add('usuarioFase')
            ->add('fechaIngresoFase')
            //->add('fechaModificacionFase')
           
            
        ;
    }
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlFaseIntervencion
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlFaseIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlFaseIntervencion->setusuarioFase($user);
        $EnfCtlFaseIntervencion->setfechaIngresoFase(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlFaseIntervencion
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlFaseIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlFaseIntervencion->setusuarioFase($user);
        $EnfCtlFaseIntervencion->setfechaModificacionFase(new \DateTime());
    }   
}
