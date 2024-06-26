<?php
	include "connectiondb.php";
	$name = $_POST["name"];
	$pwd = $_POST["password"];
	$query = "CREATE TABLE  IF NOT EXISTS signup(USERNAME VARCHAR(30),PASSWORD VARCHAR(20));";
	if(mysqli_query($c,$query))
		echo "table created"."<br>";
	else
		echo "error:<br>".$query.":".mysqli_error($c)."<br>";
	$query1 = "INSERT INTO signup VALUES('$name','$pwd');";
	if (mysqli_query($c,$query1))
		echo "record inserted";
	else
		echo "error:<br>".$query1.":".mysqli_error($c)."<br>";
	header("location:footer_sectio.html");
?>
