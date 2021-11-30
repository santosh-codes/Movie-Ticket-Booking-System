<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale= 1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Images/logos/logo.jpg" alt="Avatar Logo" style="width:65px;">
        <span class="nav-text">VFX Cinemas</span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book_now.php">Book Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_form.php">Admin</a>
        </li>
      </ul>
    </div>
  </nav>
  </nav>
  <section class="my-5">
    <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
      <div class="row">
        <div class="container-fluid">utsav</div>
        <h1 align="center">
          <div class="col"><b>Now Showing</b></div>
        </h1>
      </div>
      <hr>
    </section>
    <div class="album">
      <div class="imgContainer">

        <div class="row mt-3">
          <?php
          $con = mysqli_connect('localhost', 'root');
          mysqli_select_db($con, 'movie_database');
          $query = " SELECT `id`, `moviename`, `director`, `actor`, `genere`, `poster` FROM `addmovie`";
          $result = mysqli_query($con, $query);
          while ($data = mysqli_fetch_array($result)) {

          ?>
            <div class="col-sm-3 py-2">
              <a href="<?php echo "movie_details.php?id=" . $data['id']; ?>">
                <img src="<?php echo "Images/nowshowing_images/" . $data['poster']; ?>" class="rounded" alt="Responsive image">
              </a>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>

</html>