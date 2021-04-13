<?php include "db.php";

    //create a query variable that has a SQL statement that will return all of the users stored in the users table in the learnPHP_loginapp database.
    $query = "SELECT * FROM users";

    //define a $result variable that will assing the value to be PHP's method to make a query to the MySQL database. In order to define which database and what to query the method has to take in two parameters, the $connection to the database and a $query to do something to the database.
    $result = mysqli_query($connection, $query);

    //if not true I want everything to stop with the die() method.
      if(!$result) { die('Query FAILED'.mysqli_error()); }
    
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
      <div class="col-sm-6">
        
      <form action="login.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <select name="" id="">
              <option value="">1</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" value="UPDATE">
          </div>
        </form>

      </div>
    </div>
</body>
</html>