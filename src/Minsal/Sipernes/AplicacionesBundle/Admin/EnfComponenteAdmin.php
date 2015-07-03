<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlTipoComponente;
use Doctrine\ORM\EntityRepository;
use Sonata\AdminBundle\Validator\ErrorElement;

class EnfComponenteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
     protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoComponente' // name of the ordered field (default = the model id field, if any)
    );   

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
    
    public function prePersist($EnfComponente) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfComponente->setusuarioComponente($user);
        $EnfComponente->setfechaIngresoComponente(new \DateTime());                
    }
    
    public function validate(ErrorElement $errorElement, $pais) {
        /* 
        if (5 == 5) {
            $errorElement->with('nombrecomponente')
                    ->addViolation('El número es 5')
                    ->end();
        }*/
    }
}
