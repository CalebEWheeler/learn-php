<?php include "db.php"; ?>
<?php include "db_functions.php"; ?>
<?php createUser(); ?>

<?php include "partials/header.php"; ?>

  <!-- Basic HTML form with Bootstrap styling -->
  <div class="container">
      <div class="col-xs-6">
      <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" value="submit">
          </div>
        </form>
      </div>
    </div>

<?php include "partials/footer.php"; ?>