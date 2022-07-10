    sudo gedit /etc/samba/smb.conf #karthik
    sudo service smbd restart
    sudo systemctl stop smbd
    sudo systemctl mask smbd

    sudo systemctl disable apache2 && sudo systemctl stop apache2
    sudo systemctl enable apache2 && sudo systemctl start apache2
