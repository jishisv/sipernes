SELECT 
  ctl_establecimiento.nombre establecimiento, 
  enf_mtl_nota.observacion_nota,
  count(enf_mtl_nota.observacion_nota) cantidadnota
FROM 
  mnt_empleado, 
  ctl_establecimiento, 
  enf_mtl_nota
  
  where mnt_empleado.id_establecimiento = ctl_establecimiento.id and
   enf_mtl_nota.id_emp_corr = mnt_empleado.id
group by
  ctl_establecimiento.nombre, 
  enf_mtl_nota.observacion_nota;