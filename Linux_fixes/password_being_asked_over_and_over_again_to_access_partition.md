**Issue: Password asked over and over again to access/modify/files in certain disks/disk partitions**

Fix:

> Warning: Please be aware of what you are doing

Reason: For some unknown reason, `systemd-coredump` is owning those partitions/disks and changing the ownership to the current user would fix the issue

        Fix:

        1. Launch Nautilus as root `sudo nautilus` (its generally not recommended to launch nautilus as root but lets do this time to make the process a bit simpler)
        2. Click on "Other Locations" on the sidebar
        3. Head over to "computer" > media > $USER and locate the partition there. (where $USER is your username)
        4. On the right click menu, select "Properties"
        5. On Properties' top bar, click on "Permissions"
        6. Change the "Owner" and "Acess" to your username from the choices
        7. Change the "Access" to "Create and Delete files" in all three options
        8. Click on "Change Permissions for Enclosed Files" and edit the owner's permissions to "Read and Write" and "Create and Delete files" for folders and files respectively

        This is a dirty fix to the issue 
        
Credits: Me
