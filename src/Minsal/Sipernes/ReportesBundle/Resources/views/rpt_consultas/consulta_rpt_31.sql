SELECT 
  mnt_empleado.nombre Enfermera, 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_expediente.numero Expediente, 
  mnt_paciente.primer_nombre NombrePaciente, 
  mnt_paciente.segundo_nombre, 
  enf_mtl_diagnostico.id_emp_corr NumeroEmpleado, 
  enf_ctl_diagnostico.nombre_diagnostico Diagnostico
FROM 
  public.mnt_expediente_establecimiento, 
  public.mnt_expediente, 
  public.mnt_empleado, 
  public.mnt_paciente, 
  public.enf_mtl_diagnostico, 
  public.ctl_establecimiento, 
  public.enf_ctl_diagnostico
WHERE 
  mnt_expediente.id_establecimiento = mnt_expediente_establecimiento.id_establecimiento AND
  mnt_expediente.id_paciente = mnt_paciente.id AND
  mnt_expediente.id = enf_mtl_diagnostico.id_expediente AND
  enf_mtl_diagnostico.id_emp_corr = mnt_empleado.id AND
  ctl_establecimiento.id = mnt_expediente_establecimiento.id_establecimiento AND
  enf_ctl_diagnostico.id = enf_mtl_diagnostico.id_ctl_diag;
