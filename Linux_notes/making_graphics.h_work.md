<details>
<summary>Table of Contents</summary>

* [Ubuntu/Pop!_OS/Debian based distros](#for-ubuntupop_osdebian-based-distros)
* [Fedora/RedHat based distros](#for-fedoraredhat-based-distros)
</details>

### For Ubuntu/Pop!_OS/Debian based distros

1. get The libXbgi Library (if pre compiled packages dont work for you compile from source :))

https://libxbgi.sourceforge.net/#download

2. curses.h will give you almost all of the functionality provided by conio.h (just replace conio.h with curses.h in code)

For debian based distros:

```bash
sudo apt-get install libncurses5-dev libncursesw5-dev
```

3. To compile code with graphics.h header file, 

    1. **Comment out** these lines (since libXbgi already includes most of their functions and hence both header files existing in code throws out error)
    
    ```c
    #include <conio.h>
    #include <dos.h>
    #include <curses.h>
    ```

    and (obviously) **add** the graphics.h header file

    ```c
    #include <graphics.h>     
    ```

   2. Compile using gcc or g++ with path to libXbgi.a and `-lX11 -lm  -no-pie`
  
   
    
    ```bash
    gcc program0.c /usr/lib64/libXbgi.a -lX11 -lm  -no-pie -o program0
    ```
    
    ```bash
    g++ program0.cpp  /usr/lib64/libXbgi.a -lX11 -lm  -no-pie -o program0
    ```
    
    (PIE needs to be disabled since the [pre-compiled packages of libXbgi](https://libxbgi.sourceforge.net/#download) wasn't compiled using the -fPIE flag. If you really need PIE, compile the library from [source](https://sourceforge.net/projects/libxbgi/files/xbgi-365.tar.gz) after adding -fPIE  to CFLAGS or CPPFLAGS)

### For Fedora/RedHat based distros

1. Get SDL_BGI Library 

Download the rpm package from [here](https://sdl-bgi.sourceforge.io/#:~:text=compiled%20with%20SDL_bgi.-,Download,-The%20current%20release)

2. Get ncurses library

    curses.h will give you almost all of the functionality provided by conio.h (just replace conio.h with curses.h in code)

    ```bash
    sudo dnf install ncurses-devel ncurses-c++-libs
    ```

3. Install SDL2

    ```bash
    sudo dnf install SDL2.x86_64
    sudo dnf install SDL2-devel.x86_64
    ```
4. To compile code with graphics.h header file, 

    1. **Comment out** these lines (since libXbgi already includes most of their functions and hence both header files existing in code throws out error)
    
    ```c
    #include <conio.h>
    #include <dos.h>
    #include <curses.h>
    ```

    and (obviously) **add** the graphics.h header file

    ```c
    #include <graphics.h>     
    ```

    2. Compile using gcc or g++ with -lSDL_bgi -lSDL2
      
     ```bash
      gcc -o program program0.c -lSDL_bgi -lSDL2
      ```

