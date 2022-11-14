export n=$(lsb_release -r)
export u=$(uptime -p)
echo -e "\nPop!_OS based on Ubuntu ${n: -5} | Linux $(uname -r) | $(echo $XDG_SESSION_TYPE) display manager \n"
echo -e "Quote of the Session: \e[31m$(fortune -s)\e[0m\n"
echo -e "This computer hasn't been shut down since ${u: 3}\n"
PROMPT_DIRTRIM=1
alias chrome="google-chrome-stable"
alias update="sudo apt update && sudo apt upgrade && sudo apt autoremove"
alias adb=$HOME/platform-tools/adb
alias fastboot=$HOME/platform-tools/fastboot
