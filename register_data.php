<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Sucessful";
}else{
	echo "No Connection";
}
mysqli_select_db($con, 'movie_database');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$query = " insert into user_data (name, email, phone, password)
values ('$name', '$email', '$phone', '$password') ";
mysqli_query($con, $query);
header("location:index.php");
?>