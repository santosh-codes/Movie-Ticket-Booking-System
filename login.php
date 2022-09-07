<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

  <?php include 'menu.php'; ?>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Happy Movies!!!</h2>
    </div>


    <div class="w-50 m-auto">
      <form action="login_page.php" method="post">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" autocomplete="off" class="form-control">
        </div>
        <div class="my-3">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
  </section>
  <?php include 'footer.php' ?>
  </body>

</html>