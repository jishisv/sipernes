<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfBitacoraDiagnosticoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('observacionHist')
            ->add('usuarioHistDiag')
            ->add('fechaIngresoHistDiag')
            ->add('fechaModificacionHistDiag')
            ->add('estadoHistDiag')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('observacionHist')
            ->add('usuarioHistDiag')
            ->add('fechaIngresoHistDiag')
            ->add('fechaModificacionHistDiag')
            ->add('estadoHistDiag')
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
            ->add('observacionHist')
            ->add('usuarioHistDiag')
            ->add('fechaIngresoHistDiag')
            ->add('fechaModificacionHistDiag')
            ->add('estadoHistDiag')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('observacionHist')
            ->add('usuarioHistDiag')
            ->add('fechaIngresoHistDiag')
            ->add('fechaModificacionHistDiag')
            ->add('estadoHistDiag')
        ;
    }
     public function getTemplate($name) {
        switch ($name) {
            case 'list':
                return 'MinsalSipernesReportesBundle:Reportes:reporte_conso_anot.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
