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
      echo "The value of ".$number1." + ".$number2." is ".addition($number1, $number2);
    }

    function user_greeting() {
      echo "Hello my name is Caleb"."<br>";
    }

    function addition($number1, $number2) { 
      return $number1 + $number2;
    }

    init(4, 5);

    $number3 = 7;
    $number4 = 8;
    $result = addition($number3, $number4);

    echo "<br>The value of ".$number3." + ".$number4." is ".$result;

    $result = addition(100, $result);
    echo "<br>The new value of result + 100 is ".$result;

  ?>
</body>
</html>