<?php 
//A form will return information in an associative array
  if(isset($_POST['submit'])) {
    //simple message to register the DOM event
    // echo "Submit has been clicked!";

    $name = ["caleb", "corey", "jess", "buster"];
    $minimum = 5;
    $maximum = 20;

    //store the values entered into semantic variables username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

      //Commented out method to check if the username is <> the minimum and maximum values
      // if(strlen($username) < $minimum) {
      //   echo "Username must be longer than five characters!";
      // }
      // if(strlen($username) > $maximum) {
      //   echo "Username cannot be longer than 10 characters!";
      // }
      
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
</head>
<body>
  
  <form action="form.php" method="post">
  
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <!-- By setting the name of the submit button in this form, we make the event available to be registered and the value read in our conditional on ln 3... -->
    <input type="submit" name="submit">

  </form>
</body>
</html>