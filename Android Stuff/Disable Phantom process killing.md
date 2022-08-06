#  Disable Phantom process killing for A12

    adb shell "/system/bin/device_config put activity_manager max_phantom_processes 2147483647"
    adb shell "/system/bin/device_config set_sync_disabled_for_tests persistent; /system/bin/device_config put activity_manager max_phantom_processes 2147483647"

stock value: 32  

Re-enable device config sync

    adb shell "/system/bin/device_config set_sync_disabled_for_tests none"

Check device config sync mode stored in settings

    adb shell "/system/bin/settings get global device_config_sync_disabled"
    
0 => null, 1=> persistent, 2=> until_reboot    

return max_phantom_processes

    adb shell device_config get activity_manager max_phantom_processes 
    
or 
    
    adb shell "/system/bin/dumpsys activity settings | grep max_phantom_processes"
     
More stuff

    adb shell "/system/bin/dumpsys activity settings
    
Even more stuff 

https://gist.github.com/agnostic-apollo/dc7e47991c512755ff26bd2d31e72ca8
