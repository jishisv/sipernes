<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfMovInventarioAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           // ->add('id')
            ->add('idTipoInventario', null, array('label' => 'Tipo de inventario'))
             //->add('idInventario', null, array('label' => 'Componente'))
            //->add('idDosisEsq', null, array('label' => 'Tipo de dosis esquema'))          
//            ->add('usuarioMov')
//            ->add('fechaIngresoMov')
//            ->add('fechaModificacionMov')
            //->add('cantidadMov', null, array('label' => 'Cantidad'))
            //->add('estadoMov', null, array('label' => 'Activo'))
            ->add('idEmpCorr', null, array('label' => 'Codigo empleado'))
            ->add('empleadoEnvio', null, array('label' => 'Entregado por '))
            ->add('empleadoRecivio', null, array('label' => 'Recibido por '))
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('idTipoInventario', null, array('label' => 'Tipo de inventario'))
             //->add('idInventario', null, array('label' => 'Componente'))
            //->add('idDosisEsq', null, array('label' => 'Tipo de dosis esquema'))           
//            ->add('fechaModificacionMov')
            ->add('cantidadMov', null, array('label' => 'Cantidad (unidades)'))
            //->add('estadoMov', null, array('label' => 'Activo'))
            ->add('idEmpCorr', null, array('label' => 'Codigo empleado'))
            ->add('empleadoEnvio', null, array('label' => 'Entregado por '))
            ->add('empleadoRecivio', null, array('label' => 'Recibido por ')) 
            ->add('usuarioMov', null, array('label' => 'Creado por'))
           ->add('fechaIngresoMov', null, array('label' => 'Creado el'))
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
            ->add('idTipoInventario', null, array('label' => 'Tipo de inventario', 'required' => true))
            ->add('idInventario', null, array('label' => 'Componente', 'required' => true))
            //->add('idDosisEsq', null, array('label' => 'Tipo de dosis esquema'))          
//            ->add('usuarioMov')
//            ->add('fechaIngresoMov')
//            ->add('fechaModificacionMov')
            ->add('cantidadMov', null, array('label' => 'Cantidad (unidades)', 'required' => true))
            //->add('estadoMov', null, array('label' => 'Activo'))
            ->add('idEmpCorr', null, array('label' => 'Codigo empleado', 'required' => true))
            ->add('empleadoEnvio', null, array('label' => 'Entregado por ', 'required' => true))
            ->add('empleadoRecivio',null, array('label' => 'Recibido por ', 'required' => true))
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idTipoInventario', null, array('label' => 'Tipo de inventario'))
             //->add('idInventario', null, array('label' => 'Componente'))
            //->add('idDosisEsq', null, array('label' => 'Tipo de dosis esquema'))          
//            ->add('usuarioMov')
//            ->add('fechaIngresoMov')
//            ->add('fechaModificacionMov')
            ->add('cantidadMov', null, array('label' => 'Cantidad (unidades)'))
            //->add('estadoMov', null, array('label' => 'Activo'))
            ->add('idEmpCorr', null, array('label' => 'Codigo empleado'))
            ->add('empleadoEnvio', null, array('label' => 'Entregado por '))
            ->add('empleadoRecivio', null, array('label' => 'Recibido por '))
            
        ;
    }
    
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesAplicacionesBundle:MovInventario:movinventario.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    public function prePersist($EnfMovInventario) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $EnfMovInventario->setusuarioMov($user);
        $EnfMovInventario->setfechaIngresoMov(new \DateTime());
        $EnfMovInventario->setestadoMov(true);
   
       
    }
    //funcion para llenar combos de empleado
    public function llenarcombosemdo(){
         $queryString='select e from Minsal\SipernesBundle\Entity\EnfInventario e';        
        $query = $this->modelManager->getEntityManager($EnfDosisEsquemaVac)->createQuery($queryString)->getArrayResult();
    }
}
