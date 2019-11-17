<div class="container col-sm-12">

 <div class="navbar navbar-inverse navbar-fixed-top navbar-default col-sm-12" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	             <span class="sr-only">Open navigation</span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
	        </button>
	     <img class="navbar-brand" id="logo" src="images/logosm.png" alt="">
		 	<p id="sl">THE MOST SPECTACULAR LEAGUE</p>
	    </div>
	    <div class="collapse navbar-collapse" id="menu">
	        <ul class="nav navbar-nav">
	            <li><a href="Home.php">Home</a></li>
	            <li><a href="Images.php">Images</a></li>
	            <?php
	            if(isset($_SESSION['u_username']))
	            if ($_SESSION['u_username'] == 'Admin') {
	            	echo "<li><a href='Adding.php'>Adding</a></li>"; 
	            }
	            ?>
				
<?php
if(isset($_SESSION['u_username']))
{
	echo "   username: ".$_SESSION['u_username'];
		echo "
	         <li class='sig' action='Signin.php' method='post'>
	         <a href='include/logout.php' name='logout'>Logout</a>
	         </li>";
}
else
{
echo
"
	             <li class='dropdown sig' action='Signin.php' method='post'>
	                  <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login<b class='caret'></b></a>
	                  <ul class='dropdown-menu'>
	                         <li><a href='Signin.php'>Sign In</a></li>
	                         <li><a href='Registration.php'>Sign Up</a></li>
	                  </ul>
	              </li>";
}
?>

	         </ul>
	     </div>
 </div>