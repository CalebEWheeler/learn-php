<?php 
//setcookie() will take three parameters; name, value, and expiration
$name = "Caleb";
$value = 27;
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);
?>

<?php include "partials/header.php"; ?>

<?php include "partials/footer.php"; ?>