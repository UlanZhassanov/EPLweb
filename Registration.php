<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

if(isset($_SESSION['u_username']))
header('Location: Home.php');

?>

<!DOCTYPE html> 
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>
  <link rel='icon' type='logo.jpg' href='images/iconn.png'>
		<script type='text/javascript' src='js/jquery-3.3.1.js'></script>
		<script type='text/javascript' src='js/script.js'></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>  

	<?php include ("Header.php") ?>



<main>

<?php
	if (!isset($_GET['Registration'])) {
	} else {
		$signUpCheck = $_GET['Registration'];

		if($signUpCheck == "empty"){
			echo "<p class = error>Fill in all fields!</p>";
		}
		elseif($signUpCheck == "invalidEmail"){
			echo "<p class = error>You used an invalid email!</p>";
		}
		elseif($signUpCheck == "usernameAlreadyTaken"){
			echo "<p class = error>Username already taken!</p>";
		}
		elseif($signUpCheck == "invalidNameSurname"){
			echo "<p class = error>You used an invalid characters for name/surname!</p>";
		}
		elseif($signUpCheck == "passwordError"){
			echo "<p class = error>Password verified incorrectly!</p>";
		}
		elseif($signUpCheck == "success"){
			echo "<p class = success>You have been signed up successfully!</p>";
		}
	}
?>
<div id="signup" class="regg" style="height: 1000px;">
<form  id="form" action="include/SignUp.inc.php" method="POST">
<h1 align="center">Sign Up</h1>
    <hr>
	<label for="fname"><b>Firstname</b></label><br>
    <input type="text" placeholder="Enter Name" name="fname" id="fname" required>
	<br>
	<label for="lname"><b>Lastname</b></label><br>
    <input type="text" placeholder="Enter Surname" name="lname" id="lname" required>
	<br>
	<label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
	<br>
	<label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>
	<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
	<br>
    <label for="pswrepeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
	
	<div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signbtn" onclick="validation(document.getElementById('form'));">Sign Up</button>
    </div>
	</form>


</div>

<script>
	function validation(form){
	var error=false;
	var name=form.fname.value;
	var sur=form.lname.value;
	var mail=form.email.value;
	var usname=form.username.value;
	var pass=form.psw.value;
	var rep=form.pswrepeat.value;
	
	if(name == ""){
		error = "Fill all text fields" ;
	}
	else if (sur == "" ){
		error = "Fill all text fields" ;
	}
	else if ( pass == ""){
		error = "Fill all text fields" ;
	}
	else if (mail == "" ){
		error = "Fill all text fields" ;
	}
	else if (usname == "" ){
		error = "Fill all text fields" ;
	}
	else if (rep == ""){
		error = "Fill all text fields" ;
	}
	if(error){
	alert(error); 
	}
	
	else{
		window.location="Registration.php"  
	}
	} 
</script>

</main>

<?php include ("Footer.php") ?>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body> 
</html>