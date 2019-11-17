<?php
if (isset($_POST['submit'])) {
	include_once 'dbconnect.php';

	$name = $_POST['fname'];
	$surname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$psw = $_POST['psw'];
	$rpsw = $_POST['pswrepeat'];

	if (empty($name) || empty($surname) || empty($email) || empty($username) || empty($psw) || empty($rpsw)) {
		header("Location: ../Registration.php?Registration=empty");
		exit();
	} else {
		if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
				header("Location: ../Registration.php?Registration=invalidNameSurname");
				exit();
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../Registration.php?Registration=invalidEmail");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE Username = '$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../Registration.php?Registration=usernameAlreadyTaken");
					exit();
				} else {

						if ($psw != $rpsw) {
							header("Location: ../Registration.php?Registration=passwordError");
							exit();
						} else {

					$hashedPwd = password_hash($psw, PASSWORD_DEFAULT);
					$sql = "INSERT INTO users (Name, Surname, Email, Username, Password) VALUES ('$name', '$surname', '$email', '$username', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../Registration.php?Registration=success");
					exit();
				}
			}
		}
	}
}
}

else{
	header("Location: ../Registration.php");
	exit();
}

