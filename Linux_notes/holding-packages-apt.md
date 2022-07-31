Prevent an apt package from being auto-updated

    sudo apt-mark hold <package-name>

eg
    
    sudo apt-mark hold firefox
    
Undo the action

    sudo apt-mark unhold <package-name>

eg

    sudo apt-mark unhold firefox

List packages that are held

    sudo apt-mark showhold
    
Read More: http://manpages.ubuntu.com/manpages/zesty/man8/apt-mark.8.html
