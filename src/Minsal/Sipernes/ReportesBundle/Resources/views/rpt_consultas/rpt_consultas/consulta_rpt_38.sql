SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  enf_ctl_tipo_componente.nombre_componente1 Tipodevacuna, 
  enf_inventario.existencia existencia, 
  enf_mov_inventario.cantidad_mov Transferidas
FROM 
  public.ctl_establecimiento, 
  public.mnt_empleado, 
  public.enf_componente, 
  public.enf_ctl_tipo_componente, 
  public.enf_inventario, 
  public.enf_mov_inventario, 
  public.enf_ctl_mov_inventario
WHERE 
  mnt_empleado.id_establecimiento = ctl_establecimiento.id AND
  mnt_empleado.id = enf_mov_inventario.id_emp_corr AND
  enf_componente.id_tipo_componente = enf_ctl_tipo_componente.id AND
  enf_inventario.id = enf_componente.id_inventario AND
  enf_mov_inventario.id_inventario = enf_inventario.id AND
  enf_mov_inventario.id_tipo_inventario = enf_ctl_mov_inventario.id;

