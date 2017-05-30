#!/bin/sh
mplayer -cache 512 $1 >/dev/null 2>/dev/null &
echo "Gestartet."
echo $1

