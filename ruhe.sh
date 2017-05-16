#!/bin/sh
sudo killall mplayer < /dev/null
echo "MPlayer-Prozesse beendet."
sudo rm -r ./status/*.txt
echo "Status geloescht."
