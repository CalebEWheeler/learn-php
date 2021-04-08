<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <?php 
    // 'function' is a reserved word in PHP, naming convention is snake case
    function init($number1, $number2) {
      user_greeting();
      addition($number1, $number2);
    }

    function user_greeting() {
      echo "Hello my name is Caleb"."<br>";
    }

    function addition($number1, $number2) { 
      echo "The value of ".$number1." + ".$number2." is ".($number1 + $number2);
    }

    init(4, 5);
  ?>
</body>
</html>