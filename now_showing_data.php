<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Sucessful";
}else{
	echo "No Connection";
}
mysqli_select_db($con, 'movie_database');
$moviename = $_POST['moviename'];
$director = $_POST['director'];
$actor = $_POST['actor'];
$genere = $_POST['genere'];
$poster = $_POST['poster'];

$query = " insert into addmovie (moviename, director, actor, genere, poster)
values ('$moviename', '$director', '$actor', '$genere', '$poster') ";
mysqli_query($con, $query);
header("location:index.php");
?>