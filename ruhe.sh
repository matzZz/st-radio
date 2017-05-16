#!/bin/sh
sudo killall mplayer < /dev/null
echo "MPlayer-Prozesse beendet."
echo "0" | sudo tee /var/www/html/status/*.txt
echo "Status 0."
