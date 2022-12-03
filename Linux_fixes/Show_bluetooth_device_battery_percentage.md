If [this](https://extensions.gnome.org/extension/3991/bluetooth-battery/) extension can not display bluetooth devices' battery percentage for you, follow these steps:

1. 
```bash
sudo gedit /etc/bluetooth/main.conf
```
2. add under the [GENERAL] headline, add a line 
```
Experimental=true
```
3. 
```bash 
sudo systemctl restart bluetooth
```
4. in extension settings, set '% source' to 'Bluetoothctl'
5. Click on the 'refresh' option in the extension tray

Enjoy!

*Incase it still doesn't work, cry!*
