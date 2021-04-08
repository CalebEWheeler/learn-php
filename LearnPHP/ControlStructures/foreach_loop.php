<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Each Loop</title>
</head>
<body>
  <?php 
    $people = ['john', 'robert', 'tara' ];
    foreach( $people as $person ) { echo $person."<br>";}
  ?>
</body>
</html>