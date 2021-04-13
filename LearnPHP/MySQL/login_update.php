<?php include "db.php"; ?>
<?php include "db_functions.php"; ?>
<?php updateUser(); ?>
<?php include "partials/header.php" ?>
  <!-- Basic HTML form with Bootstrap styling -->
  <div class="container">
      <div class="col-sm-6">
      <h1 class="text-center">Update</h1>  
      <form action="login_update.php" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <select name="id" id="">

              <?php buildSelectMenu(); ?>

            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-warning" name="submit" value="UPDATE">
          </div>
        </form>

      </div>
    </div>

<?php include "partials/footer.php"; ?>