<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlTipoComponente;
use Doctrine\ORM\EntityRepository;

class EnfComponenteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idTipoComponente', null, array('label' => 'Componente'))
            ->add('nombreComponente', null, array('label' => 'Nombre del componente'))
            ->add('presentacion', null, array('label' => 'Presentación'))
            ->add('usuarioComponente', null, array('label' => 'Creado por'))
            ->add('fechaIngresoComponente', null, array('label' => 'Creado el'))
            //->add('fechaModificacionComponente')
            ->add('estadoComponente', null, array('label' => 'Activo'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idTipoComponente', null, array('label' => 'Componente'))
            ->add('nombreComponente', null, array('label' => 'Nombre del componente'))
            ->add('presentacion', null, array('label' => 'Presentación'))
            ->add('usuarioComponente', null, array('label' => 'Creado por'))
            ->add('fechaIngresoComponente', null, array('label' => 'Creado el'))
            //->add('fechaModificacionComponente')
            ->add('estadoComponente', null, array('label' => 'Activo'))
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
//            ->add('id')
            ->add('idTipoComponente', null, array('label' => 'Seleccione tipo de componente','required' => true,
            'class' => 'MinsalSipernesBundle:EnfCtlTipoComponente',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerTipoCompActivo();
            }))
            ->add('nombreComponente', null, array('label' => 'Digite nombre del componente'))
//            ->add('idTipoEsq', null, array('label' => 'Tipo de Esquema'))
//            ->add('idTipoComponente', null, array('label' => 'Tipo de Componente'))
            ->add('presentacion', null, array('label' => 'Presentación'))
//            ->add('usuarioComponente')
//            ->add('fechaIngresoComponente')
//            ->add('fechaModificacionComponente')
            ->add('estadoComponente', null, array('label' => 'Activo'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idTipoComponente', null, array('label' => 'Componente'))
            ->add('nombreComponente', null, array('label' => 'Nombre del componente'))
            ->add('presentacion', null, array('label' => 'Presentación'))
            ->add('usuarioComponente', null, array('label' => 'Creado por'))
            ->add('fechaIngresoComponente', null, array('label' => 'Creado el'))
            //->add('fechaModificacionComponente')
            ->add('estadoComponente', null, array('label' => 'Activo'))
        ;
    }
}
