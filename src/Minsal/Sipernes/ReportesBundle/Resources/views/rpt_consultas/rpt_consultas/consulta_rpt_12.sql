SELECT 
  ctl_establecimiento.nombre establecimiento, 
  count(enf_anotacion.observacion_anot) cantidadanotacion, 
  count(enf_mtl_nota.observacion_nota) cantidadnota, 
  count(sec_signos_vitales.observacion_sig) cantidadsignos
FROM 
  public.mnt_empleado, 
  public.ctl_establecimiento, 
  public.sec_signos_vitales, 
  public.enf_mtl_nota, 
  public.enf_anotacion
group by
  ctl_establecimiento.nombre, 
  enf_anotacion.observacion_anot, 
  enf_mtl_nota.observacion_nota, 
  sec_signos_vitales.observacion_sig;