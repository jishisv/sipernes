SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_expediente.id Expediente,
  mnt_paciente.primer_nombre NombrePaciente,
  mnt_empleado.id CodigoEnfermera,
  mnt_empleado.nombre NombreEnfermera,
  enf_anotacion.observacion_anot Anotaciones, 
  enf_mtl_nota.observacion_nota Nota, 
  sec_signos_vitales.observacion_sig SignosVitales
FROM 
  public.mnt_empleado, 
  public.ctl_establecimiento, 
  public.sec_signos_vitales, 
  public.enf_mtl_nota, 
  public.enf_anotacion, 
  public.mnt_expediente, 
  public.mnt_paciente
WHERE 
  mnt_empleado.id = sec_signos_vitales.id_emp_corr AND
  mnt_empleado.id = enf_mtl_nota.id_emp_corr AND
  mnt_empleado.id = enf_anotacion.id_emp_corr AND
  ctl_establecimiento.id = mnt_empleado.id_establecimiento AND
  sec_signos_vitales.id_expediente = mnt_expediente.id AND
  enf_mtl_nota.id_expediente = mnt_expediente.id AND
  enf_anotacion.id_expediente = mnt_expediente.id AND
  mnt_expediente.id_paciente = mnt_paciente.id;
