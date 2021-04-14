<?php 
  echo $_POST['name']; 
?>

<?php include "partials/header.php"; ?>

  <form action="post_global.php" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit">
  </form>
<?php ?>
<?php include "partials/footer.php"; ?>