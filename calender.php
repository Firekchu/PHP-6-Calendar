<!DOCTYPE html>
<html>
	<head>
		<title>Happy birthday!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>


	<body>
		<?php

			$connection = new mysqli('localhost','root','','calendar');
			echo $connection->connect_error;

			$sql = "SELECT * FROM birthdays ORDER BY month ASC, day ASC";

			$result = $connection->query($sql);

			$birthdays = $result->fetch_all(MYSQLI_ASSOC);

			$previousMonth = 0;
			$previousDay = 0;

		?>

		<?php foreach($birthdays as $birthday): ?>

				<?php 

				$month = $birthday['month'];

				if ($month != $previousMonth) {
					if ($month == 1) {
						echo "<h1>January</h1>";
						$monthname = "January";
					} elseif ($month == 2) {
						echo "<h1>February</h1>";
						$monthname = "February";
					} elseif ($month == 3) {
						echo "<h1>March</h1>";
						$monthname = "March";
					} elseif ($month == 4) {
						echo "<h1>April</h1>";
						$monthname = "April";
					} elseif ($month == 5) {
						echo "<h1>May</h1>";
						$monthname = "May";
					} elseif ($month == 6) {
						echo "<h1>June</h1>";
						$monthname = "June";
					} elseif ($month == 7) {
						echo "<h1>July</h1>";
						$monthname = "July";
					} elseif ($month == 8) {
						echo "<h1>Augustus</h1>";
						$monthname = "Augustus";
					} elseif ($month == 9) {
						echo "<h1>September</h1>";
						$monthname = "September";
					} elseif ($month == 10) {
						echo "<h1>October</h1>";
						$monthname = "October";
					} elseif ($month == 11) {
						echo "<h1>November</h1>";
						$monthname = "November";
					} elseif ($month == 12) {
						echo "<h1>December</h1>";
						$monthname = "December";
					}
					$previousMonth = $month;
				}

				$day = $birthday['day'];

				if ($day != $previousDay) {
					echo "<h2>" . $day . "</h2>";
					$previousDay = $day;
				}

					$id = $birthday['id'];
					$person = $birthday['person'];
					$year = $birthday['year'];
					

				?>

				<p>
					<a href="edit.php
					?id=<?php echo $id; ?>
					&person=<?php echo $person; ?>
					&day=<?php echo $day; ?>
					&month=<?php echo $month; ?>
					&year=<?php echo $year; ?>"><?php echo $person, " (",$year,")"; ?></a>

					<a href="delete.php
					?id=<?php echo $id; ?>
					&person=<?php echo $person; ?>
					&day=<?php echo $day; ?>
					&month=<?php echo $monthname; ?>">x</a>
				</p>
			
		<?php endforeach; ?>
		<p><a href="add.php">+add</a></p>
	</body>
</html>