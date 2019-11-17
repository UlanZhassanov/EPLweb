<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

if(!$_SESSION['u_username']){
    header('Location: Home.php');
}

if($_SESSION['u_username'])
if($_SESSION['u_username' != 'Admin']){
header('Location: Home.php');
} 
?>

<!DOCTYPE html> 
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Adding</title>
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


<form id="form" action="include/Adding.inc.php" method="post" enctype="multipart/form-data">
<div id="signup" class="adding" style="height:1200px;" >
	<h1 align="center">Adding Item</h1>
    <hr id="log">
	
		<label for="title"><b>Title</b></label><br>
	<input id="ttitle" name="title" align="center">		
	</input>
	<label for="text"><b>Your text</b></label><br>
	<textarea name="text" id="ttext">		
	</textarea>
		<label for="file"><b>Image URL</b></label><br>
	        <input type="file" name="file" id="iimg"  placeholder="Photo">
	         	<br/>
			<label for="author" ><b>Source</b></label><br>
				<input id="author" name="author" align="center">	
	
	<div class="clearfix">
		<button type="reset" class="clearbtn">Clear</button>
	      <button type="submit" name="submit" class="addbtn"  onclick="validation(document.getElementById('form'));">Add</button>
    </div>

</div>
</form>

<script>
    function validation(form){
    var error=false;
    var tt=form.title.value;
    var tx=form.ttext.value;
    var img=form.iimg.value;
    var aut=form.author.value;
    
    if(tt == ""){
        error = "The information is incomplete, you forgot something." ;
    }
    else if (tx == "" ){
        error = "The information is incomplete, you forgot something." ;
    }
    else if ( img == ""){
        error = "The information is incomplete, you forgot something." ;
    }
    else if (aut == "" ){
        error = "The information is incomplete, you forgot something." ;
    }
    if(error){
    alert(error); 
    }
    
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