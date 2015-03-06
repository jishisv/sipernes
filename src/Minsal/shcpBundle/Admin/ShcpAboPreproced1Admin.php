<?php

namespace Minsal\shcpBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ShcpAboPreproced1Admin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('prep1Pulso')
            ->add('prep1PulsoMay100Men60')
            ->add('prep1PaSistole')
            ->add('prep1PaDiastole')
            ->add('prep1PaMay14090Men8050')
            ->add('prep1FrecRespirat')
            ->add('prep1FrecRespiratMay16')
            ->add('prep1Temp')
            ->add('prep1TempMay38')
            ->add('prep1Hemoglob')
            ->add('prep1HemoglobMen10')
            ->add('prep1SifDiagno')
            ->add('prep1SifTratamient')
            ->add('prep1SifTratamientPareja')
            ->add('prep1Leucocitos')
            ->add('prep1Plaquetas')
            ->add('prep1PlaqMen100ml')
            ->add('prep1Vih')
            ->add('prep1GrupoSang')
            ->add('prep1Rh')
            ->add('prep1Inmuniza')
            ->add('prep1Globuantid')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('prep1Pulso')
            ->add('prep1PulsoMay100Men60')
            ->add('prep1PaSistole')
            ->add('prep1PaDiastole')
            ->add('prep1PaMay14090Men8050')
            ->add('prep1FrecRespirat')
            ->add('prep1FrecRespiratMay16')
            ->add('prep1Temp')
            ->add('prep1TempMay38')
            ->add('prep1Hemoglob')
            ->add('prep1HemoglobMen10')
            ->add('prep1SifDiagno')
            ->add('prep1SifTratamient')
            ->add('prep1SifTratamientPareja')
            ->add('prep1Leucocitos')
            ->add('prep1Plaquetas')
            ->add('prep1PlaqMen100ml')
            ->add('prep1Vih')
            ->add('prep1GrupoSang')
            ->add('prep1Rh')
            ->add('prep1Inmuniza')
            ->add('prep1Globuantid')
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
            ->add('prep1Pulso')
                ->add('prep1PulsoMay100Men60', 'choice', array('label'=>'Presion mayor de 100 o menor de 60',
                'choices'  => array(1 => '> 100 o < 60 lpm'),
                'expanded' => true,
                    'multiple' => false,
                    'attr'=>array('class'=>'textos ruptura')
                
                 ))
            ->add('prep1PaSistole')
            ->add('prep1PaDiastole')
                ->add('prep1PaMay14090Men8050', 'choice', array('label'=>'',
                'choices'  => array(1 => '>= 140/90 o <=80/50'),
                'expanded' => true,
                 ))
            ->add('prep1FrecRespirat')
                ->add('prep1FrecRespiratMay16', 'choice', array('label'=>'',
                'choices'  => array(1 => 'rpm > 16'),
                'expanded' => true,
                 ))
            ->add('prep1Temp')
                ->add('prep1TempMay38', 'choice', array('label'=>'',
                'choices'  => array(1 => '> 38°C'),
                'expanded' => true,
                 ))
            ->add('prep1Hemoglob')
                ->add('prep1HemoglobMen10', 'choice', array('label'=>'',
                'choices'  => array(1 => '< 10.0 g/dl'),
                'expanded' => true,
                 ))
                ->add('prep1SifDiagno', 'choice', array('label'=>'',
                'choices'  => array(1 => 'negativo', 2 => 'positivo', 3=>'no se hizo'),
                'expanded' => true,
                 ))
            ->add('prep1SifTratamient', 'choice', array('label'=>'',
                'choices'  => array(1 => 'No', 2 => 'Si', 3=>'n/c'),
                'expanded' => true,
                 ))
            ->add('prep1SifTratamientPareja', 'choice', array('label'=>'',
                'choices'  => array(1 => 'No', 2 => 'Si', 3=>'n/c'),
                'expanded' => true,
                 ))
            
               
            ->add('prep1Leucocitos')
            ->add('prep1Plaquetas')
            ->add('prep1PlaqMen100ml', 'choice', array('label'=>'',
                'choices'  => array(1 => '< 100 ml'),
                'expanded' => true,
                 ))
                ->add('prep1Vih', 'choice', array('label'=>'',
                'choices'  => array(1 => 'negativo', 2 => 'positivo', 3=>'s/d'),
                'expanded' => true,
                 ))
            ->add('prep1GrupoSang', 'choice', array('label'=>'',
                'choices'  => array('A' => 'tipo de sangre A', 'B' => 'tipo de sangre B', 'AB' =>'tipo de sangre AB', 'O' =>'tipo de sangre O'),
                'expanded' => false,
                 ))
            ->add('prep1Rh', 'choice', array('label'=>'',
                'choices'  => array(1 => 'negativo', 2 => 'positivo'),
                'expanded' => true,
                 ))
            ->add('prep1Inmuniza', 'choice', array('label'=>'',
                'choices'  => array(1 => 'NO', 2 => 'SI'),
                'expanded' => true,
                 ))
            ->add('prep1Globuantid', 'choice', array('label'=>'',
                'choices'  => array(1 => 'NO', 2 => 'SI', 3=>'N/C'),
                'expanded' => true,
                 ))
                
                ->add('idAdminProceden')
                
     //adiriendo la coleccion pre-proced2
    ->add('preproced2', 'sonata_type_admin', array(), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable'  => 'position'
            ))
      //adiriendo la coleccion pre-proced3          
    ->add('preproced3', 'sonata_type_admin', array(), array(
                'edit' => 'inline',
                'inline' => 'table',
                'sortable'  => 'position'
            ))
                
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('prep1Pulso')
            ->add('prep1PulsoMay100Men60')
            ->add('prep1PaSistole')
            ->add('prep1PaDiastole')
            ->add('prep1PaMay14090Men8050')
            ->add('prep1FrecRespirat')
            ->add('prep1FrecRespiratMay16')
            ->add('prep1Temp')
            ->add('prep1TempMay38')
            ->add('prep1Hemoglob')
            ->add('prep1HemoglobMen10')
            ->add('prep1SifDiagno')
            ->add('prep1SifTratamient')
            ->add('prep1SifTratamientPareja')
            ->add('prep1Leucocitos')
            ->add('prep1Plaquetas')
            ->add('prep1PlaqMen100ml')
            ->add('prep1Vih')
            ->add('prep1GrupoSang')
            ->add('prep1Rh')
            ->add('prep1Inmuniza')
            ->add('prep1Globuantid')
        ;
    }
    
    public function getTemplate($name) {
        switch ($name) {
            
            case 'edit':
                return 'MinsalshcpBundle:ShcpPreproced1:edit.html.twig';
                break;
            
//            case 'create':
//                return 'MinsalshcpBundle:ShcpPreproced1:edit.html.twig';
//                break;
           
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    public function prePersist($aborto1) {
        //codigo para setear el id en preproced2
        $preproced2 = $aborto1->getPreproced2();
        $preproced2->setIdPreproced1($aborto1);
        //codigo para setear el id en preproced3
        $preproced3 = $aborto1->getPreproced3();
        $preproced3->setIdPreproced1($aborto1);

        //code...
    }

    public function preUpdate($aborto1) {
        //codigo para setear el id en preproced2
        $preproced2 = $aborto1->getPreproced2();
        $preproced2->setIdPreproced1($aborto1);
        //codigo para setear el id en preproced3
        $preproced3 = $aborto1->getPreproced3();
        $preproced3->setIdPreproced1($aborto1);

        //code...
    }
    
}
