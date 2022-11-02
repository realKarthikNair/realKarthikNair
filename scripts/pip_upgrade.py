#!/usr/bin/python

# Credit : https://stackoverflow.com/a/5839291/12075599

import pkg_resources
from subprocess import call

packages = [dist.project_name for dist in pkg_resources.working_set]
call("pip install --upgrade " + ' '.join(packages), shell=True)



