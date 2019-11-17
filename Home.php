<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
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

 
 
 
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
	    <ol class="carousel-indicators">
		    <li class="active" data-target="#carousel" data-slide-to="0"></li>
		    <li data-target="#carousel" data-slide-to="1"></li>
		    <li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<li data-target="#carousel" data-slide-to="6"></li>
			<li data-target="#carousel" data-slide-to="7"></li>
		</ol>
		
		
		<div class="carousel-inner">
		    <div class="item active">
				<img src="images/cup2.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
				
				</div>
			</div>
			<div class="item">
			    <img src="images/carroll.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
				
				</div>
			</div>
		    <div class="item">
			    <img src="images/jesus.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
				
				</div>
			</div>
		    <div class="item">
			     <img src="images/morata.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
					
				</div>
			</div>
			  <div class="item">
			     <img src="images/firmino.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
				
				</div>
			</div>
			 <div class="item">
			     <img src="images/salah.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
			
				</div>
			</div>
			  <div class="item">
			     <img src="images/kane.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
					
				</div>
			</div>
			  <div class="item">
			     <img src="images/aguero.jpg" alt="">
				<div class="carousel-caption">
				    <h2></h2>
				
				</div>
			</div>
		</div>

		
		<a href="#carousel" class="left carousel-control" data-slide="prev">
		     <span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a href="#carousel"  class="right carousel-control" data-slide="next">
		     <span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	
<div class="container-fluid text-center">  
  <div class="row content">
  
      <div class="col-lg-3 col-sm-3 sidenav">
<table>
  <tr>
    <th colspan="2">2017-2018</th>
	<th>GP</th>
    <th>P</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Manchester City</td>
	<td>27</td>
    <td>72</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Manchester United</td>
	<td>27</td>
    <td>56</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Liverpool</td>
	<td>27</td>
    <td>54</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Chelsea</td>
	<td>27</td>
    <td>53</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Tottenham Hotspur</td>
	<td>27</td>
    <td>52</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Arsenal</td>
	<td>27</td>
    <td>45</td>
  </tr>
</table>
	  </div>
  
	<div class="col-lg-6 col-sm-6 nov">
		<?php
			 include ("include/ShowNews.inc.php") 
		?>	
	</div>
	
	<script>
		$(document).ready(function(){
		$(".show").click(function(){
			$(".fulltext").toggle();
		});
		});
	</script>
	
	<div class="novlist col-lg-3 col-sm-3 sidenav text-left">
		<b><h3 align="center">Last News</h3>
<?php
       include_once 'include/dbconnect.php';
       $sql = "SELECT Title FROM News ORDER BY News_ID DESC LIMIT 8";
       $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo'
            <hr>
            <a href="">'.$row["Title"].'</a>
        ';
 }
?>
    </div>
</div>	
</div>

	
<?php include ("Footer.php") ?>

</div>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>