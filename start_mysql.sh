#!/bin/bash
serv=mysql


if (( $(ps -ef | grep -v grep | grep $serv | wc -1) > 0))
	then
		echo "$serv is running fine!!!"
	else
		echo "$serv will start up hang on..."
			systemctl start $serv
		echo "$serv service is UP and checking status..."
		systemctl status $serv
fi


