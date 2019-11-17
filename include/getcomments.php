<?php
include 'dbconnect.php';
usleep(100000);
$titlename = $_GET['title'];

$sql = "SELECT * FROM comments WHERE Titlename = '$titlename' ORDER BY Comment_id DESC";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='comment-box'><p>";
            echo $row['Username']."<br>";
	  		echo $row['Time']."<br>";
	 		echo "<p id='comm'>".nl2br($row['Comment']);
	 	echo "</p></p></div>";
	} 
} else {
	echo "There are no comments <br><br>";
}
