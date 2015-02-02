SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_expediente.id Expediente,
  mnt_paciente.primer_nombre NombrePaciente,
  mnt_empleado.id CodigoEnfermera,
  mnt_empleado.nombre NombreEnfermera,
  sec_signos_vitales.observacion_sig SignosVitales
  
FROM 
  public.mnt_empleado, 
  public.ctl_establecimiento, 
  public.sec_signos_vitales, 
  public.mnt_expediente, 
  public.mnt_paciente
WHERE 
  mnt_empleado.id = sec_signos_vitales.id_emp_corr AND
  ctl_establecimiento.id = mnt_empleado.id_establecimiento AND
  sec_signos_vitales.id= mnt_expediente.id AND
  mnt_expediente.id_paciente = mnt_paciente.id;
