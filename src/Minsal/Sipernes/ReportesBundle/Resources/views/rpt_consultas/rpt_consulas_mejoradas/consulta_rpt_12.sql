SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  count(enf_anotacion.observacion_anot) CantidadAnotacion, 
  count(sec_signos_vitales.observacion_sig) CantidadSignos, 
  count(enf_mtl_nota.observacion_nota) CantidadNota
FROM 
 enf_anotacion, 
 ctl_establecimiento, 
 mnt_expediente, 
 sec_signos_vitales, 
 enf_mtl_nota
WHERE 
  mnt_expediente.id = enf_anotacion.id_expediente AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  sec_signos_vitales.id_expediente = mnt_expediente.id AND
  enf_mtl_nota.id_expediente = mnt_expediente.id
 group by
  ctl_establecimiento.nombre, 
  enf_anotacion.observacion_anot, 
  sec_signos_vitales.observacion_sig, 
  enf_mtl_nota.observacion_nota
