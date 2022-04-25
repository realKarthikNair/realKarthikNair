#!/usr/bin/bash

# remove snap version if exists

sudo snap remove code

# fetch deb version

wget "https://code.visualstudio.com/sha/download?build=stable&os=linux-deb-x64" --output-document=code.deb

# install 

sudo dpkg -i code.deb

# delete deb file
rm code_1.66.2-1649664567_amd64.deb
