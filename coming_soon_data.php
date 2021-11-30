<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Sucessful";
}else{
	echo "No Connection";
}
mysqli_select_db($con, 'movie_database');
$movie_coming = $_POST['movie_coming'];
$poster_coming = $_POST['poster_coming'];

$query = " insert into comingsoon (movie_coming, poster_coming)
values ('$movie_coming', '$poster_coming') ";
mysqli_query($con, $query);
header("location:admin_page.php");
?>