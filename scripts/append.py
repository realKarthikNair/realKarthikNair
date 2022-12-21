#!/usr/bin/python3
import fileinput
import sys

for line in fileinput.input(['./some_file.txt'], inplace=True):
    sys.stdout.write('some string{l}'.format(l=line))
