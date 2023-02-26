ServerName localhost/localhost 80 `/etc/apache2/apache2.conf`
sudo apt purge apache2 && sudo apt install apache2
sudo a2dismod mpm_event
sudo a2enmod php8.1 
sudo service apache2 restart
