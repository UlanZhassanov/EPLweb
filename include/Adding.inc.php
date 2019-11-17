<?php

if(isset($_POST['submit'])) {
	$target_dir = "../addimg/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	include_once 'dbconnect.php';

	$title = $_POST['title'];
	$text = $_POST['text'];
	$image = $_FILES['file']['name'];
	$author = $_POST['author'];



$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

            $sql = "INSERT INTO News (Title, Text, Image, Author) VALUES ('$title', '$text', '$image', '$author')";
             mysqli_query($conn, $sql);
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        	    header("Location: ../Home.php");

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}


?>