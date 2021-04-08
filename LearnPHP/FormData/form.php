<?php 
//A form will return information in an associative array
  if(isset($_POST['submit'])) {
    echo "Submit has been clicked!";
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;
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