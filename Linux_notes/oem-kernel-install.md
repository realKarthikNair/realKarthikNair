Just found out that some issues, like the device's built-in speaker not working on my new HP laptop, can be fixed without hassle by installing the OEM kernel.

```bash
# to search for the latest OEM kernels for 22.04 
apt search linux-oem-22.04
# install it using 'sudo apt install linux-oem-*" REPLACE * with the appropriate letter
```

Now depending on your distribution, set the OEM kernel to default.

For Pop!_OS, you can change it using [kernelstub](https://support.system76.com/articles/kernelstub/#:~:text=Set%20Default%20Boot%20Kernel)

For Ubuntu, there is an option to change kernels in Grub menu

