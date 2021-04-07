<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math</title>
</head>
<body>
  <?php 
  echo 56 + 45;
  echo "<br>";
  echo 56 - 45;
  echo "<br>";
  echo 56 * 45;
  echo "<br>";
  echo 56 / 45;
  echo "<br>";
  echo "<br>";


  //PHP will produce solutions just like a calculator
  echo 45 + 34 * 45 / 421 -45;
  echo "<br>";
  //PHP order of operations
  //Same as basic math from school... so ln 27 will equal 55. Multiplication and division will happen BEFORE addition and subtraction.
  echo 5 + 5 * 10;
  echo "<br>";
  //If we add parentheses the line will equal 100.
  echo (5 + 5) * 10;
  echo "<br>";

  $number1 = 12;
  $number2 = 24;

  echo $number1 * $number2;

  ?>
</body>
</html>