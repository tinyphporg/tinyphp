#! /bin/sh
# chkconfig: 2345 55 25
# Description: Startup script for service on CentOS 7

PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin

#PHP BIN文件
BIN_FILE='/usr/bin/php'

#服务名称
SERVICE_DAEMON_ID='tinyphp-daemon'

#服务入口文件 绝对路径
SERVICE_INDEX_FILE='/data/tiny/tinyphp/demo/public/index.php'

#CMDLINE
DAEMON_CMD_LINE="$BIN_FILE $SERVICE_INDEX_FILE --id=$SERVICE_DAEMON_ID --daemon="

#start
do_start() {
	${DAEMON_CMD_LINE}start
    if [ $? -eq 0 ];then
		echo -e "	Staring $SERVICE_DAEMON_ID      \033[49;32;1m [  OK  ]  \033[0m"
    fi
}

#stop
do_stop() {
	${DAEMON_CMD_LINE}stop
    if [ $? -eq 0 ];then
		echo -e "	Stopping $SERVICE_DAEMON_ID    \033[49;32;1m [  OK  ]  \033[0m"
	fi
}

case "$1" in
        start)
                echo "Starting service_$SERVICE_DAEMON_ID:"
                do_start
        ;;
        stop)
                echo "Stopping service_$SERVICE_DAEMON_ID:"
                do_stop
		;;
        restart)
                echo "Restarting service_$SERVICE_NAME:"
                do_stop
                sleep 3
                do_start
        ;;
        *)
                $DAEMON_CMD_LINE -h
                exit 3
        ;;

esac
exit 0