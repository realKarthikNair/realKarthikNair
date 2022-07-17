Credit: https://www.reddit.com/r/GalaxyS22/comments/v7042x/how_to_stop_any_system_app_from_bypassing_doze/  

```adb shell dumpsys deviceidle```  dumps doze mode info  
Look for the line "Whitelist system apps". Packages under it can override doze mode.  
```adb shell dumpsys deviceidle sys-whitelist -<package>``` would remove an app from whitelist  
e.g., ```adb shell dumpsys deviceidle sys-whitelist -com.facebook.services```(hehe)  

To undo, use the 'plus' sign instead of the minus ie ``````adb shell dumpsys deviceidle sys-whitelist +<package>```  
e.g., ```adb shell dumpsys deviceidle sys-whitelist +com.facebook.services```
