<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include 'menu.php'; ?>
  <div id="demo" class="carousel slide" data-interval=1000 data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <div class="hello">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/carousel_images/zero.jpg" alt="dune" class="d-block" style="width:100%">
          <div class="centered">
            <a href="https://youtu.be/Ru4lEmhHTF4">
              <span><img src="Images/icons/play.png" style="height:150% ; width:130%"></span></a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="Images/carousel_images/dune.jpg" alt="dune" class="d-block" style="width:100%">
          <div class="centered">
            <a href="https://youtu.be/8g18jFHCLXk">
              <span><img src="Images/icons/play.png" style="height:150% ; width:130%"></span></a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="Images/carousel_images/shang-chi.jpg" alt="shang-chi" class="d-block" style="width:100%">
          <div class="centered">
            <a href="https://youtu.be/8YjFbMbfXaQ">
              <span><img src="Images/icons/play.png" style="height:150% ; width:130%"></span></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/carousel_images/batman3.jpg" alt="shang-chi" class="d-block" style="width:100%">
          <div class="centered">
            <a href="https://youtu.be/mqqft2x_Aa4">
              <span><img src="Images/icons/play.png" style="height:150% ; width:130%"></span></a>
          </div>
        </div>
      </div>
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <section class="my-5">
    <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
      <div class="row">
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
  <section class="my-5">
    <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
      <div class="row">
        <h1 align="center">
          <div class="col"><b>Coming Soon</b></div>
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
          $query = " SELECT `id`,`poster_coming` FROM `comingsoon`";
          $result = mysqli_query($con, $query);
          while ($data = mysqli_fetch_array($result)) {

          ?>
            <div class="col-sm-3 py-2">
              <!--   <?php echo "id=" . $data['id']; ?>"  -->
              <img src="<?php echo "Images/comingsoon_images/" . $data['poster_coming']; ?>" class="rounded" alt="Responsive image">
              </a>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'footer.php' ?>
</body>

</html>