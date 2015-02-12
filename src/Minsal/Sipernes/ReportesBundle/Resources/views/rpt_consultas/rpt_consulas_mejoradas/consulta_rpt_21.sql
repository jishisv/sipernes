SELECT 
  ctl_establecimiento.nombre, 
  enf_anotacion.observacion_anot, 
  mnt_empleado.nombre, 
  mnt_empleado.id, 
  mnt_expediente.numero
FROM 
  public.enf_anotacion, 
  public.ctl_establecimiento, 
  public.mnt_expediente, 
  public.mnt_empleado, 
  public.mnt_paciente
WHERE 
  enf_anotacion.id_emp_corr = mnt_empleado.id AND
  ctl_establecimiento.id = mnt_expediente.id_establecimiento AND
  mnt_expediente.id = enf_anotacion.id_expediente AND
  mnt_expediente.id_paciente = mnt_paciente.id;
