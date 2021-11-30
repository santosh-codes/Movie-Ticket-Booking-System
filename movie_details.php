<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
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
      </ul>
    </div>
  </nav>
  </nav>
  <?php
  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con, 'movie_database');
  $id = $_GET['id'];
  $query = " SELECT `id`, `moviename`, `director`, `actor`, `genere`, `poster` FROM `addmovie` WHERE id=" . $id;
  $result = mysqli_query($con, $query);
  while ($data = mysqli_fetch_array($result)) {

  ?>
    <div class="frame my-5">
      <img class="img-fluid rounded mx-auto d-block" src="<?php echo "Images/nowshowing_images/" . $data['poster']; ?>" width="500" height="700">
    </div>

    <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
      <hr>
      <div class="row">
        <div class="col">Movie Name</div>
        <div class="col"><?php echo $data['moviename'];
                          $movie_name = $data['moviename']; ?></div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Director</div>
        <div class="col"><?php echo $data['director']; ?></div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Actor</div>
        <div class="col"><?php echo $data['actor']; ?></div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Genere</div>
        <div class="col"><?php echo $data['genere']; ?></div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Choose Date</div>
        <div class="col"> <?php include 'date_picker.php';
                          ?> </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Choose Show</div>
        <div class="col">

          <select name="cars" id="cars">
            <option value="volvo">9am</option>
            <option value="saab">12pm</option>
            <option value="mercedes">3pm</option>
            <option value="audi">6pm</option>
          </select>
        </div>
      </div>
      <hr>
      <script>
        <?php include 'calculation.js' ?>
      </script>
      <form id="confirmInfo" action="booked.php" method="post">
        <div class="row">
          <div class="col">Number of Tickets :</div>
          <div class="col"><input id="num" name="n_of_tickets" type="number" oninput="calc()" />
          </div>
        </div>
        <div class="row" style="margin-top: 20px">
          <div class="col"> Price Per Ticket : </div>
          <div class="col"> Rs.<span id="ticket_price">250</span> </div>
        </div>
        <div class="row" style="margin-top: 15px">
          <div class="col"> Total : </div>
          <div class="col"><b>Rs.<span id="total" name="topay">0</span></b></div>
        </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="movie_name" value="<?php echo $movie_name; ?>">
        <input type="hidden" name="showtime" value="<?php echo $showtime; ?>">
        <input type="hidden" name="topay" value="<?php echo $topay; ?>">
        <button type="submit" class="btn btn-primary">Book Now</button>
      </form>
      <button type="submit" class="btn btn-primary" style="margin-top: 15px">Cancel</button>
      <hr>
    </section>
  <?php }
  ?>
</body>

</html>