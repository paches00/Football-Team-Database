<html>
<head>
<title>Amateur</title>
<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<body>
<div style="overflow:scroll; width:1500px" >
<table id="tables">
<tr>
	<th>Player ID</th>
	<th>Occupation</th>
	<th>Institute Name</th>
	<th>Hobbies</th>
	<th>Away Expenses</th>
</tr>
<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "football";

$db = mysqli_connect($db_host, $db_username, $db_password);
mysqli_select_db($db, $db_database);

$sql = "SELECT * FROM amateur;";
$result = mysqli_query($db, $sql);

while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["id"] . "</td><td>" . $row["occupation"] . "</td><td>" . $row["institute_name"] . "</td><td>" . $row["hobbies"] . "</td><td>" . $row["away_expenses"] . "</td></tr>";
}

mysqli_close($db);

?>
</table>
</div>
</body>
</html>