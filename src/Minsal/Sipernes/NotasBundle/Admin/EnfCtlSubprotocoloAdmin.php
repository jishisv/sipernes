<?php

namespace Minsal\Sipernes\NotasBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlProtocolo;
use Doctrine\ORM\EntityRepository;

class EnfCtlSubprotocoloAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('concepto')
            ->add('etiologia')
            ->add('nombreSubprotocolo')
            ->add('fechaIngresoSubpro')
            ->add('fechaModificacionSubpro')
            ->add('usuarioSubpro')
            ->add('estadoSubpro')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('nombreSubprotocolo')
            ->add('estadoSubpro')
            //->add('concepto')
            //->add('etiologia')
            ->add('usuarioSubpro')
            ->add('fechaIngresoSubpro')
            //->add('fechaModificacionSubpro')
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
            ->add('idProtocolo',null, array('label' => 'Seleccione protocolo','required' => true,
            'class' => 'MinsalSipernesBundle:EnfCtlProtocolo',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerProtActivo();
            }))
            ->add('nombreSubprotocolo','text', array('label' => 'Nombre del subprotocolo'))
            ->add('concepto','text', array('label' => 'Concepto'))
            ->add('etiologia','text', array('label' => 'Etiología '))
            
            //->add('fechaIngresoSubpro')
            //->add('fechaModificacionSubpro')
            //->add('usuarioSubpro')
            ->add('estadoSubpro', null, array('label' => 'Activo','required' => False))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idProtocolo')
            ->add('nombreSubprotocolo')         
            ->add('concepto')
            ->add('etiologia')
            ->add('estadoSubpro')
            ->add('usuarioSubpro')
            ->add('fechaIngresoSubpro')
            //->add('fechaModificacionSubpro')
                 
        ;
    }
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubprotocolo
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($EnfCtlSubprotocolo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlSubprotocolo->setusuarioSubpro($user);
        $EnfCtlSubprotocolo->setfechaIngresoSubpro(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo EnfCtlSubprotocolo
     * con los valores del formulario.
     * 
     */
    public function preUpdate($EnfCtlSubprotocolo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfCtlSubprotocolo->setusuarioSubpro($user);
        $EnfCtlSubprotocolo->setfechaModificacionSubpro(new \DateTime());
    }   
}
