<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfEsquemaMic;
use Doctrine\ORM\EntityRepository;

class EnfTipoEsquemaMicAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEsquemaMic', null, array('label' => 'Fase'))
            ->add('nombreTipoEsqMic', null, array('label' => 'Micronutriente'))
            //->add('dosisMaximaMic')
            ->add('estadoTipoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoMic', null, array('label' => 'Creado el'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEsquemaMic', null, array('label' => 'Fase'))
            ->add('nombreTipoEsqMic', null, array('label' => 'Micronutriente'))
            //->add('dosisMaximaMic')
            ->add('estadoTipoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoMic', null, array('label' => 'Creado el'))
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
            ->add('idEsquemaMic', null, array('label' => 'Seleccione fase','required' => true,
                'class' => 'MinsalSipernesBundle:EnfEsquemaMic',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerEsqMicActivo();
            }))
            ->add('nombreTipoEsqMic', 'text', array('label' => 'Digite el nombre del micronutriente','max_length' => 150,'required' => true))
            //->add('dosisMaximaMic')
            ->add('estadoTipoMic', null, array('label' => 'Activo'))
            //->add('usuarioIngresoTipoMic')
            //->add('fechaIngresoTipoMic')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEsquemaMic', null, array('label' => 'Fase'))
            ->add('nombreTipoEsqMic', null, array('label' => 'Micronutriente'))
            //->add('dosisMaximaMic')
            ->add('estadoTipoMic', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoMic', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoMic', null, array('label' => 'Creado el'))
        ;
    }
    
    public function prePersist($EnfTipoEsquemaMic) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfTipoEsquemaMic->setusuarioIngresoTipoMic($user);
        $EnfTipoEsquemaMic->setfechaIngresoTipoMic(new \DateTime());
       
    }
}
