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
protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoTipoVac' // name of the ordered field (default = the model id field, if any)
    );    
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
            ->add('idComponente', null, array('label' => 'Seleccione Componente','required' => true))
            ->add('nombreTipoEsq', 'text', array('label' => 'Digite el nombre de aplicación','max_length' => 150,'required' => true))
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
    
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesAplicacionesBundle:TipoEsquema:ctltipoesquema.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    public function prePersist($EnfTipoEsquemaVac) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfTipoEsquemaVac->setusuarioIngresoTipoVac($user);
        $EnfTipoEsquemaVac->setfechaIngresoTipoVac(new \DateTime());
        
        //$query = $this->modelManager->getEntityManager($EnfTipoEsquemaVac)->createQuery('select e.id from Minsal\SipernesBundle\Entity\EnfComponente e where e.id=5')->execute();
        //$EnfTipoEsquemaVac->setidComponente($query[0]);
        $query = $this->modelManager->getEntityManager($EnfTipoEsquemaVac)->createQuery('select e.id from Minsal\SipernesBundle\Entity\EnfComponente e where e.id=5')->getScalarResult();
        
        $ids = array_map('current', $query);
        $ids = array();
        foreach($query as $item) {
            $ids[] = $item['id'];
        }        
        
    }
    
    
}
