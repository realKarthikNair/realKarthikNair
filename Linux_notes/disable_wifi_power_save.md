```bash
iw wlp1s0 set power_save off
```

- Disables power saving mode on your WiFi card. The pros and cons are obvious (eg increased performance, low latency but increased power consumption and thermal dissipation)
- use `iwconfig wlp1s0 | grep -i "power management"` to check if it worked 
  - `wlp1s0` should be changed according to your network interface (e.g., `wlan0`) name which can be found using `netstat -i`, for example
- in my case, let alone reboots, this change doesn't even persist after waking laptop from sleep. 
- As far as i know you can make this change persist across reboots using /etc/rc.local but I haven't tried it yet since I need to figure out how to let it not reset after every wake from sleep.

____________

- Tx Rate on my system with power save ON

![Screenshot from 2023-07-02 22-57-37](https://github.com/realKarthikNair/realKarthikNair/assets/78267371/50b27fe9-c577-499c-ba80-4b760adefcb5)

- Tx Rate on my system with power save OFF

![image](https://github.com/realKarthikNair/realKarthikNair/assets/78267371/d748dd97-c877-4d20-bb52-0e4a2f376162)

- I am using an `Intel Wi-Fi 6 AX200` network card
