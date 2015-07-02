<?php

namespace Minsal\Sipernes\AplicacionesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

class EnfDosisEsquemaVacAdmin extends Admin
{
    public function createQuery($context = 'list') 
    { 
        //$query = parent::createQuery($context); 
        // this is the queryproxy, you can call anything you could call on the doctrine orm QueryBuilder         
        //$query->andWhere( 
        //    $query->expr()->eq($query->getRootAlias().'.idModalidad', ':idModalidad') 
        //); 
        //$query->setParameter('idModalidad', '1'); // eg get from security context 
        //-----------------------------------------------------------------------------
        $query = parent::createQuery($context); 
        // this is the queryproxy, you can call anything you could call on the doctrine orm QueryBuilder         
        $query
                ->select('a')
                ->from('Minsal\SipernesBundle\Entity\EnfDosisEsquemaVac', 'a')
                ->innerJoin('a.idComponente', 'c','WITH','a.idComponente=c.id')
                //->andWhere($query->expr()->eq('c.idTipoComponente', '1'))
                ;
            
        return $query; 
    } 
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'DESC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'fechaIngresoDosisEsq' // name of the ordered field (default = the model id field, if any)
    );   
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsq', null, array('label' => 'Aplicación')) 
            ->add('idModalidad', null, array('label' => 'Modalidad','required' => true))
            //->add('dosis', null, array('label' => 'Dosis'))
            //->add('centroEducativo')
            //->add('fechaDosisEsq')
            //->add('estadoDosisEsq')
            ->add('usuarioDosisEsq', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsq', null, array('label' => 'Creado el'))
            //->add('fechaModDosis')
            
            //->add('idModalidad')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
           //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsq', null, array('label' => 'Aplicación')) 
            //->add('idModalidad', null, array('label' => 'Modalidad','required' => true))
            ->add('dosis', null, array('label' => 'Dosis'))
            //->add('centroEducativo')
            //->add('fechaDosisEsq')
            //->add('estadoDosisEsq')
            ->add('usuarioDosisEsq', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsq', null, array('label' => 'Creado el'))
            //->add('fechaModDosis')
            
            //->add('idModalidad')
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
//          ->add('id')
            
            ->add('idEmpCorr', null, array('label' => 'Código de empleado','required' => true))
            ->add('idExpediente',null, array('label' => 'Código de expediente','required' => true))
            ->add('idModalidad', null, array('label' => 'Modalidad','required' => true))
            //->add('idComponente',null, array('label' => 'Componente'))
            ->add('idTipoEsq',null, array('label' => 'Aplicación','required' => true)) 
            //->add('idMovimiento',null, array('label' => 'Tipo de Movimiento'))       
            //->add('dosis','text', array('label' => 'Dosis'))
            ->add('centroEducativo',null, array('label' => 'Centro Educativo'))
            //->add('fechaDosisEsq','date', array('label' => 'Fecha'))
            //->add('estadoDosisEsq')
            
            
//            ->add('usuarioDosisEsq')
//            ->add('fechaIngresoDosisEsq')
//            ->add('fechaModDosis')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            //->add('id')
            ->add('idEmpCorr', null, array('label' => 'Código Empleado'))
            ->add('idExpediente',null, array('label' => 'Código Expediente'))
            ->add('idTipoEsq', null, array('label' => 'Aplicación')) 
            ->add('idModalidad', null, array('label' => 'Modalidad','required' => true))
            ->add('dosis', null, array('label' => 'Dosis'))
            //->add('centroEducativo')
            //->add('fechaDosisEsq')
            //->add('estadoDosisEsq')
            ->add('usuarioDosisEsq', null, array('label' => 'Creado por'))
            ->add('fechaIngresoDosisEsq', null, array('label' => 'Creado el'))
            //->add('fechaModDosis')
            
            //->add('idModalidad')
        ;
    }
    
    
    
    
    public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSipernesAplicacionesBundle:VacunaRegistro:mtlvacuna.html.twig';
                break;
            //case 'create':
            //return 'MinsalSipernesActividadBundle:ActividadRegistro:reporte_prueba1.html.twig';
            //break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    
    
    
    public function prePersist($EnfDosisEsquemaVac) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUsername();
        $EnfDosisEsquemaVac->setusuarioDosisEsq($user);
        $EnfDosisEsquemaVac->setfechaDosisEsq(new \DateTime());
        $EnfDosisEsquemaVac->setfechaIngresoDosisEsq(new \DateTime());
        $EnfDosisEsquemaVac->setdosis(1);
        $EnfDosisEsquemaVac->setestadoDosisEsq(true);        
        
        //obtener el id de la tabla enf_conponente para poder insertar el registro de la dosis
        $queryString='select IDENTITY(e.idComponente) id from Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac e where e.id='.$EnfDosisEsquemaVac->getIdTipoEsq()->getId();                
        //$query = $this->modelManager->getEntityManager($EnfDosisEsquemaVac)->createQuery('select e.id from Minsal\SipernesBundle\Entity\EnfComponente e where e.id=1')->getArrayResult();
        //$query = $this->modelManager->getEntityManager($EnfDosisEsquemaVac)->createQuery('select IDENTITY(e.idComponente) id from Minsal\SipernesBundle\Entity\EnfTipoEsquemaVac e where e.id=1')->getArrayResult();
        $query = $this->modelManager->getEntityManager($EnfDosisEsquemaVac)->createQuery($queryString)->getArrayResult();
        foreach($query as $item) {
            //$EnfDosisEsquemaVac->setidComponente($this->getConfigurationPool()->getContainer()->get('Doctrine')->getRepository('Minsal\SipernesBundle\Entity\EnfComponente')->find($item['id']));
            $EnfDosisEsquemaVac->setidComponente($this->getConfigurationPool()->getContainer()->get('Doctrine')->getRepository('Minsal\SipernesBundle\Entity\EnfComponente')->find($item['id']));
        }
        
       
    }
    
       public function validate(ErrorElement $errorElement, $EnfDosisEsquemaVac) {         
        //validar que el componente tenga existencias        
        $queryString='select e from Minsal\SipernesBundle\Entity\EnfInventario e WHERE e.idComponente=3';        
        $query = $this->modelManager->getEntityManager($EnfDosisEsquemaVac)->createQuery($queryString)->getArrayResult();
        
        foreach($query as $item) {
            //$EnfDosisEsquemaVac->setidComponente($this->getConfigurationPool()->getContainer()->get('Doctrine')->getRepository('Minsal\SipernesBundle\Entity\EnfComponente')->find($item['id']));
            $numero1 = $this->getConfigurationPool()->getContainer()->get('Doctrine')->getRepository('Minsal\SipernesBundle\Entity\EnfInventario')->find($item['existencia']);
        }
        
        if (intval($numero1,10) > 0) {
            $errorElement->with('idTipoEsq')
                    ->addViolation('No hay existencias de la vacuna o micronutriente')
                    ->end();
        }
       }
}
