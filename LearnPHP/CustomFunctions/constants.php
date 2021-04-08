<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constants</title>
</head>
<body>
  <?php 
    //declare a normal variable
    $number = 10;
    echo $number . "<br>";

    //declare a constant in PHP (old way)
    define("NAME", "Caleb");
    echo NAME;
    //declare a constant using new method. Uppercase naming convention and only scalar data ( boolean, integer, float, string ) can be contained prior to PHP 5.6. PHP 5.6 and later can define a scalar expression and define an array constant.
    const GREETING = "Hello World";
    const NUMBER1 = 1;
    const ANIMALS = ['cat', 'dog', 'bird'];
    //This will work also for arrays
    // define(ANIMALS, array('dog', 'bird', 'cat'));

    echo "<br>".GREETING;
    echo "<br>".NUMBER1;
    echo "<br>".ANIMALS[1];
  ?>
</body>
</html>