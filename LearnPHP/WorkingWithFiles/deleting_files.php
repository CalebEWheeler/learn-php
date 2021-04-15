<?php 
//TO PROPERLY SEE FILE DELETION, YOU MUST BE ON THE 'deleting_files.php' PAGE IN THE BROWSER...

//use unlink() method that takes in a single parameter, the file name as a string. unlink() will delete the file you specify...
unlink("delete_file_test.php"); 

//uncomment the following lines and refresh the browser to create the file to be deleted. After the file is created through the browser refresh comment back out the following lines and refresh the browser while on deleting_files.php

// $file = "delete_file_test.php";
// if( $handle = fopen($file, 'w')) {
//   fwrite($handle, "Hi, I am the file that is going to be deleted if you follow the instructions properly!");
//   fclose($handle);
// } else {
//   echo "The application was not able to write on the file...";
// }


?>