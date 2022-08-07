Just leaving a copy of my answer in [this](https://android.stackexchange.com/questions/247277/can-i-create-a-file-on-android-similar-to-windows-that-reads-and-processes-comma) thread 


Since Android is a linux-based Operating System, it would be shell scripts (.sh) instead of batch files, probabiy run with sh, a bash like shell located in /system/bin/sh

To open applications using a shell script you ~would need root access and~ can use a terminal emulator like [termux](https://f-droid.org/en/packages/com.termux/).


First of all, grant termux full storage rights 

```
termux-setup-storage
```

To launch apps, you must write commands using [Activity Manager](http://adbcommand.com/adbshell/am)

For instance, to launch calculater (I'm using Google Calculator for the guide) using a shell script in android, the procedure would be this 

1. Create a file eg calc.sh in /storage/emulated/0 ie the user-accessible part of your internal storage, with the following content

        #!/system/bin/sh
        am start com.google.android.calculator/com.android.calculator2.Calculator

2. Open Termux

        cd /storage/emulated/0
        sh calc.sh

3. The calculator should launch

Bonus: You can also execute commands on android using your PC via [ADB](https://developer.android.com/studio/command-line/adb)
