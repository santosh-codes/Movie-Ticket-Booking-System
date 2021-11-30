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

    <section class="table" style="margin-top: 100px">
        <section class="utsav" style="margin-left: 580px; margin-right: 580px;">
            <div class="row">
                <h1 align="center">
                    <div class="col">Booking Success
                        <hr>
                    </div>
                </h1>
            </div>
        </section>
        <table class="table table-hover" style="margin-left:120px; margin-right:130px;">
            <thead>
                <tr>
                    <th scope="col">Movie Name</th>
                    <td scope="col"><?php echo $_POST['movie_name']; ?></td>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">Date</th>
                    <td><?php echo $_POST['date']; ?></td>
                </tr> -->
                <!-- <tr>
                    <th scope="row">Show Time</th>
                    <td><?php echo $_POST['showtime']; ?></td>
                </tr> -->
                <tr>
                    <th scope="row">Total Number of Ticket</th>
                    <td><?php echo $_POST['n_of_tickets']; ?></td>
                </tr>
                <!-- <tr>
                    <th scope="row">To Pay</th>
                    <td><?php echo $_POST['topay']; ?></td>
                </tr> -->
            </tbody>
        </table>

        <?php include 'footer.php'; ?>


</body>

</html>