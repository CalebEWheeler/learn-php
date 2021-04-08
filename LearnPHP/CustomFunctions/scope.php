<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scope</title>
</head>
<body>
  <?php 
    $x = "outside"; //Global scope

    function convert() {
      global $x; //by declaring 'global' is how we can make the Global value of $x change to the local value. WORKS ANYWHERE!
      $x = "inside"; //local scope
    }

    echo $x;
    echo "<br>";
    //after calling convert() notice the value of $x does not change to "inside" and remains the same. Ln 14 will change this functionality.
    convert();
    echo $x;
    
  ?>
</body>
</html>