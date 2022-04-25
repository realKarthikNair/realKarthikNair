

-> Recovery Flashing Steps:

Unlock bootloader

Go to fastboot using Power+Volume Up 

> fastboot --disable-verification flash vbmeta vbmeta.img

> fastboot flash recovery recovery.img

> fastboot reboot recovery


-> Guide to flash GSI(Generic System Image)

>adb reboot bootloader 

>fastboot devices

>fastboot reboot fastboot

>fastboot --disable-verity --disable-verification flash vbmeta vbmeta.img

>fastboot reboot fastboot

>fastboot erase system

>fastboot reboot fastboot

>fastboot flash system system.img 

>fastboot -w

>fastboot reboot bootloader

>fastboot erase userdata

>fastboot reboot

Incase not enough space in system

> fastboot delete-logical-partition product
