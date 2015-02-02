SELECT 
  
  ctl_establecimiento.nombre, 
  enf_clase.nombre_clase, 
  enf_dominio.nombre_dominio, 
  enf_ctl_diagnostico.nombre_diagnostico,
 count( enf_ctl_diagnostico.id) Cantidad
FROM 
  public.mnt_expediente, 
  public.mnt_empleado, 
  public.mnt_paciente, 
  public.ctl_establecimiento, 
  public.enf_mtl_diagnostico, 
  public.enf_ctl_diagnostico, 
  public.enf_clase, 
  public.enf_dominio
WHERE 
  mnt_expediente.id_paciente = mnt_paciente.id AND
  mnt_expediente.id = enf_mtl_diagnostico.id_expediente AND
  ctl_establecimiento.id = mnt_empleado.id_establecimiento AND
  enf_mtl_diagnostico.id_emp_corr = mnt_empleado.id AND
  enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id AND
  enf_ctl_diagnostico.id_clase = enf_clase.id AND
  enf_dominio.id = enf_clase.id_dominio
  group by

  ctl_establecimiento.nombre, 
  enf_clase.nombre_clase, 
  enf_dominio.nombre_dominio, 
  enf_ctl_diagnostico.nombre_diagnostico