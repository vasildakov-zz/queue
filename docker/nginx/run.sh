#!/bin/bash

#if [ "$VIRTUAL_HOST" ]; then
#    sed -i "s/#{SERVERNAME}#/server_name $VIRTUAL_HOST;/" "/etc/nginx/sites-available/$SITE_TYPE/$SITE_TYPE-$NGINX_CONF.conf"
#fi

ln -s /etc/nginx/sites-available/default.conf /etc/nginx/sites-enabled/default.conf

exec nginx -g 'daemon off;'