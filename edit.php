<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Edit birthday</h1>

		<?php
			$id = $_GET['id'];
			$person = $_GET['person'];
			$day = $_GET['day'];
			$month = $_GET['month'];
			$year = $_GET['year'];
		?>

		<form action="editsql.php?id=<?php echo $id; ?>" method="post">
			<label>Person:</label>
			<input name="person" value="<?php echo $person; ?>">
			<br>
			<label>Date:</label>
			<select name="day">
				<?php
					for ($newday = 1; $newday <= 31; $newday++) {
						if ($newday == $day) {
							echo "<option value='$newday' selected='selected'>$newday</option>";
						} else {
							echo "<option value='$newday'>$newday</option>";
						}
					}
			  	?>
			</select>
			<select name="month">
				<option value="1" <?php if($month == 1){ echo "selected='selected'";}; ?>>January</option>
				<option value="2" <?php if($month == 2){ echo "selected='selected'";}; ?>>February</option>
				<option value="3" <?php if($month == 3){ echo "selected='selected'";}; ?>>March</option>
				<option value="4" <?php if($month == 4){ echo "selected='selected'";}; ?>>April</option>
				<option value="5" <?php if($month == 5){ echo "selected='selected'";}; ?>>May</option>
				<option value="6" <?php if($month == 6){ echo "selected='selected'";}; ?>>June</option>
				<option value="7" <?php if($month == 7){ echo "selected='selected'";}; ?>>July</option>
				<option value="8" <?php if($month == 8){ echo "selected='selected'";}; ?>>August</option>
				<option value="9" <?php if($month == 9){ echo "selected='selected'";}; ?>>September</option>
				<option value="10" <?php if($month == 10){ echo "selected='selected'";}; ?>>October</option>
				<option value="11" <?php if($month == 11){ echo "selected='selected'";}; ?>>November</option>
				<option value="12" <?php if($month == 12){ echo "selected='selected'";}; ?>>December</option>
			</select>
			<select name="year">
				<?php
					for ($newyear = 2015; $newyear >= 1900; $newyear--) {
						if ($newyear == $year) {
							echo "<option value='$newyear' selected='selected'>$newyear</option>";
						} else {
							echo "<option value='$newyear'>$newyear</option>";
						}
					}
			  	?>
			</select>
			<br>
			<input type="submit" value="edit">
		</form>

	</body>


</html>