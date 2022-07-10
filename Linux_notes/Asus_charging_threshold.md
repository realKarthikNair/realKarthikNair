Credit : https://www.linuxuprising.com/2021/02/how-to-limit-battery-charging-set.html


    sudo touch /etc/systemd/system/battery-charge-threshold.service
    sudo gedit /etc/systemd/system/battery-charge-threshold.service


- Get BATTERY_NAME from `ls /sys/class/power_supply`
- Set CHARGE_STOP_THRESHOLD as the battery percentage where you want charging to stop, eg for 80, give 81 (but for 100, its 100, not 101... then the paradox 99 comes but I've no answers to that)


      [Unit]
      Description=Set the battery charge threshold
      After=multi-user.target
      StartLimitBurst=0

      [Service]
      Type=oneshot
      Restart=on-failure
      ExecStart=/bin/bash -c 'echo CHARGE_STOP_THRESHOLD > /sys/class/power_supply/BATTERY_NAME/charge_control_end_threshold'

      [Install]
      WantedBy=multi-user.target
    

Then enable it


    sudo systemctl enable battery-charge-threshold.service

    sudo systemctl start battery-charge-threshold.service


Edit `/etc/systemd/system/battery-charge-threshold.service` to change threshold whenever needed 

    sudo systemctl daemon-reload

    sudo systemctl restart battery-charge-threshold.service

