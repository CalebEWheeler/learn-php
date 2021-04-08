<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Functions</title>
</head>
<body>
  <?php 
    $string = "Hello there.";

    //length of string
    echo strlen($string);
    echo "<br>";
    //string to Uppercase
    echo strtoupper($string);
    echo "<br>";
    //string to Lowercase
    echo strtolower($string);
    echo "<br>";
  ?>
  <a href="https://www.php.net/manual/en/ref.strings.php">https://www.php.net/manual/en/ref.strings.php</a>
</body>
</html>