#!/bin/sh
sudo killall mplayer < /dev/null
echo "MPlayer-Prozesse beendet."
echo "1" | sudo tee /var/www/html/status/$1.txt
echo "Status gespeichert."
echo $1