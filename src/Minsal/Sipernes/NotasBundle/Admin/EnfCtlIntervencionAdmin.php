<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfCtlIntervencionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoInterven' // name of the ordered field (default = the model id field, if any)
    ); 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('descripcionInterven', null, array('label' => 'Intervención'))
            ->add('estadoCltInterv', null, array('label' => 'Activo'))
            ->add('usuarioInterven', null, array('label' => 'Creado por'))
            ->add('fechaIngresoInterven', null, array('label' => 'Creado el'))
            //->add('fechaModificacionInterven')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('descripcionInterven', null, array('label' => 'Intervención'))
            ->add('estadoCltInterv', null, array('label' => 'Activo'))
            ->add('usuarioInterven', null, array('label' => 'Creado por'))
            ->add('fechaIngresoInterven', null, array('label' => 'Creado el'))
            //->add('fechaModificacionInterven')
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
            ->add('idSubprotocolo', null, array('label' => 'Protocolo', 'required' => true))
            ->add('descripcionInterven', null, array('label' => 'Digite Intervención','required' => true))
            //->add('fechaIngresoInterven')
            //->add('usuarioInterven')
            //->add('fechaModificacionInterven')
            ->add('estadoCltInterv', null, array('label' => 'Activo','required' => true))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idSubprotocolo', null, array('label' => 'Protocolo'))
            ->add('descripcionInterven', null, array('label' => 'Intervención'))
            ->add('estadoCltInterv', null, array('label' => 'Activo'))
            ->add('usuarioInterven', null, array('label' => 'Creado por'))
            ->add('fechaIngresoInterven', null, array('label' => 'Creado el'))
            //->add('fechaModificacionInterven')
            
        ;
    }
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesNotasBundle:CtlIntervencionRegistro:ctlintervencion.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlIntervencion
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlIntervencion->setusuarioInterven($user);
        $EnfCtlIntervencion->setfechaIngresoInterven(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlIntervencion
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlIntervencion) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfCtlIntervencion->setusuarioInterven($user);
        $EnfCtlIntervencion->setfechaModificacionInterven(new \DateTime());
    }   
    
}
