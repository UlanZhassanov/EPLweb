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
    <title>Signin</title>
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
<?php
  include ("Header.php") 
?>

<main>

<?php
  if (!isset($_GET['login'])) {
  } else {
    $signUpCheck = $_GET['login'];

    if($signUpCheck == "empty"){
      echo "<p class = error>Fill in all fields!</p>";
    }
    elseif($signUpCheck == "error"){
      echo "<p class = error>Incorrect Username or password!</p>";
    }
  }
?>

<div id='signup' class='col-sm-12'>
<form action="include/SignIn.inc.php" method="POST" id='form'> 
<h1 align='center'>Sign In</h1>
    <hr id='log'>
	<label for=username><b>Username</b></label><br>
    <input type='text' placeholder='Enter Username' name='username'  id='email' required>
	<br>
    <label for='psw'><b>Password</b></label><br>
    <input type='password' placeholder='Enter Password' name='psw' id='psw' required>
	<br>
    <label>
      <input type='checkbox' checked='checked' name='remember' style='margin-bottom:15px'> Remember me
    </label>
	
	<div class='clearfix'>
      <button type="reset" class='cancelbtn'>Cancel</button>
      <button type='submit' class='signbtn' name='submit' onclick='validation(document.getElementById('form'));'>Login</button>
    </div>
	  <button type='button' id='signupbtn' ><a href='Registration.html'>Sign Up</a></button>
	  </form>
</div>";




<script>
	function validation(form){
	var error=false;
	var mail=form.email.value;
	var pass=form.psw.value;
	
	if(mail == ""){
		error = "Enter your name " ;
	}
	else if(pass == ""){
		error = "Enter your password " ;
	}
	if(error){
	alert(error); }
	
	else{
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