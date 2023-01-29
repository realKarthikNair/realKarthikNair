⚠ Please read this till the end before doing anything

If you encounter an error like 

> ERROR: Cannot uninstall \<package\>. It is a distutils installed project and thus we cannot accurately determine which files belong to it which would lead to only a partial uninstall.

The first (and safest try) should be trying to update the package using your distribution's package manager.
  
For example, if the error is `ERROR: Cannot uninstall 'gpg'. It is a distutils installed project and thus we cannot accurately determine which files belong to it which would lead to only a partial uninstall.`, try 
  
  ```
  sudo apt update && sudo apt upgrade gpg
  # Incase of debian-based systems
  ```
  
  
  If pip still throws out an error, the next try should be passing the `--ignore-installed` option (may not be safe in the long run)
  
  ```
  sudo pip install gpg --ignore-installed
  ```
  
  ⚠ This surely updates the package for the time being, but `might` break the system partially or fully at some some other point, e.g., during a distro upgrade; it really depends, but I must warn you.
