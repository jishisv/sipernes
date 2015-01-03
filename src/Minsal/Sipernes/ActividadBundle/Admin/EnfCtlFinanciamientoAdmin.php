<?php

namespace Minsal\Sipernes\ActividadBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlFinanciamientoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombreFinanciamiento')
            ->add('usuarioFinan')
            ->add('fechaIngresoFinan')
            ->add('fechaModificacionFinan')
            ->add('estadoFinanciamiento')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreFinanciamiento')
            ->add('estadoFinanciamiento')
            ->add('usuarioFinan')
            ->add('fechaIngresoFinan')
            //->add('fechaModificacionFinan') 
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
            ->add('nombreFinanciamiento', 'text', array('label' => 'Nombre de empresa a financiar','max_length' => 150,'required' => true))
            //->add('usuarioFinan')
            //->add('fechaIngresoFinan')
            //->add('fechaModificacionFinan')
            ->add('estadoFinanciamiento', null, array('label' => 'Activo','required' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
           // ->add('id')
            ->add('nombreFinanciamiento')
            ->add('usuarioFinan')
            ->add('fechaIngresoFinan')
            //->add('fechaModificacionFinan')
            ->add('estadoFinanciamiento')
        ;
    }
    
      /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlFinanciamiento
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlFinanciamiento) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlFinanciamiento->setusuarioFinan($user);
        $EnfCtlFinanciamiento->setfechaIngresoFinan(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlFinanciamiento
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlFinanciamiento) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlFinanciamiento->setusuarioFinan($user);
        $EnfCtlFinanciamiento->setfechaModificacionFinan(new \DateTime());
    }
}
