<?php

namespace Minsal\Sipernes\ReportesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntPacienteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('primerNombre')
            ->add('segundoNombre')
            ->add('tercerNombre')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('apellidoCasada')
            ->add('fechaNacimiento')
            ->add('horaNacimiento')
            ->add('idEstadoCivil')
            ->add('idDocIdePaciente')
            ->add('numeroDocIdePaciente')
            ->add('idOcupacion')
            ->add('direccion')
            ->add('telefonoCasa')
            ->add('idCantonDomicilio')
            ->add('areaGeograficaDomicilio')
            ->add('lugarTrabajo')
            ->add('telefonoTrabajo')
            ->add('idAreaCotizacion')
            ->add('asegurado')
            ->add('numeroAfiliacion')
            ->add('cotizante')
            ->add('nombrePadre')
            ->add('nombreMadre')
            ->add('nombreConyuge')
            ->add('nombreResponsable')
            ->add('direccionResponsable')
            ->add('telefonoResponsable')
            ->add('idParentescoResponsable')
            ->add('idDocIdeResponsable')
            ->add('numeroDocIdeResponsable')
            ->add('nombreProporcionoDatos')
            ->add('idDocIdeProporcionoDatos')
            ->add('numeroDocIdeProporDatos')
            ->add('observacion')
            ->add('conocidoPor')
            ->add('idSiff')
            ->add('estado')
            ->add('dispensarizacionIndividual')
            ->add('idPacienteInicial')
            ->add('idNacionalidad')
            ->add('idSexo')
            ->add('idParentescoProporDatos')
            ->add('fechaRegistro')
            ->add('fechaMod')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('primerNombre')
            ->add('segundoNombre')
            ->add('tercerNombre')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('apellidoCasada')
            ->add('fechaNacimiento')
            ->add('horaNacimiento')
            ->add('idEstadoCivil')
            ->add('idDocIdePaciente')
            ->add('numeroDocIdePaciente')
            ->add('idOcupacion')
            ->add('direccion')
            ->add('telefonoCasa')
            ->add('idCantonDomicilio')
            ->add('areaGeograficaDomicilio')
            ->add('lugarTrabajo')
            ->add('telefonoTrabajo')
            ->add('idAreaCotizacion')
            ->add('asegurado')
            ->add('numeroAfiliacion')
            ->add('cotizante')
            ->add('nombrePadre')
            ->add('nombreMadre')
            ->add('nombreConyuge')
            ->add('nombreResponsable')
            ->add('direccionResponsable')
            ->add('telefonoResponsable')
            ->add('idParentescoResponsable')
            ->add('idDocIdeResponsable')
            ->add('numeroDocIdeResponsable')
            ->add('nombreProporcionoDatos')
            ->add('idDocIdeProporcionoDatos')
            ->add('numeroDocIdeProporDatos')
            ->add('observacion')
            ->add('conocidoPor')
            ->add('idSiff')
            ->add('estado')
            ->add('dispensarizacionIndividual')
            ->add('idPacienteInicial')
            ->add('idNacionalidad')
            ->add('idSexo')
            ->add('idParentescoProporDatos')
            ->add('fechaRegistro')
            ->add('fechaMod')
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
            ->add('primerNombre')
            ->add('segundoNombre')
            ->add('tercerNombre')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('apellidoCasada')
            ->add('fechaNacimiento')
            ->add('horaNacimiento')
            ->add('idEstadoCivil')
            ->add('idDocIdePaciente')
            ->add('numeroDocIdePaciente')
            ->add('idOcupacion')
            ->add('direccion')
            ->add('telefonoCasa')
            ->add('idCantonDomicilio')
            ->add('areaGeograficaDomicilio')
            ->add('lugarTrabajo')
            ->add('telefonoTrabajo')
            ->add('idAreaCotizacion')
            ->add('asegurado')
            ->add('numeroAfiliacion')
            ->add('cotizante')
            ->add('nombrePadre')
            ->add('nombreMadre')
            ->add('nombreConyuge')
            ->add('nombreResponsable')
            ->add('direccionResponsable')
            ->add('telefonoResponsable')
            ->add('idParentescoResponsable')
            ->add('idDocIdeResponsable')
            ->add('numeroDocIdeResponsable')
            ->add('nombreProporcionoDatos')
            ->add('idDocIdeProporcionoDatos')
            ->add('numeroDocIdeProporDatos')
            ->add('observacion')
            ->add('conocidoPor')
            ->add('idSiff')
            ->add('estado')
            ->add('dispensarizacionIndividual')
            ->add('idPacienteInicial')
            ->add('idNacionalidad')
            ->add('idSexo')
            ->add('idParentescoProporDatos')
            ->add('fechaRegistro')
            ->add('fechaMod')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('primerNombre')
            ->add('segundoNombre')
            ->add('tercerNombre')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('apellidoCasada')
            ->add('fechaNacimiento')
            ->add('horaNacimiento')
            ->add('idEstadoCivil')
            ->add('idDocIdePaciente')
            ->add('numeroDocIdePaciente')
            ->add('idOcupacion')
            ->add('direccion')
            ->add('telefonoCasa')
            ->add('idCantonDomicilio')
            ->add('areaGeograficaDomicilio')
            ->add('lugarTrabajo')
            ->add('telefonoTrabajo')
            ->add('idAreaCotizacion')
            ->add('asegurado')
            ->add('numeroAfiliacion')
            ->add('cotizante')
            ->add('nombrePadre')
            ->add('nombreMadre')
            ->add('nombreConyuge')
            ->add('nombreResponsable')
            ->add('direccionResponsable')
            ->add('telefonoResponsable')
            ->add('idParentescoResponsable')
            ->add('idDocIdeResponsable')
            ->add('numeroDocIdeResponsable')
            ->add('nombreProporcionoDatos')
            ->add('idDocIdeProporcionoDatos')
            ->add('numeroDocIdeProporDatos')
            ->add('observacion')
            ->add('conocidoPor')
            ->add('idSiff')
            ->add('estado')
            ->add('dispensarizacionIndividual')
            ->add('idPacienteInicial')
            ->add('idNacionalidad')
            ->add('idSexo')
            ->add('idParentescoProporDatos')
            ->add('fechaRegistro')
            ->add('fechaMod')
        ;
    }
}
