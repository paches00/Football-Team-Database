<html>
<head>
<title>Player</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<a href="update_player.php" class="button">Update Player Record</a>
<a href="add_player.html" class="button">Add Player Record</a>
<div style="overflow:scroll; width:1500px" >
<table id="tables">
<tr>
	<th>Player ID</th>
	<th>Current Team ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Surname</th>
	<th>Date of Birth</th>
	<th>Height</th>
	<th>Weight in kg</th>
	<th>Position</th>
	<th>Club Experience</th>
	<th>International Experience</th>
	<th>Previous Team ID</th>
	<th>Home Ground Address</th>
	<th>Player Type</th>

</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "football";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM player;";
$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["id"] . "</td><td>" . $row["current_team_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["middle_name"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["date_of_birth"] . "</td><td>" . $row["height"] . "</td><td>" . $row["weight_in_kg"] . "</td><td>" . $row["position"] . "</td><td>" . $row["experience_clubs"] . "</td><td>" . $row["experience_international"] . "</td><td>" . $row["previous_team_ids"] . "</td><td>" . $row["address_home_ground"] . "</td><td>" . $row["player_type"] . "</td></tr>";
}

mysqli_close($db);

?>
</table>
</div>
</body>
</html>