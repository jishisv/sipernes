SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_expediente.numero Expediente, 
  (mnt_paciente.primer_nombre || ' '|| mnt_paciente.segundo_nombre) as Paciente, 
  mnt_empleado.id CodigoEnfermera, 
  mnt_empleado.nombre NombreEnfermera, 
  enf_ctl_diagnostico.nombre_diagnostico Diagnostico, 
  enf_ctl_intervencion.descripcion_interven Intervencion
FROM 
  enf_ctl_diagnostico, 
  ctl_establecimiento, 
  enf_ctl_intervencion, 
  enf_mtl_intervencion, 
  enf_mtl_diagnostico, 
  enf_ctl_protocolo, 
  enf_ctl_subprotocolo, 
  mnt_empleado, 
  mnt_expediente, 
  mnt_paciente
WHERE 
  enf_mtl_intervencion.id_intervencion = enf_ctl_intervencion.id AND
  enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id AND
  enf_ctl_subprotocolo.id_protocolo = enf_ctl_protocolo.id AND
  enf_ctl_subprotocolo.id = enf_ctl_intervencion.id_subprotocolo AND
  mnt_empleado.id = enf_mtl_intervencion.id_emp_corr AND
  mnt_empleado.id = enf_mtl_diagnostico.id_emp_corr AND
  mnt_expediente.id = enf_mtl_diagnostico.id_expediente AND
  mnt_expediente.id = enf_mtl_intervencion.id_expediente AND
  mnt_expediente.id_paciente = mnt_paciente.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id;
