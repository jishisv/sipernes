<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Minsal\SipernesBundle\Entity\EnfCtlTipoComponente;
use Doctrine\ORM\EntityRepository;

class EnfEsquemaVacAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoVac' // name of the ordered field (default = the model id field, if any)
    );    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           // ->add('id')
           ->add('idTipoAplicacion', null, array('label' => 'Tipo de aplicación')) 
            ->add('anioEsquemaVac', null, array('label' => 'Año'))
            //->add('nombreEsquemaVac')
            //->add('edadMinima', null, array('label' => 'Mes Mínimo'))
            //->add('edadMaxima', null, array('label' => 'Mes Máximo'))
            ->add('estadoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoVac', null, array('label' => 'Creado el'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idTipoAplicacion', null, array('label' => 'Tipo de aplicación'))
            ->add('anioEsquemaVac', null, array('label' => 'Año'))
            ->add('nombreEsquemaVac', null, array('label' => 'Fase'))
            //->add('edadMinima', null, array('label' => 'Edad Mínima'))
            //->add('edadMaxima', null, array('label' => 'Edad Máxima'))
            ->add('estadoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoVac', null, array('label' => 'Creado el'))
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
           // ->add('id')
            ->add('idTipoAplicacion', null, array('label' => 'Seleccione tipo de componente','required' => true,
            'class' => 'MinsalSipernesBundle:EnfCtlTipoComponente',
            'query_builder' => function(EntityRepository $repository) {
                return $repository->obtenerTipoCompActivo();
            })) 
            ->add('anioEsquemaVac', null, array('label' => 'Digite el Año de la fase','max_length' => 4,'required' => true))
            ->add('nombreEsquemaVac', 'text', array('label' => 'Digite el nombre de la fase ','max_length' => 150,'required' => true))
            //->add('edadMinima', null, array('label' => 'Digite el meses mínimo de la fase','max_length' => 4,'required' => true))
            //->add('edadMaxima',null, array('label' => 'Digite el meses máximo de la fase','max_length' => 4,'required' => true))
            ->add('estadoVac', null, array('label' => 'Activo','required' => false))
            //->add('usuarioIngresoVac')
            //->add('fechaIngresoVac')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idTipoAplicacion', null, array('label' => 'Tipo de aplicación'))
            ->add('anioEsquemaVac', null, array('label' => 'Año'))
            ->add('nombreEsquemaVac', null, array('label' => 'Fase'))
            //->add('edadMinima', null, array('label' => 'Edad Mínima'))
            //->add('edadMaxima', null, array('label' => 'Edad Máxima'))
            ->add('estadoVac', null, array('label' => 'Activo'))
            ->add('usuarioIngresoVac', null, array('label' => 'Creado por'))
            ->add('fechaIngresoVac', null, array('label' => 'Creado el'))
        ;
    }
    
    
    
     public function prePersist($EnfEsquemaVac) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfEsquemaVac->setusuarioIngresoVac($user);
        $EnfEsquemaVac->setfechaIngresoVac(new \DateTime());
       
    }
    
}
