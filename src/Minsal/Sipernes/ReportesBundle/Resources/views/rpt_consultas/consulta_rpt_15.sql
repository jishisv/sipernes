SELECT 
  enf_mtl_capacitacion.fecha_capacitacion, 
  enf_mtl_capacitacion.tema_capacitacion, 
  enf_mtl_capacitacion.asistencia_capacitacion, 
  enf_mtl_capacitacion.monto_financiamiento_cap, 
  enf_mtl_capacitacion.horas_duracion_cap, 
  enf_mtl_capacitacion.establecimiento_cap, 
  enf_ctl_financiamiento.nombre_financiamiento, 
  mnt_empleado.nombre, 
  mnt_empleado.apellido
FROM 
  public.enf_mtl_capacitacion, 
  public.enf_ctl_financiamiento, 
  public.mnt_empleado
WHERE 
  enf_mtl_capacitacion.id_financiamiento = enf_ctl_financiamiento.id AND
  enf_mtl_capacitacion.id_emp_corr = mnt_empleado.id;
