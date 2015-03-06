SELECT 
  ctl_establecimiento.nombre Establecimiento,
  enf_mtl_nota.observacion_nota Nota,
  count(enf_mtl_nota.observacion_nota) CantidadNota
FROM 
   
  ctl_establecimiento, 
  mnt_expediente, 
  enf_mtl_nota
WHERE 
  
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_mtl_nota.id_expediente = mnt_expediente.id
 group by
  ctl_establecimiento.nombre, 
  enf_mtl_nota.observacion_nota