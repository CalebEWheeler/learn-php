<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparison Operators</title>
</head>
<body>
  <?php 
  //equal in value '=='
  //equal in type and value '==='
  //comparison: less than '<', greater than '>', less than or equal to '<=', greater than or equal to '>=', less than or greater than '<>'
  //not equal in value '!='
  //not equal in type or value '!=='

  //And &&
  //Or ||
  //Not !
  $number1 = 4;
  $string1 = "4";
  $number2 = 5;
  if ( $number1 < $number2 ) { echo "true ";}
  if ( $number1 == $string1 ) { echo "true ";}
  if ( $number1 === $string1 ) {echo "true ";}
  else { echo "false";}
  ?>
</body>
</html>