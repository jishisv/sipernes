SELECT row_number() over (order by mnt_paciente.id) n,
  ctl_establecimiento.nombre, 
  enf_ctl_diagnostico.nombre_diagnostico, 
  count(mnt_paciente.id)
FROM 
  public.enf_ctl_diagnostico, 
  public.ctl_establecimiento, 
  public.enf_mtl_diagnostico, 
  public.mnt_expediente, 
  public.mnt_paciente
WHERE 
  enf_mtl_diagnostico.id_ctl_diag = enf_ctl_diagnostico.id AND
  enf_mtl_diagnostico.id_expediente = mnt_expediente.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  mnt_expediente.id_paciente = mnt_paciente.id
group by mnt_paciente.id,enf_ctl_diagnostico.nombre_diagnostico,ctl_establecimiento.nombre;