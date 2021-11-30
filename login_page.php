<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'movie_database');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * from user_data WHERE email ='" . $email . "' AND password = '" . $password . "'";
$result = mysqli_query($con, $query);
// it return number of rows in the table.
$row = mysqli_num_rows($result);
echo $row;
if ($row != 0) {
  header("location:index.php");
}
// close the result.
mysqli_free_result($result);
echo "<script language='javascript'>";
echo "alert('WRONG INFORMATION')";
echo "</script>";
die();
header("location:login.php");
