STATUS="$(systemctl is-active mysql)"
serv=mysql

if [ "${STATUS}" = "active" ]; then
	echo "Running...."

else
	echo "Not running.... start it up"
	systemctl start $serv
	echo "Checking status......"
	systemctl status $serv 
	exit 1

fi
