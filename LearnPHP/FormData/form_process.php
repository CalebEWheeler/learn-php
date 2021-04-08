<?php 
//A form will return information in an associative array
  if(isset($_POST['submit'])) {

    $name = ["caleb", "corey", "jess", "buster"];
    $minimum = 5;
    $maximum = 20;

    //store the values entered into semantic variables username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

      //Utilize a more efficient switch statement
      if(strlen($username) != 0 && strlen($password) != 0) {
        switch($username) {
          case (strlen($username) < $minimum):
            echo "Username must be longer than 5 characters!<br>";
            break;
          case (strlen($username) > $maximum):
            echo "Username cannot be longer than 20 characters!<br>";
            break;
          default:
            break;
        }

        switch($password) {
          case (strlen($password) < $minimum):
            echo "Password must be longer than 5 characters!<br>";
            break;
          case (strlen($password) > $maximum):
            echo "Password cannot be longer than 20 characters!<br>";
            break;
          default:
            break;
        }
      } 
      else {
        echo "you must enter a valid username and password";  
      } 

      if(!in_array(strtolower($username), $name)) {
        echo "That is not a valid username.";
      } else {
        echo "Welcome ".strtoupper($username[0]).strtolower(substr($username, 1))."!";
      }
  }
?>