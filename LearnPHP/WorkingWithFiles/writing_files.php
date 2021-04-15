<?php 
  $file = "example.txt";

  if( $handle = fopen($file, 'w')) {
    //fwrite() will take two parameters; the file and what you want to write.
    fwrite($handle, "Hi there I am a message written from writing_files.php! Added message...");
    fclose($handle);
  
  } else {
    echo "The application was not able to write on the file...";
  }
  
  


?>