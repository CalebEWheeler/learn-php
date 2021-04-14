<?php 
//setcookie() will take three parameters; name, value, and expiration
$name = "Caleb";
$value = 27;
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);
//essentially I can create conditionals to do things if the cookie is set
?>

<?php include "partials/header.php"; ?>

  <?php 
    if(isset($_COOKIE["Caleb"])) {

      $username = $_COOKIE["Caleb"];
      //will echo the value of the cookie
      echo $username;

    } else {
      $username = "";
    }
  ?>

<?php include "partials/footer.php"; ?>