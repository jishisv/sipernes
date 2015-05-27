#!/bin/bash

#---------Generalidades-------------#
NOMBRESCRIPT='rsync-backup'
HOSTNAME="localhost"
# -------FECHA ACTUAL-------------- #
FECHA=`date +%Y%m%d`
# ------------SEMANA--------------- #
SEMANA=`date +%V`
# --------------ANIO--------------- #
ANIO=`date +%Y`
#--------------Opciones-------------#
OPCIONES="-v -a  --human-readable --progress "
#-----------Includes---------------#
#Este apartado es por si queremos tener separados las variables
#source /etc/backup/2011/CambioUsuarioWeb_vars.cfg
# -------ARCHIVOS DE LOGS--------- #
LOGDIR=/tmp
LOG=$LOGDIR/$NOMBRESCRIPT-$FECHA.log
# -------EMAIL CONFIG------------- #
# Titulo del correo de confirmación
SUBJECT="$NOMBRESCRIPT: Respaldo de academica a proyectos"
# email 
#EMAIL="algo@dominio.com"
EMAIL="juan.serrano.sv@gmail.com"
#Adjunto del log
EMAILMESSAGE=$LOG
#---------Otras Variables----------#
DIRDESTINO=/home/backup/database
# -------------------------------- #

#Iniciando  el registro (log) automatico
exec >$LOG 2>&1  

#Registro de la hora Inicio
date  

#Impresion del nombre del script
echo "$NOMBRESCRIPT"

##############CONTENIDO DEL SCRIPT####################
#***** Funciones a utilizar *****#
function envia_correo {
    #+------------------------------------------------+#
    #| Envia correo a la persona que se configuro     |#
    #+------------------------------------------------+#
  /usr/bin/mail -s "Respaldo de $HOSTNAME $FECHA" $EMAIL < $LOG
}

#******************************#
#***** Programa principal *****#
#******************************#

#Ejemplo
#SERVIDORES="						
#medicina	respaldo@192.168.1.6 	/backup/respaldo/	\n
#agronomia	respaldo@192.168.1.7 	/backup/pp/		\n
#odontologia	respaldo@192.168.1.8 	/backup/pp/		\n
#occidente	respaldo@192.168.1.10 	/backup/pp/		\n
#"
SERVIDORES="
debian	respaldo@192.168.1.235    /home/backup/database \n
"
echo -e $SERVIDORES >/tmp/tmp.txt

cat /tmp/tmp.txt |while read LINEA; do
	SERVIDOR=`echo $LINEA |awk  '{ print $1}'`
	HOST=`echo $LINEA |awk  '{ print $2}'`
	DIRREMOTO=`echo $LINEA |awk '{ print $3}'`

	echo "###############################################################################"	
	echo "### SERVIDOR=$SERVIDOR  HOST=$HOST DIRREMOTO=$DIRREMOTO  ####" 			
	echo "###############################################################################"	
	
	DIRDESTINOHOST=$DIRDESTINO/$SERVIDOR
	echo "su respaldo -c 'rsync $OPCIONES -e ssh $HOST:$DIRREMOTO $DIRDESTINOHOST'"
	su respaldo -c "rsync $OPCIONES -e ssh $HOST:$DIRREMOTO $DIRDESTINOHOST"
#	rsync -v -a -e ssh respaldo@168.243.7.180:/home/respaldo/prueba/ /home/respaldo/medicina-bk/
done

rm /tmp/tmp.txt


#**********************************#
#**********************************#
#*  FIN DEL CONTENIDO DEL SCRIPT **#
#Registro de la hora finalizada
date  
#Llamo a la funcion de envio de correo
envia_correo
#Rota los logs cada semana
#savelog $LOG >$LOGDIR/$NOMBRESCRIPT.log.0



#REFERENCIAS
#http://www.sanitarium.net/golug/rsync_backups_2010.html 
#http://nixjedi.com/rsnapshot-automated-rsync-backups-debian-ubuntu-using-ssh-keys/
#http://www.vicente-navarro.com/blog/2008/01/13/backups-con-rsync/
#http://www.linuxforums.org/forum/linux-newbie/63146-solved-bash-new-line-character-variable.html
#http://es.kioskea.net/faq/893-como-leer-un-archivo-linea-por-linea







