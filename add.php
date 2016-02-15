<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>New birthday</h1>
		<form action="insert.php" method="post">
			<label>Person:</label>
			<input name="person">
			<br>
			<label>Date:</label>
			<select name="day">
				<?php
					for ($day = 1; $day <= 31; $day++) {
						echo "<option value='$day'>$day</option>";
					}
			  	?>
			</select>
			<select name="month">
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select name="year">
				<?php
					for ($year = 2015; $year >= 1900; $year--) {
						echo "<option value='$year'>$year</option>";
					}
			  	?>
			</select>
			<br>
			<input type="submit" value="add">
		</form>

	</body>


</html>