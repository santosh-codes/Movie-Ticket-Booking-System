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
  <?php include 'menu.php' ?>
  <section class="my-5">
    <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
      <div class="container">utsav</div>

      <div class="row" style="margin-top:20px">
        <h1 align="center">
          <div class="col">Carousel</div>
        </h1>
      </div>
      <hr>
    </section>
    <div class="w-50 m-auto">
      <form action="carousel_con.php" method="post">
        <div class="form-group" style="margin-top:40px;">
          <label>Movie Name</label>
          <input type="text" name="caro_movie" autocomplete="off" class="form-control">
        </div>
        <div class="form-group" style="margin-top:5px;">
          <label>Poster</label>
          <input type="file" name="caro_poster" autocomplete="off" class="form-control">
        </div>
        <div class="my-3" style="margin-top:5px;">
          <button type="submit" class="btn btn-primary">Add Movie</button>
        </div>
      </form>
  </section>



  <?php include 'footer.php'; ?>
</body>

</html>