<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "express";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection
$error="";
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      $_SESSION['UID']= $myusername;
    $sql = "SELECT * FROM admin WHERE Email = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($connect,$sql);
	$login_active="";
	$login_admin="";
	while ($row=mysqli_fetch_row($result))
    {
	$login_active=$row[0];
	$login_admin=$row[1];
    }
      if(mysqli_num_rows($result)== 1) {  
		$_SESSION['login_user']= $login_active;
		$_SESSION['admin_id']=$login_admin;
        header("location: admin.php");
      }
	 else {
           $error = "Your Email or Password is invalid";
      }}
?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Glencoreexpress</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h3 {
	color:#fff;
  }
  .mainfooter {
    background-color:#333;
    padding: 30px;
	padding-top:0%;
	padding-left:10%;
	margin-top:22%;
	width:100%;
  }
    .mainfooter .glyphicon {
    font-size: 20px;
    margin-bottom:0px;
    color:#818181;
  }
  .mainfooter a:hover {
    color: #fff;
    text-decoration: none;
  } 
  .mainfooter a{
    color: #818181;
    text-decoration: none;
  }
  #icon{
  padding-top:0%;
  width:40%;
  }
  .active .glyphicon{
   color:#fff;
   font-size:10px;
  }
  p{
  color:#333;
  }
.modal-content{
background-color:#fff;
width:95%;
height:100%;
margin-top:2.2%;
margin-left:2.5%;
margin-bottom:0%;
padding:0%;
  }
.main{
opacity:0.0px;
width:100%;
margin-top:0px auto;
margin-top:0%;
margin-left:0px;
margin-right:0px;
margin-bottom:0%;
padding:0%;
}
    .modal-header{
    margin-bottom: 0%;
    background-color: #2d2d30;
	font-family: Montserrat, sans-serif;
	letter-spacing: 4px;
	opacity:0.0px;
	margin-top:5px;
    text-align: center;
    font-size: 11px;
  }
  .modal-header, .modal-body {
    padding:2% 50px;
  }
  #btn {
    padding: 7px 25px;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }
	  
    }
  #rad{
  border-radius:2%;
  }
    .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  h1 {
    font-size: 20px;
    text-transform: uppercase;
    color:#303030;
	margin-top:1%;
    font-weight: 600;
    margin-bottom:0px;
  }  
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color:#303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
    h3 {
    font-size: 19px;
    line-height: 1.375em;
    color: #fff;
	font-weight: 600;
    margin-bottom:15px;
  }
  h5 {
    font-size: 15px;
    line-height: 1.375em;
    margin-bottom:15px;
  }  
  #justify{
	 text-align:justify;
	 float:center;
 } 
  .jumbotron1{
    background-color:#2d2d30;
    color: #fff;
	margin-top:22%;
	width:100%;
	padding: 14px;
    font-family: Montserrat, sans-serif;
  }
  .carousel-inner img {
      width:100%;
      height:600px;
  }
  .container-fluid {
    margin-top:1.5%;
    padding:10px 15px;
  }   
  .bg-grey1 {
   margin-top:5.9%;
   margin-bottom:0%;
  }  
  .login {
   margin-top:3.6%;
   background-image:url(ship2.jpg);
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #2d2d30; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color:#2d2d30;
    color: #fff;
  }
  #border{
	margin-top:0%;
	margin-left:0%;
	margin-right:0%;
}    
 .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.0px;
  }
 .navbar li a, .navbar . { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  footer .glyphicon {
    font-size: 20px;
    color:white;
  }  
  .col-sm-6 .glyphicon {
    font-size: 200%;
    color:#333;
  } 
  .modal-content .glyphicon{
    font-size: 25px;
    margin-bottom:0px;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Glencore Express</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.html"><span class="glyphicon glyphicon-log-in logo-small"></span>LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Container (Contact Section) -->
 <div class="modal-content">
        <div class="modal-header">
        </div>
		<div class="main">
	<div class="modal-body">
   <form action="login.php" method="POST"> 
  <div class="row">
    <div class="col-sm-4">
      <img src="icon.JPG" alt="New York" id="icon">
	  <h1>Admin Login</h1>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <p><span class="glyphicon glyphicon-user"></span>&nbsp&nbspUsername</p>
        </div>       
		<div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="username" maxlength="50" placeholder="Enter Email" type="email" required>
        </div>
      </div>
	  <div class="row">
        <div class="col-sm-6 form-group">
          <p><span class="glyphicon glyphicon-lock"></span>&nbsp&nbspPassword</p>
        </div>      
		<div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="password" maxlength="20" placeholder="Enter Password" type="password" required>
        </div>
      </div>
	  <div class="row">
        <div class="col-sm-6 form-group">
        </div>       
		<div class="col-sm-6 form-group">
          <button id="btn" class="btn btn-default pull-right" name="submit" type="Submit">Login</button>
        </div>
      </div>
	  <div class="row">
        <div class="col-sm-6 form-group">
        </div>       
		<div class="col-sm-6 form-group">
          <p><font color="#333"><?php echo $error;?></font></p>
        </div>
      </div>
	   </form>
        </div>
      </div>
    </div>
  </div>
  </div>
<br/>
<div class="mainfooter">
  <div class="row">
    <div class="col-sm-5">
      <h3>About Us</h3>
      <h5><span class="glyphicon glyphicon-globe"></span>&nbspWe offer secure and reliable freight.</h5>
      <h5><span class="glyphicon glyphicon-envelope"></span>&nbspEmail:info@glencoreexpress.net</h5>
      <h5><span class="glyphicon glyphicon-search"></span>&nbspMade By<a href="../index.html" data-toggle="tooltip" 
	  title="Visit Glencoreexpress">&nbspwww.Glencoreexpress.net</a></h5>
    </div>
    <div class="col-sm-5">
      <h3>Our Address</h3>
      <h5><span class="glyphicon glyphicon-map-marker"></span>&nbspHead Office:CH-6340 Baar,Swizerland.</h5>
      <h5><span class="glyphicon glyphicon-phone"></span>&nbspContact Us through:+41 264500244</h5>
    </div>
    </div>
  </div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
