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
              <h1 align="center"><div class="col">Now Showing</div></h1>
            </div>
            <hr>
          </section>
      <div class="w-50 m-auto">
        <form action="now_showing_data.php" method="post">
          <div class="form-group" style="margin-top:40px;">
            <label>Movie Name</label>
            <input type="text"  name="moviename" autocomplete="off" class="form-control">
          </div>
         <div class="form-group" style="margin-top:5px;">
            <label>Director</label>
            <input type="text"  name="director" autocomplete="off" class="form-control">
          </div>
            <div class="form-group" style="margin-top:5px;">
            <label>Actor</label>
            <input type="text"  name="actor" autocomplete="off" class="form-control">
          </div>
           <div class="form-group" style="margin-top:5px;">
            <label>Genere</label>
            <input type="text"  name="genere" autocomplete="off" class="form-control">
          </div>
            <div class="form-group" style="margin-top:5px;">
            <label>Poster</label>
            <input type="file"  name="poster" autocomplete="off" class="form-control">
          </div>
          <div class="my-3" style="margin-top:5px;">
            <button type="submit" class="btn btn-primary">Add Movie</button>
          </div>
        </form>
      </section>
      <?php include 'footer.php';?>
    </body>
  </html>