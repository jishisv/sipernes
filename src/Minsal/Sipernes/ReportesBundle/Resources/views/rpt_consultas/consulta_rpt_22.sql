SELECT 
  ctl_establecimiento.nombre, 
  enf_ctl_diagnostico.nombre_diagnostico, 
  enf_clase.nombre_clase, 
  enf_dominio.nombre_dominio,
  count (enf_mtl_diagnostico.id) cantidad
FROM 
  public.ctl_establecimiento, 
  public.enf_dominio, 
  public.enf_clase, 
  public.enf_ctl_diagnostico, 
  public.enf_mtl_diagnostico
WHERE 
  ctl_establecimiento.id = enf_mtl_diagnostico.id AND
  enf_clase.id_dominio = enf_dominio.id AND
  enf_ctl_diagnostico.id_clase = enf_clase.id AND
  enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id

  group by
 ctl_establecimiento.nombre, 
  enf_ctl_diagnostico.nombre_diagnostico, 
  enf_clase.nombre_clase, 
  enf_dominio.nombre_dominio;