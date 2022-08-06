#  Disable Phantom process killing for A12

    adb shell "/system/bin/device_config put activity_manager max_phantom_processes 2147483647"
    adb shell "/system/bin/device_config set_sync_disabled_for_tests persistent; /system/bin/device_config put activity_manager max_phantom_processes 2147483647"

stock value: 32  

Re-enable device config sync

    adb shell "/system/bin/device_config set_sync_disabled_for_tests none"

Check device config sync mode stored in settings

    adb shell "/system/bin/settings get global device_config_sync_disabled"
