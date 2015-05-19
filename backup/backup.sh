#!/bin/bash

#---------Generalidades-------------#
#NOMBRESCRIPT='rsync-backup'
HOSTNAME="localhost"
# -------FECHA ACTUAL-------------- #
FECHA=`date +%Y%m%d`
# ------------SEMANA--------------- #
SEMANA=`date +%V`
# --------------ANIO--------------- #
ANIO=`date +%Y`
#-----------USUARIO DB--------------#
USUARIODB="siap"
#------------NOMBRE DB--------------#
NOMBREDB="base_siap"

pg_dump -i -h $HOSTNAME -p 5432 -U $USUARIODB -F c -b -v -f "/home/backup/backup_$FECHA.backup" $NOMBREBD

