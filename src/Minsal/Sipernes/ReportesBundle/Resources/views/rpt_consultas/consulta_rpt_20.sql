SELECT 
  ctl_establecimiento.nombre, 
  enf_dosis_esquema_vac.fecha_dosis_esq, 
  enf_ctl_tipo_componente.nombre_componente1, 
  enf_dosis_esquema_vac.dosis
FROM 
  public.ctl_establecimiento, 
  public.enf_componente, 
  public.enf_ctl_tipo_componente, 
  public.enf_dosis_esquema_vac, 
  public.enf_inventario, 
  public.mnt_expediente_establecimiento, 
  public.mnt_expediente
WHERE 
  ctl_establecimiento.id = mnt_expediente_establecimiento.id AND
  enf_componente.id_tipo_componente = 1 AND
  enf_componente.id_inventario = enf_inventario.id AND
  enf_dosis_esquema_vac.id_componente = enf_componente.id AND
  mnt_expediente.id = enf_dosis_esquema_vac.id_expediente AND
  mnt_expediente.id_establecimiento = mnt_expediente_establecimiento.id_establecimiento;
