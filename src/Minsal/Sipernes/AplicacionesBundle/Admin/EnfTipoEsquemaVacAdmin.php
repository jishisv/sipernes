<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfEsquemaVac;
use Doctrine\ORM\EntityRepository;

class EnfTipoEsquemaVacAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEsquemaVac', null, array('label' => 'Fase')) 
            ->add('nombreTipoEsq', null, array('label' => 'Vacuna'))
            //->add('dosisMaxima')
            ->add('estadoTipoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoVac', null, array('label' => 'Creado el'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idEsquemaVac', null, array('label' => 'Fase')) 
            ->add('nombreTipoEsq', null, array('label' => 'Vacuna'))
            //->add('dosisMaxima', null, array('label' => 'Dosis Máxima'))
            ->add('estadoTipoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoVac', null, array('label' => 'Creado el'))
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
            ->add('idEsquemaVac', null, array('label' => 'Seleccione fase','required' => true,
                'class' => 'MinsalSipernesBundle:EnfEsquemaVac',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerEsqVacActivo();
            }))    
            ->add('nombreTipoEsq', 'text', array('label' => 'Digite el nombre de vacuna','max_length' => 150,'required' => true))
            //->add('dosisMaxima', null, array('label' => 'Dosis Máxima','max_length' => 150,'required' => true))
            ->add('estadoTipoVac', null, array('label' => 'Activo'))
            //->add('usuarioIngresoTipoVac', null, array('label' => 'Creado por'))
            //->add('fechaIngresoTipoVac', null, array('label' => 'Creado el'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEsquemaVac', null, array('label' => 'Fase')) 
            ->add('nombreTipoEsq', null, array('label' => 'Vacuna'))
            //->add('dosisMaxima')
            ->add('estadoTipoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoTipoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoTipoVac', null, array('label' => 'Creado el'))
        ;
    }
    
    
    public function prePersist($EnfTipoEsquemaVac) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfTipoEsquemaVac->setusuarioIngresoTipoVac($user);
        $EnfTipoEsquemaVac->setfechaIngresoTipoVac(new \DateTime());
       
    }
    
    
}
