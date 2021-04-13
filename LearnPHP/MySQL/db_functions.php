<?php include "db.php";

  function createUser() {
    if(isset($_POST['submit'])) {
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      //use mysqli_real_escape_string to sanitize our values to be passed to the database to prevent sql injection
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);

      //hash password method; First determine the hash format, then determine the length(has to be at least 22 characters long. can be anything!), finally concatenate the two together.
      $hashFormat = "$2y$10$";
      $salt = "iusesomecrazystrings22";
      $hashF_and_salt = $hashFormat . $salt;
      //redefine password to utilize crypt() method that takes in two variables, your password and then your hash and salt.
      $password = crypt($password, $hashF_and_salt);

      $query = "INSERT INTO users(username,password) ";
      $query .= "VALUES ('$username', '$password')";
    
      $result = mysqli_query($connection, $query);
    
      if(!$result) { die('Query FAILED'.mysqli_error()); }
      else { echo "Record Created!"; }
    }
  }

  function readUsers() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) { die('Query FAILED'.mysqli_error()); }

    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }
  
  function buildSelectMenu() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) { die('Query FAILED'.mysqli_error()); }
  
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];

      echo "<option value='$id'>$id</option>";
    }  
  }  

  function updateUser() {
    if(isset($_POST['submit'])) {
      global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      //use mysqli_real_escape_string to sanitize our values to be passed to the database to prevent sql injection
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      //hash password method; First determine the hash format, then determine the length(has to be at least 22 characters long. can be anything!), finally concatenate the two together.
      $hashFormat = "$2y$10$";
      $salt = "iusesomecrazystrings22";
      $hashF_and_salt = $hashFormat . $salt;
      //redefine password to utilize crypt() method that takes in two variables, your password and then your hash and salt.
      $password = crypt($password, $hashF_and_salt);

      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";      
      $query .= "WHERE id = $id";

      $result = mysqli_query($connection, $query);
      if(!$result) { die('Query FAILED '.mysqli_error($connection)); } 
    }
  }

  function deleteUser() {
    if(isset($_POST['submit'])) {
      global $connection;
      $id = $_POST['id'];

      $query = "DELETE from users ";
      $query .= "WHERE id = $id";

      $result = mysqli_query($connection, $query);
      if(!$result) { die('Query FAILED '.mysqli_error($connection)); } 
    }  
  }

?>