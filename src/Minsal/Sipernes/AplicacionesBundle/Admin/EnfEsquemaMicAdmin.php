<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfEsquemaMicAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('anioEsquemaMic', null, array('label' => 'Año'))
            ->add('nombreEsquemaMic', null, array('label' => 'Fase'))
            //->add('edadMinimaMic')
            //->add('edadMaximaMic')
            ->add('estadoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoMic', null, array('label' => 'creado el'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('anioEsquemaMic', null, array('label' => 'Año'))
            ->add('nombreEsquemaMic', null, array('label' => 'Fase'))
            //->add('edadMinimaMic')
            //->add('edadMaximaMic')
            ->add('estadoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoMic', null, array('label' => 'creado el'))
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
            ->add('anioEsquemaMic', null, array('label' => 'Digite el Año de la fase','max_length' => 4,'required' => true))
            ->add('nombreEsquemaMic', 'text', array('label' => 'Digite el nombre de la fase ','max_length' => 150,'required' => true))
            //->add('edadMinimaMic')
            //->add('edadMaximaMic')
            ->add('estadoMic', null, array('label' => 'Activo','required' => false))
            //->add('usuarioIngresoMic')
           // ->add('fechaIngresoMic')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('anioEsquemaMic', null, array('label' => 'Año'))
            ->add('nombreEsquemaMic', null, array('label' => 'Fase'))
            //->add('edadMinimaMic')
            //->add('edadMaximaMic')
            ->add('estadoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoMic', null, array('label' => 'creado el'))
        ;
    }
    
    public function prePersist($EnfEsquemaMic) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfEsquemaMic->setusuarioIngresoMic($user);
        $EnfEsquemaMic->setfechaIngresoMic(new \DateTime());
       
    }
}
