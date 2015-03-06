SELECT row_number() over (order by enf_ctl_diagnostico.cod_diagnostico) n,
  ctl_establecimiento.nombre,
  enf_clase.nombre_clase, 
  enf_dominio.nombre_dominio, 
  enf_ctl_diagnostico.nombre_diagnostico, 
  count(enf_ctl_diagnostico.cod_diagnostico)
FROM 
  public.enf_ctl_diagnostico, 
  public.ctl_establecimiento, 
  public.enf_clase, 
  public.enf_dominio, 
  public.mnt_expediente, 
  public.enf_mtl_diagnostico
WHERE 
  enf_clase.id = enf_ctl_diagnostico.id_clase AND
  enf_dominio.id = enf_clase.id_dominio AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_mtl_diagnostico.id_expediente = mnt_expediente.id AND
  enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id
group by enf_ctl_diagnostico.cod_diagnostico,enf_ctl_diagnostico.nombre_diagnostico,enf_clase.nombre_clase,enf_dominio.nombre_dominio,ctl_establecimiento.nombre;