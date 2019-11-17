<?php
	include_once 'dbconnect.php';
	$sql = "SELECT Title, Text, Image FROM News ORDER BY News_ID DESC";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
	  echo '<form method="POST" action="News.php"><div >
				<a href="News.php?q='.$row["Title"] .'" name="itemlink"><div class="thumbnail">
					<img src="addimg/'.$row["Image"].'" name="newsimg" alt="">
						<div class="caption">
						    <input type="hidden" name="newstitle" value="'.$row["Title"].'">
							<h3>'.$row["Title"].'</h3>
						</div>
				</div></a>
			</div></form>';
	}
?>