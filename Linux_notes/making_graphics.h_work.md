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
    
    (PIE needs to be disabled since the compiled packages of libXbgi wasn't compiled using the -fPIE flag. If you really need PIE, compile the library after adding -fPIE  to CFLAGS or CPPFLAGS)
