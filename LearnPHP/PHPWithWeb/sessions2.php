<?php 
  //session_start() needs to be on every page where you are using sessions!
  session_start();
  echo $_SESSION['greeting'];

?>

<?php include "partials/header.php"; ?>
  <form action="sessions.php" method="GET">
    <input type="submit" value="Back to sessions.php">
  </form>
<?php include "partials/footer.php"; ?>