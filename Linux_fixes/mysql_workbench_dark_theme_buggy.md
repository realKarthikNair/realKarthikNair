### Problem: Mysql-Workbench looks trash with GTK system-wide dark theme

Solution 

    env GTK_THEME=Adwaita mysql-workbench %f
    
make changes to the desktop file for a permanent fix

e.g., /usr/share/applications/mysql-workbench.desktop here is where my file lies

(use `sudo find / -name "*mysql-workbench.desktop"` to figure out where yours is)

    [Desktop Entry]
    Name=MySQL Workbench
    Comment=MySQL Database Design, Administration and Development Tool
    Exec=env GTK_THEME=Adwaita mysql-workbench %f
    Terminal=false
    Type=Application
    Icon=mysql-workbench
    MimeType=application/vnd.mysql-workbench-model;application/sql;
    Categories=GTK;Database;Development;
    StartupWMClass=mysql-workbench-bin
