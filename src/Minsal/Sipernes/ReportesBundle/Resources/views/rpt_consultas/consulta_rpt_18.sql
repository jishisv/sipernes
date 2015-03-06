SELECT row_number() over (order by ctl_departamento.nombre) n,
  ctl_departamento.nombre departamento, 
  ctl_municipio.nombre municipio, 
  ctl_establecimiento.nombre establecimiento, 
  sum(enf_mov_inventario.cantidad_mov) dosisAplicadas
FROM 
  public.ctl_establecimiento, 
  public.ctl_departamento, 
  public.ctl_municipio, 
  public.mnt_expediente, 
  public.enf_componente, 
  public.enf_ctl_tipo_componente, 
  public.enf_dosis_esquema_vac, 
  public.enf_mov_inventario
WHERE 
  ctl_establecimiento.id_municipio = ctl_municipio.id AND
  ctl_municipio.id_departamento = ctl_departamento.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_componente.id_tipo_componente = 1 AND
  enf_dosis_esquema_vac.id_componente = enf_componente.id AND
  enf_dosis_esquema_vac.id_expediente = mnt_expediente.id AND
  enf_dosis_esquema_vac.id_movimiento = enf_mov_inventario.id AND
  enf_mov_inventario.id_tipo_inventario=2
  group by ctl_departamento.nombre, 
  ctl_municipio.nombre, 
  ctl_establecimiento.nombre;

