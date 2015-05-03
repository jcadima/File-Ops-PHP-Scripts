### File Operations php script ( renaming files from a directory)
This script searches the current directory for files that are not directories,
php source files , or the dot files, it can also be expanded to exclude other file types

The first iteration shows a list of the all the files found in the directory ( no exceptions),
at the same time it stores only the files that are not directories or php source files in a separate array.

The second iteration is just a list of the files that will be renamed (retrieved from an array)

The third iteration removes any blank spaces and renames the files.
### rename.php highlights
quick overview:

* reads current directory
* creates array to hold the files that will be renamed
* first iteration ( list all files in the current directory )
* second iteration ( list of files that will be renamed )
* third iteration ( remove blank spaces and rename files )

