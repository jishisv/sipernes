﻿SELECT 
  mnt_empleado.nombreempleado Enfermera, 
  ctl_establecimiento.nombre Establecimiento, 
  (mnt_paciente.primer_nombre || ' ' || mnt_paciente.primer_apellido) as Paciente, 
  enf_ctl_protocolo.nombre_protocolo nombreprotocolo, 
  enf_ctl_subprotocolo.nombre_subprotocolo nombresubprotocolo, 
  enf_ctl_fase_intervencion.nombre_fase fase, 
  enf_ctl_intervencion.descripcion_interven nombreintervencion, 
  enf_mtl_intervencion.observacion_interv observacionintervencion
FROM 
  mnt_expediente, 
  mnt_empleado, 
  mnt_paciente, 
  ctl_establecimiento, 
  enf_ctl_protocolo, 
  enf_ctl_subprotocolo, 
  enf_ctl_intervencion, 
  enf_ctl_fase_intervencion, 
  enf_mtl_intervencion
WHERE 
  mnt_expediente.id_paciente = mnt_paciente.id AND
  mnt_expediente.id_establecimiento = ctl_establecimiento.id AND
  enf_ctl_protocolo.id = enf_ctl_subprotocolo.id_protocolo AND
  enf_ctl_subprotocolo.id = enf_ctl_intervencion.id_subprotocolo AND
  enf_ctl_intervencion.id = enf_ctl_fase_intervencion.id_intervencion AND
  enf_mtl_intervencion.id_expediente = mnt_expediente.id AND
  enf_mtl_intervencion.id_emp_corr = mnt_empleado.id AND
  enf_mtl_intervencion.id_intervencion = enf_ctl_intervencion.id;