```bash
var=$(ls /usr/share/figlet/ | sed '/-/d' | sed 's/\..*$//g') && for i in ${var[@]}; do echo -e "\n\n$i"; toilet -f $i "DEMO"; done
```
