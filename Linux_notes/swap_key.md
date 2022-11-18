So I broke the down arrow key on my laptop and keyboard replacement was pretty costly.
SO I remapped (or swapped, anything you'd like to call it) it with Right Ctrl key as a dirty fix.

So `/usr/share/X11/xkb/keycodes/evdev` is the file you need to mess up with

For instance, what I did was commenting the line that had the id and keycode for Right Ctrl key 

![image](https://user-images.githubusercontent.com/78267371/202810643-b73d633d-5ec4-4c7b-a063-1b6affbec6eb.png)

and putting that id for down arrow key instead

![image](https://user-images.githubusercontent.com/78267371/202810662-93ceb35d-637f-4193-88e4-8f19667c7676.png)

It didn't work right upon saving the file so I had to give a reboot!

> This obviously isn't a permanent solution since this workaround ain't gonna work in the bios, for example. Also, getting accustomed to the swapped key is a pain...
