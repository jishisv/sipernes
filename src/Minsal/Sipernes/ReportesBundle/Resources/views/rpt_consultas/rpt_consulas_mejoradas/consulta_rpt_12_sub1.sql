SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  enf_anotacion.observacion_anot Anotacion,
  count(enf_anotacion.observacion_anot) CantidadAnotacion
  FROM 
  enf_anotacion, 
  ctl_establecimiento, 
  mnt_expediente
  
WHERE 
  mnt_expediente.id = enf_anotacion.id_expediente AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id 
  
 group by
  ctl_establecimiento.nombre, 
  enf_anotacion.observacion_anot
  
