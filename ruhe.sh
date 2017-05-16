#!/bin/sh
sudo killall mplayer < /dev/null
echo "MPlayer-Prozesse beendet."
#sudo rm -r ./status/*.txt
echo "0" | sudo tee /var/www/html/status/*.txt
echo "Status 0."
