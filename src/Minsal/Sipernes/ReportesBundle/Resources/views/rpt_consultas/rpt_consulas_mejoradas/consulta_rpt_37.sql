SELECT 
  ctl_establecimiento.nombre Establecimiento, 
  enf_ctl_tipo_componente.nombre_componente1 NombreVacuna, 
  (mnt_paciente.primer_nombre ||' '|| mnt_paciente.primer_apellido) as Paciente,
  count(enf_ctl_tipo_componente.nombre_componente1)
FROM 
  public.enf_componente, 
  public.enf_ctl_tipo_componente, 
  public.mnt_paciente, 
  public.mnt_expediente, 
  public.enf_dosis_esquema_vac, 
  public.enf_esquema_vac, 
  public.ctl_establecimiento
WHERE 
  enf_componente.id_tipo_componente = enf_ctl_tipo_componente.id AND
  mnt_paciente.id = mnt_expediente.id_paciente AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_dosis_esquema_vac.id_expediente = mnt_expediente.id AND
  enf_esquema_vac.id = enf_dosis_esquema_vac.id_tipo_esq AND
  enf_esquema_vac.id = enf_componente.id_tipo_esq
group by
ctl_establecimiento.nombre, 
  enf_ctl_tipo_componente.nombre_componente1,
  (mnt_paciente.primer_nombre ||' '|| mnt_paciente.primer_apellido)