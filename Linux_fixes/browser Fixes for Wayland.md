### 1. Touchpad Pinch Natural Zoom not working 

1. Chrome

- set this flag to Wayland

      chrome://flags/#ozone-platform-hint
      
Relaunch chrome

2. firefox

Step 1: 

Enable this to true under about:config

    apz.one_touch_pinch.enabled
    
Step 2:

Close all instances of firefox 

edit /usr/local/share/applications/firefox.desktop and change the line starting with "Exec=" to this

    Exec=env MOZ_ENABLE_WAYLAND=1 MOZ_DBUS_REMOTE=1 GDK_BACKEND_WAYLAND=1 firefox %U
    
Open firefox

### 2. Screenshare not working on Chrome

make sure that xdg-desktop-portal-gnome is installed

if unsure

    sudo apt install xdg-desktop-portal-gnome
    systemctl --user restart xdg-desktop-portal-gnome
    reboot
    
After that,

- Set this flag to enable

      chrome://flags/#enable-webrtc-pipewire-capturer]
      
Relaunch chrome

### 3. Hardware accelerated video Decode

It actually works out of box in latest versions of chrome for linux.

The workaround I used before that is properly documented here

https://www.linuxuprising.com/2021/01/how-to-enable-hardware-accelerated.html
