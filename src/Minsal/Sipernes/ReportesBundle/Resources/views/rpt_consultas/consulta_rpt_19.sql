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
  enf_ctl_diagnostico.nombre_diagnostico;
  
  --falta where
  
SELECT 
enf_ctl_diagnostico.nombre_diagnostico,
count(mnt_expediente.id) Pacientes
FROM 
enf_mtl_diagnostico, 
mnt_expediente, 
enf_ctl_diagnostico, 
enf_clase, 
enf_dominio, 
ctl_establecimiento

where 
enf_mtl_diagnostico.id_expediente = mnt_expediente.id and
enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id and
enf_ctl_diagnostico.id_clase = enf_clase.id and
enf_clase.id_dominio = enf_dominio.id

GROUP BY
enf_ctl_diagnostico.nombre_diagnostico;