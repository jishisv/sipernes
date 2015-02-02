SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  mnt_expediente.id Expediente,
  mnt_paciente.primer_nombre NombrePaciente,
  mnt_empleado.id CodigoEnfermera,
  mnt_empleado.nombre NombreEnfermera,
  enf_mtl_nota.observacion_nota Nota
  
FROM 
  public.mnt_empleado, 
  public.ctl_establecimiento, 
  public.enf_mtl_nota, 
  public.mnt_expediente, 
  public.mnt_paciente
WHERE 
  mnt_empleado.id = enf_mtl_nota.id_emp_corr AND
  ctl_establecimiento.id = mnt_empleado.id_establecimiento AND
  enf_mtl_nota.id= mnt_expediente.id AND
  mnt_expediente.id_paciente = mnt_paciente.id;
