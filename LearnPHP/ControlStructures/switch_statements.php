<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Statements</title>
</head>
<body>
  <?php 
  $number = 4;

  switch($number) { 
    case 34: 
      echo "is it 34";
      break;
    case 43:
      echo "is it 43";
      break;
    case 24:
      echo "is it 24"; 
      break;
    default: 
      echo "none match";
      break;
  }
  ?> 
</body>
</html>