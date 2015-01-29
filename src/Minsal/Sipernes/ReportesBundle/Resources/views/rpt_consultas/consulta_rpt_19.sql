SELECT 
enf_ctl_diagnostico.nombre_diagnostico,
  count(mnt_expediente.id) Pacientes
  FROM 
  public.enf_mtl_diagnostico, 
  public.mnt_expediente, 
  public.enf_ctl_diagnostico, 
  public.enf_clase, 
  public.enf_dominio, 
  public.ctl_establecimiento
  GROUP BY
  enf_ctl_diagnostico.nombre_diagnostico
  