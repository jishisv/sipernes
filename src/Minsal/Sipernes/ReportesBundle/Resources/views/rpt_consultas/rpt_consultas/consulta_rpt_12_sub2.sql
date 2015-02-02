SELECT 
  ctl_establecimiento.nombre establecimiento, 
  sec_signos_vitales.observacion_sig SignosVitales,
  count(sec_signos_vitales.observacion_sig) cantidadsignos
FROM 
  mnt_empleado, 
  ctl_establecimiento, 
 sec_signos_vitales

  where mnt_empleado.id_establecimiento = ctl_establecimiento.id and
   sec_signos_vitales.id_emp_corr = mnt_empleado.id
group by
  ctl_establecimiento.nombre, 
  sec_signos_vitales.observacion_sig;