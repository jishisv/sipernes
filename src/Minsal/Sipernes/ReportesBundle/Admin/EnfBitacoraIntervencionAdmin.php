<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfBitacoraIntervencionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('observacionHistInterv')
            ->add('fechaIngresoHistInter')
            ->add('fechaModificacionHistInterv')
            ->add('usuarioHistInterv')
            ->add('efectivoHistInterv')
            ->add('estadoHistInterv')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('observacionHistInterv')
            ->add('fechaIngresoHistInter')
            ->add('fechaModificacionHistInterv')
            ->add('usuarioHistInterv')
            ->add('efectivoHistInterv')
            ->add('estadoHistInterv')
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
            ->add('id')
            ->add('observacionHistInterv')
            ->add('fechaIngresoHistInter')
            ->add('fechaModificacionHistInterv')
            ->add('usuarioHistInterv')
            ->add('efectivoHistInterv')
            ->add('estadoHistInterv')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('observacionHistInterv')
            ->add('fechaIngresoHistInter')
            ->add('fechaModificacionHistInterv')
            ->add('usuarioHistInterv')
            ->add('efectivoHistInterv')
            ->add('estadoHistInterv')
        ;
    }
     public function getTemplate($name) {
        switch ($name) {
            case 'list':
                return 'MinsalSipernesReportesBundle:Reportes:reporte_diario_capac.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
