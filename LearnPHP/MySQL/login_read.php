<?php include "db.php"; ?>
<?php include "db_functions.php"; ?>
<?php 
    //Original connection method lines 5-11, commented out in lieu of including "db.php" to import the connection method and showing refactoring process.    

    //mysqli_connect is PHP's method to connect to the MySQL database in the stacks
    //mysqli_connect will take in four parameters('SERVER', 'USERNAME', 'PASSWORD', 'DATABASE_NAME');
    // $connection = mysqli_connect('localhost', 'root', 'root', 'learnphp_loginapp');

    //if will check if the connection is true and display a message in the browser if the connection is established.
    // if($connection) { echo "We are connected"; } 
    // else { die("Database connection failed."); }

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
    <h1 class="text-center">Read</h1>
      <div class="col-xs-6">
        
        <?php 
          //data will be returned in an array
          while($row = mysqli_fetch_assoc($result)) {
            ?>
            <!-- close php to create a 'pre' html element -->
            <pre>
            <!-- open php to print the rows contents inside the element -->
            <?php 
            print_r($row);
            ?>
            <!-- close php again and then close the 'pre' html element -->
            </pre>
            <!-- finally open php one last time to close out the while loop -->
            <?php
          }
        ?>

      </div>
    </div>
</body>
</html>