# Tips and solutions-to-issues I'm leaving behind for Linux Users using Android Studio

### 1. Android Studio is unacceptably slow

- Don't use the snap or flatpak version, use the builds from official site and put the extracted folder into /opt
- If emulator is painfully slow, ensure that kvm is supported, enabled and working on your machine. Also make sure to NOT use the Google Play store variants since those emulated devices (for some reason) runs without hardware acceleration
- idk maybe get a better computer

### 2. Flutter throwing out cmake error while running `flutter doctor` EVEN THOUGH CMAKE IS INSTALLED

- do [this](https://stackoverflow.com/a/47365920/12075599) and `pip install cmake`

### 3. 
