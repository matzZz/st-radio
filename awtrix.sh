#!/bin/sh
curl -H "Content-Type: application/json" -X POST -d '{"force":true,"icon":1,"text":"'$1'","moveIcon":false,"count":2}' 'http://192.168.178.198:7000/api/v3/app'
echo "Awtrix Gestartet."
echo $1
