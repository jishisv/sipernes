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
    
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoFinan' // name of the ordered field (default = the model id field, if any)
    );   
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('nombreFinanciamiento', null, array('label' => 'Financiado por'))
            ->add('usuarioFinan', null, array('label' => 'Creado por'))
            ->add('fechaIngresoFinan', null, array('label' => 'Creado el'))
            //->add('fechaModificacionFinan')
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
            ->add('nombreFinanciamiento', null, array('label' => 'Financiado por'))
            ->add('estadoFinanciamiento', null, array('label' => 'Activo','required' => false))
            ->add('usuarioFinan', null, array('label' => 'Creado por'))
            ->add('fechaIngresoFinan', null, array('label' => 'Creado el'))
            //->add('fechaModificacionFinan') 
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
            ->add('nombreFinanciamiento', 'text', array('label' => 'Digite el nombre de la empresa','max_length' => 150,'required' => true))
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
            ->add('nombreFinanciamiento', null, array('label' => 'Financiado por'))
            ->add('usuarioFinan', null, array('label' => 'Creado por'))
            ->add('fechaIngresoFinan', null, array('label' => 'Creado el'))
            //->add('fechaModificacionFinan')
            ->add('estadoFinanciamiento', null, array('label' => 'Activo','required' => false))
        ;
    }
    
      /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlFinanciamiento
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlFinanciamiento) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
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
