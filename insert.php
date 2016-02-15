<?php
	$connection = new mysqli('localhost','root','','calendar');

	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$sql = "insert into birthdays (person, day, month, year) values('$person', '$day', '$month', '$year')";

	$connection->query($sql);

	header('location:calender.php')
?>