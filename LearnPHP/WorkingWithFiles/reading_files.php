<?php 
  $file = "example.txt";

  //designate 'r' in place of 'w' in fopen() method to establish that we are reading a file instead of writing a file...
  if( $handle = fopen($file, 'r')) {
    
    //fread() will take two parameters; the file and what you want to read by the length of the file in bytes.

    //How to read a specific length of a file...
    // echo $content = fread($handle, 10); //Each byte equals a character...
    
    //If I want to read the entire contents of the file I can use the built-in method filesize() that takes in a single parameter which is the file...
    echo $content = fread($handle, filesize($file)); 
    fclose($handle);
  
  } else {
    echo "The application was not able to write on the file...";
  }
  
?>