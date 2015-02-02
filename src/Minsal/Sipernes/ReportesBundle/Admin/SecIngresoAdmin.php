<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SecIngresoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('fecha')
            ->add('hora')
            ->add('idAtenAreModEstab')
            ->add('idAmbienteIngreso')
            ->add('diagnostico')
            ->add('idCie10')
            ->add('idEstado')
            ->add('idProcedenciaIngreso')
            ->add('idCircunstanciaIngreso')
            ->add('idTipoAccidente')
            ->add('embarazada')
            ->add('semanasAmenorrea')
            ->add('fechaProbableParto')
            ->add('idEstablecimientoReferencia')
            ->add('motivoReferencia')
            ->add('fechaRegistro')
            ->add('fechaModificacion')
            ->add('tarjetasEntregadas')
            ->add('responsableTarjeta')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('fecha')
            ->add('hora')
            ->add('idAtenAreModEstab')
            ->add('idAmbienteIngreso')
            ->add('diagnostico')
            ->add('idCie10')
            ->add('idEstado')
            ->add('idProcedenciaIngreso')
            ->add('idCircunstanciaIngreso')
            ->add('idTipoAccidente')
            ->add('embarazada')
            ->add('semanasAmenorrea')
            ->add('fechaProbableParto')
            ->add('idEstablecimientoReferencia')
            ->add('motivoReferencia')
            ->add('fechaRegistro')
            ->add('fechaModificacion')
            ->add('tarjetasEntregadas')
            ->add('responsableTarjeta')
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
            ->add('fecha')
            ->add('hora')
            ->add('idAtenAreModEstab')
            ->add('idAmbienteIngreso')
            ->add('diagnostico')
            ->add('idCie10')
            ->add('idEstado')
            ->add('idProcedenciaIngreso')
            ->add('idCircunstanciaIngreso')
            ->add('idTipoAccidente')
            ->add('embarazada')
            ->add('semanasAmenorrea')
            ->add('fechaProbableParto')
            ->add('idEstablecimientoReferencia')
            ->add('motivoReferencia')
            ->add('fechaRegistro')
            ->add('fechaModificacion')
            ->add('tarjetasEntregadas')
            ->add('responsableTarjeta')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('fecha')
            ->add('hora')
            ->add('idAtenAreModEstab')
            ->add('idAmbienteIngreso')
            ->add('diagnostico')
            ->add('idCie10')
            ->add('idEstado')
            ->add('idProcedenciaIngreso')
            ->add('idCircunstanciaIngreso')
            ->add('idTipoAccidente')
            ->add('embarazada')
            ->add('semanasAmenorrea')
            ->add('fechaProbableParto')
            ->add('idEstablecimientoReferencia')
            ->add('motivoReferencia')
            ->add('fechaRegistro')
            ->add('fechaModificacion')
            ->add('tarjetasEntregadas')
            ->add('responsableTarjeta')
        ;
    }
}
