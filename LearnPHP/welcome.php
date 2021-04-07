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

  <h5>Sample 2: Dynamic data/creating and using a variable</h6>
  <?php $title = "Caleb Wheeler's Site"; ?>
  <h1><?php echo $title?></h1>


</body>
</html>