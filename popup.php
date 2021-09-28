<?php
include_once("connection.php");
//selecting data associated with this particular id
$result = mysqli_query($connect, "select sender_receiver.No,sender_receiver.Sender_Email as sender,sender_receiver.Receiver_Email as receiver,shipping.Tracking_ID as Tracking_ID,
shipping.Freight as freight,shipping.Date as date, shipping.Amount as amount,shipping.No from sender_receiver,shipping 
where sender_receiver.Receiver_Email=shipping.Receiver_Email and sender_receiver.No=shipping.No group by shipping.No  DESC limit 1");
		while($row = mysqli_fetch_array($result)) { 	
		$Tracking_ID= $row["Tracking_ID"];
		$Freight = $row["freight"];
		$Sender = $row["sender"];
		$Receiver = $row["receiver"];
		$Date = $row["date"];
		$Amount = $row["amount"];
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
  .col-sm-6 a {
      color: #fff;
  }
  #icon{
  padding-top:0%;
  width:40%;
  }
  .col-sm-6 .glyphicon{
   color:#333;
   font-size:10px;
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
	margin-left:0%;
	margin-top:3%;
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
    padding: 5px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
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
    font-size: 20px;
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
          <h4>SUMMARY</h4>
        </div>
<div class="sender">
<form action="popup.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-6">
      <p color="#333"><b>Sender</b></p>
      <input type="text" class="form-control" value="<?php echo $Sender;?>"readonly>
      <p color="#333"><b>Receiver</b></p>
      <input type="text" class="form-control" value="<?php echo $Receiver;?>"readonly>
	  <p color="#333"><b>Tracking No</b></p>
      <input type="text" class="form-control" value="<?php echo $Tracking_ID;?>"readonly>
    </div>
    <div class="col-sm-6">
	   <p color="#333"><b>Item</b></p>
       <input type="text" class="form-control" value="<?php echo $Freight;?>"readonly>
	  <p color="#333"><b>Amount</b></p>
      <input type="text" class="form-control" value="<?php echo $Amount;?>"readonly>
	  <p color="#333"><b>Date</b></p>
      <input type="text" class="form-control" value="<?php echo $Date;?>"readonly>
    </div>
	<div class="col-sm-6"><br/>
    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><a href="View.php">Close</a>
    </div>
    </div>
	</form>
  </div>
  </div>
<br/>

</body>
</html>
