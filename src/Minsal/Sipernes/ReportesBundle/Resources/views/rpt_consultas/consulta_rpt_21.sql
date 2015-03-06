SELECT 
  mnt_empleado.nombre Enfermera, 
  ctl_establecimiento.nombre establecimiento, 
  enf_anotacion.observacion_anot Anotacion, 
  mnt_paciente.primer_nombre Paciente
   
FROM 
  public.ctl_establecimiento, 
  public.mnt_expediente_establecimiento, 
  public.mnt_expediente, 
  public.enf_anotacion, 
  public.mnt_empleado, 
  public.mnt_paciente
WHERE 
  ctl_establecimiento.id = mnt_expediente_establecimiento.id AND
  mnt_expediente.id_establecimiento = mnt_expediente_establecimiento.id_establecimiento AND
  mnt_expediente.id = enf_anotacion.id_expediente AND
  mnt_expediente.id_paciente = mnt_paciente.id AND
  enf_anotacion.id_emp_corr = mnt_empleado.id;
