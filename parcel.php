<?php
include_once("connection.php");
$msg = "";
if(isset($_POST['upload'])){
	$target="images/".basename($_FILES['image']['name']);
	
	$image = $_FILES['image']['name'];
	
	$Freight = $_POST['desc'];
    $Shipping = $_POST['ship'];
    $Location = $_POST['loc'];
	$Destination = $_POST['dest'];
	$Weight = $_POST['weight'];
	$Amount = $_POST['amount'];
	$Date = $_POST['shootdate'];
    $Transit_Time = $_POST['time'];
	$Receiver_Email = $_POST['Receiver_Email'];
	
		$permitted_chars = '0123456789';
		$alpha=substr(str_shuffle($permitted_chars), 0, 10);
        $insert_Query = "INSERT INTO `shipping`(`Tracking_ID`,`Freight`,`Type_of_Shipping`,`Location`,
		`Destination`,`Weight`,`Amount`,`Date`,`Transit_Time`,`Image`,`Admin_Email`,`Receiver_Email`) 
		VALUES ('$alpha','$Freight','$Shipping','$Location','$Destination','$Weight','$Amount','$Date','$Transit_Time',
		'$image','$_SESSION[UID]','$Receiver_Email')";
	    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		header("Location:popup.php");
	  }

	   try{
		$insert_Result = mysqli_query($connect,$insert_Query);
	
		if($insert_Result)
		{
		if(mysqli_affected_rows($connect)>0)
		{
		$result = mysqli_query($connect,"INSERT INTO `delivery`(`Status`,`Date`,`Shipping_Tracking_ID`,`Shipping_Admin_Email`,`Shipping_Receiver_Email`) 
		VALUES ('$Location','$Date','$alpha','$_SESSION[UID]','$Receiver_Email')");
		}else{
			echo '<script>alert("Data Not Inserted")</script>'; 
		}
	}
	}catch(Exception $ex){
		echo 'Error Insert '.$ex->getMessage(); 
	}
}
?>
<!DOCTYPE html>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#shootdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
	background-color:#333;
	padding-left:0%;
	padding-top:1%;
	color:white;
}
td{
	padding-left:5%;
	color:#333;
}
tr:ntn-child(even) {background-color:white}
input[name=ship], select {
  width: 100%;
  padding: 4px 20px;
  display: inline-block;
  border-radius: 2px;
  box-sizing: border-box;
}
table{
float:center;
border-radius: 6px; 
border-spacing: 0;
width:100%;
background-color:#fff;
margin-top:1%;
margin-bottom:1%;
}

  .col-sm-4 a {
      color: #777;
  }
  #icon{
  padding-top:0%;
  width:40%;
  }
  .col-sm-4 .glyphicon{
   color:#333;
  }  
  .active .glyphicon{
   color:#fff;
   font-size:10px;
  }
.modal-content{
background-color:#fff;
width:95%;
margin-top:0%;
margin-left:2.5%;
margin-bottom:0%;
padding:0%;
  }
    .sender {
    padding:10px 20px;
	padding-top:0%;
	padding-left:10%;
	margin-top:0%;
	width:90%;
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
	margin-top:0%;
	border-radius:1%;
    text-align: center;
    font-size: 10px;
  }
  .modal-header, .modal-body {
    padding:0% 50px;
  }
  #btn {
    padding: 7px 25px;
	margin-right:0%;
	margin-top:5%;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }  
  #btn1 {
    padding: 7px 10px;
	margin-left:0%;
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
	margin-top:2%;
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
	color:#fff;
    line-height: 1.375em;
    font-weight: 400;
    margin-bottom:20px;
  }
  #justify{
	 text-align:justify;
	 float:center;
 }
  .jumbotron {
    background-color:url(ship3.jpeg)
    color: #fff;
    padding:0px 0px;
	-webkit-filter: grayscale(90%);
    filter: grayscale(90%);
    font-family: Montserrat, sans-serif;
  }  
  .jumbotron1 {
    background-color:#2d2d30;
    color: #fff;
	margin-top:35%;
	width:100%;
	padding: 0px;
    font-family: Montserrat, sans-serif;
  }
  .carousel-inner img {
      width:100%;
      height:600px;
  }
  .container-fluid {
    margin-top:0%;
    padding:0px 15px;
  }  
 .mainfooter {
    background-color:#333;
    padding: 30px;
	padding-top:0%;
	padding-left:10%;
	margin-top:14%;
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
  .bg-grey {
  } 
  .bg-grey1 {
   margin-top:0%;
  }  
  .login {
   margin-top:3.6%;
   background-image:url(ship2.jpg);
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
    margin-bottom: 20px;
    color:white;
  }  
  .modal-content .glyphicon{
    font-size: 50px;
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
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">Glencore Express</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span>DASHBOARD</a></li>
        <li><a href="sender.php"><span class="glyphicon glyphicon-export"></span>SENDER</a></li>
        <li><a href="receiver.php"><span class="glyphicon glyphicon-import logo-small"></span>RECEIVER</a></li>
        <li   class="active"><a href="parcel.php"><span class="glyphicon glyphicon-shopping-cart logo-small"></span>PARCEL</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out logo-small"></span>LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Container (Contact Section) -->
<div class="modal-content">
        <div class="modal-header">
          <h5>PARCEL'S INFORMATION</h5>
        </div>
<div class="sender">
<form action="parcel.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-6">
      <p color="#333"><b>Description</b></p>
      <input class="form-control"  name="desc" maxlength="30" placeholder="Enter Description" type="text" required>
	   <p color="#333"><b>Weight</b></p>
      <input class="form-control"  name="weight" maxlength="10" placeholder="Enter Weight" type="text" required>
    </div>
    <div class="col-sm-6">
      <p color="#333"><b>Location</b></p>
      <input class="form-control"  name="loc" maxlength="30" placeholder="Enter Location" type="text" required>
	   <p color="#333"><b>Destination</b></p>
      <input class="form-control"  name="dest" maxlength="30" placeholder="Enter Destination" type="text" required>
    </div>
    <div class="col-sm-6">
	  <p color="#333"><b>Shipping</b></p>
      <select class="form-control" name="ship">
        <option>Select</option>
            <option>Air Freight</option>
			<option>Sea Freight</option>
			<option>Rail Freight</option>
			<option>Land Freight</option>
        </select>
	   <p color="#333"><b>Transit Time</b></p>
      <input class="form-control"  name="time" maxlength="20" placeholder="Enter Transit" type="text" required>
    </div>
	  <div class="col-sm-6">
      <p color="#333"><b>Amount</b></p>
      <input class="form-control"  name="amount" maxlength="10" placeholder="Enter Amount" type="text" required>
	  <p color="#333"><b>Date</b></p>
      <input class="form-control"  name="shootdate" id="shootdate"  placeholder="Date" type="text" required>
    </div>
   <div class="col-sm-6">
      <p color="#333"><b>Image</b></p>
      <input type="file" name="image" required>
    </div>
	<div class="col-sm-6">
	 <p color="#333"><b>Receiver</b></p>
	 <select name="Receiver_Email" class="form-control">
			<option style="height: 20px; width:124px; font-size:15.5pt;">Select..</option>
			 <?php 
			 $sql = "SELECT Email FROM receiver order by No DESC limit 1";
			 $result = $connect->query($sql);
			 while($row = mysqli_fetch_array($result)):;?>
            <option><?php echo $row[0];?></option>
            <?php endwhile;?>
			</select>
      <button id="btn" class="btn btn-default pull-right" name="upload" type="Submit">Submit</button>
    </div>
    </div>
	</form>
  </div>
  </div>
<br/>
<div class="mainfooter">
  <div class="row">
    <div class="col-sm-5">
      <h3>About Us</h3>
      <p><span class="glyphicon glyphicon-globe"></span>&nbspWe offer secure and reliable freight.</p>
      <p><span class="glyphicon glyphicon-envelope"></span>&nbspEmail:info@glencoreexpress.net</p>
      <p><span class="glyphicon glyphicon-search"></span>&nbspMade By<a href="../index.html" data-toggle="tooltip" 
	  title="Visit Glencoreexpress">&nbspwww.Glencoreexpress.net</a></p>
    </div>
    <div class="col-sm-5">
      <h3>Our Address</h3>
      <p><span class="glyphicon glyphicon-map-marker"></span>&nbspHead Office:CH-6340 Baar,Swizerland.</p>
      <p><span class="glyphicon glyphicon-phone"></span>&nbspContact Us through:+41 264500244</p>
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
