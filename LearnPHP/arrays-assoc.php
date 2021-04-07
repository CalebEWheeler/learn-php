<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays Associated</title>
</head>
<body>
  <?php 
  //Normal array
  $number = [ 'james', 'beth', 'jen' ];
  echo $number[1]."<br>";

  //Associated array 'first_name' is a key to the value 'Josh'
  $names = ["first_name" => 'Josh', "last_name" => 'Evans'];
  //print_r will show the $names array structure
  // print_r($names);
  echo $names['first_name']."<br>";
  echo $names['last_name'];
  ?>
</body>
</html>