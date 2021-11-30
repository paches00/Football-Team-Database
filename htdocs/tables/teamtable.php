<!DOCTYPE html>
<html lang="en">
<title>Team</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="tablestyle.css">
<body style="background-color:whitesmoke;">

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
<div style="position:relative; top:75px;">
<center>
<button id="button">
<a href="update_player.php" class="button">Update Player Record</a>
</button>
<button id="button">
<a href="add_player.html" class="button">Add Player Record</a>
</button>
<button id="button">
<a href="../search/playersearch.php" class="button">Search</a>
</button>
</center>
</div>
<div style="overflow:scroll; width:calc(100% - 50px / 3); position:relative; left:5px; top:100px;">
<table id="table">
    <tr>
        <th>Team ID</th>
        <th>Team Name</th>
        <th>Country</th>
        <th>Coach</th>
        <th>Player Count</th>

<?php 
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "football";

    $db = mysqli_connect($db_host, $db_username, $db_password);
    mysqli_select_db($db, $db_database);

    $sql = "SELECT * FROM team;";

    $result = mysqli_query($db, $sql);

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["team_id"] . "</td><td>" . $row["team_name"] . "</td><td>" . $row["country"] . "</td><td>" . $row["coach"] . "</td><td>" . $row["player_count"] . "</td></tr>";
    }
    mysqli_close($db);
?>
</table>
</div>
<center>
<button id="button">
<a href="../forms/update_team.php" class="button">Update Team Record</a>
</button>
<button id="button">
<a href="../forms/add_team.html" class="button">Add Team Record</a>
</button>
<button id="button">
<a href="../search/teamsearch.php" class="button">Search</a>
</button>
</center>
</body>
</html>