SELECT 
  ctl_establecimiento.nombre establecimiento, 
  enf_anotacion.observacion_anot,
  count(enf_anotacion.observacion_anot) cantidadanotacion
FROM 
  public.mnt_empleado, 
  public.ctl_establecimiento, 
   public.enf_anotacion

   where mnt_empleado.id_establecimiento = ctl_establecimiento.id and
   enf_anotacion.id_emp_corr = mnt_empleado.id
group by
  ctl_establecimiento.nombre, 
  enf_anotacion.observacion_anot;