<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to PHP</title>
</head>
<body>
  <h5>Sample 1: show text with HTML and PHP</h6>
  <h1>This is an h1 tag in HTML</h1>
  <?php echo "this line is made with php echo" ?>

  <br>
  <hr>
  <br>

  <h5>Sample 2: Dynamic data/creating and using a PHP variable in an HTML element</h6>
  <?php $title = "Caleb Wheeler's Site"; ?>
  <h1><?php echo $title?></h1>

  <h5>Sample 3: Comments in PHP</h5>
  <?php 
  //This is a PHP comment, it's a lot like Java's syntax
  echo "There's a comment above me, check the .php file or file source to see it!"
  ?>


</body>
</html>