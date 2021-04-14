<?php 
//super global variable, available inside and outside functions
//will display what array information is inside $_GET...
print_r($_GET);
//If I type into the url path http://localhost:8888/LearnPHP/PHPWithWeb/get_global.php?id=10&source=reports I will see in the associative array 'Array ( [id] => 10 [source] => reports )'


?>

<?php include "partials/header.php"; ?>
<!-- will place the hardcoded id value of 200 into the url path -->
<br>
  <a href="get_global.php?id=200">CLICK HERE</a> id = 200
</div>
<br>
<!-- Pulling and placing PHP variable and setting it as the id value in the url path -->
<?php $id = 10; ?>
<a href="get_global.php?id=<?php echo $id; ?>">CLICK HERE</a> id = <?php echo $id; ?>
<?php include "partials/footer.php"; ?>