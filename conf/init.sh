#!/bin/sh

sleep 3
service apache2 restart
tail -f /var/log/apache2/access.log