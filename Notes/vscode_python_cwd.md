 # Set working directory to python file's path everytime
 
 1. Create a launch.json file

![image](https://user-images.githubusercontent.com/78267371/209951846-3bb608bd-f6f8-4c71-9f08-96904c3320f9.png)

2. add this line to the file (refer screenshot below)

```
"cwd": "${fileDirname}"
```

![image](https://user-images.githubusercontent.com/78267371/209951932-c837557a-dd39-4a1f-a95c-0ac662eef0be.png)

3. Make sure to ```cd``` the integrated terminal to the same directory as your python file!


Enjoy!

Gratitude: https://stackoverflow.com/a/56776620/12075599
