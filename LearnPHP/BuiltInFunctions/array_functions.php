<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Functions</title>
</head>
<body>
  <?php 
    $list = [10,1,2,3,4,5,6];

    //max() will return the largest value in the array
    echo max($list);
    echo "<br>";
    //min() will return the lowest value in the array
    echo min($list);
    echo "<br>";
    //sort will organize the values in the array from lowest to highest
    sort($list);
    //print_r will return the array as its defined in PHP as an assorted array
    print_r($list);
    echo "<br>";
  ?>
  <a href="https://www.php.net/manual/en/ref.array.php">https://www.php.net/manual/en/ref.array.php</a>
</body>
</html>