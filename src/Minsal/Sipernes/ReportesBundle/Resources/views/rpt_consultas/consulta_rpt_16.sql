select row_number() over (order by t.nombre) n,t.nombre establecimiento,t.nombre_componente1 tipo,sum(t.dosis) dosis,sum(t.aplicadas) aplicadas,sum(t.pendientes) pendientes from (
SELECT 
  ctl_establecimiento.nombre,
  enf_ctl_tipo_componente.nombre_componente1, 
  (select sum(a.cantidad_mov) from public.enf_mov_inventario a where enf_mov_inventario.id_tipo_inventario = a.id and a.id_tipo_inventario=1) dosis, 
  (select sum(a.cantidad_mov) from public.enf_mov_inventario a where enf_mov_inventario.id_tipo_inventario = a.id and a.id_tipo_inventario=2) aplicadas,
  (select sum(a.cantidad_mov) from public.enf_mov_inventario a where enf_mov_inventario.id_tipo_inventario = a.id and a.id_tipo_inventario=1)-(select sum(a.cantidad_mov) from public.enf_mov_inventario a where enf_mov_inventario.id_tipo_inventario = a.id and a.id_tipo_inventario=1) pendientes
FROM 
  public.enf_componente, 
  public.ctl_establecimiento, 
  public.enf_ctl_tipo_componente, 
  public.mnt_expediente, 
  public.enf_dosis_esquema_vac, 
  public.enf_mov_inventario
WHERE 
  enf_componente.id_tipo_componente = enf_ctl_tipo_componente.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_dosis_esquema_vac.id_expediente = mnt_expediente.id AND
  enf_dosis_esquema_vac.id_componente = enf_componente.id AND
  enf_dosis_esquema_vac.id_movimiento = enf_mov_inventario.id) t group by t.nombre,t.nombre_componente1;