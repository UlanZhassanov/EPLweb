<?php
  $lifetime=600;
  session_start();
  setcookie(session_name(),session_id(),time()+$lifetime);

date_default_timezone_set('Asia/Almaty'); 
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>
  <link rel='icon' type='logo.jpg' href='images/iconn.png'>
	<script type='text/javascript' src='js/jquery-3.3.1.js'></script>
	<script type='text/javascript' src='js/script.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
function getComment(){
  var title = document.getElementById("titlename").value;
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}
xmlhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
document.getElementById("comment-table").innerHTML=this.responseText;
}
}
xmlhttp.open("GET","include/getcomments.php?title="+title,true);
xmlhttp.send();
}

function postComment(){
var comment = document.getElementById("comtext").value;
var title = document.getElementById("titlename").value;
var user = document.getElementById("usname").value;
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}
xmlhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
}
}
xmlhttp.open("POST","include/postcomment.php?title="+title+"&comment="+comment+"&user="+user,true);
xmlhttp.send();
getComment();
}

window.onload = function(){
getComment();
}
</script>



</head>
<body>
	
 <?php include ("Header.php") ?>

<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2500">       
    <div class="carousel-inner">


<?php
       include_once 'include/dbconnect.php';

       $titlename = $_GET['q'];

       $sql = "SELECT * FROM News WHERE Title = '$titlename'";
       $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="item active" style="height:800px;">
                    <img src="addimg/'.$row["Image"].'" alt="" style="width:auto; height:auto; max-height: 800px; margin:auto;">
                    <div class="carousel-caption">
                        <h2></h2>   
                    </div>
                </div>
    </div>
</div>

<div class="container-fluid">  
    <div class="row content col-sm-12"  style="margin-bottom:100px;">
        <div class="col-lg-9 col-sm-9">
            <p  style="color:black; padding:0 10px 0 10px; font-size:18px;">Source: '.$row["Author"].'</p>
            <h1 style="color:black; padding:0 10px 0 10px;">'.$row["Title"].'</h1>
            <br/>
            <p style="color:black; padding:0 10px 0 10px; font-size:20px;">'.nl2br($row["Text"]).'</p>
        </div>';}
?>
        <div class="novlist col-lg-3 col-sm-3 sidenav text-left" style="float: right;">    
            <b><h3 align="center">Last News</h3>
<?php
       include_once 'include/dbconnect.php';
       $sql = "SELECT Title FROM News ORDER BY News_ID DESC LIMIT 6";
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

<?php
include 'include/dbconnect.php';

if(isset($_SESSION['u_username'])) {
    echo "<form>
        <input type='hidden' name='usname' id='usname' value='".$_SESSION['u_username']."'>
        <input type='hidden' name='title' id='titlename' value='".$_GET['q']."'>
        <input type='hidden' name='time' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message' id='comtext'></textarea><br>
        <button type='button' name='commentSubmit' id='combutton' onclick='postComment()'>Comment</button>
    </form>";
} else {
    echo "You need to be <a href='Signin.php' style='color: #FF025D;'>logged in</a> to comment <br><br>
    <input type='hidden' name='title' id='titlename' value='".$_GET['q']."'>";
}



?>

<div id="comment-table" style="margin-bottom: 70px;">
  
</div>    

<?php include ("Footer.php") ?>

</div>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>