<?php 
  //define a variable named 'example.txt';
  $file = "example.txt";
  //fopen() will take in two parameters; a string that will be the name of the file and 'w' which means write. If the file does not exist, fopen() will create the file and open it.
  $handle = fopen($file, 'w');
  //fclose will take in a parameter that is a file, and close the file.
  fclose($handle);


?>