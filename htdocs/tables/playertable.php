<!DOCTYPE html>
<html lang="en">
<title>Player</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tablestyle.css">
<body style="background-color:whitesmoke;">
<div style="position:relative; top:75px;">
<center>
<button id="button">
<a href="../forms/update_player.php" class="button">Update Player Record</a>
</button>
<button id="button">
<a href="../forms/add_player.html" class="button">Add Player Record</a>
</button>
<button id="button">
<a href="../search/playersearch.php" class="button">Search</a>
</button>
</center>
</div>
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"><i class="fa fa-bars"></i></a>
    <a href = "../index.php" class="w3-bar-item w3-button w3-padding-large w3-text-blue">Home</a>
    <a href = "/views/owner.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Owner</a>
    <a href = "/views/director.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Director</a>
    <a href = "/views/coach.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Coach</a>
    <a href = "/views/analytics.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Analytics Department</a>
    <a href = "/views/player.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small>Player">Player</a>
    <a href="../search/playersearch.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<div style="overflow:scroll; width:calc(100% - 50px / 3); position:relative; left:5px; top:100px;">
<table class="center" id="table">
<tr>
	<th>Player ID</th>
	<th>Current Team ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Surname</th>
	<th>Date of Birth</th>
	<th>Height in cm</th>
	<th>Weight in kg</th>
	<th>Current Position</th>
	<th>Previous Positions</th>
	<th>Club Experience</th>
	<th>Matches Club Level</th>
	<th>Matches International Level</th>
	<th>Home Address</th>
	<th>Player Type ID</th>
	<th>Salary</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Additional Conditions</th>
	<th>Occupation Type ID</th>
	<th>Institute Name</th>
	<th>Hobby ID</th>
	<th>Away Expenses</th>
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
     echo "<tr><td>" . $row["id"] . "</td><td>" . $row["current_team_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["middle_name"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["date_of_birth"] . "</td><td>" . $row["height_in_cm"] . "</td><td>" . $row["weight_in_kg"] . "</td><td>" . $row["current_position_id"] . "</td><td>" . $row["previous_positions"] . "</td><td>" . $row["previous_clubs"] . "</td><td>" . $row["matches_club_level"] . "</td><td>" . $row["matches_international_level"] . "</td><td>" . $row["address_home"] . "</td><td>" . $row["player_type_id"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["additional_conditions"] . "</td><td>" . $row["occupation_type_id"] . "</td><td>". $row["institute_name"] . "</td><td>" . $row["hobby_id"] . "</td><td>" . $row["away_expenses_sum"] . "</td></tr>";
}

mysqli_close($db);

?>
</table>
</div>
</body>
</html>