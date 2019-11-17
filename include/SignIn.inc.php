<?php
session_start();

if (isset($_POST['submit'])) {

	include_once 'dbconnect.php';

	$username = $_POST['username'];
	$psw = $_POST['psw'];

	if (empty($username) || empty($psw)) {
			header("Location: ../Signin.php?login=empty");
			exit();
	} else {
		$sql = "SELECT * FROM users WHERE Username = '$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../Signin.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing psw
				$hashedPwdCheck = password_verify($psw, $row['Password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../Signin.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user
					$_SESSION['u_username'] = $row['Username'];

					header("Location: ../Signin.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../Signin.php?login=error");
	exit();
}