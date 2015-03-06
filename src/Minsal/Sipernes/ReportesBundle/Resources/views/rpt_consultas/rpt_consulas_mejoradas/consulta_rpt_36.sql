SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  enf_ctl_tipo_componente.nombre_componente1 Nombrevacuna, 
  enf_mov_inventario.cantidad_mov Cantidad, 
  enf_mov_inventario.empleado_envio NombreEmpleadoenvio, 
  enf_mov_inventario.empleado_recivio NombreEmpleadorecibio, 
  ctl_area_atencion.nombre Area
FROM 
  enf_componente, 
  enf_ctl_tipo_componente, 
  mnt_empleado, 
  ctl_establecimiento, 
  enf_ctl_mov_inventario, 
  enf_mov_inventario, 
  enf_inventario, 
  ctl_area_atencion
WHERE 
  enf_componente.id_tipo_componente = enf_ctl_tipo_componente.id AND
  mnt_empleado.id_establecimiento = ctl_establecimiento.id AND
  mnt_empleado.id = enf_mov_inventario.id_emp_corr AND
  mnt_empleado.idarea = ctl_area_atencion.id AND
  enf_mov_inventario.id_tipo_inventario = enf_ctl_mov_inventario.id AND
  enf_mov_inventario.id_inventario = enf_inventario.id AND
  enf_inventario.id = enf_componente.id_inventario;
