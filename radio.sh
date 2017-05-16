#!/bin/sh
mplayer $1 >/dev/null 2>/dev/null &
echo "Gestartet."
echo $1

