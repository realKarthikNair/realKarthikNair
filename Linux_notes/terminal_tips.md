### 1. `locate` command

- `locate` is the best alternative to `find` when you need to see the results quickly
- `sudo apt update && sudo apt install mlocate`
- using locate is as easy as `locate demo.md`

> `locate` uses a database of files that is auto-updated once a day, that's how it finds files in a blink while `find` iterates through the whole file system every time it is used, looking for the files/directories you want. You can manually update the database of locate using the command `sudo updatedb`

