<?php include "db.php"; ?>
<?php include "db_functions.php"; ?>

<?php include "partials/header.php"; ?>
  <!-- Basic HTML form with Bootstrap styling -->
  <div class="container">
    <h1 class="text-center">Read</h1>
      <div class="col-xs-6">
        
        <pre>
          <?php readUsers(); ?>
        </pre>

      </div>
    </div>

<?php include "partials/footer.php"; ?>