SELECT 
  enf_mtl_actividad.fecha_modificacion_act as fecha_actividad, 
  ctl_establecimiento.nombre as establecimiento, 
  enf_ctl_subactividad.nombre_subactividad as actividad, 
  SUM(enf_mtl_actividad.cantidad_act_enf)as cantidad, 
  sum(enf_mtl_actividad.tiempo_act_enf) as tiempo
FROM 
  public.mnt_empleado, 
  public.enf_mtl_actividad, 
  public.enf_ctl_subactividad, 
  public.enf_ctl_actividad, 
  public.mnt_expediente, 
  public.ctl_establecimiento
WHERE 
  mnt_empleado.id = enf_mtl_actividad.id_emp_corr AND
  enf_ctl_subactividad.id = enf_mtl_actividad.id_subactividad AND
  enf_ctl_actividad.id = enf_ctl_subactividad.id_actividad AND
  mnt_expediente.id = enf_mtl_actividad.id_expediente AND
  ctl_establecimiento.id = mnt_expediente.id_establecimiento
 
GROUP BY enf_ctl_subactividad.nombre_subactividad, 
  ctl_establecimiento.nombre, 
  enf_mtl_actividad.fecha_modificacion_act, 
  enf_mtl_actividad.cantidad_act_enf, 
  enf_mtl_actividad.tiempo_act_enf
  
 
