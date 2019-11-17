<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Images</title>
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

 
<ul id="slides">
<li class="slideimg showing"><img src="images/arsaub.jpg" alt=""></li>
<li class="slideimg"><img src="images/carroll.jpg" alt=""></li>
<li class="slideimg"><img src="images/salah.jpg" alt=""></li>
<li class="slideimg"><img src="images/jesus.jpg" alt=""></li>
<li class="slideimg"><img src="images/sanchez.jpg" alt=""></li>
			<?php 
$directory = "addimg/";
$images = glob($directory . "*.{JPG,PNG,JPEG,jpg,png}", GLOB_BRACE);

foreach($images as $image)
{
echo "
<li class='slideimg'><img src=".$image." alt=''></li>";
}
?>
</ul>
<div id="pppn">
<button class="controls glyphicon glyphicon-chevron-left" id="previous"></button>
<button class="controls glyphicon glyphicon-play" id="play"></button>
<button class="controls glyphicon glyphicon-pause" id="pause"></button>
<button class="controls glyphicon glyphicon-chevron-right" id="next"></button>
</div>
 
<script>
var slides = document.querySelectorAll('#slides .slideimg');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2500);
 
function nextSlide() {
slides[currentSlide].className = 'slideimg';
currentSlide = (currentSlide+1)%slides.length;
slides[currentSlide].className = 'slideimg showing';
}


var playing = true;
var pauseButton = document.getElementById('pause');
var playButton = document.getElementById('play');

function pauseSlideshow() {
playing = false;
clearInterval(slideInterval);
}
 
function playSlideshow() {
playing = true;
slideInterval = setInterval(nextSlide,2500);
}
 
pauseButton.onclick = function() {
pauseSlideshow();
}

playButton.onclick = function() {
	playSlideshow();
}

function nextSlide() {
goToSlide(currentSlide+1);
}
 
function previousSlide() {
goToSlide(currentSlide-1);
}
 
function goToSlide(n) {
slides[currentSlide].className = 'slideimg';
currentSlide = (n+slides.length)%slides.length;
slides[currentSlide].className = 'slideimg showing';
}

var next = document.getElementById('next');
var previous = document.getElementById('previous');
 
next.onclick = function() {
pauseSlideshow();
nextSlide();
};

previous.onclick = function() {
pauseSlideshow();
previousSlide();
};
</script>
 
	
	<div class="content">
			<div class="nov" class="row">
		<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/arsaub.jpg" alt="">
						
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/jesus.jpg" alt="">
						
				</div>	
			</div>
			
				<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/sanchez.jpg" alt="">
						
				</div>
			</div>
				<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/morata.jpg" alt="">
						
				</div>
			</div>
				<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/kane.jpg" alt="">
						
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src="images/salah.jpg" alt="">
						
				</div>
			</div>

			<?php 
$directory = "addimg/";
$images = glob($directory . "*.{JPG,PNG,JPEG,jpg,png}", GLOB_BRACE);

foreach($images as $image)
{
echo '<div class="col-lg-4 col-md-6">
				<div class="thumbnail">
					<img src='.$image.' alt="image">
						
				</div>
			</div>';
}
?>

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