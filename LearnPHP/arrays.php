<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  
<?php 
//arrays in PHP are named just like normal variables 
//$numberList will create a new array object through the assignment operator to create a new array.
$numberList = array();

//The newer shorthand way to create an array is to declare it like so.
$numberList2 = [];

//I can also place values in an array when I create a new array object.
$numberList3 = array( 23, 32, '23', '32', '<h1>Hello</h1>');
$numberList4 = [ 23, 32, '23', '32', '<h1>Hello</h1>'];

//Now I will demonstrate how to show indices of arrays
echo $numberList3[0];
echo "<br>";
echo $numberList3[1];
echo "<br>";
echo $numberList3[4];
echo "<br>";

//Or I can use print_r(ARRAY) to display the array and the values of each indice
print_r($numberList4);
?>

</body>
</html>