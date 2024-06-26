<?php
	require "connection.php";
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$pass=$_POST['pwd'];
	$mail=$_POST['mail'];
	$house=$_POST['hno'];
	$street=$_POST['street'];
	$village=$_POST['vname'];
	$pincode=$_POST['pin'];
	$query="CREATE TABLE  IF NOT EXISTS DETAILS(NAME VARCHAR(20),MOBILE VARCHAR(10),PASSWORD VARCHAR(10),MAIL VARCHAR(50),HOUSENO VARCHAR(10),STREET VARCHAR(20),VILLAGE VARCHAR(20),PINCODE CHAR(6));";
	mysqli_query($connection,$query);
	$query1="INSERT INTO DETAILS VALUES('$name','$phone','$pass','$mail','$house','$street','$village','$pincode');";
	if(mysqli_query($connection,$query1))
	{
		header("location:order.html");
	}
?>
