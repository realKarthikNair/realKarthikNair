> For anyone facing this problem on Linux:
> 
> 1. Enable the following services in `systemd`:
>    
>    * `nvidia-suspend.service`
>    * `nvidia-resume.service`
>    * `nvidia-hibernate.service`
>    
>    Enable via `sudo systemctl enable <service name>`.
> 2. Create a file named `/etc/modprobe.d/nvidia-suspend.conf`.
> 3. Add the following line to the file:
>    ```
>    options nvidia NVreg_PreserveVideoMemoryAllocations=1
>    ```
> 4. Reboot
> 5. **Optional:** If that does not help, execute these.
>    ```shell
>    sudo modprobe -r nvidia_uvm # or: sudo rmmod nvidia_uvm
>    sudo modprobe nvidia_uvm
>    ```
> 
> This shall prevent the `cuInit: CUDA_ERROR_UNKNOWN: unknown error`. [Read more about the problem here.](https://download.nvidia.com/XFree86/Linux-x86_64/510.39.01/README/powermanagement.html)

https://github.com/tensorflow/tensorflow/issues/53341#issuecomment-1548140919
