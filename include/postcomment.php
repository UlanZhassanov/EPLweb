<?php
include 'dbconnect.php';

$titlename = $_GET['title'];
if(isset($_POST)){
$message = $_GET['comment'];
$username = $_GET['user'];
$time = date('Y-m-d H:i:s');

$sql2 = "SELECT * FROM comments WHERE Username = '$username' AND Time = '$time'";
		$result2 = mysqli_query($conn, $sql2);
		$resultCheck2 = mysqli_num_rows($result2);
		if ($resultCheck2 > 0) {
			 
		} else {
$sql = "INSERT INTO comments (Username, Time, Comment, Titlename) VALUES ('$username', '$time', '$message', '$titlename')";
	mysqli_query($conn, $sql);
}
}