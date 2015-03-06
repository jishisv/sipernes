<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnfBitacoraNotaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('observacionHistNota')
            ->add('usuarioHistNota')
            ->add('fechaModHistNota')
            ->add('estadoHistNota')
            ->add('fechaIngresoHistNotas')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('observacionHistNota')
            ->add('usuarioHistNota')
            ->add('fechaModHistNota')
            ->add('estadoHistNota')
            ->add('fechaIngresoHistNotas')
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
            ->add('observacionHistNota')
            ->add('usuarioHistNota')
            ->add('fechaModHistNota')
            ->add('estadoHistNota')
            ->add('fechaIngresoHistNotas')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('observacionHistNota')
            ->add('usuarioHistNota')
            ->add('fechaModHistNota')
            ->add('estadoHistNota')
            ->add('fechaIngresoHistNotas')
        ;
    }
        
    public function getTemplate($name) {
        switch ($name) {
            case 'list':
                return 'MinsalSipernesReportesBundle:Reportes:reporte_conso_diag.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
