SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  sec_signos_vitales.observacion_sig Signos,
  count(sec_signos_vitales.observacion_sig) CantidadSignos
FROM 
  ctl_establecimiento, 
  mnt_expediente, 
  sec_signos_vitales
WHERE 
  
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  sec_signos_vitales.id_expediente = mnt_expediente.id 
  
 group by
  ctl_establecimiento.nombre, 
  sec_signos_vitales.observacion_sig
  