<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If Statements</title>
</head>
<body>
  <?php 
  $number1 = 14;
  $number2 = 13;

  if($number1 < $number2) {
    echo $number1." is less than ".$number2;
  }
  else if($number1 > $number2) {
    echo $number1." is greater than ".$number2;
  }
  else {
    echo $number1." is equal to ".$number2;
  }
  ?>
</body>
</html>