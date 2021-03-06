SELECT 
  mnt_empleado.nombreempleado Enfermera, 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_paciente.primer_nombre nombrepaciente, 
  mnt_paciente.primer_apellido apellidopaciente, 
  enf_ctl_protocolo.nombre_protocolo nombreprotocolo, 
  enf_ctl_subprotocolo.nombre_subprotocolo nombresubprotocolo, 
  enf_ctl_fase_intervencion.nombre_fase fase, 
  enf_ctl_intervencion.descripcion_interven nombreintervencion, 
  enf_mtl_intervencion.observacion_interv observacionintervencion
FROM 
  public.mnt_expediente, 
  public.mnt_empleado, 
  public.mnt_paciente, 
  public.ctl_establecimiento, 
  public.enf_ctl_protocolo, 
  public.enf_ctl_subprotocolo, 
  public.enf_ctl_intervencion, 
  public.enf_ctl_fase_intervencion, 
  public.enf_mtl_intervencion
WHERE 
  mnt_expediente.id_paciente = mnt_paciente.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_ctl_protocolo.id = enf_ctl_subprotocolo.id_protocolo AND
  enf_ctl_subprotocolo.id = enf_ctl_intervencion.id_subprotocolo AND
  enf_ctl_intervencion.id = enf_ctl_fase_intervencion.id_intervencion AND
  enf_mtl_intervencion.id_expediente = mnt_expediente.id AND
  enf_mtl_intervencion.id_emp_corr = mnt_empleado.id AND
  enf_mtl_intervencion.id_intervencion = enf_ctl_intervencion.id;