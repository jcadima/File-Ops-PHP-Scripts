 <?php
 /*
This script searches the current directory for files that are not directories,
php source files , or the dot files, it can also be expanded to exclude other file types

The first iteration shows a list of the all the files found in the directory ( no exceptions),
at the same time it stores only the files that are not directories or php source files in a separate array.

The second iteration is just a list of the files that will be renamed (retrieved from an array)

The third iteration removes any blank spaces and renames the files.

 */

// Current Directory
   $dir = './';
    $dhandle = opendir($dir);
    // array that holds the files to be renamed
    $rename_files = array();

    if ($dhandle) {
    while (false !== ($fname = readdir($dhandle))) {
    	// do not put files to be renamed in the array if the file is a dot/directory or a .php file
        if ( ($fname != '.') && ($fname != '..') && !is_dir("./$fname" )  && array_pop( explode(".", $fname ) ) !== "php" )
             $rename_files[] = $fname;
         	 echo "READING ALL FILES: $fname <br>";
       }
       closedir($dhandle);
   }

   echo '<hr>';

   // Show the files to be renamed
    foreach($rename_files as $file)
    {
    	echo "RENAMING THE FOLLOWING FILES: $file  <br>";
    }

    echo '<hr>';

    foreach($rename_files as $file)
    {
    	// replace blank spaces with empty space
        $new_name = str_replace(' ','',$file);
        rename("./".$file, "./".$new_name);
        echo "FILE NAMES WITHOUT BLANK SPACES:  $new_name <br>";
    }