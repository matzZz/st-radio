# st-radio
# html status webradio

$ sudo apt-get install mplayer

$ sudo apt-get install apache2 php5


$ sudo /etc/init.d/apache2 stop

$ sudo chown -R pi:pi /run/lock/apache2


$ sudo nano /etc/apache2/envvars

Zeilen www-data mit pi ersetzen

export APACHE_RUN_USER=pi

export APACHE_RUN_GROUP=pi

$ sudo /etc/init.d/apache2 start

$ sudo chmod a+x ./*.sh

