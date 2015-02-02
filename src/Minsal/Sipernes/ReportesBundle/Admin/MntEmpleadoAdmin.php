<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntEmpleadoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento')
            ->add('dui')
            ->add('numeroJuntaVigilancia')
            ->add('numeroCelular')
            ->add('correoElectronico')
            ->add('correlativo')
            ->add('codigoFarmacia')
            ->add('habilitadoFarmacia')
            ->add('firmaDigital')
            ->add('idempleado')
            ->add('idusuarioreg')
            ->add('fechahorareg')
            ->add('idusuariomod')
            ->add('fechahoramod')
            ->add('nombreempleado')
            ->add('habilitado')
            ->add('idarea')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento')
            ->add('dui')
            ->add('numeroJuntaVigilancia')
            ->add('numeroCelular')
            ->add('correoElectronico')
            ->add('correlativo')
            ->add('codigoFarmacia')
            ->add('habilitadoFarmacia')
            ->add('firmaDigital')
            ->add('idempleado')
            ->add('idusuarioreg')
            ->add('fechahorareg')
            ->add('idusuariomod')
            ->add('fechahoramod')
            ->add('nombreempleado')
            ->add('habilitado')
            ->add('idarea')
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
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento')
            ->add('dui')
            ->add('numeroJuntaVigilancia')
            ->add('numeroCelular')
            ->add('correoElectronico')
            ->add('correlativo')
            ->add('codigoFarmacia')
            ->add('habilitadoFarmacia')
            ->add('firmaDigital')
            ->add('idempleado')
            ->add('idusuarioreg')
            ->add('fechahorareg')
            ->add('idusuariomod')
            ->add('fechahoramod')
            ->add('nombreempleado')
            ->add('habilitado')
            ->add('idarea')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento')
            ->add('dui')
            ->add('numeroJuntaVigilancia')
            ->add('numeroCelular')
            ->add('correoElectronico')
            ->add('correlativo')
            ->add('codigoFarmacia')
            ->add('habilitadoFarmacia')
            ->add('firmaDigital')
            ->add('idempleado')
            ->add('idusuarioreg')
            ->add('fechahorareg')
            ->add('idusuariomod')
            ->add('fechahoramod')
            ->add('nombreempleado')
            ->add('habilitado')
            ->add('idarea')
        ;
    }
}
