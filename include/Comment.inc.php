<?php
function setComments($conn) {
	if (isset($_POST['commentSubmit']) && !empty($_POST['message'])) {
		$username = $_POST['usname'];
		$time = $_POST['time'];
		$message = $_POST['message'];
		$titlename = $_GET['q'];

		$sql2 = "SELECT * FROM comments WHERE Username = '$username' AND Time = '$time'";
		$result2 = mysqli_query($conn, $sql2);
		$resultCheck2 = mysqli_num_rows($result2);
		if ($resultCheck2 > 0) {
			 
		} else {
			$sql = "INSERT INTO comments (Username, Time, Comment, Titlename) VALUES ('$username', '$time', '$message', '$titlename')";
			$result = mysqli_query($conn, $sql);
		}

	}
}

function getComments($conn) {
	$titlename = $_GET['q'];
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

	

}