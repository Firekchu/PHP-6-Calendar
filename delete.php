<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<?php
		$connection = new mysqli('localhost','root','','calendar');
		echo $connection->connect_error;

		$id = $_GET['id'];
		$person = $_GET['person'];
		$day = $_GET['day'];
		$month = $_GET['month'];
		?>

		<h1>Delete Birthday</h1>
		<p>Are you sure you want to delete 
			<?php echo $person; ?>'s birthday on 
			<?php echo $month; ?>, 
			<?php echo $day; 
			if (substr($day, -1) == 1) {
				echo "st";
			} elseif (substr($day, -1) == 2) {
				echo "nd";
			} elseif (substr($day, -1) == 3) {
				echo "rd";
			} else {
				echo "th";
			}
		?>?</p>
	
		<a href="confirmdelete.php?id=<?php echo $id; ?>"><button>Yes</button></a>
		<a href="calender.php"><button>No</button></a>

	</body>
</html>