
#!/bin/bash
serv=mysql
sstat=$(pidof $serv | wc -l )
if [ $sstat -gt 0 ]
then
echo "$serv is running fine!!!"
else
echo "$serv will start up hang on..."
systemctl start $serv
echo "$serv service is UP and checking status.."
systemctl status $serv
fi
