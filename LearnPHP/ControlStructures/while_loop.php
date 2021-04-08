<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Loops</title>
</head>
<body>
  <?php 
    $counter = 0;
    while( $counter < 10 ) { 
      echo $counter." is less than 10..."."<br>";
      $counter++;
    }
    if ( $counter === 10 ) { echo $counter." is equal to 10"; }
  ?>
</body>
</html>