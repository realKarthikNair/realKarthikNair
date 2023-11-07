```bash
rpm -qa | grep kernel
sudo dnf remove kernel-core-*<put stuff here>*.x86_64 kernel-modules-*<put stuff here>*.x86_64
sudo grub2-mkconfig
reboot
```
