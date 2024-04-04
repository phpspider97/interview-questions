<?php
$array = [ 
    "Git pull & git fetch" => "The git pull command is a combination of two operations: git fetch and git merge || The git fetch command only fetches changes from the remote repository",

    "Git log" => "Displays a log of commits",

    "Clone & fork" => "Cloning creates a copy of a repository on your local machine, while forking creates a copy on a remote server",

    "git revert" => "revert a commit",

    "Rename a branch" => "git branch -m old_branch_name new_branch_name",

    "Create a branch" => "git checkout -b new_branch_name",

    "Delete a branch" => "git branch -d new_branch_name",

    "detached HEAD" => "Pointing to a specific commit instead of a branch name || git checkout commit-id",

    "Git bisect" => "helps you find the commit that introduced a bug or issue in your codebase || git bisect start ||  git bisect good <commit-hash> || git bisect bad <commit-hash>",

    "Squash multiple commits into a single commit" => "git rebase -i branch-name",

    "Git cherry-pick" => "Used to apply a specific commit from one branch to another || git cherry-pick <commit-hash>",

    "Git hooks" => "Git hooks are scripts that run automatically before or after events such as commit, push, and receive",

    "remove a file from a Git repository without deleting it from the local file" => "git rm --cached *.txt || git rm --cached -r directory_name",

    "git stash" => "Allows you to temporarily save changes in your working directory that are not yet ready to be committed || git stash save 'your stash message' || git stash apply",
    
    "git rebase" => "used to integrate changes from one branch into another. It is commonly used to update a feature branch with changes from the main branch or to clean up the commit history before merging branches || git rebase <base_branch>",

    "How do you revert a commit that has already been pushed and made public" => "git revert <commit-hash>",

    "How do you remove untracked files from the current working tree in Git" => "git clean -dfX ||  d ===> untracked directories || f ===> Force the clean operation || x ===> Remove only files ignored by Git",

    "git reset & git revert" => "revert ===> create a new commit || git reset <commit>"
 
];

 
 

include('bottom.php');