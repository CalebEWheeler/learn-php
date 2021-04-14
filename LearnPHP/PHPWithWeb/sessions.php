<?php 
  //session_start() needs to be on every page where you are using sessions!
  session_start();
  $_SESSION['greeting'] = "\"Hello There!\", exclaimed Obi-Wan to Grevious.";

?>

<?php include "partials/header.php"; ?>
  <form action="sessions2.php" method="GET">
    <input type="submit" value="To sessions2.php">
  </form>
<?php include "partials/footer.php"; ?>