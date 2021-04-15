<?php 

  if(isset($_POST['delete_file'])) {
    unlink("delete_file_test.php");
  }

  if(isset($_POST['create_file'])) {
    $file = "delete_file_test.php";

    if( $handle = fopen($file, 'w')) {

      $delete_page_form = "<form action=\"deleting_files.php\">
      <input type=\"submit\" value=\"Click me to go to deleting_files.php page!\">
    </form>";

      fwrite($handle, "Hi, I am the file that is going to be deleted if you follow the instructions properly!"."<br>".$delete_page_form);

      fclose($handle);

    } else {
      echo "The application was not able to write on the file...";
    }
  }

?>


<?php include "partials/header.php"; ?>

  <!-- Form to move up a directory to see if the file was deleted successfully... -->
  <form action="./">
    <input type="submit" value="Click me to go up a directory!">
  </form>

  <!-- Form to Delete the file onClick -->
  <form action="deleting_files.php" method="POST">

    <input type="submit" name="delete_file" value="Click me to delete the file 'delete_file_test.php!'">
  
  </form>

  <!-- Form to create the file to be deleted... -->
  <form action="deleting_files.php" method="POST">

    <input type="submit" name="create_file" value="Click me to create the file to be deleted!">
  
  </form>

<?php include "partials/footer.php"; ?>