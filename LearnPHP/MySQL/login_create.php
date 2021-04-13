<?php include "db.php";
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Original connection method lines 8-14, commented out in lieu of including "db.php" to import the connection method and showing refactoring process.

    //mysqli_connect is PHP's method to connect to the MySQL database in the stacks
    //mysqli_connect will take in four parameters('SERVER', 'USERNAME', 'PASSWORD', 'DATABASE_NAME');
    // $connection = mysqli_connect('localhost', 'root', 'root', 'learnphp_loginapp');

    //if will check if the connection is true and display a message in the browser if the connection is established.
    // if($connection) { echo "We are connected"; } 
    // else { die("Database connection failed."); }

    //create a query variable that has a SQL statement as a value that will insert a username and password into the users table in the learnPHP_loginapp database.
    $query = "INSERT INTO users(username,password) ";
    //ln 17 will append to the $query variable to designate the variables $username and $password to be set as the values for username and password in the table users.
    $query .= "VALUES ('$username', '$password')";

    //define a $result variable that will assing the value to be PHP's method to make a query to the MySQL database. In order to define which database and what to query the method has to take in two parameters, the $connection to the database and a $query to do something to the database.
    $result = mysqli_query($connection, $query);

    //if not true I want everything to stop with the die() method.
      if(!$result) { die('Query FAILED'.mysqli_error()); }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <!-- Basic HTML form with Bootstrap styling -->
  <div class="container">
      <div class="col-xs-6">
        <form action="login_create.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" value="submit">
          </div>
        </form>
      </div>
    </div>
</body>
</html>