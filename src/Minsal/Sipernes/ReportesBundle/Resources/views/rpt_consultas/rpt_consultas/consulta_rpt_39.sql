SELECT 
enf_mtl_capacitacion.establecimiento_cap Establecimiento,
  enf_mtl_capacitacion.tema_capacitacion Tema, 
  enf_mtl_capacitacion.asistencia_capacitacion Totalasistentes, 
  enf_ctl_financiamiento.nombre_financiamiento Financiadopor, 
  enf_mtl_capacitacion.monto_financiamiento_cap MontoFinanciamiento, 
  enf_mtl_capacitacion.horas_duracion_cap Horas 
  
FROM 
  public.enf_mtl_capacitacion, 
  public.ctl_establecimiento, 
  public.enf_ctl_financiamiento, 
  public.mnt_empleado
WHERE 
  enf_mtl_capacitacion.id_financiamiento = enf_ctl_financiamiento.id AND
  enf_mtl_capacitacion.id_emp_corr = mnt_empleado.id AND
  mnt_empleado.id_establecimiento = ctl_establecimiento.id;
