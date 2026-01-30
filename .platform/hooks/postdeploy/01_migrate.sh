#!/bin/bash
cd /var/app/current
sudo -u webapp php artisan migrate --force
sudo -u webapp php artisan storage:link
