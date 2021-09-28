<?php
include_once("connection.php");

$Tracking_ID = $_GET['Tracking_ID'];
$Admin_Email=$_GET['Admin_Email'];
$Receiver_Email=$_GET['Receiver_Email'];
$No=$_GET['No'];

$insert_Query = "DELETE FROM delivery WHERE Shipping_Tracking_ID='$Tracking_ID' and Shipping_Admin_Email='$Admin_Email' and Shipping_Receiver_Email='$Receiver_Email'";
header("Location:setting.php");
 	try{
		$insert_Result = mysqli_query($connect,$insert_Query);
		
		if($insert_Result)
		{
		if(mysqli_affected_rows($connect)>0)
		{
			$result = mysqli_query($connect, "DELETE FROM shipping WHERE Tracking_ID='$Tracking_ID' and Admin_Email='$Admin_Email' and Receiver_Email='$Receiver_Email'");
		}
		if(mysqli_affected_rows($connect)>0)
		{
			$result = mysqli_query($connect, "DELETE FROM sender_receiver WHERE No='$No'");
		}
		if(mysqli_affected_rows($connect)>0)
		{
			$result = mysqli_query($connect, "DELETE FROM receiver WHERE No='$No' and Email='$Receiver_Email'");
		}
		if(mysqli_affected_rows($connect)>0)
		{
			$result = mysqli_query($connect, "DELETE FROM sender WHERE No='$No'");
		}
		else{
			echo 'Data Not Inserted';
		}
	}
	}catch(Exception $ex){
		echo 'Error Insert '.$ex->getMessage(); 
}
?>
