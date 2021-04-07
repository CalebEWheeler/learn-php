<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Types and More</title>
</head>
<body>
  <?php 
  //PHP Variables and data types

  //String
  $name = 'Caleb';
  //String with snake case naming convention
  $number_string = '100';
  //Integer
  $number = 26;
  //Float with case sensitive naming convention 
  $Number = 100.5;
  //Integer with Capital camel case naming convention
  $NumberInteger = 200;
  //Integer with camel case naming convention
  $numberInteger = 201;
  //Spinal case naming convention does not work in PHP!
  // $number-integer = 202;

  //concatentation
  echo "\$name: ". $name . "\n\$number_string: ". $number_string ."\n\$number: ". $number ."\n\$Number: ". $Number ."\n\$NumberInteger: ". $NumberInteger ."\n\$numberInteger: ". $numberInteger;
  ?>

</body>
</html>