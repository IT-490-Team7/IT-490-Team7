
#!/bin/bash
STATUS="$(systemctl is-active apache2.service)"
serv=Apache

if [ "${STATUS}" = "active" ]; then
    echo "$serv is running....."
else 
    echo " Service not running.... and will start up shortly"
    systemctl start apache2
    echo "Checking status..."
    systemctl status apache2
    exit 1  
fi
