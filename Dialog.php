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
 #img_div{
	  width:90%;
	  padding:0px;
	  margin:5px auto;
	  border:2px solid #cbcbcb;
	  color:#818181;
  }
   .dialog {
    padding:0px;
	padding-top:0%;
	padding-left:2%;
	margin-top:0% auto;
	width:100%;
  }
.col-sm-5 img{
	  float:center;
	  margin:1%;
	  width:200px;
	  height:140px;
  }
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
    padding:30px;
	padding-top:0%;
	padding-left:4%;
	margin-top:0% auto;
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
   .navbar-right .glyphicon{
   color:#818181;
   font-size:10px;
  }
    .col-sm-4 .glyphicon {
      font-size: 200px;
	  margin-left:20px;
      margin-bottom:0px;
      color:#333;
  }
    .modal-header, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  #btn {
    padding: 7px 25px;
	transition: .1s;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
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
  .modal-header.close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  h1 {
    font-size: 22px;
    color: #303030;
    font-weight: 600;
    margin-bottom:0%;
  } 
  h2 {
    font-size: 22px;
    color: #303030;
    font-weight: 600;
    margin-bottom:10px;
  }
  h3 {
    font-size: 19px;
	color:#fff;
    line-height: 1.375em;
    font-weight: 400;
    margin-bottom:20px;
  } 
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color:#303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  #justify{
	 text-align:justify;
	 float:center;
 }
  .jumbotron {
    color: #fff;
    padding:0px 0px;
	-webkit-filter: grayscale(90%);
    filter: grayscale(90%);
    font-family: Montserrat, sans-serif;
  }  
  .jumbotron1{
    background-color:#2d2d30;
    color: #fff;
	width:100%;
	padding: 14px;
    font-family: Montserrat, sans-serif;
  }
  .carousel-inner img {
      width:100%;
      height:600px;
  }
  .container-fluid {
    padding:0% 15px;
  }  
    footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 20px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  } 
  .bg-grey {
    background-color:#f5f5f5;
  } 
  .bg-grey1 {
   margin-top:0%;
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
    border-radius: 2;
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
  .panel-heading {
    color: #2d2d30;!important;
    background-color:blue;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
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
  .nav-tabs li a {
      color: #777;
  }
 .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
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
	  padding: 0% 0%;
      width: 100%;
      margin-bottom:1px;
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
      <a class="navbar-brand" href="index.php">Glencore Express</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div>
  </div>
</nav>
<!-- Container (Contact Section) -->
 <div class="modal-content">
		<div class="main">
<?php
$valuetosearch=$_GET['valuetosearch'];
$sql = "SELECT shipping.No,shipping.Tracking_ID,shipping.Freight,shipping.Weight,shipping.Amount,shipping.Location,shipping.Destination,shipping.Type_of_Shipping,
shipping.Transit_Time,shipping.Date,shipping.Image,sender.No,sender.Email as SenderEmail,sender.FirstName as SenderFirstName,sender.LastName 
as SenderLastName,sender.Address as SenderAddress,receiver.No,receiver.Email as ReceiverEmail,receiver.FirstName as ReceiverFirstName,receiver.LastName 
as ReceiverLastName,receiver.Address as ReceiverAddress,receiver.Phone as ReceiverPhone,delivery.Date as Delivery_Date,sender_receiver.No
from shipping,sender,receiver,delivery,sender_receiver where sender.Email=sender_receiver.Sender_Email and receiver.Email=sender_receiver.Receiver_Email 
and shipping.Receiver_Email=delivery.Shipping_Receiver_Email and delivery.Shipping_Tracking_ID=$valuetosearch and
shipping.Tracking_ID=delivery.Shipping_Tracking_ID and sender_receiver.No=shipping.No and receiver.No=sender.No and sender.No=shipping.No and 
receiver.No=shipping.No group by shipping.Tracking_ID,delivery.Shipping_Tracking_ID;";
 $result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<div class='dialog'>";
	    echo "<div class='row'>";
		echo "<div class='col-sm-5'>";
	    echo "<b id='center' align='center'>TRACKING DETAILS</b><br/>";
		echo "<b>Tracking Number:</b> ".$row["Tracking_ID"]."<br/>";
		echo "<b>Date of Shipment:</b> ".$row["Date"]."<br/>";			
	    echo "</div>";
		echo "</div><hr>";
	    echo "<div class='row'>";
		echo "<div class='col-sm-5'>";
		echo "<b id='center'>SENDER'S INFORMATION</b><br/>";
		echo "<b>First Name:</b> ".$row["SenderFirstName"]."<br/>";
		echo "<b>Last Name:</b> ".$row["SenderLastName"]."<br/>";	
		echo "<b>Address:</b> ".$row["SenderAddress"]."<br/>";
		echo "<b>Email:</b> ".$row["SenderEmail"]."<br/>";	
		echo "</div>";
	    echo "<div class='col-sm-5'>";
		echo "<b id='center'>RECEIVER'S INFORMATION</b><br/>";
		echo "<b>First Name:</b> ".$row["ReceiverFirstName"]."<br/>";
		echo "<b>Last Name:</b> ".$row["ReceiverLastName"]."<br/>";	
		echo "<b>Address:</b> ".$row["ReceiverAddress"]."<br/>";
		echo "<b>Phone:</b> ".$row["ReceiverPhone"]."<br/>";
		echo "<b>Email:</b> ".$row["ReceiverEmail"]."<br/>";		
	    echo "</div>";
		echo "</div><hr>";
		echo "<div class='row'>";
	    echo "<div class='col-sm-5'>";
		echo "<b id='center'>PARCEL'S INFORMATION</b><br/>";
		echo "<b>Description:</b> ".$row["Freight"]."<br/>";
		echo "<b>Weight:</b> ".$row["Weight"]."<br/>";	
		echo "<b>Destination</b> ".$row["Destination"]."<br/>";	
		echo "<b>Shipping</b> ".$row["Type_of_Shipping"]."<br/>";				
	    echo "</div>";
		echo "<div class='col-sm-5'>";
		echo "<b id='center'>PARCEL'S HISTORY</b><br/>";
		echo "<b>Current Location:</b> ".$row["Location"]."<br/>";
		echo "<b>Date:</b> ".$row["Delivery_Date"]."<br/>";	
		echo "<img src='images/".$row['Image']."'>";
		echo "</div>";
		echo "</div>";
	}
} else {
    echo "0 results";
}
$connect->close();	
?>
</div>
</div>
</div>
<br/>
<div class="mainfooter">
  <div class="row">
    <h3 class="text-center">  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a></h3>
    <div class="col-sm-6">
      <p><span><img src="globe.svg"/></span>&nbspWe offer secure and reliable freight.</p>
      <p><span><img src="mail.svg"/></span>&nbspEmail:info@glencoreexpress.net</p>
      <p><span><img src="search.svg"/></span>&nbspMade By<a href="../index.html" data-toggle="tooltip" 
	  title="Visit Glencoreexpress">&nbspwww.Glencoreexpress.net</a></p>
    </div>
    <div class="col-sm-6">
      <p><span><img src="map.svg"/></span>&nbspHead Office:CH-6340 Baar,Swizerland.</p>
      <p><span><img src="phone.svg"/></span>&nbspContact Us through:+41 264500244</p>
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
