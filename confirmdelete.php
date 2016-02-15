<?php
	$connection = new mysqli('localhost','root','','calendar');
	echo $connection->connect_error;

	$id = $_GET['id'];

	$sql = "DELETE FROM birthdays WHERE id=$id";

	$connection->query($sql);

	echo $sql;

	header('location:calender.php');
?>