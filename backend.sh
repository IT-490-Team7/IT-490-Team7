#!/bin/bash
STATUS="$(systemctl is-active php7.4-fpm)"
serv=php

if [ "${STATUS}" = "active" ]; then
    echo "$serv is running....."
else 
    echo " Service not running.... and will start up shortly"
    systemctl start php7.4-fpm
    echo "Checking status..."
    systemctl status php7.4-fpm
    exit 1  
fi
