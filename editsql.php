<?php
	$connection = new mysqli('localhost','root','','calendar');

	$id = $_GET['id'];
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$sql = "UPDATE birthdays SET person='$person',day=$day,month=$month,year=$year WHERE id=$id;";
	
	$connection->query($sql);

	header('location:calender.php')
?>