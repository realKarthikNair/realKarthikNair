    git checkout <branch name>
    git reset --hard origin/<branch name>@{1}
    git push -f origin <branch name>

Where \<branch name\> is the branch you messed up doing ```git push -f``` or ```git push --force```

[Link to where I found this solution](https://stackoverflow.com/a/42271623/12075599)

Lesson Learned: **Do NOT force push commits unless you know what you're doing**
