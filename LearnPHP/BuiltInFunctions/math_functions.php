<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Functions</title>
</head>
<body>
  <?php 
    echo "2 to the second power is: ".pow(2,2);
    echo "<br>";
    echo "A random number between 1-100 is: ".rand(1, 100);
    echo "<br>";
    echo "The square root of 4 is: ".sqrt(4);
    echo "<br>";
    echo "4.6 rounded with .ceil is: ".ceil(4.6);
    echo "<br>";
    echo "4.6 rounded with .floor is: ".floor(4.6);
    echo "<br>";
    echo "4.4 rounded with .round is: ".round(4.4);
    echo "<br>";
    echo "4.6 rounded with .round is: ".round(4.6);
    echo "<br>";
  ?>
  <a href="https://www.php.net/manual/en/ref.math.php">https://www.php.net/manual/en/ref.math.php</a>
</body>
</html>